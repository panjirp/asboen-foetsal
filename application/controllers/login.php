<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		try {
			$post = $this->input->post();
			$datainput = new stdClass();
			$datainput->email = $post['email'];
            $datainput->password = hash('sha256', $post['password']);

            $this->load->model('loginmodel');
            $res = $this->loginmodel->getUser($datainput);
            
			if(count($res) == 1){
                $this->session->set_userdata('username',$res[0]->name);
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
				throw new Exception('user not found');
			}
		} catch (Exception $e) {
            $territory2 = $this->homemodel->getTerritory2();
			$field = $this->homemodel->getField();
			$data = array(
                'responseCode' => '500',
                'territory2' => $territory2,
				'field' => $field,
				'responseMessage' => $e->getMessage()
			);	
			$this->load->library('template');
            $this->template->loadx('default', 'home', $data);
		}
		
	}
}
