<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

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
	
	// public function index()
	// {
	// 	$post = $this->input->post();
	// 	$input = new stdClass();
	// 	$input->id_field = $post['field'];
	// 	$input->booking_date = $post['bookingdate'];
	// 	$input->start_time = $post['starttime'];
	// 	$input->end_time = $post['endtime'];
	// 	$input->total_payment = $post['price'];
	// 	$input->booking_name = $post['bookingname'];

	// 	$data = array(
	// 		'input' => $input
	// 	);
		
	// 	$this->load->library('template');
	// 	$this->template->loadx('default', 'book', $data);
	// }

	public function insertBooking()
	{
		$post = $this->input->post();
		$input = new stdClass();
		$input->id_field = $post['field'];
		$input->booking_date = $post['bookingdate'];
		$input->start_time = $post['starttime'];
		$input->end_time = $post['endtime'];
		$input->total_payment = $post['price'];
		$input->booking_name = $post['bookingname'];

		$this->load->model('homemodel');
		$insert = $this->homemodel->insertBooking($input);
		$insert_id = $this->db->insert_id();
		$fieldname = $this->homemodel->getFieldById($post['field']);
		if($post['endtime'] > $post['starttime']){
			$totalhour = $post['endtime'] - $post['starttime'];
		}else{
			$totalhour = (24-$post['starttime'])+$post['endtime'];
		}
		$input->invoice_id = $insert_id;
		$input->fieldname = $fieldname[0]->name;
		$input->priceperhour = $fieldname[0]->price;
		$input->total_hour = $totalhour;

		$bank = $this->homemodel->getBank();

		$data = array(
			'input' => $input,
			'bank' => $bank
		);
		
		$this->load->library('template');
		$this->template->loadx('default', 'book', $data);
	}

	public function submitPayment()
	{
		$get = $this->input->get();
		$id = $get['id'];
		$this->load->model('homemodel');
		$book = $this->homemodel->getBookById($id);
		$fieldname = $this->homemodel->getFieldById($book[0]->id_field);

		if($book[0]->end_time > $book[0]->start_time){
			$totalhour = $book[0]->end_time - $book[0]->start_time;
		}else{
			$totalhour = (24-$book[0]->start_time)+$book[0]->end_time;
		}

		$bank = $this->homemodel->getBank();

		$data = array(
			'book' => $book,
			'field' => $fieldname,
			'totalhour' => $totalhour,
			'bank' => $bank
		);
		
		$this->load->library('template');
		$this->template->loadx('default', 'payment', $data);
	}

	public function savefile()
	{
		$post = $this->input->post();
		$id = $post['id_invoice'];
		// $this->load->library('upload');

		// echo base_url();

		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $id;
		$config['overwrite']			= true;
		// $config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
	
		$this->load->library('upload', $config);
	
		if (!$this->upload->do_upload('file')) {
			echo $this->upload->display_errors();
		}
		$url = $config['upload_path'].$this->upload->data("file_name");
		$updatedData = new stdClass();
		$updatedData->transfer_pict = $url;
		$this->load->model('homemodel');
		$update = $this->homemodel->updateBook($id, $updatedData);
	}

	public function email()
	{
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'smtp.gmail.com',
			'smtp_port' => 587,
			'smtp_user' => 'kemansapps@gmail.com',
			'smtp_pass' => 'kemansans123',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
		);

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from('kemansapps@gmail.com', 'kemans');
        $this->email->to('panjirp@gmail.com'); 

        $this->email->subject('Email Test');
		$this->email->message('Testing the email class.');  
		$result = $this->email->send();
		echo $this->email->print_debugger();
	}
}
