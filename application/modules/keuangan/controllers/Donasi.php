<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['page'] = array(
			'title'=>'Daftar donasi',
			'parent'=>5,
			'child'=>3,
			'grandchild'=>1
		);
		$this->load->view('pemasukan/donasi/VDonasi', $data);
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

	function kuitansi(){
		$data['page'] = array(
			'title'=>'print kuitansi',
			'parent'=>5,
			'child'=>3,
			'grandchild'=>1
		);
		$this->load->view("pemasukan/donasi/kuitansiprint",$data);
	}
}
