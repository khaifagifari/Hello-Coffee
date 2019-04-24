<section id="detail" style="background: url('https://images.unsplash.com/photo-1447933601403-0c6688de566e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=956&q=80');
height: 100%;">
<div class="container">
	<br> 
	<br> 
	<br> 
	<br> 

	<?php foreach ($daftar_toko as $toko) : {
		# code...
	} ?>
	<div class="card text-dark mb-5">
		<div class="row">
			<aside class="col-sm-6 " style="padding: 30px 40px 30px 40px">
				<article class="gallery-wrap"> 
					<div class="img-big-wrap">

						<div> <a href="#"><img src="<?php echo base_url('assets/img/').$toko['foto'] ?>" ></a></div>
					</div> <!-- slider-product.// -->
				</article> <!-- gallery-wrap .end// -->
			</aside>
			<aside class="col-sm-6">
				<article class="card-body px-5 text-justify" style="padding-top: 30px;">
					<h3 class="title mb-3"><?php echo $toko['nama_toko'] ?></h3>

					<p class="price-detail-wrap"> 
<!-- 						<span class="price h3 text-warning"> 
							<span class="currency">RP</span><span class="num"> --><!-- <?php echo $kopi['harga']?> --><!-- </span>
						</span> 
						<span>/ pcs</span>  -->
					</p> <!-- price-detail-wrap .// -->
					<hr>
					<dl class="item-property">
						<dt>Description</dt>
						<dd><p> <?php echo $toko['Desc'] ?> </p></dd>
					</dl>
					<hr>
					<dl class="param param-feature">
						<dt>Alamat Toko: </dt>
						<dd><?php echo $toko['alamat'] ?></dd>
					</dl>  <!-- item-property-hor .// -->
					<dl class="param param-feature">
						<dt>Jam Operasional: </dt>
						<dd><?php echo $toko['Jam operasional'] ?></dd>
					</dl> 
					</article>
					<!-- <dt class="mb-2">Jumlah</dt>
					<div class="container">	 
						<div class="input-group spinner">
							<input type="text" class="form-control" value="1">
							<div class="input-group-btn-vertical">
								<button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
								<button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
							</div>
						</div>
					</div> -->
					
					<a href="<?php echo base_url('timeline/') ?>" class=" float-right btn btn btn-primary text-uppercase mr-5"> Kembali </a>

				</article> <!-- card-body.// -->
			</aside> <!-- col.// -->
		</div> <!-- row.// -->
	<?php endforeach; ?>
	
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