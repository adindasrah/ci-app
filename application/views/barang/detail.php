<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
			  <div class="card-header">
			    Detail Data Barang
			  </div>
			  <div class="card-body">
			    <h5 class="card-title"><?=  $barang['nama']; ?></h5>
			    <h6 class="card-subtitle mb-2 text-muted"><?=  $barang['harga']; ?></h6>
			    <p class="card-text"><?=  $barang['warna']; ?></p>
			    <p class="card-text"><?=  $barang['jenis']; ?></p>
			    <a href="<?= base_url(); ?>barang" class="btn btn-primary">Kembali</a>
			  </div>
			</div>
			
		</div>
	</div>
</div>