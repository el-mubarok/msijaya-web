<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahWarga extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['page'] = array(
			'title'=>'Tambah Warga',
			'parent'=>4,
			'child'=>3
		);
		$this->load->view('VTambahwarga', $data);
	}
}
