<section class="padding-lg" style="background: url('https://images.unsplash.com/photo-1447933601403-0c6688de566e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=956&q=80');">
	<div class="container emp-profile text-dark">
		<div class="card card-signin my-5">
			<h5 class="card-title text-center font-weight-bold">EDIT PASSWORD</h5>
			<form class="form-signin" method="POST" action="">
				<div class="form-label-group">
					<input type="password" name="pwlama" id="pwlama" class="form-control" required>
					<label for="pwlama" class="font-weight-bold">Password lama</label>
				</div>
				<div class="form-label-group">
					<input type="password" name="pwbaru" id="pwbaru" class="form-control" required>
					<label for="pwbaru" class="font-weight-bold">Password baru</label>
				</div>
				<div class="form-label-group">
					<input type="password" name="pwconf" id="pwconf" class="form-control" required>
					<label for="pwconf" class="font-weight-bold">Password baru confirm</label>
				</div>
				<button class="btn btn-block btn-primary" onclick="return confirm('Apakah anda sudah yakin dengan password baru anda?');">Ubah Password</button>
				<a class="btn btn-block btn-danger" href="<?php echo base_url('Akun/editAkun') ?>">Kembali</a>
			</form>
		</div>
	</div>
</section>