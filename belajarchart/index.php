<?php
//integrasi koneksi
include 'koneksi.php';
//membuat variabel penampung data tabel
$produk = mysqli_query($conn, "SELECT * FROM tb_barang");
while ($row = mysqli_fetch_array($produk)) {
	$nama_produk[] = $row['barang'];
	$sql = mysqli_query($conn, "SELECT SUM(jumlah) AS jumlah FROM tb_penjualan WHERE id_barang='".$row['id_barang']."'");
	$row = $sql->fetch_array();
	$jumlah_produk[] = $row['jumlah'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menggunakan Grafik Menggunakan Chart JS</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	<!--pengaturan tampilan bar dan pembuatan id chart-->
	<div style="width: 800px; height: 800px;">
		<canvas id="myChart"></canvas>
	</div>

	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart (ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($nama_produk);?>, datasets: [{
					labels: 'Grafik Penjualan',
					data: <?php echo json_encode($jumlah_produk); ?>,
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255, 99, 132, 1)',
					borderWidth: 1			
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>