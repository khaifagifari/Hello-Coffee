<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title> Hello Coffe></title>
</head>
<body>
	<div class="container mt-5">
	<h1 class="text-center mb-2">Data Diri </h1>
	<p class="text-center">Data diri menggunakan Bootstrap 4</p>
	<div class="card m-auto" style="width: 18rem;">
		<img src="assets/img.jpg" class="card-img-top" alt="...">
		<div class="card-body">
			<?php foreach($profil as $data) : ?>
			<h5 class="card-title"> <?= $data["nama"]; ?> - <span> <?= $data['nim']; ?></span></h5>
		<?php endforeach;  ?>
			<p class="card-text">Saya adalah mahasiswa yang Ahsiyaaaaapppppp.</p>
			<a href="<?= base_url(); ?>datateman" class="btn btn-primary">Go somewhere</a>
		</div>
	</div>
	</div>