# Belajar Query Builder Codeigniter 

#Insert Database
INSERT INTO  tb_jurusan
(nama, kelas, nama_jurusan)
VALUES ('testuser', 'RPL','test2');

#Join Semua Isi Table (2 Table)
select * from tb_siswa 
join tb_jurusan on tb_siswa.id_jurusan = tb_jurusan.id_jurusan;

#JOIN 2 TABLE BERDASARKAN SELECT DATA
select tb_siswa.id_jurusan, tb_siswa.id_siswa, tb_siswa.nama, tb_siswa.kelas, tb_jurusan.nama_jurusan
from tb_siswa
inner join tb_jurusan
on tb_siswa.id_jurusan = tb_jurusan.id_jurusan;

#JOIN 3 TABLE
select tb_siswa.id_jurusan, tb_siswa.id_siswa, tb_siswa.nama, tb_siswa.kelas, tb_jurusan.nama_jurusan, tb_spp.id_spp, tb_spp.tahun, tb_spp.nominal
from tb_siswa
inner join tb_jurusan
on tb_siswa.id_jurusan = tb_jurusan.id_jurusan
inner join tb_spp
on tb_siswa.id_siswa = tb_spp.id_spp;

#GROUP BY BERDASARKAN KELAS
select  kelas, count(*) as banyaknya_kelas
from tb_siswa join tb_jurusan using (id_jurusan)
group by kelas;

-- select nama_jurusan, count(*) as banyaknya_jurusan
-- from tb_jurusan join tb_siswa using (id_jurusan)
-- group by nama_jurusan;






