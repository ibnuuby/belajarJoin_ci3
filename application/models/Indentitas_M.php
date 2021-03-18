<?php 
class Indentitas_M extends CI_Model{
	
	Public function getData(){

		// db->query : menggunakan query secara manual tetapi bisa menggunakan sesuai dgn aturan CI 
		// this->db->get('nama table);

		// return $this->db->query("SELECT * FROM indentitas JOIN indentitas2 ON indentitas.id_identitas = id_indentitas2")->result();
		$this->db->select('*');
		$this->db->from('indentitas');
		$this->db->join('indentitas2', 'indentitas.id_identitas = indentitas2.id_indentitas2');
		$this->db->join('indentitas3', 'indentitas3.id_indentitas3 = indentitas3.id_indentitas3');
		$query = $this->db->get()->result();
		return $query;
		

		
		// return $this->db->query("SELECT * FROM indentitas WHERE")->result();
	}
	public function editData($id){
		
		return $this->db->get_where('indentitas', array('id_identitas' => $id))->result_array();
		
	}
	public function insertdata(){

        $nama           = $this->input->post('nama', true);
        $tanggal_lahir  = $this->input->post('tanggal_lahir', true);
        $alamat         = $this->input->post('alamat', true);
        $pekerjaan      = $this->input->post('pekerjaan', true);
        $pendidikan     = $this->input->post('pendidikan', true);
        $umur           = $this->input->post('umur', true);
        $hoby           = $this->input->post('hoby', true);
        $status         = $this->input->post('status', true);

		$data1 = array (
			'nama'          => $nama,
			'tanggal_lahir' => $tanggal_lahir,
			
		);
		$data2 = array (
			'alamat'        => $alamat,
			'pekerjaan'     => $pekerjaan,
			'pendidikan'    => $pendidikan,
			
		);

		$data3 = array(
			'umur'          => $umur,
			'hoby'          => $hoby,
			'status'        => $status
		);
		
		$this->db->insert('indentitas', $data1);
		$this->db->insert('indentitas2', $data2);
		$this->db->insert('indentitas3', $data3);
		
	}
}