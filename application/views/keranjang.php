<div class="container-fluid">

		<h4>Detail Donation</h4>
	
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>Nama Tempat</th>
			<th>Alamat</th>
			<th>Kategori</th>
			<th>Buku yang Dibutuhkan</th>
		</tr>
		
		<?php 
		$no=1;
		foreach ($this->cart->contents() as $items): ?>
			
			<tr>
				<td><?php echo $items['name'] ?></td>
				<td><?php echo $items['address'] ?></td>
				<td><?php echo $items['qty'] ?></td>
				<td align= "right"> <?php echo number_format($items['price'], 0,',','.') ?></td>
			</tr>	
		<?php endforeach; ?>
		
	</table>
	
	<div align="right">
		<a href="<?php echo base_url('dashboard/hapus_keranjang')?>">
		<div class= "btn btn-sm btn-danger">Delete</div></a>
		<a href="<?php echo base_url('welcome/index')?>">
		<div class= "btn btn-sm btn-primary">Back</div></a>
		<a href="<?php echo base_url('dashboard/donation')?>">
		<div class= "btn btn-sm btn-success">Donation Now</div></a>
	</div>
</div>
	