<div class="container-fluid">
		<div class="col-md-2"></div>
		<div class="col-md-8">

			<h3> Input Detail Donasi dan Alamat Pengiriman</h3>	
			<form method="post" action="<?php echo base_url() ?>dashboard/proses_donasi">
			
				<div class="form-group">
					<label>Full Name</label>
					<input type="text" name="fullname" placeholder="Nama Lengkap Anda"
					class="form-control">
				</div>
				 
				<div class="form-group">
					<label>Phone</label>
					<input type="text" name="phone" placeholder="Nomor Telepon Anda"
					class="form-control">
				</div>

				<div class="form-group">
					<label for="alamat">Address</label>
					<textarea class="form-control" id="address" rows="3" placeholder="Masukan alamat detail"></textarea>
				</div>	 
				
				<div class="form-group">
					<label for="umur">Amount of book</label>
					<input type="number" id="amount" class="form-control" placeholder="Jumlah buku dalam angka">
				</div>
				
				<label>Choose Book Type</label>
				<div class="form-check" >
				  <input class="form-check-input" type="checkbox" value="" id="type" checked class="form-control">
				  <label class="form-check-label" for="flexCheckChecked">
				    Pengetahuan Umum
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked class="form-control">
				  <label class="form-check-label" for="flexCheckChecked">
				    Pengetahuan atau Pelajaran SD-SMA
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked class="form-control">
				  <label class="form-check-label" for="flexCheckChecked">
				    Buku Keterampilan dan Seni
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked class="form-control">
				  <label class="form-check-label" for="flexCheckChecked">
				    Majalah Khusus
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked class="form-control">
				  <label class="form-check-label" for="flexCheckChecked">
				    Buku cerita rakyat, novel
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked class="form-control">
				  <label class="form-check-label" for="flexCheckChecked">
				    Kamus, Ensiklopedia, Buku Referensi
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked class="form-control">
				  <label class="form-check-label" for="flexCheckChecked">
				    Buku Agama
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked class="form-control">
				  <label class="form-check-label" for="flexCheckChecked">
				    Buku Motivasi
				  </label>
				</div>
 				<br>
				
				<label>Take a picture your books that you want to donation</label>
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="picture" class="form-control">
					<label class="custom-file-label" for="contohupload2">Choose file</label>
				</div>

				<div class="form-group">
					<label>Delivery Service</label>
					<select class="form-control" id="delivery" r>			
					<option>JTR JNE Express</option>
					<option>POS Indonesia </option>
					<option>Sentral cargo</option>	
					<option>SiCepat Cargo</option>
					<option>J&T Cargo</option>
					</select>
				</div>

				<div class="form-group">
					<label for="alamat">Note</label>
					<textarea class="form-control" id="note" rows="3" placeholder="Masukan catatan Anda"></textarea>
				</div>
				
				<div align="right">
				<button type="submit" class="btn btn-primary mb-3" >Send</button>
				</div>
				</form>

			
		<div class="col-md-2"></div>
	</div>
</div>