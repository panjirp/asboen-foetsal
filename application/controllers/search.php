<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

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
		$post = $this->input->post();
		$input = new stdClass();
		$input->lapangan = $post['srcfieldname'];
		$input->bookingdate = $post['bookingdate'];
		$input->bookingtime = $post['bookingtime'];

		$this->load->model('homemodel');
		$time = $this->homemodel->getTime();
		$field = $this->homemodel->getField();

		$data = array(
			'field' => $field,
			'time' => $time,
			'input' => $input
		);
		$this->load->library('template');
		$this->template->loadx('default', 'search', $data);
	}

	public function getFieldById()
	{
		$get = $this->input->get();
		$id = $get['id'];
		$this->load->model('homemodel');
		$field = $this->homemodel->getFieldById($id);
		echo json_encode($field);
	}

	public function getBookByDate()
	{
		$get = $this->input->get();
		$booking_date = $get['date'];
		$this->load->model('homemodel');
		$book = $this->homemodel->getBook($booking_date);
		echo json_encode($book);
	}

}
