<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iuran extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['page'] = array(
			'title'=>(!isset($_GET['pos']) ? 'Iuran Bulanan' : 'Iuran Insidental'),
			'parent'=>5,
			'sub'=>1,
			'child'=>(!isset($_GET['pos']) ? 1 : 2),
			'grandchild'=> null
		);
		$page = (!isset($_GET['pos']) ? 'VIuranBulanan' : 'VIuranInsidental');
		$this->load->view('pemasukan/iuran/'.$page, $data);
	}
}
