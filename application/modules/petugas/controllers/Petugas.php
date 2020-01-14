<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['page'] = array(
			'title'=>'Petugas',
			'parent'=>3,
			'child'=>1
		);
		$this->load->view('VPetugas', $data);
	}
}
