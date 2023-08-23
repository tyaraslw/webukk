<?php
//koneksi database
include 'koneksi.php';
$isi_laporan = $_POST['isi_laporan'];
$id = $_GET['id'];
 
//update
 $koneksi->query("UPDATE 'pengaduan' SET isi_laporan= 'Telah di update' 
 WHERE id_pengaduan='0' ");

 header("location:home.php");
