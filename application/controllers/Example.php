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
		$this->template->write('title', 'Tambah Obat', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/form_med', '', true);

		$this->template->render();
	}


	function table_med() {
		$this->template->write('title', 'Lihat Obat', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/table_med', '', true);

		$this->template->render();
	}

	function table_cat() {
		$this->template->write('title', 'Lihat Kategori', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/table_cat', '', true);

		$this->template->render();
	}

	function form_sup() {
		$this->template->write('title', 'Tambah Supplier', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/form_sup', '', true);

		$this->template->render();
	}

	function table_sup() {
		$this->template->write('title', 'Lihat Pemasok', TRUE);
		$this->template->write('header', 'Sistem Informasi Manajemen Apotek');
		$this->template->write_view('content', 'tes/table_sup', '', true);

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
}

