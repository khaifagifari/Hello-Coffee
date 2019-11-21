<section class="padding-lg" style="background: url('https://images.unsplash.com/photo-1447933601403-0c6688de566e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=956&q=80');">
	<div class="container emp-profile text-dark">
		 <div class="card card-signin my-5 bg-transparent">
		 	<h5 class="card-title text-center font-weight-bold")">EDIT DATA AKUN</h5>
			<form class="form-signin" method="POST" action="<?php echo base_url('akun/editAkun')?>">
				<div class="form-label-group">
					<input type="text" id="nama" name="nama" class="form-control" value="<?php echo $_SESSION['nama']; ?>" required>
					<label for="nama" class="font-weight-bold">Nama</label>
				</div>
				<div class="form-label-group">
					<input type="email" id="email" name="email" class="form-control" value="<?php echo $_SESSION['email']; ?>">
					<label for="email" class="font-weight-bold">Email</label>
				</div>
				<div class="row">
					<label class="label mr-5 ml-4">Gender :</label>
					<div class="custom-control custom-radio custom-control-inline ml-5 mb-3">
						<input type="radio" class="custom-control-input" id="customRadio" name="gender" value="Laki-laki">
						<label class="custom-control-label" for="customRadio">Laki-laki</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" class="custom-control-input" id="customRadio2" name="gender" value="Perempuan" required="">
						<label class="custom-control-label" for="customRadio2">Perempuan</label>
					</div>
				</div>
				<button class="btn btn-block btn-primary" onclick="return confirm('Apakah anda yakin mengubah data ini?');">Edit Akun</button>
				<a href="<?php echo base_url('Akun/editPassword')?>" class="btn btn-block btn-secondary	">Edit Password</a>
				<a href="<?php echo base_url('Akun/pengaturanAkun/').$_SESSION['id_user'] ?>" class="btn btn-block btn-danger">Kembali</a>
			</form>
		</div>
	</div>
</section>