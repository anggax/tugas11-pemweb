<?php
//integrasi koneksi
include 'koneksi.php';

//pengecekkan koneksi
if (!$conn) {
	die("Connection failed : ".mysql_connect_error());
}

//menambahkan data pada tabel
$sql = "INSERT INTO tb_barang (id_barang, barang) VALUES
(1, 'Redmi Note 7'),
(2, 'Samsung M20'),
(3, 'Realme 3'),
(4, 'Iphone X')";

//pengecekkan
if (mysqli_query($conn, $sql)) {
	echo "Insert Data Behasil";
}
else {
	echo "Error: ". $sql. "<br>" . mysqli_error($conn); 
}
mysqli_close($conn); 
?>