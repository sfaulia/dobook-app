<div class="container-fluid">
	<h4>Detail Donee <div class="btn btn-sm btn-success">No. Invoice: <?php 
	echo $invoice->id ?></div></h4>
	
	<table class="table table-bordered table-hover table striped">
	
		<tr>
			<th>ID TEMPAT</th>
			<th>NAMA TEMPAT</th>
			<th>ALAMAT PENGIRIMAN</th>
			<th>KATEGORI</th>
			<th>TOTAL BUKU</th>
		</tr>
		
		<?php
		$total = 0;
		foreach ($pesanan as $psn):
			$subtotal = $psn->jumlah * $psn->harga;
			$total += $subtotal;
		?>
	
		<tr>
			<td><?php echo $psn->id_brg ?></td>
			<td><?php echo $psn->nama_brg ?></td>
			<td><?php echo $psn->alamat ?></td>
			<td><?php echo $psn->jumlah ?></td>
			<td><?php echo number_format($psn->harga,0,',','.') ?></td>
		</tr>
	
		<?php endforeach; ?>
	
	</table>
</div>
</div>