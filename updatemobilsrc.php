<?php 
include "koneksi.php"; //mengincludkan ke koneksi.php
$mobil=$_POST['Id_Mobil'];//membuat variabel
$Merk=$_POST['Merk'];
$Model=$_POST['Model'];
$Tipe=$_POST['Tipe'];
$Pintu=$_POST['Pintu'];
$Tahun_Produksi=$_POST['Tahun_Produksi'];
$Negara_Pembuat=$_POST['Negara_Pembuat'];
$Jenis_Produksi=$_POST['Jenis_Produksi'];

$query = "UPDATE mobil SET Merk='$Merk', Model='$Model', Tipe='$Tipe', Pintu ='$Pintu', Tahun_Produksi='$Tahun_Produksi', Negara_Pembuat='$Negara_Pembuat', Jenis_Produksi='$Jenis_Produksi' WHERE Id_Mobil='$mobil'";//syntax update data 
$hasil = mysql_query($query);//memanggil hasil query (syntaz update)
 
if ($hasil) echo '<script language="javascript">alert("Anda berhasil mengedit data !"); document.location="tabel.php";</script>';
else echo "Pengeditan data gagal"; 

?>