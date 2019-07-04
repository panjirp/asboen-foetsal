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
        return $this->db->get('futsal_field');
    }
}