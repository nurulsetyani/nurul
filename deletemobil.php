<?php 
 
include "koneksi.php"; //menginkludkna ke koneksi.php
 
$id_mobil= $_GET['Id_mobil']; //membuat varaibel id_mobil dan mengambil datanya yg telah ditampung di Id_Mobil

$query = "DELETE FROM mobil WHERE id_mobil='$id_mobil'"; //syntax untuk menghapus
$hasil = mysql_query($query);//memanggil syntax query
 
echo '<script language="javascript">alert("Anda berhasil menghapus data !"); document.location="tabel.php";</script>';

?>