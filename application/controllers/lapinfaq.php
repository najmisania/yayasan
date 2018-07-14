<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lapinfaq extends CI_Controller {

	public function pilih_siswa()
	{
		$query = $this->db
					->order_by('tingkat','ASC')
					->order_by('nama','ASC')
					->get('siswa');
        $data['data_siswa'] = $query;
		$this->load->view('lapinfaq/pilih_siswa',$data);
	}
	public function daftar_infaq()
	{
		$query = $this->db->get('infaq');
        $data['data_infaq'] = $query;
		$this->load->view('lapinfaq/index',$data);
	}
	public function tambah_infaq()
	{
		$query = $this->db->get('siswa');
        $data['data_siswa'] = $query;
		$this->load->view('lapinfaq/tambah',$data);
	}
	public function simpan_infaq()
	{
		echo "<pre>";
		$date = explode("-", $_POST['tanggal']);
		$_POST['tanggal'] = "$date[2]-$date[1]-$date[0]";
		// print_r($_POST);
		$this->db->insert('infaq',$_POST);
		 redirect('/infaq/lihat_infaq/'.$_POST['nis'], 'refresh');
	}
	public function edit($id)
	{

		$sql = "SELECT * from infaq where id=$id";

        $data['data']= $this->db->query($sql)->row();
        $date = explode("-", $data['data']->tanggal);
		$tanggal = "$date[2]-$date[1]-$date[0]";
		$data['data']->tanggal = $tanggal;
        //echo "<pre>";
        // print_r($data);
        // exit;
		$this->load->view('lapinfaq/edit',$data);
		
	}
	public function update_infaq()
	{
		echo "<pre>";
		$date = explode("-", $_POST['tanggal']);
		$_POST['tanggal'] = "$date[2]-$date[1]-$date[0]";
		$sql = "UPDATE infaq set bulan='$_POST[bulan]', tanggal='$_POST[tanggal]', nominal='$_POST[nominal]' where id='$_POST[id]' ";
		$this->db->query($sql);
		echo $sql;

		redirect('/lapinfaq/lihat_infaq/'.$_POST['nis'],'refresh');
	}
	public function delete()
	{
		$id = $this->uri->rsegment(3);
		$nis = $this->uri->rsegment(4);
        $this->db->where('id',$id)->delete('infaq');
		redirect('/infaq/lihat_infaq/'.$nis, 'refresh');
        
	}
	public function lihat_infaq()
	{
		$nis = $this->uri->rsegment(3);
        $data['data_lapinfaq'] = $this->db->where('nis',$nis)->get('infaq');
        $data['biodata']       = $this->db->where('nis',$nis)->get('siswa')->result();
        // print_r($data);
		$this->load->view('lapinfaq/index',$data);

	}
	public function cetak_infaq(){
		$sql = "SELECT * FROM infaq, siswa where infaq.nis = siswa.nis and siswa.tingkat='$_POST[tingkat]' ORDER BY siswa.nis ASC";
        $datainpak = $this->db->query($sql)->result_array();
        // echo "<pre>";
        // print_r($datainpak);
        //exit;
        $rekap = array();
        foreach ($datainpak as $key => $value) {
        	$rekap[$value['nis']]['nama'] = $value['nama'];
        	$rekap[$value['nis']]['juli'] = "";
        	$rekap[$value['nis']]['agustus'] = "";
        	$rekap[$value['nis']]['september'] = "";
        	$rekap[$value['nis']]['oktober'] = "";
        	$rekap[$value['nis']]['november'] = "";
        	$rekap[$value['nis']]['desember'] = "";
        	$rekap[$value['nis']]['januari'] = "";
        	$rekap[$value['nis']]['februari'] = "";
        	$rekap[$value['nis']]['maret'] = "";
        	$rekap[$value['nis']]['april'] = "";
        	$rekap[$value['nis']]['mei'] = "";
        	$rekap[$value['nis']]['juni'] = "";
        	
        }
        foreach ($datainpak as $key => $value) {

       		$rekap[$value['nis']][$value['bulan']] = "v";
        }
        // print_r($rekap);
		$tahun_sekarang = date('Y');
        $tahun_lalu = $tahun_sekarang-1;
		$this->load->library('pdf');
         $pdf = $this->pdf->load();
        ob_start();
     echo '
			<style type="text/css">
				.tg  {border-collapse:collapse;border-spacing:0;}
				.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
				.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
				</style>
				<h3 style="text-align:center">'."DAFTAR PEMBAYARAN INFAQ BULANAN <br>TAHUN PELAJARAN $tahun_lalu - $tahun_sekarang".'</h3>
        		<h4> Kelas '.$_POST['tingkat'].'</h4>
				<table class="tg" width="100%">
				  <tr>
				    <th class="tg-031e" rowspan="3">NO</th>
				    <th class="tg-031e" rowspan="3">NAMA SISWA</th>
				    <th class="tg-031e" colspan="12">BULAN</th>
				    <th class="tg-031e" rowspan="3">KET</th>
				  </tr>
				  <tr>
				    <td class="tg-031e">Juli</td>
				    <td class="tg-031e">Agst</td>
				    <td class="tg-031e">Sept</td>
				    <td class="tg-031e">Okt</td>
				    <td class="tg-031e">Nop</td>
				    <td class="tg-031e">Des</td>
				    <td class="tg-031e">Jan</td>
				    <td class="tg-031e">Peb</td>
				    <td class="tg-031e">Mar</td>
				    <td class="tg-031e">April</td>
				    <td class="tg-031e">Mei</td>
				    <td class="tg-031e">Juni</td>
				  </tr>
				  <tr>
				    <td class="tg-031e">1</td>
				    <td class="tg-031e">2</td>
				    <td class="tg-031e">3</td>
				    <td class="tg-031e">4</td>
				    <td class="tg-031e">5</td>
				    <td class="tg-031e">6</td>
				    <td class="tg-031e">7</td>
				    <td class="tg-031e">8</td>
				    <td class="tg-031e">9</td>
				    <td class="tg-031e">10</td>
				    <td class="tg-031e">11</td>
				    <td class="tg-031e">12</td>
				  </tr>';
  $no=0;
        foreach ($rekap as $key => $value) {
        	$no++;
        	echo "<tr>
        			<td>$no</td>
        			<td>$value[nama]</td>
        			<td>$value[juli]</td>
        			<td>$value[agustus]</td>
        			<td>$value[september]</td>
        			<td>$value[oktober]</td>
        			<td>$value[november]</td>
        			<td>$value[desember]</td>
        			<td>$value[januari]</td>
        			<td>$value[februari]</td>
        			<td>$value[maret]</td>
        			<td>$value[april]</td>
        			<td>$value[mei]</td>
        			<td>$value[juni]</td>
        			<td></td>
        	       </tr>";
        }

echo '</table>';
$html = ob_get_contents();
        ob_end_clean();
        $pdf->WriteHTML(utf8_encode($html));
        $pdf->Output(); // save to file because we c

	}
	public function cetak_siswa()
	{
		$nis = $this->uri->rsegment(3);
        $datainfaq = $this->db->where('nis',$nis)->get('infaq')->result();
        $sql = "SELECT * FROM siswa where nis ='$nis' ";
        $data = $this->db->query($sql)->result_array();
        //print_r($datainfaq);

         $this->load->library('pdf');
          $pdf = $this->pdf->load();
        ob_start();
        echo '<h3>'."NIS  : ".$nis.'</h3>
        	  <h3>'."Nama : ".$data[0]['nama'].'</h3>
        	  <h3>'."Kelas : ".$data[0]['tingkat'].' </h3>
        		<style type="text/css">
				.tg  {border-collapse:collapse;border-spacing:200;}
				.tg td{font-family:Times New Roman, sans-serif;font-size:20px;padding:10px 100px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
				.tg th{font-family:Times New Roman, sans-serif;font-size:20px;font-weight:normal;padding:20px 100px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
				.tg .tg-n603{font-family:"Times New Roman", Times, serif !important;;border-color:inherit;text-align:center}
				.tg .tg-uys7{border-color:inherit;text-align:center}
				</style>
				<table class="tg">
  				<tr>
    				<th class="tg-n603">No</th>
    				<th class="tg-uys7">Bulan</th>
    				<th class="tg-uys7">Tanggal</th>
    				<th class="tg-uys7">Jumlah<br>(Rp)</th>
    				<th class="tg-uys7">Admin</th>
  				</tr>';
				// ini baru mencetak header tabelnya.. belum mencetak datanya

				//ini buat mencetak data
				// th di cetak data ini nanti diganti jadi td
				// class="tg..sekian2" dihapus juga
				// bikin variabel $no buat ngitung nomor urut
				$no = 0;
				foreach ($datainfaq as $key => $value) {
					$dataTgl = explode("-", $value->tanggal);
	   				$tglBaru = "$dataTgl[2]-$dataTgl[1]-$dataTgl[0]";
					$no++; //ini buat nambah nilai variabel no sebanyak 1
					echo '<tr>
    						<td>'.$no.'</td>
    						<td>'.$value->bulan.'</td>
    						<td>'.$tglBaru.'</td>
    						<td>'.$value->nominal.'</td>
    						<td>'.$value->username.'</td>
  					</tr>';
				}
	   	  echo '</table>'; // Menutup Elemen Tabel, setelah terisi datanya
		$html = ob_get_contents();
        ob_end_clean();
        $pdf->WriteHTML(utf8_encode($html));
        $pdf->Output();
	}

}
