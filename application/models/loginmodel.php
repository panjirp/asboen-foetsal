<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class LoginModel extends CI_Model
{
    function __construct()
	{
		//parent::__construct();
		//echo "tes dataxx";
    }
        
    function getUsers()
    {
        $query = $this->db->get('user');
        return $query->result();
    }

    function getUser($datainput)
    {
        $query = $this->db->get_where('user', array('email' => $datainput->email, 'password' => $datainput->password));
        return $query->result();
    }

    function register($datainput)
    {
        $this->db->insert('user', $datainput);
        if($this->db->affected_rows() >= '1'){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
}