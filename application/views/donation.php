<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">

			<div class="btn btn-sm btn-success">
				<?php 
				$grand_total =0;
				if ($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $item)
					{
						$grand_total =$grand_total + $item['subtotal'];
					}
			
				echo "<h6>Buku yang Dibutuhkan:  ".number_format($grand_total,0,',','.');
			
				?>
			</div><br><br>
			
			<h3> Form Donation</h3>
			
			<form method="post" action="<?php echo base_url() ?>dashboard/proses_donasi">
			
				<div class="form-group">
					<label>Full Name</label>
					<input type="text" name="nama" placeholder="Nama Lengkap Anda"
					class="form-control">
				</div>
			
				<div class="form-group">
					<label>Address</label>
					<input type="text" name="alamat" placeholder="Alamat Anda"
					class="form-control">
				</div>
				
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" placeholder="Email Anda"
					class="form-control">
				</div>

				<div class="form-group">
					<label>Phone</label>
					<input type="text" name="no_telepon" placeholder="Nomor Telepon Anda"
					class="form-control">
				</div>
				
				<div class="form-group">
					<label for="umur">Amount of book</label>
					<input type="number" name="total_buku" class="form-control" placeholder="Jumlah buku donasi">
				</div>

				<div class="form-group">
					<label>Delivery Service</label>
					<select class="form-control" type="text" name="pengiriman">
					<option>JTR JNE Express</option>
					<option>POS Indonesia </option>
					<option>Sentral cargo</option>	
					<option>SiCepat Cargo</option>
					<option>J&T Cargo</option>
					</select>
				</div>

				<div class="form-group">
					<label for="alamat">Note</label>
					<textarea class="form-control" name="catatan" rows="3" placeholder="Masukan Catatan Anda"></textarea>
				</div>

				<button type="submit" class="btn btn-sm btn-primary mb-2">Send</button>
			</form>
		<div>	
			<?php
				}else
				{
					echo "<h4>Anda Belum Memilih Tempat Donasi</h4>";
				}
			?>
		</div>
		</div>
		<div class="col-md-2"></div>

		
	</div>
</div>
</div>
