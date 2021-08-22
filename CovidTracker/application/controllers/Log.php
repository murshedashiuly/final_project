<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {

	public function index()
	{	

		$this->form_validation->set_rules('mobile', 'Mobile', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login');

		}else{

			$idata['mobile']=$this->input->post('mobile');
			$idata['password']=$this->input->post('password');

			$result=$this->db->where('mobile',$idata['mobile'])->where('password',$idata['password'])->get('tbl_user')->result_array();

			
			if(!empty($result)){


				if($result[0]['type']=='admin')
			{
					redirect('Admin');
			}

			else
			{
				$this->session->set_userdata('username',$result[0]['name']);

				$message='<div class="alert alert-success">Welcome</div>';

				$this->session->set_flashdata('message',$message);

				redirect('User');

			}



			// $this->session->set_userdata('username',$result[0]['name']);

			// $message='<div class="alert alert-success">Welcome</div>';

			// $this->session->set_flashdata('message',$message);

			// redirect('User');

			}
			else{

			$message='<div class="alert alert-danger">Wrong Mobile / Password</div>';

			$this->session->set_flashdata('message',$message);

			redirect('log');
			}

		
		}
	}
}
