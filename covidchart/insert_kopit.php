<?php
//integrasi koneksi
include 'koneksi.php';

//cek koneksi
if (!$conn) {
	die("Connection failed : ".mysql_connect_error());
}

//input data ke tabel kasus
$sql = "INSERT INTO tb_case (id, country, tot_case, new_case, tot_death, new_death, tot_recover, new_recover) VALUES
(1, 'India', 43185049, 3714, 524708, 7, 42633365, 2513),
(2, 'Korsel', 18168708, 5022, 24279, 21, 17865591, 28085),
(3, 'Turkey', 15072747, 0, 98965, 0, 14971256, 0),
(4, 'Vietnam', 10726045, 806, 43081, 1, 9513981, 9026),
(5, 'Japan', 8945784, 16130, 30752, 17, 87112889, 24361),
(6, 'Iran', 7232790, 59, 141332, 1, 7056206, 713),
(7, 'Indonesia', 6057142, 342, 156622, 7, 5897022, 270),
(8, 'Malaysia', 4516319, 1330, 35690, 2, 4458999, 1881),
(9, 'Thailand', 4468955, 2162, 30201, 27, 4409248, 4879),
(10, 'Israel', 4154566, 2580, 10864, 0, 4124933, 0)
";

//pengecekkan
if (mysqli_query($conn, $sql)) {
	echo "Insert Data Behasil";
}
else {
	echo "Error: ". $sql. "<br>" . mysqli_error($conn); 
}
mysqli_close($conn); 
?>