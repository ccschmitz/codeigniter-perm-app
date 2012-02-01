<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->session->set_userdata('user_id', 1);
		$this->perm->setup_user_privileges();
	}

	public function index()
	{
		echo '<pre>';
		print_r($this->session->all_userdata());

		$this->load->view('tests');
	}
}