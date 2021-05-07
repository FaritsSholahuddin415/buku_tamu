<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title>BUKU TAMU</title>
</head>
<body>
<pre>
<h1>BUKU TAMU</h1>
<a href="index.php"> <-- Kembali ke Form Buku Tamu</a>
<hr size=1>
<?php

$koneksi=mysqli_connect("localhost","root","");
mysqli_select_db($koneksi, "buku_tamu");
$sql=mysqli_query($koneksi, "SELECT * FROM tamu");
while($data=mysqli_fetch_array($sql))
{
 $id=$data['Id'];
 $name=$data['nama'];
 $email=$data['email'];
 $alm=$data['alamat'];
 $city=$data['kota'];
 $msg=$data['pesan'];
 
 echo "ID     : $id<br>";
 echo "Nama   : $name<br>";
 echo "E-Mail : $email<br>";
 echo "Alamat : $alm, $city<br>";
 echo "Pesan  : $msg<br><hr size=1>";
      }
 ?>


</body>
</html>
