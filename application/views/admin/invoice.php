<div class="container-fluid">
	<h4>Invoice Donation</h4>
	
	<table class="table table-bordered table-hover tabel-striped">
		<tr>
			<th>Id Invoice</th>
			<th>Nama Pemesan</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>No. Telepon</th>
			<th>Jasa Pengiriman</th>
			<th>Total Buku </th>
			<th>Catatan</th>
			<th>Tanggal Donasi</th>
			<th>Batas Pengiriman</th>
			<th>Aksi</th>	
		</tr>
		
		<?php foreach ($invoice as $inv): ?>
		<tr>
			<td><?php echo $inv->id ?></td>
			<td><?php echo $inv->nama ?></td>
			<td><?php echo $inv->alamat ?></td>
			<td><?php echo $inv->email ?></td>
			<td><?php echo $inv->no_telepon ?></td>
			<td><?php echo $inv->pengiriman ?></td>
			<td><?php echo $inv->total_buku ?></td>
			<td><?php echo $inv->catatan ?></td>
			<td><?php echo $inv->tgl_pesan ?></td>
			<td><?php echo $inv->batas_bayar ?></td>
			<td><?php echo anchor('admin/invoice/detail/'.$inv->id,'<div class="btn btn-sm btn-primary">Detail</div>')?></td>
			
			
		</tr>
		<?php endforeach; ?>
	</table>
</div>
</div>
