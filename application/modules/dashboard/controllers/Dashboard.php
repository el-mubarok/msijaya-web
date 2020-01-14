<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['page'] = array(
			'title'=>'Dashboard',
			'parent'=>1,
			'child'=>1
		);
		$this->load->view('VDashboard', $data);
	}
}
