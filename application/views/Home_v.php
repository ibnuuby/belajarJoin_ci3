<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <div class="container">
        <table class="table">
        
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Alamat</th>
          <th scope="col">Pekerjaan</th>
          <th scope="col">Pendidikan</th>
          <th scope="col">Umur</th>
          <th scope="col">Hoby</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $no = 1;
        foreach($biodata as $value) : 
        
        ?>
        <tr>
          <th scope="row"><?= $no++; ?></th>
          <td><?= $value->nama; ?></td>
          <td><?= $value->tanggal_lahir; ?></td>
          <td><?= $value->alamat; ?></td>
          <td><?= $value->pekerjaan; ?></td>
          <td><?= $value->pendidikan; ?></td>
          <?php if($value->umur > 20) : ?>
            <td><?= $value->umur ?></td>
          <?php endif; ?>
          <td><?= $value->hoby; ?></td>
          <td><?= $value->status; ?></td>
          <td>
              <a href="" type="button" class="btn btn-primary">Edit</a>
              <a href="" type="button" class="btn btn-danger">Delete</a>
          </td>
        </tr>
      </tbody>
      <?php endforeach; ?>
    </table>
    <h4>Data Jumlah</h4>
    <table>
      <td></td>
     
    </table>
    </div>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>