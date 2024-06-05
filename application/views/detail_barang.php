<div class="container-fluid">

	<div class="card">
		<h5 class="card-header">Detail Donee</h5>
		<div class="card-body">
			
			<?php foreach($barang as $brg): ?>

			<div class="row">
				<div class="col-md-4">
						<img src="<?php echo base_url().'/uploads
							/'.$brg->image ?>" class="card-img-top">
				</div>
				<div class="col-md-8"> 
					<table class="table">
					
						
						<tr>
							<td>Keterangan</td>
							<td><strong><?php echo $brg->detail ?></strong></td>
						</tr>
						<tr>
							<td>Nama Tempat</td>
							<td><strong><?php echo $brg->name ?></strong></td>
						</tr>
						<tr>
							<td>Kategori</td>
							<td><strong><?php echo $brg->category ?></strong></td>
						</tr>
						<tr>
							<td>Detail Alamat</td>
							<td><strong><?php echo $brg->address ?></strong></td>
						</tr>
						<tr>
							<td>Ketua Pengurus</td>
							<td><strong><?php echo $brg->chief ?></strong></td>
						</tr>
						<tr>
							<td>Nomer Telepon</td>
							<td><strong><?php echo $brg->phone ?></strong></td>
						</tr>
						<tr>
							<td>Buku yang Dibutuhkan</td>
							<td><strong><div class="btn btn-sm btn-success"> <?php echo number_format($brg->price, 0,',','.') ?></div></strong></td>
						</tr>
				
					</table>
					<?php echo anchor('dashboard/Add_to_donation/'.$brg->id,'<div class="btn btn-sm btn-primary">Add to donation</div>')?>
					<?php echo anchor('welcome/index/','<div class="btn btn-sm btn-danger">Back</div>')?>

				</div>	

			
			</div>
		<?php endforeach; ?>
		</div>
	</div>
</div>
</div>