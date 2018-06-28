<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tabungan extends CI_Controller {

	public function pilih_siswa()
	{
		$query = $this->db->get('siswa');
        $data['data_siswa'] = $query;
		$this->load->view('tabungan/tambah_tabungan',$data);
	}
	public function tambah_tabungan()
	{
		$query = $this->db->get('siswa');
        $data['data_siswa'] = $query;
		$this->load->view('tabungan/tambah',$data);
	}
	public function simpan_tabungan()
	{
		echo "<pre>";
		$date = explode("-", $_POST['tanggal']);
		$_POST['tanggal'] = "$date[2]-$date[1]-$date[0]";
		// print_r($_POST);
		$this->db->insert('tabungan',$_POST);
		 redirect('/tabungan/lihat_tabungan/'.$_POST['nis'], 'refresh');
	}
	public function lihat_tabungan()
	{
		$nis = $this->uri->rsegment(3);
        $data['data_tabungan'] = $this->db->where('nis',$nis)->get('tabungan');
        $data['biodata']       = $this->db->where('nis',$nis)->get('siswa')->row();
        
         //echo "<pre>";
         //print_r($data);
          //exit;
		$this->load->view('tabungan/index',$data);

	}
	public function edit()
	{
		$nis = $this->uri->rsegment(3);
		$sql = "SELECT * FROM tabungan t, siswa s WHERE t.nis = s.nis and t.nis='$nis'";
		echo $sql;
        $data['biodata']= $this->db->query($sql)->row();
        //echo "<pre>";
        print_r($data);
        //exit;
		$this->load->view('tabungan/edit',$data);
		
	}
	public function delete()
	{
		$nis = $this->uri->rsegment(3);
        $this->db->where('nis',$nis)->delete('tabungan');
        $this->daftar_tabungan($nis);
        redirect('/tabungan/daftar_tabungan','refresh');
	}
	public function update_tabungan()
	{
		echo "<pre>";
		$date = explode("-", $_POST['tanggal']);
		$_POST['tanggal'] = "$date[2]-$date[1]-$date[0]";
		print_r($_POST);
		$this->db->replace('tabungan',$_POST);
		redirect('/tabungan/daftar_tabungan','refresh');
	}
}
