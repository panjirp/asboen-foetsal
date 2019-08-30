<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}
	
	public function index()
	{
		// $this->load->view('register');
		$this->load->library('template');
		$this->template->loadx('default', 'register');
	}

	public function new()
	{	
		try {
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');

			if ($this->form_validation->run() == FALSE)
			{
				throw new Exception('duplicate email');
			}
			
			$post = $this->input->post();
			$datainput = new stdClass();
			$datainput->name = $post['name'];
			$datainput->email = $post['email'];
			$datainput->password = hash('sha256', $post['password']);
	
			$res = $this->loginmodel->register($datainput);
	
			if($res){
				$this->session->set_userdata('username',$post['name']);
				$this->load->model('homemodel');
				$territory2 = $this->homemodel->getTerritory2();
				$field = $this->homemodel->getField();
	
				$data = array(
					'responseCode' => '200',
					'territory2' => $territory2,
					'field' => $field
				);
				$this->load->library('template');
				$this->template->loadx('default', 'home', $data);
			}else{
				throw new Exception('error');
			}
		} catch (Exception $e) {
			$data = array(
				'responseCode' => '500',
				'responseMessage' => $e->getMessage()
			);	
			$this->load->library('template');
			$this->template->loadx('default', 'register', $data);
		}
		
	}
}
