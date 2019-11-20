<?php
include 'index.php';
// menyimpan data kedalam variabel
$username           = $_POST['username'];
$password           = $_POST['password'];

// query SQL untuk insert data
$query="INSERT INTO login SET username='$username', password='$password';
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");

?>
