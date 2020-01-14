<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['page'] = array(
			'title'=>'Laporan',
			'parent'=>5,
			'sub'=>3,
			'child'=>null,
			'grandchild'=> null
		);
		$this->load->view('laporan/VLaporan',$data);
	}
}
