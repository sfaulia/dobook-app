	
	
	<div class = "row text-center mt-4">
	
		<?php foreach ($Kalimantan as $brg) : ?>
			
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