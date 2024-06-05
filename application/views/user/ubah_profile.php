<!-- Begin Page Content -->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-9">
			<form method="post" action="<?php echo base_url() ?>user/index">

			<?= form_open_multipart('user/ubah_profile'); ?>


			<div class="form-group row">
				<label for="email" class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"
id="email" name="email" value="<?= $users['email']; ?>" readonly>
				</div>
			</div>

			<div class="form-group row">

				<label for="username" class="col-sm-2 col-form-label">Username</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"
id="username" name="username" value="<?= $users['username']; ?>" readonly>
				</div>

			</div>

		<div class="form-group row">
			<label for="nama" class="col-sm-2 col-form-label">Full Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control"
id="nama" name="nama" value="<?= $users['nama']; ?>">
				<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
			</div>
		</div>

		<div class="form-group row">
			 <div class="col-sm-2">Picture</div>
			 <div class="col-sm-10">
				<div class="row">
					<div class="col-sm-3">
						<img src="<?=base_url('assets/img/') .$users['images']; ?>" class="img-thumbnail">
					</div>
					
						<div class="col-sm-9">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="images" name="images">
								<label class="custom-file-label" for="images">Choose file</label>
							</div>
						</div>
				</div>
			</div> 
		</div>
			<div class="form-group row justify-content-end">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Update</button>
					<?php echo anchor('user/index/','<div class="btn btn-dark">Back</div>')?>

				</div>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content --