<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	 $this->load->view('inc/header');
	 $this->load->view('home');
	 $this->load->view('inc/footer');
	}
    
    public function home2()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('home2');
	 $this->load->view('inc/footer');
	}

	 public function about()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('about');
	 $this->load->view('inc/footer');
	}
	public function team()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('team');
	 $this->load->view('inc/footer');
	}
	public function faq()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('faq');
	 $this->load->view('inc/footer');
	}
	public function prevention()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('prevention');
	 $this->load->view('inc/footer');
	}
	public function service()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('service');
	 $this->load->view('inc/footer');
	}
	public function testimonial()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('testimonial');
	 $this->load->view('inc/footer');
	}

	public function covid_19()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('covid-19');
	 $this->load->view('inc/footer');
	}

	public function error()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('error');
	 $this->load->view('inc/footer');
	}

	public function blog_2()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('blog-2');
	 $this->load->view('inc/footer');
	}

	public function blog_details()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('blog-details');
	 $this->load->view('inc/footer');
	}

	public function contact()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('contact');
	 $this->load->view('inc/footer');
	}
	public function sign_up()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('sign-up');
	 $this->load->view('inc/footer');
	}




	
}
