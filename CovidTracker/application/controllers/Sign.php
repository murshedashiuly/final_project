<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign extends CI_Controller {

	public function index()
	{	
	 $this->load->view('sign-up');
	}
	public function signup()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]+$/]');
	    $this->form_validation->set_rules('mobile', 'Mobile', 'required|exact_length[11]');
	    $this->form_validation->set_rules('mobile', 'Mobile', 'required|is_unique[tbl_user.mobile]');
		
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
		$this->form_validation->set_rules('verify_password', 'Verify Password', 'required|matches[password]');
		
		
		 $this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('sign-up');
			
		}else{
			
			
				$idata['name']=$this->input->post('name');
				$idata['mobile']=$this->input->post('mobile');
				$idata['password']=$this->input->post('password');
				$idata['type']='user';

				$this->db->insert('tbl_user',$idata);

				$message='<div class="alert alert-success">Data Inserted</div>';

				 $this->session->set_flashdata('success',$message);

				redirect('welcome');
				
		}	 
	}

	
}
