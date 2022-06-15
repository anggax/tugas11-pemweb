<?php
//konfigurasi ke database
$host		="localhost";
$username	="root";
$password	="";
$conn 		= mysqli_connect($host, $username, $password); 

//melakukan pengecekan koneksi
if (!$conn) {
	die("Koneksi gagal: ".mysqli_connect_error()); 
}

//membuat database penjualan
$sql = "CREATE DATABASE db_penjualan";
if (mysqli_query($conn, $sql)) {
	echo "Database berhasil dibuat"; 
} else {
	echo "Gagal membuat database: ".mysqli_error($conn); 
}

mysqli_close($conn); 
?>