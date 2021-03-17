
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('Identitas_M');
	}

	function index(){
		// $data['biodata'] = $this->Identitas_M->get_data();
		// var_dump($data);
		$this->load->view('welcome_message.php');
	}

}