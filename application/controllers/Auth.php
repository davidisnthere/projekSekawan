<?php

class Auth extends CI_Controller
{
	public function index()
	{
		show_404();
	}

	public function login()
	{
		$this->load->model('AuthModel');
		$this->load->library('form_validation');

		$rules = $this->AuthModel->rules();
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == FALSE){
			return $this->load->view('login_form');
		}

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($this->AuthModel->login($username, $password)){
			redirect('Complaint');
		} else {
			$this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan passwrod benar!');
		}

		$this->load->view('login_form');
	}

	public function logout()
	{
		$this->load->model('AuthModel');
		$this->AuthModel->logout();
		redirect(base_url());
	}
}