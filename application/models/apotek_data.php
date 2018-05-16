<?php
/**
* This is Data Model
*/
class Apotek_data extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	
	function medicine()
    {
        return $this->db->get('table_med');
    }

    function category()
    {
        return $this->db->get('table_cat');
    }

    function supplier()
    {
        return $this->db->get('table_sup');
    }

    function get_category()
    {
        $data = array();
        $query = $this->db->get('table_cat')->result_array();

        if( is_array($query) && count ($query) > 0 )
        {
        foreach ($query as $row ) 
        {
          $data[$row['nama_kategori']] = $row['nama_kategori'];
        }
        }
        asort($data);
        return $data;
    }  

    function get_supplier()
    {
        $data = array();
        $query = $this->db->get('table_sup')->result_array();

        if( is_array($query) && count ($query) > 0 )
        {
        foreach ($query as $row ) 
        {
          $data[$row['nama_pemasok']] = $row['nama_pemasok'];
        }
        }
        asort($data);
        return $data;
    }

    
    function insert_data($data,$table){
        $this->db->insert($table,$data);
    }

    function edit_data($where,$table){      
        return $this->db->get_where($table,$where);
    }

    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }  

    function delete_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
} 


}