<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	public function daftar_guru()
	{
		$query = $this->db->get('guru');
        $data['data_guru'] = $query;
		$this->load->view('guru/index',$data);
	}

	public function tambah_guru()
	{
		$query = $this->db->get('guru');
        $data['data_guru'] = $query;
		$this->load->view('guru/tambah',$data);
	}
	public function simpan_guru()
	{
		echo "<pre>";
		$date = explode("-", $_POST['tgl_lahir']);
		$_POST['tgl_lahir'] = "$date[2]-$date[1]-$date[0]";
		$this->db->insert('guru',$_POST);
		redirect('/guru/daftar_guru','refresh');
		
	}
	public function edit()
	{
		$nuptk = $this->uri->rsegment(3);
        $data['biodata_guru']= $this->db->where('nuptk',$nuptk)->get('guru')->result();
		$this->load->view('guru/edit',$data);
	}
	public function update_guru()
	{
		echo "<pre>";
		$date = explode("-", $_POST['tgl_lahir']);
		$_POST['tgl_lahir'] = "$date[2]-$date[1]-$date[0]";
		print_r($_POST);
		$this->db->replace('guru',$_POST);
		redirect('/guru/daftar_guru','refresh');
	}

	public function delete()
	{
		$nuptk = $this->uri->rsegment(3);
        $this->db->where('nuptk',$nuptk)->delete('guru');
        redirect('/guru/daftar_guru','refresh');
	}
}
