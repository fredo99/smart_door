<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('v_login');
	}

    public function signup()
	{
		$this->load->view('v_signup');
	}

	public function auth()
	{
		$this->load->model('m_login');
		$id=htmlspecialchars($this->input->post('id',TRUE),ENT_QUOTES);
		$password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

		
		$auth=$this->m_login->auth($id,$password);

		if($auth->num_rows()!= 0){
			$data=$this->m_login->auth($id,$password)->row_array();
			$this->session->set_userdata('login', true);
			$data = "success";
		}else{
			$data = "failed";
		}
		
		echo json_encode($data);

	}

	public function register()
	{
		$this->load->model('m_signup');
		$name=htmlspecialchars($this->input->post('fullname',TRUE),ENT_QUOTES);
		$id=htmlspecialchars($this->input->post('id',TRUE),ENT_QUOTES);
		$password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
		
		$check=$this->m_signup->check_id($id);

		if($check->num_rows()!= 0){
			$data = false;
		}else{
			$this->m_signup->add_user($name, $id, $password);
			$this->session->set_flashdata('done', 'done');
			$data = true;
		}

		echo json_encode($data);
	}
}
