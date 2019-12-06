<?php
	include 'include/header.php';
	include 'include/db.php';	
?>
<br>
<div class="container">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-body">
				<center>
					<h3 class="text-uppercase text-primary"><b>Searched Products</b></h3>
				</center>

				<?php
				/*input search isset function for search result*/
				if(isset($_GET["search"])) {
					$search = $_GET["search"];
					$query = mysqli_query($conn,"SELECT * FROM products WHERE brand LIKE '%$search%' OR category LIKE '%$search%'");
				}

				/*input search isset function for search result*/
				while($data = mysqli_fetch_array($query)){
				?>

				<a href="view-product.php?uid=<?php echo $data['id']; ?>">
					<section class="pro-sect thumbnail">
						<center>
							<img src="<?php echo "uploads/".$data["image"];?>"/><br><br>
							<input type="button" value="Buy Now" class="btn btn-success" />
						</center>
					</section>
				</a>

				<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php include 'include/footer.php'; ?>
