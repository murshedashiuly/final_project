<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{	
	 // $this->load->view('inc/header');
	 $this->load->view('admin/dashboard');
	 // $this->load->view('inc/footer');
	}	
}
