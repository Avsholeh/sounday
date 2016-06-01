<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class Home extends CI_Controller {

	public function index(){
		$this->load->view('templates/header');
		$this->load->view('show_index');
		$this->load->view('templates/footer');
	}

	public function signup(){
		$this->load->view('templates/header');
		$this->load->view('show_signup');
		$this->load->view('templates/footer');
	}

	public function login(){
		$this->load->view('templates/header');
		$this->load->view('show_login');
		$this->load->view('templates/footer');
	}

	/**
	 * Melakukan proses validasi ketika user login
	 */
	public function login_validation(){
		$identity = $this->input->post('username');
		$password = $this->input->post('password');
		$remember = FALSE;
		$this->ion_auth->login($identity, $password, $remember);
		redirect('');
	}

	public function logout(){
		$this->ion_auth->logout();
		redirect('');
	}

	/**
	 * Menambahkan user baru kedalam database
	 */
	public function user_signup(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$this->ion_auth->register($username, $password, $email);
		redirect('home/login');
	}

	/**
	 * Mencari lagu berdasarkan title
	 */
	public function search()
	{
		$getdata = $this->input->get('query');

		$result = $this->db_model->search_song($getdata);

		$res = array( 'data' => $result );

		$this->load->view('templates/header');
		$this->load->view('show_index', $res);
		$this->load->view('templates/footer');

		var_dump($result);
	}



}// Endof Home Controller

?>