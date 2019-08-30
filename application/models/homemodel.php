<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class HomeModel extends CI_Model
{
    function __construct()
	{
		//parent::__construct();
		//echo "tes dataxx";
    }
        
    function getField()
    {
        $query = $this->db->get('fields');
        return $query->result();
    }

    function getBook($date)
    {
        $query = $this->db->get_where('book', array('booking_date' => $date));
        return $query->result();
    }

    function getBookById($id)
    {
        $query = $this->db->get_where('book', array('id' => $id));
        return $query->result();
    }

    function getFieldById($id)
    {
        $query = $this->db->get_where('fields', array('id' => $id));
        return $query->result();
    }

    function getTime()
    {
        $query = $this->db->get('ref_hour');
        return $query->result();
    }

    function getBank()
    {
        $query = $this->db->get('ref_bank');
        return $query->result();
    }

    function insertBooking($input)
    {
        $query = $this->db->insert('book',$input);
    }

    function updateBook($id,$data)
    {
        $this->db->where('id', $id);
        $this->db->update('book', $data);
    }
}