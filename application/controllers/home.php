<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->model('homemodel');
		$time = $this->homemodel->getTime();
		$field = $this->homemodel->getField();
		// var_dump($field);
		$data = array(
			'time' => $time,
			'field' => $field
		);
		$this->load->library('template');
		$this->template->loadx('default', 'home', $data);
	}

	public function getallfield()
	{
		$this->load->model('homemodel');
		$res = $this->homemodel->getField();
		echo json_encode($res);
	}

	public function getfield2()
	{
		$get = $this->input->get();
		$id = $get['id_city'];
		$this->load->model('homemodel');
		$res = $this->homemodel->getField2($id);
		echo json_encode($res);
	}

}
