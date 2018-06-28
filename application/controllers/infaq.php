<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class infaq extends CI_Controller {

	public function pilih_siswa()
	{
		$query = $this->db->get('siswa');
        $data['data_siswa'] = $query;
		$this->load->view('infaq/tambah_infaq',$data);
	}
	public function tambah_infaq()
	{
		$query = $this->db->get('siswa');
        $data['data_siswa'] = $query;
		$this->load->view('infaq/tambah',$data);
	}
	public function simpan_infaq()
	{
		echo "<pre>";
		$date = explode("-", $_POST['tanggal']);
		$_POST['tanggal'] = "$date[2]-$date[1]-$date[0]";
		// print_r($_POST);
		$this->db->insert('infaq',$_POST);
		// exit;
		
		 redirect('/infaq/lihat_infaq/'.$_POST['nis'], 'refresh');
	}
	public function lihat_infaq()
	{
		$nis = $this->uri->rsegment(3);
        $data['data_infaq'] = $this->db->where('nis',$nis)->get('infaq');
        $data['biodata']    = $this->db->where('nis',$nis)->get('siswa')->result();
        // print_r($data);
		$this->load->view('infaq/index',$data);

	}
	public function edit()
	{
		$nis = $this->uri->rsegment(3);
		$sql = "SELECT * FROM infaq t, siswa s WHERE t.nis = s.nis and t.nis='$nis'";
		echo $sql;
        $data['biodata']= $this->db->query($sql)->row();
        //echo "<pre>";
        print_r($data);
        //exit;
		$this->load->view('infaq/edit',$data);
	}
	
}