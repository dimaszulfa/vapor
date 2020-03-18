<?php 

//koneksi ke database
require 'functions.php';
$orders = query("SELECT * FROM orders");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">
		.test {
			background-image:url(img/logout.png);
			display: block;
		           height: 50px;
		           width:  120px;
		}
	</style>
	<title>Halaman Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
<a  class="test" href="logout.php" title="logout" id="test"></a>
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">No.</th>
								<th class="column2">Aksi</th>
								<th class="column3">Nama</th>
								<th class="column4">Email</th>
								<th class="column5">Produk</th>
								<th class="column6">Keterangan</th>
							</tr>
						</thead>
						<tbody>
<?php $i = 1; ?>
<?php foreach ($orders as $row): ?>
								<tr>
									<td class="column1"><?= $i; ?></td>
									<td class="column2">
									<a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> | 
									<a href="hapus.php?id=<?= $row["id"]; ?>">Hapus</a>
									</td>
									<td class="column3"><?= $row["name"]; ?></td>
									<td class="column4"><?= $row["email"];  ?></td>
									<td class="column5"><?= $row["product"]; ?></td>
									<td class="column6"><?= $row["message"]; ?></td>
								</tr>
<?php $i++; ?>
<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>