<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">

			  	<div class="card-header">
			    	Form Tambah Data Barang
					  </div>
					  <div class="card-body">
					  	<!-- <?php if(validation_errors() ): ?>
					  		<div class="alert alert-danger" role="alert">
							  <?= validation_errors(); ?>
							</div>
					  	<?php endif; ?> -->
					  	
					  	<form action="" method="post">
							<div class="form-group">
				    		<label for="nama">Nama</label>
				    		<input type="text" class="form-control" id="nama" name="nama">
				    		<small class="form-text text-danger"><?= form_error('nama'); ?></small>
							</div>

							<div class="form-group">
				    		<label for="harga">Harga</label>
				    		<input type="text" class="form-control" id="harga" name="harga">
				    		<small class="form-text text-danger"><?= form_error('harga'); ?></small>
							</div>

							<div class="form-group">
				    		<label for="warna">Warna</label>
				    		<input type="text" class="form-control" id="warna" name="warna">
				    		<small class="form-text text-danger"><?= form_error('warna'); ?></small>
							</div>

							<div class="form-group">
							    <label for="jenis">Jenis</label>
							    <select class="form-control" id="jenis" name="jenis">
							      <option value="Cotton">Cotton</option>
							      <option value="Spandex">Spandex</option>
							      <option value="Polyester">Polyester</option>
							      <option value="Hyget">Hyget</option>
							      <option value="Rajut">Rajut</option>
							    </select>
							</div>

							<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>	
				
						</form>
					    
					  </div>
				</div>


			
		</div>
	</div>
</div>