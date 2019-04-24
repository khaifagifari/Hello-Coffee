<section class="padding-lg" style="background: url('https://images.unsplash.com/photo-1447933601403-0c6688de566e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=956&q=80');">
	<div class="container">
		<div class="row mt-3 col card text-dark">
			<div class="card-header text-center">
				Edit Menu <?php echo $menu[0]['nama_menu']?>
			</div>
			<div class="card-body">
				<form class="form-signin" method="POST" action="<?php echo base_url('menu/editMenu/').$menu[0]['id_menu']?>">
					<div class="form-label-group">
						<input type="text" name="nama_menu" id="nama_menu" class="form-control" value="<?php echo $menu[0]['nama_menu'] ?>">
						<label for="nama_menu">Nama Menu</label>
						<small class="form-text text-danger"><?= form_error('nama_menu') ?></small>
					</div>
					<div class="form-label-group">
						<input type="text" name="harga" id="harga" class="form-control" value="<?php echo $menu[0]['harga'] ?>">
						<label for="harga">Harga</label>
						<small class="form-text text-danger"><?= form_error('harga') ?></small>
					</div>
					<div class="form-label-group">
						<input type="text" name="deskripsi" id="deskripsi" class="form-control" value="<?php echo $menu[0]['deskripsi'] ?>">
						<label for="deskripsi">Deskripsi</label>
						<small class="form-text text-danger"><?= form_error('deskripsi') ?></small>
					</div>
					<div class="form-label-group">
						<input type="text" name="jenis" id="jenis" class="form-control" value="<?php echo $menu[0]['jenis'] ?>">
						<label for="jenis">Jenis</label>
						<small class="form-text text-danger"><?= form_error('jenis') ?></small>
					</div>
					<button type="submit" class="btn btn-block btn-primary" onclick="return confirm('Apakah data yang dimasukan sudah benar?')";">Edit Menu</button>
					<a href="<?php echo base_url('menu/editFoto/'); echo $_SESSION['id_menu']; ?>" class="btn btn-block btn-secondary">Edit Foto</a>
					<a href="<?php echo base_url('timeline/toko') ?>" class="btn btn-block btn-danger pt-3" onclick="return confirm('Apakah anda serius? Data yang telah anda masukan akan hilang!');">Kembali</a>
				</form>
			</div>
		</div>
	</div>
</section>