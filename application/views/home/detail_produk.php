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

						<div> <a href="#"><img src="<?php echo base_url('assets/img/').$kopi['foto'] ?>" ></a></div>
					</div> <!-- slider-product.// -->
				</article> <!-- gallery-wrap .end// -->
			</aside>
			<aside class="col-sm-6">
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
						<dt>Toko</dt>
						<dd>Alamat toko</dd>
					</dl>  <!-- item-property-hor .// -->

					<hr>
					<dt class="mb-2">Jumlah</dt>
					<div class="container">	 
						<div class="input-group spinner">
							<input type="text" class="form-control" value="1">
							<div class="input-group-btn-vertical">
								<button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
								<button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
							</div>
						</div>
					</div>
					<hr>
					<a href="<?php echo base_url('shopping/checkout/') ?>" class="btn btn btn-primary text-uppercase mt-3"> Buy now </a>
					<a href="<?php echo base_url('shopping/Keranjang/'); echo $_SESSION['id_user']; ?>" class="btn btn btn-outline-primary text-uppercase mt-3"> Add to cart </a>
				</article> <!-- card-body.// -->
			</aside> <!-- col.// -->
		</div> <!-- row.// -->
	</div> <!-- card.// -->
<?php endforeach; ?>

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