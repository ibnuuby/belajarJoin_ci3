
<!DOCTYPE html>
<html>
<head>
  <title>Belajar Codeigniter</title>
</head>
<body>
  <h1>Belajar Codeigniter di warungbelajar.com</h1>
  <table border="1">
    <tr>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Alamat</th>
    </tr>
    <?php 
    foreach($biodata->result() as $row)
    { 
      ?>
      <tr>
        <td><?php echo $row->nama ?></td>
        <td><?php echo $row->tanggal_lahir ?></td>
      </tr>
      <?php 
    } 
    ?>
  </table>
</body>
</html>