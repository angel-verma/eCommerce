<?php
	include 'include/db.php';

	// $rows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM products "));
?>

<!-- Start Category Code -->
<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-body">
			<h3 class="text-primary text-uppercase text-center"><b><u>Categories</u></b></h3>
			<?php
				$query = mysqli_query($conn, "SELECT * FROM categories ORDER BY id");
				while($data = mysqli_fetch_array($query)){
			?>

			<ul class="list-group">
				<li class="list-group-item">
					<a href="product.php?category=<?php echo $data['category']; ?>" class="text-uppercase">
						<b class="active"><?php echo $data['category']; ?></b>
					</a>

					 <!-- <span class="badge"> 
						<?php 
							// echo $rows; 
						?>
					</span> -->

				</li>
			</ul>

			<?php } ?>
		</div>
	</div>
	<!-- End Category Code -->
	
	<!-- Start Filter Code -->
	<div class="panel panel-primary">
		<div class="panel-body">
			<h3 class="text-primary text-uppercase text-center"><b><u>Filters</u></b></h3>
			<form action="filter.php" method="GET">

				<div class="form-group">
					<h4 class="text-success"><label>Price Range</label></h4>
					<b>Minimum Range</b> <input type="text" name="min" value="0" class="form-control">
					<b>Maximum Range</b>
					<input type="text" name="max" value="15000" class="form-control"> 
				</div>
				<hr>
				<div class="form-group">
					<h4 class="text-success"><label>Brand</label></h4>
					<label>
					<input type="checkbox" name="pro[]" value="samsung">	Samsung <br>
					<input type="checkbox" name="pro[]" value="redmi">	Redmi <br>
					<input type="checkbox" name="pro[]" value="dell">	Dell <br>
					<input type="checkbox" name="pro[]" value="hp">	HP <br>
					<input type="checkbox" name="pro[]" value="acer">	Acer <br>
					<input type="checkbox" name="pro[]" value="intex">	Intex
					</label>
				</div>	

				<input type="submit" name="sub" value="Apply" class="btn btn-primary">		
			</form>
		</div>
	</div>
	<!-- End Category Code -->
</div>