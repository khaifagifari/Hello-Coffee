
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html><html lang='en' class=''>
<head>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script><script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/nelsonleite/pen/RaGwba?depth=everything&order=popularity&page=4&q=product&show_forks=false" />
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	<style class="cp-pen-styles">.product-description {
		transform: translate3d(0, 0, 0);
		transform-style: preserve-3d;
		perspective: 1000;
		backface-visibility: hidden;
	}

	body {
		color: #212121;
	}

	.container {
		padding-top: 25px;
		padding-bottom: 25px;
	}

	img {
		max-width: 100%;
	}

	hr {
		border-color: #e5e5e5;
		margin: 15px 0;
	}

	.secondary-text {
		color: #b6b6b6;
	}

	.list-inline {
		margin: 0;
	}
	.list-inline li {
		padding: 0;
	}

	.card-wrapper {
		position: relative;
		width: 100%;
		height: 390px;
		border: 1px solid #e5e5e5;
		border-bottom-width: 2px;
		overflow: hidden;
		margin-bottom: 30px;
	}
	.card-wrapper:after {
		content: "";
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		opacity: 0;
		box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
		transition: opacity 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
	}
	.card-wrapper:hover:after {
		opacity: 1;
	}
	.card-wrapper:hover .image-holder:before {
		opacity: .75;
	}
	.card-wrapper:hover .image-holder:after {
		opacity: 1;
		transform: translate(-50%, -50%);
	}
	.card-wrapper:hover .image-holder--original {
		transform: translateY(-15px);
	}
	.card-wrapper:hover .product-description {
		height: 205px;
	}
	@media (min-width: 768px) {
		.card-wrapper:hover .product-description {
			height: 185px;
		}
	}

	.image-holder {
		display: block;
		position: relative;
		width: 100%;
		height: 310px;
		background-color: #ffffff;
		z-index: 1;
	}
	@media (min-width: 768px) {
		.image-holder {
			height: 325px;
		}
	}
	.image-holder:before {
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: #4CAF50;
		opacity: 0;
		z-index: 5;
		transition: opacity 0.6s;
	}
	.image-holder:after {
		content: '+';
		font-family: 'Raleway', sans-serif;
		font-size: 70px;
		color: #4CAF50;
		text-align: center;
		position: absolute;
		top: 92.5px;
		left: 50%;
		width: 75px;
		height: 75px;
		line-height: 75px;
		background-color: #ffffff;
		opacity: 0;
		border-radius: 50%;
		z-index: 10;
		transform: translate(-50%, 100%);
		box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
		transition: all 0.4s ease-out;
	}
	@media (min-width: 768px) {
		.image-holder:after {
			top: 107.5px;
		}
	}
	.image-holder .image-holder__link {
		display: block;
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: 15;
	}
	.image-holder .image-holder--original {
		transition: transform 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
	}

	.image-liquid {
		width: 100%;
		height: 325px;
		background-size: cover;
		background-position: center center;
	}

	.product-description {
		position: absolute;
		left: 0;
		bottom: 0;
		width: 100%;
		height: 80px;
		padding: 10px 15px;
		overflow: hidden;
		background-color: #fafafa;
		border-top: 1px solid #e5e5e5;
		transition: height 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
		z-index: 2;
	}
	@media (min-width: 768px) {
		.product-description {
			height: 65px;
		}
	}
	.product-description p {
		margin: 0 0 5px;
	}
	.product-description .product-description__title {
		font-family: 'Raleway', sans-serif;
		position: relative;
		white-space: nowrap;
		overflow: hidden;
		margin: 0;
		font-size: 18px;
		line-height: 1.25;
	}
	.product-description .product-description__title:after {
		content: '';
		width: 60px;
		height: 100%;
		position: absolute;
		top: 0;
		right: 0;
		background: linear-gradient(to right, rgba(255, 255, 255, 0), #fafafa);
	}
	.product-description .product-description__title a {
		text-decoration: none;
		color: inherit;
	}
	.product-description .product-description__category {
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
	}
	.product-description .product-description__price {
		color: #4CAF50;
		text-align: left;
		font-weight: bold;
		letter-spacing: 0.06em;
	}
	@media (min-width: 768px) {
		.product-description .product-description__price {
			text-align: right;
		}
	}
	.product-description .sizes-wrapper {
		margin-bottom: 15px;
	}
	.product-description .color-list {
		font-size: 0;
	}
	.product-description .color-list__item {
		width: 25px;
		height: 10px;
		position: relative;
		z-index: 1;
		transition: all .2s;
	}
	.product-description .color-list__item:hover {
		width: 40px;
	}
	.product-description .color-list__item--red {
		background-color: #F44336;
	}
	.product-description .color-list__item--blue {
		background-color: #448AFF;
	}
	.product-description .color-list__item--green {
		background-color: #CDDC39;
	}
	.product-description .color-list__item--orange {
		background-color: #FF9800;
	}
	.product-description .color-list__item--purple {
		background-color: #673AB7;
	}
</style></head><body>
<!--
Inspired in this dribbble
https://dribbble.com/shots/986548-Product-Catalog
-->

<div class="container">
	<div class="row">

		<div class="col-xs-12 col-sm-6 col-md-4">
			<article class="card-wrapper">
				<div class="image-holder">
					<a href="http://google.com" class="image-holder__link"></a>
					<div class="image-liquid image-holder--original" style="background-image: url('https://images.unsplash.com/photo-1447347974530-d7c185559683?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1274&q=80')">
					</div>
				</div>

				<div class="product-description">
					<!-- title -->
					<h1 class="product-description__title">
						<a href="#">						
							Adidas Originals
						</a>
					</h1>

					<!-- category and price -->
					<div class="row">
						<div class="col-xs-12 col-sm-8 product-description__category secondary-text">
							Men's running shirt
						</div>
						<div class="col-xs-12 col-sm-4 product-description__price">
							€ 499
						</div>
					</div>

					<!-- divider -->
					<hr />

					<!-- sizes -->
					<div class="sizes-wrapper">
						<b>Sizes</b>
						<br />
						<span class="secondary-text text-uppercase">
							<ul class="list-inline">
								<li>xs,</li>								
								<li>s,</li>								
								<li>sm,</li>								
								<li>m,</li>
								<li>l,</li>								
								<li>xl,</li>								
								<li>xxl</li>								
							</ul>
						</span>
					</div>

					<!-- colors -->
					<div class="color-wrapper">
						<b>Colors</b>
						<br />
						<ul class="list-inline color-list">
							<li class="color-list__item color-list__item--red"></li>
							<li class="color-list__item color-list__item--blue"></li>
							<li class="color-list__item color-list__item--green"></li>
							<li class="color-list__item color-list__item--orange"></li>
							<li class="color-list__item color-list__item--purple"></li>
						</ul>
					</div>
				</div>

			</article>
		</div>
		
		<div class="col-xs-12 col-sm-6 col-md-4">
			<article class="card-wrapper">
				<div class="image-holder">
					<a href="#" class="image-holder__link"></a>
					<div class="image-liquid image-holder--original" style="background-image: url('https://images.unsplash.com/photo-1497636577773-f1231844b336?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80')">
					</div>
				</div>

				<div class="product-description">
					<!-- title -->
					<h1 class="product-description__title">
						<a href="#">						
							Adidas Originals
						</a>
					</h1>

					<!-- category and price -->
					<div class="row">
						<div class="col-sm-8 product-description__category secondary-text">
							Men's running shirt
						</div>
						<div class="col-sm-4 product-description__price text-right">
							€ 499
						</div>
					</div>

					<!-- divider -->
					<hr />

					<!-- sizes -->
					<div class="sizes-wrapper">
						<b>Sizes</b>
						<br />
						<span class="secondary-text text-uppercase">
							<ul class="list-inline">
								<li>xs,</li>								
								<li>s,</li>								
								<li>sm,</li>								
								<li>m,</li>
								<li>l,</li>								
								<li>xl,</li>								
								<li>xxl</li>								
							</ul>
						</span>
					</div>

					<!-- colors -->
					<div class="color-wrapper">
						<b>Colors</b>
						<br />
						<ul class="list-inline color-list">
							<li class="color-list__item color-list__item--red"></li>
							<li class="color-list__item color-list__item--blue"></li>
							<li class="color-list__item color-list__item--green"></li>
							<li class="color-list__item color-list__item--orange"></li>
							<li class="color-list__item color-list__item--purple"></li>
						</ul>
					</div>
				</div>

			</article>
		</div>
		
		<div class="col-xs-12 col-sm-6 col-md-4">
			<article class="card-wrapper">
				<div class="image-holder">
					<a href="#" class="image-holder__link"></a>
					<div class="image-liquid image-holder--original" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/b/b8/Columbia_Sportswear_Jacket.jpg')">
					</div>
				</div>

				<div class="product-description">
					<!-- title -->
					<h1 class="product-description__title">
						<a href="#">						
							Adidas Originals
						</a>
					</h1>

					<!-- category and price -->
					<div class="row">
						<div class="col-sm-8 product-description__category secondary-text">
							Men's running shirt
						</div>
						<div class="col-sm-4 product-description__price text-right">
							€ 499
						</div>
					</div>

					<!-- divider -->
					<hr />

					<!-- sizes -->
					<div class="sizes-wrapper">
						<b>Sizes</b>
						<br />
						<span class="secondary-text text-uppercase">
							<ul class="list-inline">
								<li>xs,</li>								
								<li>s,</li>								
								<li>sm,</li>								
								<li>m,</li>
								<li>l,</li>								
								<li>xl,</li>								
								<li>xxl</li>								
							</ul>
						</span>
					</div>

					<!-- colors -->
					<div class="color-wrapper">
						<b>Colors</b>
						<br />
						<ul class="list-inline color-list">
							<li class="color-list__item color-list__item--red"></li>
							<li class="color-list__item color-list__item--blue"></li>
							<li class="color-list__item color-list__item--green"></li>
							<li class="color-list__item color-list__item--orange"></li>
							<li class="color-list__item color-list__item--purple"></li>
						</ul>
					</div>
				</div>

			</article>
		</div>
		
		<div class="col-xs-12 col-sm-6 col-md-4">
			<article class="card-wrapper">
				<div class="image-holder">
					<a href="#" class="image-holder__link"></a>
					<div class="image-liquid image-holder--original" style="background-image: url('http://www.publicdomainpictures.net/pictures/20000/nahled/red-shoes-isolated.jpg')">
					</div>
				</div>

				<div class="product-description">
					<!-- title -->
					<h1 class="product-description__title">
						<a href="#">						
							Adidas Originals
						</a>
					</h1>

					<!-- category and price -->
					<div class="row">
						<div class="col-sm-8 product-description__category secondary-text">
							Men's running shirt
						</div>
						<div class="col-sm-4 product-description__price text-right">
							€ 499
						</div>
					</div>

				
				</div>

			</article>
		</div>

	</div>
</div>

</body></html>