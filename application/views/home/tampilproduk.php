<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<head>
	<title><?= $judul; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>


<body class="mt-5">
	<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark fixed-top pl-5" style="background-color: black;">
				<a class="navbar-brand" href="#">Hello Coffee</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav ml-auto pr-5 mt-2 mt-lg-0 text-uppercase">
						<?php 
						$username = $_SESSION['username'];
						?>
						<li class="nav-item ">
							<a class="nav-link" style="color: white;" ><?php echo $username ?></a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="<?= base_url(); ?>home/hapus/<?= $username ?>" style="color: white;" onclick="return confirm('Apakah anda yakin menghapus akun ini?');" >Hapus Akun</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="#te" style="color: white;" >Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url(); ?>"  style="color: white;">Menu</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url();?>Timeline/tampilproduk/"  style="color: white;">Keranjang belanja</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url(); ?>home"  style="color: white;">logout</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<div class="jumbotron text-white" style="background-image: url('https://images.unsplash.com/photo-1545086421-168708d4f603?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1791&q=80'); height: 700px; width: 100%">
		<div class="container">
			<h1>DAFTAR BELANJA</h1>      
			<table class="table">
 				 <thead class="thead-dark">
   					 <tr>
      						<th  width="2%" scope="col">No</th>
      						<th width="10%" scope="col">Gambar</th>
      						<th width="33%" scope="col">Item</th>
      						<th width="17%" scope="col">Harga</th>
      						<th width="8%" scope="col">Qty</th>
     						 <th width="20%" scope="col">Jumlah</th>
     						 <th width="17%" scope="col">Harga</th>
      						<th width="10%" scope="col">Hapus</th>
    				</tr>
    			

    				<tr>
					<td colspan="4" align="right">
					<a data-toggle="modal" data-target="#myModal"  class ='btn btn-sm btn-danger'>Kosongkan Cart</a>
					<button class='btn btn-sm btn-success'  type="submit">Update Cart</button>
					<a href="<?= base_url() ?>Timeline/checkout/"  class ='btn btn-sm btn-primary'>Check Out</a>
					</tr>

    			</thead>
	  
			</table>
		</div>
	</div>

</body>
</html>