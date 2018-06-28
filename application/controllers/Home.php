<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('dashboard');
	}
	public function verifikasi()
	{
		$nilai_array= array('username' => $_POST['username'] , 'password' => $_POST['password'] );
		$hasil=$this->db->get_where('user', $nilai_array)->result_array();
		if(isset ($hasil[0]['username']))
		{

			$this->session->set_userdata($hasil[0]);

			redirect('home/index','refresh');
		}
		else{
			echo('username dan password salah');
		}
	}
}
