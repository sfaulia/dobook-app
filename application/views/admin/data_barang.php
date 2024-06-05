<div class= "container-fluid">
	<button class="btn btn-sm btn-primary mb-3"data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i>Tambah Donee</button>
	
	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>KETERANGAN</th>
			<th>NAMA TEMPAT</th>
			<th>KATEGORI</th>
			<th>DETAIL ALAMAT</th>
			<th>KETUA PENGURUS</th>
			<th>NO. TELEPON</th>
			<th>TOTAL BUKU</th>
			<th colspan="3">AKSI</th>
		</tr>
		
		<?php
		$id=1;
		Foreach($barang as $brg): ?>
		
		<tr>
			<td><?php echo $id++ ?></td>
			<td><?php echo $brg->detail ?></td>
			<td><?php echo $brg->name ?></td>
			<td><?php echo $brg->category ?></td>
			<td><?php echo $brg->address ?></td>
			<td><?php echo $brg->chief ?></td>
			<td><?php echo $brg->phone ?></td>
			<td><?php echo $brg->price ?></td>
			<td> <?php echo anchor('admin/data_barang/detail/' .$brg->id, 
			'<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>')?></td>
			<td><?php echo anchor('admin/data_barang/edit/' .$brg->id,
			'<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
			<td><?php echo anchor ('admin/data_barang/hapus/'.$brg->id, 
			'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
		<?php endforeach; ?>		

		</tr>
	</table>
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
        <form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi';?>" method="post"
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
        <button type="submit" class="btn btn-primary">Save Changes</button>
      </div>
	  
	  </form>
	  
    </div>
  </div>
</div>
</div>