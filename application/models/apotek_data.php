<?php
/**
* This is Data Model
*/
class Apotek_data extends CI_Controller
{
	
	function medicine()
    {
        return $this->db->get('table_med');
    }

}