<?php
//koneksi database
include 'koneksi.php';
$id = $_GET['id'];
//query
$query = $koneksi->query("select * from pengaduan where id_pengaduan='$id'");

$data = $query->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
 <body>
    <div class="container">
      <form action="prosesupdate.php?id=<?= $data['id_pengaduan'] ?>" method="POST" enctype="multipart/form-data">
         <div class="mb-3">
           <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan</label>
           <textarea class="form-control" rows="3" name="isi_laporan"><?= $data['isi_laporan']?></textarea>
         </div>


         <button type="button" class="btn btn-primary">Edit</button>
       </form>
    </div>
 </body> 
</html>