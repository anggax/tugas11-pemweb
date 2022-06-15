<?php
//konfigurasi ke database
$host		="localhost";
$username	="root";
$password	="";
$database	="db_kopet";

//integrasi koneksi
include 'koneksi.php';

//membuat tabel kasus
$sql= "CREATE TABLE tb_case(
id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
country VARCHAR(50) NOT NULL,
tot_case INT(255) NOT NULL,
new_case INT(255) NOT NULL,
tot_death INT(255) NOT NULL,
new_death INT(255) NOT NULL,
tot_recover INT(255) NOT NULL,
new_recover INT(255) NOT NULL
)";

//pengecekkan
if(mysqli_query($conn, $sql)){
	echo "Table created succesfully";
} else{
	echo "Error creating table". mysqli_error($conn);
}

mysqli_close($conn); 
?>