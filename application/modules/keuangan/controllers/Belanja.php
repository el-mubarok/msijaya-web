<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belanja extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['page'] = array(
			'title'=>(!isset($_GET['pos']) ? 'Belanja Bulanan' : 'Belanja Insidental'),
			'parent'=>5,
			'sub'=>2,
			'child'=>(!isset($_GET['pos']) ? 1 : 2),
			'grandchild'=> null
		);
		$page = (!isset($_GET['pos']) ? 'VBelanjaBulanan' : 'VBelanjaInsidental');
		$this->load->view('belanja/'.$page, $data);
	}
}
