<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->library('templateadmin');
		$this->templateadmin->loada('default', 'home');
	}
    
    public function new()
	{
		$this->load->library('templateadmin');
		$this->templateadmin->loada('default', 'newfield');
	}

	public function insertNew()
	{
		$this->load->model('adminmodel');
		$post = $this->input->post();
		$newfields = new stdClass();
		$newfields->name = $post['newname'];
		$newfields->price = $post['newprice'];
		$approved = $this->adminmodel->newField($newfields);

		$this->load->library('templateadmin');
		$this->templateadmin->loada('default', 'newfield');
	}

    public function edit()
	{
		$this->load->model('adminmodel');
		$fields = $this->adminmodel->getAllField();
		$data = array(
			'fields' => $fields
		);
		$this->load->library('templateadmin');
		$this->templateadmin->loada('default', 'editfield', $data);
    }
	
	public function editFields()
	{
		$this->load->model('adminmodel');
		$post = $this->input->post();
		$editfields = new stdClass();
		$editfields->name = $post['editname'];
		$editfields->price = $post['editprice'];
		$editfields->updated_date = date('Y-m-d H:i:s');
		$approved = $this->adminmodel->updateField($editfields,$post['editid']);

		$fields = $this->adminmodel->getAllField();
		$data = array(
			'fields' => $fields
		);
		$this->load->library('templateadmin');
		$this->templateadmin->loada('default', 'editfield', $data);
	}

	public function deleteFields()
	{
		$this->load->model('adminmodel');
		$get = $this->input->get();
		$deleted = $this->adminmodel->deleteField($get['id']);

		$fields = $this->adminmodel->getAllField();
		$data = array(
			'fields' => $fields
		);
		$this->load->library('templateadmin');
		$this->templateadmin->loada('default', 'editfield', $data);
	}

	public function newbookingclient()
	{
		$this->load->model('adminmodel');
		$booking = $this->adminmodel->getAllBooking();
		$data = array(
			'booking' => $booking
		);
		$this->load->library('templateadmin');
		$this->templateadmin->loada('default', 'newbookingclient', $data);
	}

	public function historybookingclient()
	{
		$this->load->model('adminmodel');
		$booking = $this->adminmodel->getAllBooking();
		$data = array(
			'booking' => $booking
		);
		$this->load->library('templateadmin');
		$this->templateadmin->loada('default', 'historybookingclient', $data);
	}
	
	public function approved()
	{
		$this->load->model('adminmodel');
		$get = $this->input->get();
		$id = $get['id'];
		$status = new stdClass();
		$status->status = '1';
		$approved = $this->adminmodel->updateStatus($status,$id);
		echo $approved;
	}

	public function cancel()
	{
		$this->load->model('adminmodel');
		$get = $this->input->get();
		$id = $get['id'];
		$status = new stdClass();
		$status->status = '2';
		$cancel = $this->adminmodel->updateStatus($status,$id);
		echo $cancel;
	}
}
