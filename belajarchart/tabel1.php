<?php
//konfigurasi ke database
$host		="localhost";
$username	="root";
$password	="";
$database	="db_penjualan";

//integrasi koneksi
include 'koneksi.php';

//membuat tabel barang
$sql= "CREATE TABLE tb_barang(
id_barang INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
barang VARCHAR(255) NOT NULL
)";

//pengecekkan
if(mysqli_query($conn, $sql)){
	echo "Table created succesfully";
} else{
	echo "Error creating table". mysqli_error($conn);
}

mysqli_close($conn); 
?>