<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laptab extends CI_Controller {

	public function pilih_siswa()
	{
		$query = $this->db
					->order_by('tingkat','ASC')
					->order_by('nama','ASC')
					->get('siswa');
         $data['data_siswa'] = $query;
	 $this->load->view('laptab/pilih_siswa',$data);
	}
	public function daftar_laptab()
	{
		$query = $this->db->get('tabungan');
        $data['data_laptab'] = $query;
		$this->load->view('laptab/index',$data);
	}
	public function tambah_laptab()
	{
		$query = $this->db->get('siswa');
        $data['data_siswa'] = $query;
		$this->load->view('laptab/tambah',$data);
	}
	public function simpan_laptab()
	{
		echo "<pre>";
		$date = explode("-", $_POST['tanggal']);
		$_POST['tanggal'] = "$date[2]-$date[1]-$date[0]";
		// print_r($_POST);
		$this->db->insert('tabungan',$_POST);

		
		 redirect('/laptab/lihat_laptab/'.$_POST['nis'], 'refresh');
	}
	public function lihat_laptab()
	{
		$nis = $this->uri->rsegment(3);
        $data['data_laptab'] = $this->db->where('nis',$nis)->get('tabungan');
        $data['biodata']     = $this->db->where('nis',$nis)->get('siswa')->row();
        // echo "<pre>";
        // print_r($data);
        // exit;
		$this->load->view('laptab/index',$data);

	}
	public function cetak_tabungan()
	{

		$nis = $this->uri->rsegment(3);
        $dataTabungan = $this->db->where('nis',$nis)->get('tabungan')->result();
        $sql = "SELECT * FROM siswa where nis ='$nis' ";
        $datasiswa = $this->db->query($sql)->result_array();
        // echo "<pre>";
        // print_r($datasiswa);
        // exit();
         $this->load->library('pdf');
          $pdf = $this->pdf->load();
          //print_r($biodata); //ini isinya biodata siswa
          //exit;
        ob_start();
        echo '<h3>'."NIS  : ".$nis.'</h3>
        	  <h3>'."Nama : ".$datasiswa[0]['nama'].'</h3>
        	  <h3>'."Kelas : ".$datasiswa[0]['tingkat'].' </h3>
        	<table style="text-align: center; border-collapse: collapse; margin-left: auto; margin-right: auto; width: 100%;" border="1">

			  <tr>
			    <th rowspan="2">Tangal</th>
			    <th colspan="2">Tabungan</th>
			    <th rowspan="2">Saldo<br>Rp</th>
			    <th rowspan="2">Admin</th>
			  </tr>
			  <tr>
			    <td>Masuk</td>
			    <td>Keluar</td>
			  </tr>';
	    $saldo_tab=0;
	   foreach ($dataTabungan as $key => $value) {
	   	$dataTgl = explode("-", $value->tanggal);
	   	$tglBaru = "$dataTgl[2]-$dataTgl[1]-$dataTgl[0]";
	   	if($value->jenis_transaksi=="masuk"){
	   		$saldo_tab=$saldo_tab+$value->nominal;
	   		$masuk = $value->nominal;
	   		$keluar = "";
	   	}
	   	else{
	   		$saldo_tab=$saldo_tab-$value->nominal;
	   		$keluar = $value->nominal;
	   		$masuk = "";


	   	}
	   	echo "<tr>
	   			<td>$tglBaru</td>
	   			<td>$masuk</td>
	   			<td>$keluar</td>
	   			<td>$saldo_tab</td>
	   			<td>$value->username</td>
	   	      </tr>";
	   }
		echo  '</table>';

		$html = ob_get_contents();
        ob_end_clean();
        $pdf->WriteHTML(utf8_encode($html));
        $pdf->Output(); // save to file because we c

	}
	public function edit()
	{
		$nis = $this->uri->rsegment(3);
		$sql = "SELECT * FROM tabungan t, siswa s WHERE t.nis = s.nis and t.id='$nis'";
		// echo $sql;
        $data['biodata']= $this->db->query($sql)->row();
        //konversi tanggal sql menjadi tanggal indonesia
        $date = explode("-", $data['biodata']->tanggal);
        // print_r($date);
        $data['biodata']->tanggal = "$date[2]-$date[1]-$date[0]";
    
		$this->load->view('laptab/edit',$data);
	}
	public function update_laptab()
	{
		// echo "<pre>";
		// print_r($_POST);
		$date = explode("-", $_POST['tanggal']);
		$tanggal = "$date[2]-$date[1]-$date[0]";
		//print_r($_POST);
		$sql = "UPDATE `tabungan` SET tanggal = '$tanggal', jenis_transaksi='$_POST[jenis_transaksi]',nominal=$_POST[nominal] WHERE id = '$_POST[id]' ";
		$this->db->query($sql);
		redirect("/laptab/daftar_laptab/".$_POST['nis'],'refresh');
	}

	public function delete()
	{
		$id = $this->uri->rsegment(3);
		$nis = $this->uri->rsegment(4);
        $this->db->where('id',$id)->delete('tabungan');
        redirect('/laptab/daftar_laptab/'.$nis,'refresh');
	}
}
