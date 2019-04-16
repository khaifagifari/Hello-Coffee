
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
			<h1>Konfirmasi Check Out</h1>   
			<h6>Total Belanja:</h4>
			<br>
		
			<form class="form-horizontal" action="#" method="post" name="frmCO" id="frmCO">
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="inputEmail">Email:</label>
            <div class="col-xs-9">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="firstName">Nama :</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="lastName">Alamat:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="phoneNumber">Telp:</label>
            <div class="col-xs-9">
                <input type="tel" class="form-control" name="telp" id="telp" placeholder="No Telp">
            </div>
        </div>
        
        <div class="form-group  has-success has-feedback">
            <div class="col-xs-offset-3 col-xs-9">
                <button type="submit" class="btn btn-primary">Proses Order</button>
            </div>
        </div>
    </form> 
	</body>
