<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
  <div class="card-body">
    <div class="container">
    
    <?php 
    $att = array('method'=>"post");
    echo form_open_multipart('biodata/prosestambahdata',$att)
    
  ?>
      <?php   foreach($data as $value) {  ?>

    <?php 
    
          $key1 = $value->id_indentitas2;
          $key2 = $key1 + 1;
        
          $key3 = $value->id_indentitas3;
          $key4 = $key3 + 1;  
          
    ?>
    <input type="hidden" name="id_indentitas2" value="<?php echo $key2; ?>">
    <input type="hidden" name="id_indentitas3" value="<?php echo $key4; ?>">

    <?php } ?>
    <div class="row g-3">
  <div class="col-md-6">

    <label class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama">
  </div>
  <div class="col-md-6">  
    <label class="form-label">Tanggal Lahir</label>
    <input type="text" class="form-control" name="tanggal_lahir">
  </div>
  <div class="col-12">
    <label class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat">
  </div>
  <div class="col-12">
    <label class="form-label">Pekerjaan</label>
    <input type="text" class="form-control" name="pekerjaan">
  </div>
  <div class="col-md-6">
    <label class="form-label">Pendidikan</label>
    <input type="text" class="form-control" name="pendidikan">
  </div>
  <div class="col-md-2">
    <label class="form-label">Umur</label>
    <input type="text" class="form-control" name="umur">
  </div>
  <div class="col-md-2">
    <label class="form-label">Hoby</label>
    <input type="text" class="form-control" name="hoby">
  </div>
  <div class="col-md-2">
    <label class="form-label">Status</label>
    <input type="text" class="form-control" name="status">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?= base_url('biodata'); ?>" class="btn btn-primary">Kembali</a>

  </div>
</div>
<?php echo form_close();?>
    </div>
    </div>
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