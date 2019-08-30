<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Adminmodel extends CI_Model
{
    function __construct()
	{
		//parent::__construct();
		//echo "tes dataxx";
    }

    function getAllField(){
        $query = $this->db->get('fields');
        return $query->result();
    }

    function getAllBooking(){
        $query = $this->db->get('book');
        return $query->result();
    }
        
    function newField($datainput)
    {
        $this->db->insert('fields', $datainput);
        if($this->db->affected_rows() >= '1'){
            $insert_id = $this->db->insert_id();
            return $insert_id;
        }else{
            return false;
        }
    }

    function updateField($dataupdate, $id)
    {
        $this->db->update('fields', $dataupdate, array('id' => $id));
        if($this->db->affected_rows() >= '1'){
            return true;
        }else{
            return false;
        }
    }

    function deleteField($id)
    {
        $this->db->delete('fields', array('id' => $id));
        if($this->db->affected_rows() >= '1'){
            return true;
        }else{
            return false;
        }
    }

    function updateStatus($status, $id)
    {
        $this->db->update('book', $status, array('id' => $id));
        if($this->db->affected_rows() >= '1'){
            return true;
        }else{
            return false;
        }
    }
}