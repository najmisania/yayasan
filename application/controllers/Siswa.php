<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function daftar_siswa()
	{
		$query = $this->db->get('siswa');
        $data['data_siswa'] = $query;
		$this->load->view('siswa/index',$data);
	}
	public function tambah_siswa()
	{
		$query = $this->db->get('siswa');
        $data['data_siswa'] = $query;
		$this->load->view('siswa/tambah',$data);
	}
	public function simpan_siswa()
	{
		echo "<pre>";
		$date = explode("-", $_POST['tgl_lahir']);
		$_POST['tgl_lahir'] = "$date[2]-$date[1]-$date[0]";
		/*echo "<pre>";
        print_r($date);
        exit();*/
		$this->db->insert('siswa',$_POST);
		redirect('/siswa/daftar_siswa','refresh');
		
	}
	public function edit()
	{
		$nis = $this->uri->rsegment(3);
        $data['biodata']= $this->db->where('nis',$nis)->get('siswa')->result();
		$this->load->view('siswa/edit',$data);

	}
	public function update_siswa()
	{
		echo "<pre>";
		$date = explode("-", $_POST['tgl_lahir']);
		$_POST['tgl_lahir'] = "$date[2]-$date[1]-$date[0]";
		print_r($_POST);
		$this->db->replace('siswa',$_POST);
		redirect('/siswa/daftar_siswa','refresh');
	}

	public function delete()
	{
		$nis = $this->uri->rsegment(3);
        $this->db->where('nis',$nis)->delete('siswa');
        redirect('/siswa/daftar_siswa','refresh');
	}
}
