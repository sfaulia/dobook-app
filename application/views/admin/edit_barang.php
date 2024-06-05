<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA DONEE</h3>
	
	<?php foreach($barang as $brg): ?>
	
	<form method= "post" action="<?php echo base_url(). 'admin/data_barang/update' ?>">
		
		<div class="for-group">
			<label>Keterangan</label>
			<input type="text" name="detail" class="form-control"
			value="<?php echo $brg->detail ?>">
		</div>

		<div class="for-group">
			<label>Nama Tempat</label>
			<input type="text" name="name" class="form-control"
			value="<?php echo $brg->name ?>">
		</div>
		
		<div class="for-group">
			<label>Kategori</label>
			<input type="hidden" name="id" class="form-control"
			value="<?php echo $brg->id ?>">
			<input type="text" name="category" class="form-control"
			value="<?php echo $brg->category ?>">
		</div>

		<div class="for-group">
			<label>Detail Alamat</label>
			<input type="text" name="address" class="form-control"
			value="<?php echo $brg->address ?>">
		</div>

		<div class="for-group">
			<label>Ketua Pengurus</label>
			<input type="text" name="chief" class="form-control"
			value="<?php echo $brg->chief ?>">
		</div>

		<div class="for-group">
			<label>Nomer Telepon</label>
			<input type="text" name="phone" class="form-control"
			value="<?php echo $brg->phone ?>">
		</div>
		
		<div class="for-group">
			<label>Buku yang Dibutuhkan</label>
			<input type="text" name="price" class="form-control"
			value="<?php echo $brg->price ?>">
		</div>
		
		<button type="submit" class="btn btn-primary btn-sm mt-3"> Save</button>
		
	</form>
		
	<?php endforeach; ?>
	
</div>
</div>