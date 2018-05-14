<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* This is Example Controller
*/
class Example extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->template->write_view('sidenavs', 'template/default_sidenavs', true);
		$this->template->write_view('navs', 'template/default_topnavs.php', true);
		
		$this->load->model('apotek_data');
        $this->load->database();
	}

	function index() {
		$this->template->write('title', 'Beranda', TRUE);
		$this->template->write('header', 'Menu');
		$this->template->write_view('content', 'tes/mypage', '', true);

		$this->template->render();
	}

	function simple_template() {
		$this->template->set_template('default');
		$this->template->write('header', 'This is Header');
		$this->template->write('title', 'My Simple Template', TRUE);
		$this->template->write_view('content', 'tes/mypage', '', true);

		$this->template->render();
	}

	function dashboard() {
		$this->template->write('title', 'Dashboard', TRUE);
		$this->template->write('header', 'Dashboard');
		$this->template->write_view('content', 'tes/dashboard', '', true);

		$this->template->render();
	}

	function form_ex() {
		$this->template->write('title', 'Gentelella Template', TRUE);
		$this->template->write('header', 'This is Header');
		$this->template->write_view('content', 'tes/form', '', true);

		$this->template->render();
	}

	function table_ex() {
		$this->template->write('title', 'Gentelella Template', TRUE);
		$this->template->write('header', 'Table Dynamics<small>Some examples</small>');
		$this->template->write_view('content', 'tes/table', '', true);

		$this->template->render();

	}
	function table_dyn_ex() {
		$this->template->write('title', 'Gentelella Template', TRUE);
		$this->template->write('header', 'Table <small>Some examples</small>');
		$this->template->write_view('content', 'tes/table_dynamic', '', true);

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
		$this->template->write('title', 'Tambah Tagihan', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/form_invoice', '', true);

		$this->template->render();
	}

	function invoice() {
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
		$this->template->write('title', 'Lihat Tagihan', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/table_invoice', '', true);

		$this->template->render();
	}



	function add_medicine()
	{
		$nama_obat = $this->input->post('nama_obat');
		$penyimpanan = $this->input->post('penyimpanan');
		$stok = $this->input->post('stok');
		$unit = $this->input->post('unit');
		$nama_kategori = $this->input->post('nama_kategori');
		$kedaluwarsa = $this->input->post('kedaluwarsa');
		$des_obat = $this->input->post('des_obat');
		$harga_beli = $this->input->post('harga_jual');
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
		redirect('example/table_cat');
	}

	function edit_form_med($id_obat) {
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
		$des_kat = $this->input->post('des_kat');

		$data = array(
			'nama_kategori' => $nama_kategori,
			'des_kat' => $des_kat,
		);

		$where = array(
			'id_kat' => $id_kat
		);

		$this->apotek_data->update_data($where,$data,'table_cat');
		redirect('example/table_cat');
	}

}


$nama_obat = $this->input->post('nama_obat');
		$penyimpanan = $this->input->post('penyimpanan');
		$stok = $this->input->post('stok');
		$unit = $this->input->post('unit');
		$nama_kategori = $this->input->post('nama_kategori');
		$kedaluwarsa = $this->input->post('kedaluwarsa');
		$des_obat = $this->input->post('des_obat');
		$harga_beli = $this->input->post('harga_jual');
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

