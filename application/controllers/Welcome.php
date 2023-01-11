<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
	
    }

	public function index()
	{
		$data = array(
            'title' => 'Login - SPK Pegawai Honorer MAN 2 Kediri'
        );	
		$this->load->view('VLogin', $data);
	}

	// Waka Akademik 
	// KEPSEK 
}
