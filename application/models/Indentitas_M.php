<?php 
class Indentitas_M extends CI_Model{
	
	Public function getData(){

		// db->query : menggunakan query secara manual tetapi bisa menggunakan sesuai dgn aturan CI 
		// this->db->get('nama table);

		// return $this->db->query("SELECT * FROM indentitas JOIN indentitas2 ON indentitas.id_identitas = id_indentitas2")->result();
	
		// $this->db->join('indentitas2', 'indentitas.id_identitas = indentitas2.id_indentitas2', 'inner');
		// $this->db->join('indentitas3', 'indentitas3.id_indentitas3 = indentitas3.id_indentitas3', 'inner');
		return $this->db->query("SELECT * FROM indentitas 
				JOIN indentitas2
			ON indentitas.id_indentitas2 = indentitas2.id_indentitas2
				JOIN indentitas3
			ON indentitas.id_indentitas3 = indentitas3.id_indentitas3")->result();


		// $query = $this->db->get()->result();
		// return $query;
		

		
		// return $this->db->query("SELECT * FROM indentitas WHERE")->result();
	}

	public function getambahData()
	{
		return $this->db->query("SELECT * FROM indentitas 
				INNER JOIN indentitas2
			ON indentitas.id_indentitas2 = indentitas2.id_indentitas2
				INNER JOIN indentitas3
			ON indentitas.id_indentitas3 = indentitas3.id_indentitas3")->result();
	}
	public function editData($id,$id2,$id3){
		
		return $this->db->get_where('indentitas','indentitas2','indentitas3', 
		array(
			
			'id_identitas' => $id,
			'id_indentitas2' => $id2,
			'id_indentitas3' => $id3
		
		)
		
		)->result();
		
	}
	public function insertdata(){

        // $id_indentitas2 = $this->input->post('id_indentitas2');
        // $id_indentitas3 = $this->input->post('id_indentitas3');
		$nama           = $this->input->post('nama', true);
        $tanggal_lahir  = $this->input->post('tanggal_lahir', true);
        $alamat         = $this->input->post('alamat', true);
        $pekerjaan      = $this->input->post('pekerjaan', true);
        $pendidikan     = $this->input->post('pendidikan', true);
        $umur           = $this->input->post('umur', true);
        $hoby           = $this->input->post('hoby', true);
        $status         = $this->input->post('status', true);

		// $data1 = array (
		// 	'nama'           => $nama,
		// 	'tanggal_lahir'  => $tanggal_lahir
		// 	// 'id_indentitas2' => $id_indentitas2,
		// 	// 'id_indentitas3' => $id_indentitas3
			
		// );

		// $this->db->insert('indentitas', $data1);
		
		// $data2 = array (
		// 	'alamat'        => $alamat,
		// 	'pekerjaan'     => $pekerjaan,
		// 	'pendidikan'    => $pendidikan,
			
		// );
		
		// $this->db->insert('indentitas2', $data2);
		
		// $data3 = array(
		// 	'umur'          => $umur,
		// 	'hoby'          => $hoby,
		// 	'status'        => $status
		// );
		
		// $this->db->insert('indentitas3', $data3);

		$data = array (
			'nama'           => $nama,
			'tanggal_lahir'  => $tanggal_lahir,
			'alamat'         => $alamat,
			'pekerjaan'      => $pekerjaan,
			'pendidikan'     => $pendidikan,
			'umur'           => $umur,
		 	'hoby'           => $hoby,
		 	'status'         => $status
		);
		
		$this->db->insert('indentitas, identitas2, indentitas3', $data);
		
	}
}


// $data1 = array (
		// 	'nama'          => $nama,
		// 	'tanggal_lahir' => $tanggal_lahir,
			
		// );
		// $data2 = array (
		// 	'alamat'        => $alamat,
		// 	'pekerjaan'     => $pekerjaan,
		// 	'pendidikan'    => $pendidikan,
			
		// );

		// $data3 = array(
		// 	'umur'          => $umur,
		// 	'hoby'          => $hoby,
		// 	'status'        => $status
		// );

		// $query = mysqli_query($koneksi,"INSERT INTO pendaftar (no,nama,nama_panggilan,tpt_lahir,tgl_lahir,asal_sekolah,jurusan,nisn,nohp,nowa,line,instagram,hobi,cita_cita,tgl_mulai_pkl,tgl_akhir_pkl,alamat,nama_ayah,nohp_ayah,pekerjaan_ayah,nama_ibu,nohp_ibu,pekerjaan_ibu,jenkel) VALUES ('$no','$nama','$nama_panggilan','$tpt_lahir','$tgl_lahir','$asal_sekolah','$jurusan','$nisn','$nohp','$nowa','$line','$instagram','$hobi','$cita_cita','$tgl_mulai_pkl','$tgl_akhir_pkl','$alamat','$nama_ayah','$nohp_ayah','$pekerjaan_ayah','$nama_ibu','$nohp_ibu','$pekerjaan_ibu','$jenkel')"); or die(mysqli_error());

		// if($query){
		// $input = myesqli_query($koneksi, "INSERT INTO etika (no_etika,etika1,etika2,etika3,etika4,etika5,etika6,etika7,etika8,etika9,etika10,etika11,etika12)VALUES('$no_etika','$etika1','$etika2','$etika3','$etika4','$etika5','$etika6','$etika7','$etika8','$etika9','$etika10','$etika11','$etika12')"); or die(mysqli_error());

		// echo " berhasil";
		// }else{
		// echo "gagal ";
		// }