<?php
include 'include/header.php';
include 'include/db.php';

if (isset($_GET['category'])) {
	$cat = $_GET['category'];
}

$rows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM products WHERE category='$cat'"));
?>
<br>
<div class="row" style="margin: 1px;">
	<?php include 'category.php'; ?>

	<div class="col-md-9">
		<div class="panel panel-primary">
			<div class="panel-body">
				<center>
					<h3 class="text-uppercase text-primary"><b><u>Flipcart Assured</u></b></h3>

					<button class="btn btn-primary btn-lg" type="button">
						Number of Products: 
						<span class="badge">
							<?php echo $rows; ?>
						</span>
					</button>
				</center>	
				<hr>

				<?php
				$query = mysqli_query($conn, "SELECT * FROM products WHERE category='$cat' ");
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
									<!-- <?php #echo $rows; ?>	 -->
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
			</div>
		</div>
	</div>
</div>
<?php include 'include/footer.php'; ?>



