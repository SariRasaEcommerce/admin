<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function Dashboard()
	{
		$this->load->view('Javascript/Java_header');
		$this->load->view('Javascript/Java_footer');
		$this->load->view('Home/Main_header');
		$this->load->view('Home/Sidebar');
		$this->load->view('Home/Footer');
	}
}
?>