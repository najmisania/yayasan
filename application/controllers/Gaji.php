<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gaji extends CI_Controller {

	public function pilih_guru()
	{
		$query = $this->db->get('guru');
        $data['data_guru'] = $query;
		$this->load->view('gaji/tambah_gaji',$data);
	}
	public function daftar_gaji()
	{
		$query = $this->db->get('gaji');
        $data['data_gaji'] = $query;
		$this->load->view('gaji/index',$data);
	}
	public function tambah_gaji()
	{
		$query = $this->db->get('guru');
        $data['data_guru'] = $query;
		$this->load->view('gaji/tambah',$data);
	}
	public function simpan_gaji()
	{
		echo "<pre>";
		$this->db->insert('gaji',$_POST);
		redirect('/gaji/lihat_gaji/'.$_POST['nuptk'], 'refresh');
	}

	public function lihat_gaji($nuptk)
	{
        $data['data_gaji'] = $this->db->where('nuptk',$nuptk)->get('gaji');
        $data['biodata']   = $this->db->where('nuptk',$nuptk)->get('guru')->result();

		$this->load->view('gaji/index',$data);
	}
	public function edit($id)
	{

		$sql = "SELECT * FROM guru t, gaji s WHERE t.nuptk = s.nuptk and id=$id";
        $data['data']= $this->db->query($sql)->row();
        // echo "<pre>";
        // print_r($data);
        // exit;
		$this->load->view('gaji/edit',$data);
	}
	public function update_gaji($id)
	{
		echo "<pre>";
		print_r($_POST);
		$sql = "UPDATE gaji set bulan='$_POST[bulan]', gaji_pokok='$_POST[gaji_pokok]', tunjangan_jab='$_POST[tunjangan_jab]', masa_kerja='$_POST[masa_kerja]', jumlah_pel='$_POST[jumlah_pel]', jumlah_hadir='$_POST[jumlah_hadir]' where id='$_POST[id]'";
		$this->db->query($sql);
		echo "<pre>";
        print_r($sql);
        exit;
		echo $sql;
		$this->db->replace('gaji',$_POST);
		redirect('/gaji/daftar_gaji/'.$_POST['id'],'refresh');
	}
	public function delete()
	{
		$id = $this->uri->rsegment(3);
		$nuptk = $this->uri->rsegment(4);
        $this->db->where('id',$id)->delete('gaji');
        redirect('/gaji/lihat_gaji/'.$id,'refresh');
	}
}
