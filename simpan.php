<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title>Simpan Data</title>
</head>
<body>
<?php
$nama=$_POST['nama'];
$email=$_POST['email'];
$alm=$_POST['alamat'];
$kota=$_POST['kota'];
$msg=$_POST['pesan'];

$koneksi=mysqli_connect("localhost","root","");
mysqli_select_db($koneksi, "buku_tamu");
$proses="INSERT INTO tamu(nama,email,alamat,kota,pesan)
VALUES('$nama','$email','$alm','$kota','$msg')";
$hasil=mysqli_query($koneksi, $proses);
echo "<font color=red size=5>Buku Tamu BERHASIL Diisi</font>";

?>
<br>

<a href="tampil.php"><h3>Lihat Buku Tamu</h3></a>


</body>
</html>
