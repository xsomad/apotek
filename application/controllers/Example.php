<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* This is Example Controller
*/
class Example extends CI_Controller
{
	
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('apotek_data');
        $this->load->database();
        $this->load->helper(array('form', 'url'));
       
        $data['nullstock'] = $this->apotek_data->countstock();
        $data['nullex'] = $this->apotek_data->countex();
        $this->template->write_view('sidenavs', 'template/default_sidenavs', true);
		$this->template->write_view('navs', 'template/default_topnavs.php', $data, true);
	}

	function index() {
		$data['stockobat'] = $this->apotek_data->count_med();
		$data['stockkat'] = $this->apotek_data->count_cat();
		$data['sup'] = $this->apotek_data->count_sup();
		$data['inv'] = $this->apotek_data->count_inv();
		$this->template->write('title', 'Beranda', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/mypage', $data, true);

		$this->template->render();
	}

	

	function dashboard() {
		$this->template->write('title', 'Dashboard', TRUE);
		$this->template->write('header', 'Dashboard');
		$this->template->write_view('content', 'tes/dashboard', '', true);

		$this->template->render();
	}

	

	function table_exp() {
		$data['table_exp'] = $this->apotek_data->expired()->result();
		$data['table_alex'] = $this->apotek_data->almostex()->result();
		$this->template->write('title', 'Obat kedaluwarsa', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/table_exp', $data, true);

		$this->template->render();

	}

	function table_stock() {
		$data['table_stock'] = $this->apotek_data->outstock()->result();
		$data['table_alstock'] = $this->apotek_data->almostout()->result();
		$this->template->write('title', 'Obat Habis', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/table_stock', $data,  true);

		$this->template->render();
	}

	function form_cat() {
		$this->template->write('title', 'Tambah Kategori', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/form_cat', '', true);

		$this->template->render();
	}

	function form_med() {
		$data['get_cat'] = $this->apotek_data->get_category();
		$data['get_sup'] = $this->apotek_data->get_supplier();
		$data['get_unit'] = $this->apotek_data->get_unit();
		$this->template->write('title', 'Tambah Obat', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/form_med', $data, true);

		$this->template->render();
	}


	function table_med() {
		$data['table_med'] = $this->apotek_data->medicine()->result();
		
		$this->template->write('title', 'Lihat Obat', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/table_med', $data, true);

		$this->template->render();
		
	}

	function table_cat() {
		
		$data['table_cat'] = $this->apotek_data->category()->result();
		$this->template->write('title', 'Lihat Kategori', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/table_cat', $data, true);

		$this->template->render();
	}

	function table_sup() {
		$data['table_sup'] = $this->apotek_data->supplier()->result();
		
		$this->template->write('title', 'Lihat Pemasok', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/table_sup', $data, true);

		$this->template->render();
	}

	

	function form_sup() {
		$this->template->write('title', 'Tambah Supplier', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/form_sup', '', true);

		$this->template->render();
	}


	function calendar() {
		$this->template->write('title', 'Kalender', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/calendar', '', true);

		$this->template->render();
	}

	function form_invoice() {
		$data['table_med'] = $this->apotek_data->medicine()->result();
		$data['get_cat'] = $this->apotek_data->get_category();
		$data['get_med'] = $this->apotek_data->get_medicine();
		$data['get_unit'] = $this->apotek_data->get_unit();
		$this->template->write('title', 'Tambah Tagihan', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/form_invoice', $data, true);

		$this->template->render();
	}

	function invoice_page() {
		$this->template->write('title', 'Tagihan', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/invoice', '', true);

		$this->template->render();
	}

	function form_customer() {
		$this->template->write('title', 'Tambah Pelanggan', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/form_customer', '', true);

		$this->template->render();
	}

	function form() {
		$this->template->write('title', 'Form', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/form', '', true);

		$this->template->render();
	}

	function table_customer() {
		$this->template->write('title', 'Lihat Pelanggan', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/table_customer', '', true);

		$this->template->render();
	}

	function table_invoice() {
		$data['table_invoice'] = $this->apotek_data->invoice()->result();
		$this->template->write('title', 'Lihat Tagihan', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/table_invoice', $data, true);

		$this->template->render();
	}



	function add_medicine()
	{
		$nama_obat = $this->input->post('nama_obat');
		$penyimpanan = $this->input->post('penyimpanan');
		$stok = $this->input->post('stok');
		$unit = $this->input->post('unit');
		$nama_kategori = $this->input->post('nama_kategori');
		$kedaluwarsa = date("Y-m-d",strtotime($this->input->post('kedaluwarsa')));
		$des_obat = $this->input->post('des_obat');
		$harga_beli = $this->input->post('harga_beli');
		$harga_jual = $this->input->post('harga_jual');
		$nama_pemasok = $this->input->post('nama_pemasok');
 
		$data = array(
			'nama_obat' => $nama_obat,
			'penyimpanan' => $penyimpanan,
			'stok' => $stok,
			'unit' => $unit,
			'nama_kategori' => $nama_kategori,
			'kedaluwarsa' => $kedaluwarsa,
			'des_obat' => $des_obat,
			'harga_beli' => $harga_beli,
			'harga_jual' => $harga_jual,
			'nama_pemasok' => $nama_pemasok,
			
			);
		$this->apotek_data->insert_data($data,'table_med');

		$this->session->set_flashdata('med_added', 'Obat berhasil ditambahkan');
		redirect('example/table_med');

	}


	function add_category(){
		$nama_kategori = $this->input->post('nama_kategori');
		$des_kat = $this->input->post('des_kat');
 
		$data = array(
			'nama_kategori' => $nama_kategori,
			'des_kat' => $des_kat,
			
			);
		$this->apotek_data->insert_data($data,'table_cat');

		$this->session->set_flashdata('cat_added', 'Kategori berhasil ditambahkan');
		redirect('example/table_cat');
	}


	function add_supplier(){
		$nama_pemasok = $this->input->post('nama_pemasok');
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');
 
		$data = array(
			'nama_pemasok' => $nama_pemasok,
			'alamat' => $alamat,
			'telepon' => $telepon,
			);
		$this->apotek_data->insert_data($data,'table_sup');

		$this->session->set_flashdata('sup_added', 'Pemasok berhasil ditambahkan');
		redirect('example/table_sup');
	}

	


	function add_invoice(){
		 
			$nama_pembeli = $this->input->post('nama_pembeli');
			$tgl_beli = date("Y-m-d",strtotime($this->input->post('tgl_beli')));
			$grandtotal = $this->input->post('grandtotal');
			$ref = rand(1111111111,9999999999);
			$nama_obat = $this->input->post('nama_obat');
			$banyak = $this->input->post('banyak');
			$subtotal = $this->input->post('subtotal');

		foreach($nama_obat as $key=>$val){
		   
		$data[] = array(
				'nama_pembeli' => $nama_pembeli,
				'tgl_beli' => $tgl_beli,
				'grandtotal' => $grandtotal,
				'ref' => $ref,
				'nama_obat' => $val,
				'banyak' => $banyak[$key],
				'subtotal' => $subtotal[$key],
				
				);

		$this->db->set('stok', 'stok-'.$banyak[$key], FALSE);
	    $this->db->where('nama_obat', $val);
	    $updated = $this->db->update('table_med');
		
		
		}
		
		$this->db->insert_batch('table_invoice', $data);

		$this->session->set_flashdata('inv_added', 'Tagihan berhasil ditambahkan');
		redirect('example/table_invoice');
	}


	function edit_form_cat($id_kat) {
		$where = array('id_kat' => $id_kat);
		$data['table_cat'] = $this->apotek_data->edit_data($where,'table_cat')->result();
		$this->template->write('title', 'Edit Kategori', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/edit_form_cat', $data, true);

		$this->template->render();
	}

	function update_category(){
		$id_kat = $this->input->post('id_kat');
		$nama_kategori = $this->input->post('nama_kategori');
		$des_kat = $this->input->post('des_kat');

		$data = array(
			'nama_kategori' => $nama_kategori,
			'des_kat' => $des_kat,
		);

		$where = array(
			'id_kat' => $id_kat
		);

		$this->apotek_data->update_data($where,$data,'table_cat');

		$this->session->set_flashdata('cat_added', 'Data kategori berhasil diperbarui');
		redirect('example/table_cat');
	}

	function edit_form_med($id_obat) {
		$data['get_cat'] = $this->apotek_data->get_category();
		$data['get_sup'] = $this->apotek_data->get_supplier();
		$data['get_unit'] = $this->apotek_data->get_unit();
		$where = array('id_obat' => $id_obat);
		$data['table_med'] = $this->apotek_data->edit_data($where,'table_med')->result();
		$this->template->write('title', 'Edit Obat', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/edit_form_med', $data, true);

		$this->template->render();
	}

	function update_medicine(){
		$id_obat = $this->input->post('id_obat');
		$nama_obat = $this->input->post('nama_obat');
		$penyimpanan = $this->input->post('penyimpanan');
		$stok = $this->input->post('stok');
		$unit = $this->input->post('unit');
		$nama_kategori = $this->input->post('nama_kategori');
		$kedaluwarsa = date("Y-m-d",strtotime($this->input->post('kedaluwarsa')));
		$des_obat = $this->input->post('des_obat');
		$harga_beli = $this->input->post('harga_beli');
		$harga_jual = $this->input->post('harga_jual');
		$nama_pemasok = $this->input->post('nama_pemasok');
	
		$data = array(
			'nama_obat' => $nama_obat,
			'penyimpanan' => $penyimpanan,
			'stok' => $stok,
			'unit' => $unit,
			'nama_kategori' => $nama_kategori,
			'kedaluwarsa' => $kedaluwarsa,
			'des_obat' => $des_obat,
			'harga_beli' => $harga_beli,
			'harga_jual' => $harga_jual,
			'nama_pemasok' => $nama_pemasok,
		);

		$where = array(
			'id_obat' => $id_obat
		);

		$this->apotek_data->update_data($where,$data,'table_med');
		$this->session->set_flashdata('med_added', 'Data obat berhasil diperbarui');
		redirect('example/table_med');
	}


	function edit_form_sup($id_pem) {
		$where = array('id_pem' => $id_pem);
		$data['table_sup'] = $this->apotek_data->edit_data($where,'table_sup')->result();
		$this->template->write('title', 'Edit Pemasok', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/edit_form_sup', $data, true);

		$this->template->render();
	}


	function update_supplier(){
		$id_pem = $this->input->post('id_pem');
		$nama_pemasok = $this->input->post('nama_pemasok');
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');

		$data = array(
			'nama_pemasok' => $nama_pemasok,
			'alamat' => $alamat,
			'telepon' => $telepon,
		);

		$where = array(
			'id_pem' => $id_pem
		);

		$this->apotek_data->update_data($where,$data,'table_sup');

		$this->session->set_flashdata('sup_added', 'Data pemasok berhasil diperbarui');
		redirect('example/table_sup');
	}


	function remove_med($id_obat){
		$where = array('id_obat' => $id_obat);
		$this->apotek_data->delete_data($where,'table_med');
		redirect('example/table_med');
	}

	function remove_cat($id_kat){
		$where = array('id_kat' => $id_kat);
		$this->apotek_data->delete_data($where,'table_cat');
		redirect('example/table_cat');
	}

	function remove_sup($id_pem){
		$where = array('id_pem' => $id_pem);
		$this->apotek_data->delete_data($where,'table_sup');
		redirect('example/table_sup');
	}

	function remove_inv($ref){
		$where = array('ref' => $ref);
		$this->apotek_data->delete_data($where,'table_invoice');
		redirect('example/table_invoice');
	}


	 function product()
	{
	    $nama_obat=$this->input->post('nama_obat');
        $data=$this->apotek_data->get_product($nama_obat);
        echo json_encode($data);
	}


	function chart()
	{
       $data = $this->apotek_data->get_chart_cat();
		echo json_encode($data);
	}


	function chart_trans()
	{
		$tahun_beli=$this->input->post('tahun_beli');
       	$data = $this->apotek_data->get_chart_trans($tahun_beli);
		echo json_encode($data);
	}


	

    

	

}









