<?php 
include "koneksi.php";
$id=$_POST['bety_natalia_nahampun'];
$nama=$_POST['nama'];
$password=$_POST['boleeeh'];
mysqli_query($konek,"INSERT INTO tb_pengguna (id_pengguna,nama_pengguna,sandi_pengguna) VALUES ('".$id."','".$nama."','".$password."')");
header("location:lihat_pengguna.php");