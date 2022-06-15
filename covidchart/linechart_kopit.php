<?php
//integrasi koneksi
include('koneksi.php');
//menampung data dari tabel kasus
$kasus = mysqli_query($conn, "SELECT * FROM tb_case");
while($row = mysqli_fetch_array($kasus)){
	//membuat variabel representatif
    $negara[] = $row['country'];
    $jumlah_kasus[] = $row['tot_case'];
    $kasus_baru[] = $row['new_case'];
    $jumlah_kematian[] = $row['tot_death'];
    $kematian_baru[] = $row['new_death'];
    $jumlah_sembuh[] = $row['tot_recover'];
    $kesembuhan_baru[] = $row['new_recover'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Line Chart</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	<!--pengaturan tampilan dan id canvas-->
	<div style="width: 800px;height: 800px">
		<canvas id="myChart"></canvas>
	</div>

	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				//membuat label
				labels: <?php echo json_encode($negara); ?>,
				datasets: [{
					//grafik untuk total kasus
					label: 'Total Kasus',
					data: <?php echo json_encode($jumlah_kasus); ?>,
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255,99,132,1)',
					borderWidth: 1
				},
				{
					//grafik untuk jumlah kasus baru
					label: 'Kasus Baru',
					data: <?php echo json_encode($kasus_baru); ?>,
					backgroundColor: 'rgba(86, 245, 128, 0.2)',
					borderColor: 'rgba(86, 245, 128,1)',
					borderWidth: 1
				},
				{
					//grafik untuk jumlah kematian
					label: 'Jumlah Kematian',
					data: <?php echo json_encode($jumlah_kematian); ?>,
					backgroundColor: 'rgba(247, 222, 32, 0.2)',
					borderColor: 'rgba(247, 222, 32,1)',
					borderWidth: 1
				},
				{
					//grafik untuk jumlah kematian baru
					label: 'Jumlah Kematian Baru',
					data: <?php echo json_encode($kematian_baru); ?>,
					backgroundColor: 'rgba(255, 159, 56, 0.2)',
					borderColor: 'rgba(255, 159, 56,1)',
					borderWidth: 1
				},
				{
					//grafik untuk jumlah sembuh
					label: 'Jumlah Sembuh',
					data: <?php echo json_encode($jumlah_sembuh); ?>,
					backgroundColor: 'rgba(62, 166, 250, 0.2)',
					borderColor: 'rgba(62, 166, 250,1)',
					borderWidth: 1
				},
				{
					//grafik untuk jumlah kesembuhan baru
					label: 'Jumlah Kesembuhan Baru',
					data: <?php echo json_encode($kesembuhan_baru); ?>,
					backgroundColor: 'rgba(139, 71, 255, 0.2)',
					borderColor: 'rgba(139, 71, 255,1)',
					borderWidth: 1
				},
				]
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