<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warga extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$t = $_GET['t'];
		$data['page'] = array(
			'title'=>($t == 'tetap' ? 'Warga Tetap' : ($t == 'kontrak' ? 'Warga Kontrak' : '')),
			'parent'=>4,
			'child'=>($t == 'tetap' ? 1 : ($t == 'kontrak' ? 2 : ''))
		);
		$this->load->view('VWarga', $data);
	}
}
