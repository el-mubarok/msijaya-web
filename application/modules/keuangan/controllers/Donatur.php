<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donatur extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['page'] = array(
			'title'=>'Daftar donatur',
			'parent'=>5,
			'child'=>3,
			'grandchild'=>2
		);
		$this->load->view('pemasukan/donasi/VDonatur', $data);
	}

	function tambah(){
		$data['page'] = array(
			'title'=>'Tambah donasi',
			'parent'=>5,
			'child'=>3,
			'grandchild'=>1
		);
		$this->load->view('pemasukan/donasi/VTambahdonasi', $data);
	}
}
