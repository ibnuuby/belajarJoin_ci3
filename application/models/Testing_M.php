<?php

$dataTabelPertama = array(
    'kolom1'=>$this->input->post('a'),
    'kolom2'=>$this->input->post('b')
);  
    $this->db->insert('tabelPertama',$dataTabelPertama);
    $dataTabelKedua = array(
        'kolom1'=>$this->input->post('a'), 
        'kolom2'=>$this->input->post('b')
);
    $this->db->insert('tabelKedua',$dataTabelKedua); 

?> 