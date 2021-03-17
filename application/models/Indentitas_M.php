<?php 
class Indentitas_M extends CI_Model{
	
	function getData(){

		// db->query : menggunakan query secara manual tetapi bisa menggunakan sesuai dgn aturan CI 
		// this->db->get('nama table);

		// return $this->db->query("SELECT * FROM indentitas JOIN indentitas2 ON indentitas.id_identitas = id_indentitas2")->result();
		$this->db->select('*');
		$this->db->from('indentitas');
		$this->db->join('indentitas2', 'indentitas.id_identitas = indentitas2.id_indentitas2');
		$this->db->join('indentitas3', 'indentitas3.id_indentitas3 = indentitas2.id_indentitas2');
		
		$query = $this->db->get()->result();
		return $query;



		
		// return $this->db->query("SELECT * FROM indentitas WHERE")->result();
	}
}