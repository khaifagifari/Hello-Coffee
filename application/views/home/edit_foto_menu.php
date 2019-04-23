<section class="padding-lg" style="background: url('https://images.unsplash.com/photo-1447933601403-0c6688de566e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=956&q=80');">
	<div class="container">
		<div class="row mt-3 pb-3 col card text-dark">
			<div class="file-upload text-center pt-5">
				<div class="card mb-3 mx-auto" style="width : 25em; box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);">
					<img class="card-img-top mx-auto" style="border-radius: 50%; object-fit: cover; width:230px; height: 230px;"src="<?php echo site_url('assets/img/'.$menu[0]['foto']) ?>" alt="Card image cap">
				</div>
				<?php echo $error;?>
				<?php echo form_open_multipart('menu/editFoto/'.$_SESSION['id_menu']);?>
			    <input class="btn" type="file" name="userfile" size="20"/>
			    <br/><br/>
			    <button type="submit" class="btn btn-primary float-right text-light" value="upload"/>Upload</button>
			    <a href="<?php echo base_url('menu/editMenu/'); echo $_SESSION['id_menu'];?>" class="btn btn-danger float-right mr-3">Kembali</a>
			</div>
		</div>
	</div>
</section>