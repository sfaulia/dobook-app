<div class = "container-fluid">
	
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-bs-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-bs-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
		  <img src="<?php echo base_url('assets/img/slider4.jpg') ?>" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
		  <img src="<?php echo base_url('assets/img/slider3.png') ?>" class="d-block w-100" alt="...">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide ="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide ="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	</div>	
	
	<div class = "row text-center mt-4">
	
		<?php foreach ($barang as $brg) : ?>
			
			<div class="card ml-4 mb-4" style="width: 16rem;">
				<img src="<?php echo base_url().'/uploads/'.$brg->image ?>" class="card-img-top" alt="...">
				<div class="card-body">
					<h7 class="card-title mb-1"><?php echo $brg->name ?></h7>
					<br>
					<small><?php echo $brg->category ?></small>
					<span class="badge badge-pill badge-success mb-3"> <?php echo number_format($brg->price,0,',',',' ) ?></span>
					<br>
					<?php echo anchor('dashboard/Add_to_donation/'.$brg->id,'<div class="btn btn-sm btn-primary">Add to donation</div>')?>
					<?php echo anchor('dashboard/detail/'.$brg->id,'<div class="btn btn-sm btn-success">Detail</div>')?>
				</div>
			</div>
		<?php endforeach; ?>

	
			
	</div> 
		
</div>		
		
	
