<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> EDIT DATA DONEE</h3>

	<?php foreach($tempat as $tpt) : ?>

		<form method="post" action="<?php echo base_url().'admin/data_donee/update' ?>">

			<div class="for-group">
				<label>Nama Tempat</label>
				<input type="text" name="nama_tempat" class="form-control" value="<?php echo $tpt->nama_tempat ?>">
			</div>

			<div class="for-group">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control" value="<?php echo $tpt->alamat ?>">
			</div>

			<div class="for-group">
				<label>Detail Alamat</label>
				<input type="text" name="detail_alamat" class="form-control" value="<?php echo $tpt->detail_alamat ?>">
			</div>

			<div class="for-group">
				<label>Keterangan</label>
				<input type="hidden" name="id_tempat" class="form-control" value="<?php echo $tpt->id_tempat ?>">
				<input type="text" name="keterangan" class="form-control" value="<?php echo $tpt->keterangan ?>">
			</div>
			
			<div class="for-group">
				<label>Ketua Pengurus</label>
				<input type="text" name="ketua_pengurus" class="form-control" value="<?php echo $tpt->ketua_pengurus ?>">
			</div>

			<div class="for-group">
				<label>No Telepon</label>
				<input type="text" name="no_telepon" class="form-control" value="<?php echo $tpt->no_telepon ?>">
			</div>

			<button type="submit" class="btn btn-primary btn-sm mt-3"> Simpan</button>
		</form>

	<?php endforeach; ?>
</div>
