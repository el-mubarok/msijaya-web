<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aktifitas extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['page'] = array(
			'title'=>'Aktifitas',
			'parent'=>2,
			'child'=>2
		);
		$this->load->view('VAktifitas', $data);
	}
}
