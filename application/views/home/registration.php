
<body class="bg1">
	<div class="container bg-transparent">
		<div class="row bg-transparent">
			<div class="col-sm-9 col-md-7 col-lg-5 mx-auto bg-transparent">
				<div class="card card-signin my-5 bg-transparent">
					<div class="card-body bg-transparent">
						<h5 class="card-title text-center ">Registration</h5>
						<form class="form-signin" method="POST" action="<?php base_url(); ?>Registration">
							<div class="form-label-group">
								<input type="text" id="inputName" class="form-control" placeholder="Username" name="username" required autofocus>
								<label for="inputName">Username</label>
							</div>
							<div class="form-label-group">
								<input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
								<label for="inputPassword">Password</label>
							</div>
							<div class="form-label-group">
								<input type="text" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
								<label for="inputEmail">Email address</label>
							</div>
							<div class="form-label-group">
								<input type="text" id="inputNama" class="form-control" placeholder="Nama" name="nama" required autofocus>
								<label for="inputNama">Nama</label>
							</div>
							<div class="row"> 
								<label class="label mr-5 ml-4">Gender :</label>

								<div class="custom-control custom-radio custom-control-inline ml-5 mb-3">
									<input type="radio" class="custom-control-input" id="customRadio" name="gender" value="laki-laki">
									<label class="custom-control-label" for="customRadio">Laki-laki</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="customRadio2" name="gender" value="perempuan" required="">
									<label class="custom-control-label" for="customRadio2">Perempuan</label>
								</div>  

							</div>
							<div class="container">
				                <?php if ($this->session->flashdata('registrasi')) : ?>
				                <div class="alert alert-success alert-dismissible fade show" role="alert">
				                    <?php echo $this->session->flashdata('registrasi'); ?>
				                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                        <span aria-hidden="true">&times;</span>
				                    </button>
				                </div>
				                <?php endif; ?> 
				            </div>
							<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="regist">Register</button>
							<!-- <a href="<?= base_url(); ?>Timeline" class="btn btn-lg btn-primary btn-block text-uppercase ">Sign in</a> -->
							
							<p class="mt-4 text-center">sudah punya akun?</p>
							<a class="btn btn-lg btn-danger btn-block text-uppercase" href="<?= base_url(); ?>home" name="login">Sign in</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>
</html>