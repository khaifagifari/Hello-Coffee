<section id="detail" style="background: url('https://images.unsplash.com/photo-1447933601403-0c6688de566e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=956&q=80');
height: 100%;">
<div class="container">
	<br> 
	<br> 
	<br> 
	<br> 

	<?php foreach ($coffee as $kopi) : {
		# code...
	} ?>
	<div class="card text-dark mb-5">
		<div class="row">
			<aside class="col-sm-6 " style="padding: 30px 40px 30px 40px">
				<article class="gallery-wrap"> 
					<div class="img-big-wrap">

						<div> <a href="#"><img src="<?php echo base_url('assets/img/').$kopi['foto_kopi'] ?>" ></a></div>
					</div> <!-- slider-product.// -->
				</article> <!-- gallery-wrap .end// -->
			</aside>
			<aside class="col-sm-6">
				<form method="POST" action="<?php echo base_url('shopping/tambahKeranjang/'); echo $_SESSION['id_user']; echo "/".$_SESSION['id_menu']; ?>">
					<article class="card-body px-5 text-justify" style="padding-top: 30px;">
						<h3 class="title mb-3"><?php echo $kopi['nama_menu'] ?></h3>

						<p class="price-detail-wrap"> 
							<span class="price h3 text-warning"> 
								<span class="currency">RP</span><span class="num"><?php echo $kopi['harga']?></span>
							</span> 
							<span>/ pcs</span> 
						</p> <!-- price-detail-wrap .// -->
						<dl class="item-property">
							<dt>Description</dt>
							<dd><p><?php echo $kopi['deskripsi'] ?> </p></dd>
						</dl>
						<dl class="param param-feature">
							<dt>Jenis</dt>
							<dd><?php echo $kopi['jenis'] ?></dd>
						</dl>  <!-- item-property-hor .// -->
						<dl class="param param-feature">
							<dt>Nama Kedai Kopi</dt>
							<dd><?php echo $kopi['nama_toko']?></dd>
						</dl>  <!-- item-property-hor .// -->
						<dl class="param param-feature">
							<dt>Alamat Kedai Kopi</dt>
							<dd><?php echo $kopi['alamat']?></dd>
						</dl>  <!-- item-property-hor .// -->

						<hr>
						<dt class="mb-2">Jumlah</dt>
						<div class="container">	 
							<div class="input-group spinner">
								<input type="text" class="form-control" value="1" name="jumlah">
								<div class="input-group-btn-vertical">
									<button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
									<button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
								</div>
							</div>
						</div>
						<hr>
						<a href="<?php echo base_url('shopping/checkout/') ?>" class="btn btn btn-primary text-uppercase mt-3"> Buy now </a>
						<button type="submit" class="btn btn btn-outline-primary text-uppercase mt-3"> Add to cart </button>
					</article> <!-- card-body.// -->
				</form>
			</aside> <!-- col.// -->
		</div> <!-- row.// -->
	<?php endforeach; ?>
	<div class="card-header text-center"> <!-- Komentar-->
		Tambah Komentar
	</div>
	<div class="card-body">
		<form class="form-signin" method="POST" action="<?php echo base_url('komentar/tambahKomentar') ?>">
			<div class="form-label-group">
				<input type="text" class="form-control" id="nama_komentar" name="nama_komentar">
				<label for="nama_menu">Nama</label>
			</div>
			<div class="form-label-group">
				<input type="text" name="isi_komentar" id="isi_komentar" class="form-control">
				<label for="harga">Komentar</label>
			</div>
			<button type="submit" name="tambah" class="btn btn-block btn-primary">Tambah Komentar</button>
		</form>
	</div> <!-- End komentar -->

	<div class="card-header text-left"> <!-- Komentar-->
		Semua Komentar
	</div>
	<?php foreach ($komentar as $komen): ?>
		<a href="<?php echo base_url('komentar/daftarKomentar').$kopi['id_menu'] ?>"> </a>
		<dl class="item-property">
			<p class="m-4" style="font-size:14px;color: grey"> Oleh: <a href="" style="color:black;font-size: 17px; font-style: italic;" > <?php echo $komen['nama_komentar'] ?> </a></p>
			<p class="ml-3" style="font-size: 20px;">'<?php echo $komen['isi_komentar'] ?>' </p>
		</dl>
		<hr>
	<?php endforeach; ?>
</div> <!-- End komentar -->

</div> <!-- card.// -->
</div>

<!--container.//-->
</section>

<script>
	(function ($) {
		$('.spinner .btn:first-of-type').on('click', function() {
			$('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
		});
		$('.spinner .btn:last-of-type').on('click', function() {
			$('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
		});
	})(jQuery);
</script>