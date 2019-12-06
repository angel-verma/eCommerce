<div class="col-md-9">
	<div class="panel panel-primary">
		<div class="panel-body">
			<h3 class="text-uppercase text-center text-primary"><b>Flipcart Assured</b></h3><br>

			<?php

			# pagination concept
			$id = 1;
			$start = 0;
			$limit = 6;

			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$start = ($id-1) * $limit;
			}

			$query = mysqli_query($conn, "SELECT * FROM products LIMIT $start, $limit");

			while($data = mysqli_fetch_array($query)){
			?>

			<a href="view-product.php?uid=<?php echo $data['id']; ?>">
				<section class="pro-sect thumbnail">
					<center>
						<div>
							<img src="<?php echo "uploads/".$data['image']; ?>" alt="">
						</div><br>


						<label style="font-size: 130%;">
							Brand: 
							<span class="text-success">
								<?php echo $data['brand']; ?>	
							</span>
						</label><br>

						<label style="font-size: 150%;">
							Price: 
							<span class="text-danger">
								<?php echo $data['price']; ?>	
							</span>
						</label>
					</center>
				</section>
			</a>	

			<?php } ?>


			<?php
			$rows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM products"));
			$total = ceil($rows/$limit);
			?>

			<center>
				<nav>
					<ul class="pagination">
						<?php
						if ($id > 1) {
							echo "<li><a href='?id=".($id-1)."'>Previous</a></li>";
						}
						for ($i=1; $i <= $total ; $i++) { 
							echo "<li><a href='?id=".($i)."'> $i </a></li>";
						}
						if ($id != $total) {
							echo "<li><a href='?id=".($id+1)."'>Next</a></li>";
						}
						?>
					</ul>
				</nav>
			</center>
		</div>
	</div>
</div>