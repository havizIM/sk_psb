<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	function __construct()
    {
		parent::__construct();
        // $this->load->library('session');
        
		// if($this->session->has_userdata('public') ){
		// 	redirect('/');
		// }
	}
	
	public function index()
	{
		$this->load->view('private/pendaftaran/data');
	}
}
