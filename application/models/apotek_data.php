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

    function invoice()
    {
        return $this->db->get('table_invoice');
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


    function get_unit()
    {
        $data = array();
        $query = $this->db->get('table_unit')->result_array();

        if( is_array($query) && count ($query) > 0 )
        {
        foreach ($query as $row ) 
        {
          $data[$row['unit']] = $row['unit'];
        }
        }
        asort($data);
        return $data;
    }


    function get_medicine()
    {
        $data = array();
        $query = $this->db->get('table_med')->result_array();

        if( is_array($query) && count ($query) > 0 )
        {
        foreach ($query as $row ) 
        {
          $data[$row['nama_obat']] = $row['nama_obat'];
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




    function get_product($nama_obat)
    {   $hasil = array();
        $hsl=$this->db->query("SELECT * FROM table_med WHERE nama_obat='$nama_obat'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'nama_obat' => $data->nama_obat,
                    'stok' => $data->stok,
                    'unit' => $data->unit,
                    'harga_jual' => $data->harga_jual,
                    );
            }
        }
        return $hasil;
    }


    function expired(){
        return $this->db->query('SELECT * FROM table_med WHERE kedaluwarsa BETWEEN DATE_SUB(NOW(), INTERVAL 40 YEAR) AND NOW()'); 
    }

    function almostex(){
        return $this->db->query('SELECT * FROM table_med WHERE kedaluwarsa BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 60 DAY)');
    }

    function outstock(){        
        return $this->db->query('SELECT * FROM table_med WHERE stok BETWEEN 0 AND 0');           
    }

    function almostout(){        
        return $this->db->query('SELECT * FROM table_med WHERE stok BETWEEN 1 AND 8');           
    }

     function countstock(){       
      $cs =  $this->db->query('SELECT * FROM table_med WHERE stok BETWEEN 0 AND 0'); 
        $nullstock = $cs->num_rows();
        return $nullstock;    
    }

    function countex(){       
    $ce = $this->db->query('SELECT * FROM table_med WHERE kedaluwarsa BETWEEN DATE_SUB(NOW(), INTERVAL 100 YEAR) AND NOW()');
        $nullex = $ce->num_rows();
        return $nullex;     
    }

    function count_med(){       
      $cm =  $this->db->query('SELECT * FROM table_med'); 
        $stockobat = $cm->num_rows();
        return $stockobat;    
    }

    function count_cat(){       
      $ck =  $this->db->query('SELECT * FROM table_cat'); 
        $stockkat = $ck->num_rows();
        return $stockkat;    
    }

    function count_sup(){       
      $cp =  $this->db->query('SELECT * FROM table_sup'); 
        $sup = $cp->num_rows();
        return $sup;    
    }

    function count_inv(){       
      $ci =  $this->db->query('SELECT * FROM table_invoice'); 
        $inv = $ci->num_rows();
        return $inv;    
    }


    function get_chart_cat(){
        $query = $this->db->query('SELECT nama_kategori, SUM(stok) AS stok FROM table_med GROUP BY nama_kategori');
        $hasil = array();
        
            foreach($query->result_array() as $data){
                $hasil[] = array(
                    "nama_kategori" => $data['nama_kategori'],
                    "stok" => $data['stok'],
                );
            }
            return $hasil;
    }


    function get_chart_trans($tahun_beli){
        
        $query = $this->db->query("SELECT MONTHNAME(tgl_beli) AS month, SUM(subtotal) AS total FROM table_invoice WHERE YEAR(tgl_beli)= '$tahun_beli' GROUP BY MONTH(tgl_beli) ORDER BY MONTH(tgl_beli)");
        $hasil = array();
        
            foreach($query->result_array() as $data){
                $hasil[] = array(
                    "month" => $data['month'],
                    "total" => $data['total'],
                );
            }
            return $hasil;

    }




}







