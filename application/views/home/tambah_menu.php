<section class="padding-lg" style="background: url('https://images.unsplash.com/photo-1447933601403-0c6688de566e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=956&q=80');">
	<div class="container">
		<div class="row mt-3 col card text-dark">
			<div class="card-header text-center">
				Tambah Menu
			</div>
			<div class="card-body">
				<form class="form-signin" method="POST" action="<?php echo base_url('menu/tambahMenu') ?>">
					<div class="form-label-group">
	                    <input type="text" class="form-control" id="nama_menu" name="nama_menu">
						<label for="nama_menu">Nama Menu</label>
	                    <small class="form-text text-danger"><?= form_error('nama_menu') ?></small>
					</div>
					<div class="form-label-group">
						<input type="text" name="harga" id="harga" class="form-control">
						<label for="harga">Harga</label>
						<small class="form-text text-danger"><?= form_error('harga')?></small>
					</div>
					<div class="form-label-group">
						<input type="text" name="deskripsi" id="deskripsi" class="form-control">
						<label for="deskripsi">Deskripsi</label>
						<small class="form-text text-danger"><?= form_error('deskripsi')?></small>
					</div>
					<div class="form-label-group">
						<input type="text" name="jenis" id="jenis" class="form-control">
						<label for="jenis">Jenis</label>
						<small class="form-text text-danger"><?= form_error('jenis')?></small>
					</div>
					<button type="submit" name="tambah" class="btn btn-block btn-primary" onclick="return confirm('Apakah data yang dimasukan sudah benar?')";">Tambah Menu</button>
					<a href="<?php echo base_url('timeline/toko') ?>" class="btn btn-block btn-danger pt-3" onclick="return confirm('Apakah anda serius? Data yang telah anda masukan akan hilang!');">Kembali</a>
				</form>
			</div>
		</div>
	</div>
</section>