<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	function __construct() {
        parent::__construct();

		//date_default_timezone_set('Asia/Dhaka');
		
        if(empty($this->session->userdata('username'))){
			redirect('welcome');
		}else{
		
		}


    }

	public function index()
	{	
		$this->session->sess_destroy();

		redirect('welcome');
	}
}
