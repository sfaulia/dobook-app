<div class= "container-fluid">
	<button class="btn btn-sm btn-primary mb-3"data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i>Tambah Donee</button>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" 
aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DONEE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'donee/tambah_aksi';?>" method="post"
		enctype="multipart/form-data">
		
			<div class="from-group">
				<label>Keterangan</label>
				<input type="text" name="detail" class= "form-control">
			</div>

			<div class="from-group">
				<label>Nama Tempat</label>
				<input type="text" name="name" class= "form-control">
			</div>
			
			<div class="from-group">
				<label>Kategori</label>
				<select class="form-control" name="category">
					<option>Jawa</option>
					<option>Kalimantan</option>
					<option>Papua</option>
					<option>Sulawesi</option>
					<option>Sumatra</option>
				</select>
			</div>
			
			<div class="from-group">
				<label>Detail Alamat</label>
				<input type="text" name="address" class= "form-control">
			</div>

			<div class="from-group">
				<label>Ketua Pengurus</label>
				<input type="text" name="chief" class= "form-control">
			</div>

			<div class="from-group">
				<label>Nomer Telepon</label>
				<input type="text" name="phone" class= "form-control">
			</div>

			<div class="from-group">
				<label>Buku yang Dibutuhkan</label>
				<input type="text" name="price" class= "form-control">
			</div>
			
			<div class="from-group">
				<label>Gambar Tempat</label>
				<input type="file" name="image" class= "form-control">
			</div>
			
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
	  
	  </form>
	  
    </div>
  </div>
</div>
</div>