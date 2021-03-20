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


    update ran
INNER JOIN pdhsiteb
on ran.siteid = pdhsiteb.siteidb
SET ran.status='sama',
pdhsiteb.statusb='sama'
WHERE ran.rsitename=pdhsiteb.rsitenameb and 
ran.radress=pdhsiteb.radressb and
ran.rlong=pdhsiteb.rlongb and
ran.rlat=pdhsiteb.rlatb

update ran
INNER JOIN pdhsiteb
on ran.siteid = pdhsiteb.siteidb
SET ran.status='beda',
pdhsiteb.statusb='beda'
WHERE ran.rsitename <> pdhsiteb.rsitenameb or 
ran.radress <> pdhsiteb.radressb or
ran.rlong <> pdhsiteb.rlongb or
ran.rlat <> pdhsiteb.rlatb

?> 