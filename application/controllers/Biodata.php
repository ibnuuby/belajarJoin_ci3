<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {
	
	public function __construct()
        {
            parent::__construct();
            $this->load->model('Indentitas_M');
            $this->load->helper('url_helper','form');
			$this->load->library('form_validation');

        }

	public function index(){

		// db_ci3jointable
		$data['biodata'] = $this->Indentitas_M->getData();
		// var_dump($data);
		// $data['biodata'] = $this->db->query("SELECT * FROM indentitas")->result();
		$this->load->view('Home_v', $data);
	}
	public function edit($id,$id2,$id3){

		$where = array (
			'id_indentitas'  => $id,
			'id_indentitas2' => $id2,
			'id_indentitas3' => $id3
		);
		
		$data['bioedit'] = $this->Indentitas_M->editData($where);
	
		// $this->Indentitas_M->editData($id);
		$this->load->view('Edit_v', $data);

	}
	public function tambahdata(){

		$data['data'] = $this->Indentitas_M->getambahData();
		
		
		$this->load->view('TambahData_v', $data);
	}
	
	public function prosestambahdata(){
		$all = array();
		$this->Indentitas_M->insertdata($all);
		redirect('biodata');
	}
	public function delete($id){
		
	}
}