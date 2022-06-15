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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pie Chart</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	<!--pengaturan tampilan dan id canvas-->
	<div style="width: 800px; height: 800px;">
		<h2 style="font-family: sans-serif;">Total Kasus</h2>
		<canvas id="myChart"></canvas><br><br>

		<h2 style="font-family: sans-serif;">Kasus Baru</h2>
		<canvas id="myChart2"></canvas><br><br>

		<h2 style="font-family: sans-serif;">Jumlah Kematian</h2>
		<canvas id="myChart3"></canvas><br><br>

		<h2 style="font-family: sans-serif;">Kematian Baru</h2>
		<canvas id="myChart4"></canvas><br><br>

		<h2 style="font-family: sans-serif;">Jumlah Kesembuhan</h2>
		<canvas id="myChart5"></canvas><br><br>

		<h2 style="font-family: sans-serif;">Kesembuhan Baru</h2>
		<canvas id="myChart6"></canvas><br><br>
	</div>

	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart (ctx, {
			type: 'pie',
			data: {
				//membuat label
				labels: <?php echo json_encode($negara);?>,
				datasets: [{
					//grafik untuk total kasus
					label: 'Total Kasus',
					data:<?php echo json_encode($jumlah_kasus); ?>,
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(0, 255, 254, 0.2)',
					'rgba(115, 255, 216, 0.2)',
					'rgba(210, 105, 30, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(0, 0, 205, 0.2)',
					'rgba(40, 178, 170, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(0, 255, 254, 1)',
					'rgba(115, 255, 216, 1)',
					'rgba(210, 105, 30, 1)',
					'rgba(128, 0, 128, 1)',
					'rgba(0, 0, 205, 1)',
					'rgba(40, 178, 170, 1)'
					],				
				}],		
			},
			options: {
				scales: {
					
				}
			}
		});

		//grafik untuk jumlah kasus baru
		var ctx2 = document.getElementById("myChart2").getContext('2d');
		var myChart2 = new Chart (ctx2, {
			type: 'pie',
			data: {
				labels: <?php echo json_encode($negara);?>,
				datasets: [{
					label: 'Kasus Baru',
					data:<?php echo json_encode($kasus_baru); ?>,
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(0, 255, 254, 0.2)',
					'rgba(115, 255, 216, 0.2)',
					'rgba(210, 105, 30, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(0, 0, 205, 0.2)',
					'rgba(40, 178, 170, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(0, 255, 254, 1)',
					'rgba(115, 255, 216, 1)',
					'rgba(210, 105, 30, 1)',
					'rgba(128, 0, 128, 1)',
					'rgba(0, 0, 205, 1)',
					'rgba(40, 178, 170, 1)'
					],				
				}],		
			},
			options: {
				scales: {				
				}
			}
		});

		//grafik untuk jumlah kematian
		var ctx3 = document.getElementById("myChart3").getContext('2d');
		var myChart3 = new Chart (ctx3, {
			type: 'pie',
			data: {
				labels: <?php echo json_encode($negara);?>,
				datasets: [{
					label: 'Kasus Baru',
					data:<?php echo json_encode($jumlah_kematian); ?>,
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(0, 255, 254, 0.2)',
					'rgba(115, 255, 216, 0.2)',
					'rgba(210, 105, 30, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(0, 0, 205, 0.2)',
					'rgba(40, 178, 170, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(0, 255, 254, 1)',
					'rgba(115, 255, 216, 1)',
					'rgba(210, 105, 30, 1)',
					'rgba(128, 0, 128, 1)',
					'rgba(0, 0, 205, 1)',
					'rgba(40, 178, 170, 1)'
					],				
				}],		
			},
			options: {
				scales: {				
				}
			}
		});

		//grafik untuk jumlah kematian baru
		var ctx4 = document.getElementById("myChart4").getContext('2d');
		var myChart4 = new Chart (ctx4, {
			type: 'pie',
			data: {
				labels: <?php echo json_encode($negara);?>,
				datasets: [{
					label: 'Kasus Baru',
					data:<?php echo json_encode($kematian_baru); ?>,
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(0, 255, 254, 0.2)',
					'rgba(115, 255, 216, 0.2)',
					'rgba(210, 105, 30, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(0, 0, 205, 0.2)',
					'rgba(40, 178, 170, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(0, 255, 254, 1)',
					'rgba(115, 255, 216, 1)',
					'rgba(210, 105, 30, 1)',
					'rgba(128, 0, 128, 1)',
					'rgba(0, 0, 205, 1)',
					'rgba(40, 178, 170, 1)'
					],				
				}],		
			},
			options: {
				scales: {				
				}
			}
		});

		//grafik untuk jumlah sembuh
		var ctx5 = document.getElementById("myChart5").getContext('2d');
		var myChart5 = new Chart (ctx5, {
			type: 'pie',
			data: {
				labels: <?php echo json_encode($negara);?>,
				datasets: [{
					label: 'Kasus Baru',
					data:<?php echo json_encode($jumlah_sembuh); ?>,
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(0, 255, 254, 0.2)',
					'rgba(115, 255, 216, 0.2)',
					'rgba(210, 105, 30, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(0, 0, 205, 0.2)',
					'rgba(40, 178, 170, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(0, 255, 254, 1)',
					'rgba(115, 255, 216, 1)',
					'rgba(210, 105, 30, 1)',
					'rgba(128, 0, 128, 1)',
					'rgba(0, 0, 205, 1)',
					'rgba(40, 178, 170, 1)'
					],				
				}],		
			},
			options: {
				scales: {				
				}
			}
		});

		//grafik untuk jumlah kesembuhan baru
		var ctx6 = document.getElementById("myChart6").getContext('2d');
		var myChart6 = new Chart (ctx6, {
			type: 'pie',
			data: {
				labels: <?php echo json_encode($negara);?>,
				datasets: [{
					label: 'Kasus Baru',
					data:<?php echo json_encode($kesembuhan_baru); ?>,
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(0, 255, 254, 0.2)',
					'rgba(115, 255, 216, 0.2)',
					'rgba(210, 105, 30, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(0, 0, 205, 0.2)',
					'rgba(40, 178, 170, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(0, 255, 254, 1)',
					'rgba(115, 255, 216, 1)',
					'rgba(210, 105, 30, 1)',
					'rgba(128, 0, 128, 1)',
					'rgba(0, 0, 205, 1)',
					'rgba(40, 178, 170, 1)'
					],				
				}],		
			},
			options: {
				scales: {				
				}
			}
		});
	</script>
</body>
</html>