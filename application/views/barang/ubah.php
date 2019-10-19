<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">

			  	<div class="card-header">
			    	Form Ubah Data Barang
					  </div>
					  <div class="card-body">
					  	<!-- <?php if(validation_errors() ): ?>
					  		<div class="alert alert-danger" role="alert">
							  <?= validation_errors(); ?>
							</div>
					  	<?php endif; ?> -->
					  	
					  	<form action="" method="post">
					  		<input type="hidden" name="id" value="<?= $barang['id']; ?>">
							<div class="form-group">
				    		<label for="nama">Nama</label>
				    		<input type="text" class="form-control" id="nama" name="nama" value="<?= $barang['nama']; ?>">
				    		<small class="form-text text-danger"><?= form_error('nama'); ?></small>
							</div>

							<div class="form-group">
				    		<label for="harga">Harga</label>
				    		<input type="text" class="form-control" id="harga" name="harga" value="<?= $barang['harga']; ?>">
				    		<small class="form-text text-danger"><?= form_error('harga'); ?></small>
							</div>

							<div class="form-group">
				    		<label for="warna">Warna</label>
				    		<input type="text" class="form-control" id="warna" name="warna" value="<?= $barang['warna']; ?>">
				    		<small class="form-text text-danger"><?= form_error('warna'); ?></small>
							</div>

							<div class="form-group">
							    <label for="jenis">Jenis</label>
							    <select class="form-control" id="jenis" name="jenis">
							    <?php foreach($jenis as $j): ?>
							    	<?php if($j == $barang['jenis']): ?>
							      		<option value="<?= $j; ?>" selected><?= $j; ?></option>
							      	<?php else : ?>
							      		<option value="<?= $j; ?>"><?= $j; ?></option>
							      	<?php endif; ?>
							  	<?php endforeach; ?>
							    </select>
							</div>

							<button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>	
				
						</form>
					    
					  </div>
				</div>


			
		</div>
	</div>
</div>