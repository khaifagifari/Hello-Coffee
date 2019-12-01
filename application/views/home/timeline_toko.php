
<div class="jumbotron text-white rounded-0 " style="background-image: url('https://images.wallpaperscraft.com/image/coffee_book_windowsill_130911_1920x1080.jpg'); height: 650px; width: 100%;">
	<div class="container">
		<h1 class="mt-5 pt-5">Hello Coffee</h1>      
		<p>A bad day with coffee is better than a good day without it</p>
	</div>
</div>


<section style="min-height: 920px;" id="menu" class="pt-3">
	<div class="container-fluid text-center text-capitalize">
		<h2 class="mt-5 pt-lg-4"> TOKO KOPI</h2>  
			<h5 class="mb-4">Data Menu</h5>
			<div class="container">
				<?php if ($this->session->flashdata('menu')) : ?>
	                <div class="alert alert-success fade show text-dark" role="alert">
	                    <?php echo $this->session->flashdata('menu'); ?>
	                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                        <span aria-hidden="true">&times;</span>
	                    </button>
	                </div>
                <?php endif; ?>
				<div class="row">
					<!-- COFFEE CARD -->
					<?php foreach ($menu as $kopi) : ?>
						<div class="col-12 col-md-6 col-lg-4">
							<form method="post" action="" method="post" accept-charset="utf-8">
								<article class="card-wrapper text-dark text-center">

										<!-- <div class="image-holder">	 -->
											<a href="<?php echo base_url('Detail_produk/') ?>" class="image-holder__link"></a>

											<div class="image-liquid image-holder--original"
											style="background-image: url('<?php echo base_url('assets/img/'). $kopi['foto_kopi'] ?>')">
										<!-- </div> -->
									</div>
									<div class="product-description">
										<!-- title -->
										<div class="card-body pt-2 pb-2">
											<h5 class="card-title mb-3"><?php echo $kopi['nama_menu'] ?></h5>
											<hr class="mb-2 mt-0">
											<p class="card-text">Harga = <?php echo $kopi['harga'] ?></p>
											<p class="card-text">Jenis = <?php echo $kopi['jenis'] ?></p>
										</div>
										<a href="<?php echo base_url('menu/hapusMenu/'); echo $kopi['id_menu']; ?>" onclick="return confirm('Apakah anda yakin menghapus <?php echo $kopi['nama_menu']?>?');"class="btn btn-danger float-left">Hapus Menu</a>
										<a href="<?php echo base_url('menu/editMenu/'); echo $kopi['id_menu']; ?>" class="btn btn-warning float-right font-weight-bold">Edit Menu</a>
									</div>
							</article>
						</form>
					</div>
				<?php endforeach; ?>
				<div class="col-12 col-md-6 col-lg-4">
					<form method="post" action="" method="post" accept-charset="utf-8">
						<article class="card-wrapper text-dark text-center">	
							<div class="image-holder">
								<a href="<?php echo base_url('menu/tambahMenu') ?>" class="image-holder__link"></a>
							</div>
							<div class="card-body pt-0">
								<h5 class="card-title mb-3">Tambah Menu</h5>
							</div>
						</article>
						<div class="product-description">
					</form>
				</div>
				<!-- end COFFEE CARD -->
			</div>
		</div>
	</div>
</section>

<!-- this is for carousel -->

<section class="mt-5 mb-5">


	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" style="height: 550px">
			<div class="carousel-item active">
				<img class="d-block w-100" src="https://images.unsplash.com/photo-1413745094207-a01b234cc32f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1189&q=80" alt="First slide">
				<div class="carousel-caption">
					<h3>taste.</h3>
					<p>Feel the best taste of coffee here!</p>

				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="https://images.unsplash.com/photo-1442550528053-c431ecb55509?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="Second slide">
				<div class="carousel-caption">
					<h3>Variant</h3>
					<p>All your favourite coffee ready to yours</p>
				</div>
			</div>				
			<div class="carousel-item">

				<img class="d-block w-100" src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="Third slide">
				<div class="carousel-caption">
					<h3>IPOK METIIIII</h3>
					<p>Thank you!</p>
				</div>
			</div>
		</div>
	</div>

</section>

<section id="testimonial" class="our-webcoderskull padding-lg" style="background: none;">
	<div class="container">
			<h2 class="mb-5" style="color: black;">Testimonials</h2>
		<ul class="row">
			<li class="col-12 col-md-6 col-lg-4">
				<div class="cnt-block equal-hight pt-lg-4" style="height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
					<div class="quote mb-1 "><i class="fa fa-quote-left fa-4x"></i></div>
					<h3 class="font-weight-normal text-dark font-italic p-md-3 pt-0" style="text-transform: none; font-size: 18px;" >Gak nyesel gue beli kopi disini, gue gaperlu jauh-jauh ke toko karena semuanya ada disni.</h3>
					<h3 class="mb-0 mt-3">Ujang Bedog</h3>
					<p>Coffee Enthusiast</p>
				</div>
			</li>		
			<li class="col-12 col-md-6 col-lg-4">
				<div class="cnt-block equal-hight pt-lg-4" style="height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
					<div class="quote mb-1"><i class="fa fa-quote-left fa-4x"></i></div>
					<h3 class="font-weight-normal text-dark font-italic p-md-3 pt-0 mb-0" style="text-transform: none; font-size: 18px;" >Kopi yang biasa gue minum ada disini, gue ngerasain banget kemudahan dalam menggunakan aplikasi ini untuk dapetin kopi yang gue mau</h3>
					<h3 class="mb-0 mt-3">Tombak Zilong</h3>
					<p>Tukang ngopi 3x sehari</p>

				</div>
			</li>		
			<li class="col-12 col-md-6 col-lg-4">
				<div class="cnt-block equal-hight pt-lg-4" style="height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
					<div class="quote mb-1"><i class="fa fa-quote-left fa-4x"></i></div>
					<h3 class="font-weight-normal text-dark font-italic p-md-3 pt-0" style="text-transform: none; font-size: 18px;" >Satu kata buat hellocoffe, MANTUL!</h3>
					<h3 class="mb-0 mt-3">Helmi Ruslan</h3>
					<p>Espresso Lover</p>

				</div>
			</li>
		</ul>
	</section>