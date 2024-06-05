<div class= "container-fluid">
	
	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>NAMA TEMPAT</th>
			<th>ALAMAT</th>
			<th>DETAIL ALAMAT</th>
			<th>KETERANGAN</th>
			<th>KETUA PENGURUS</th>
			<th>NO. TELEPON</th>
			<th colspan="3">AKSI</th>
		</tr>
		
		<?php
		$id=1;
		Foreach($tempat as $tpt): ?>
		
		<tr>
			<td><?php echo $id++ ?></td>
			<td><?php echo $tpt->nama_tempat ?></td>
			<td><?php echo $tpt->alamat ?></td>
			<td><?php echo $tpt->detail_alamat ?></td>
			<td><?php echo $tpt->keterangan ?></td>
			<td><?php echo $tpt->ketua_pengurus ?></td>
			<td><?php echo $tpt->no_telepon ?></td>

			<td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
			
			<td><?php echo anchor('admin/data_donee/edit/' .$tpt->id_tempat, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
			
			<td><?php echo anchor('admin/data_donee/hapus/' .$tpt->id_tempat, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>

			</tr>
		<?php endforeach; ?>		

	</table>
</div>

