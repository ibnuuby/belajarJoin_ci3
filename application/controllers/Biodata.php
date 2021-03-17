<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {
	
	public function __construct()
        {
                parent::__construct();
                $this->load->model('Indentitas_M');
                $this->load->helper('url_helper');
        }

	public function index(){

		// db_ci3jointable
		$data['biodata'] = $this->Indentitas_M->getData();

		
		// $data['biodata'] = $this->db->query("SELECT * FROM indentitas")->result();
		$this->load->view('Home_v', $data);
	}

}