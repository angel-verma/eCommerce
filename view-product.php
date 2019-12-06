<?php
include 'include/header.php';
include 'include/db.php';

if (isset($_GET['uid'])) {
	$uid = $_GET['uid'];
}

$query = mysqli_query($conn, "SELECT * FROM products WHERE id='$uid' ");
while($data = mysqli_fetch_array($query)){
?>

<br>
<div class="container">
	<div class="jumbotron">
		<h2 class="text-center"><b>Product Details</b></h2>
		<br>
		<div class="row">
			<div class="col-md-4">
				<div class="thumbnail pro-section" style="padding: 30px;">
					<img src="<?php echo "uploads/".$data['image']; ?>" alt="">
				</div>
				<button class="btn btn-warning"><span class="glyphicon glyphicon-shopping-cart"> ADD TO CART</span></button>
				<button class="btn btn-danger pull-right" style="width: 45%;"><span class="glyphicon glyphicon-usd"></span> BUY NOW</button>
			</div>

			<div class="col-md-8">
				<table class="table">
					<tr>
						<td><h4><label>Brand:</label></h4></td>
						<td><h4><label class="text-success text-capitalize"><?php echo $data['brand']; ?></label></h4></td>
					</tr>

					<tr>
						<td><h4><label>Model Number:</label></h4></td>
						<td><h4><label class="text-success text-capitalize"><?php echo $data['model_no']; ?></label></h4></td>
					</tr>

					<tr>
						<td><h4><label>Features:</label></h4></td>
						<td><h4><label class="text-success text-capitalize"><?php echo $data['features']; ?></label></h4></td>
					</tr>

					<tr>
						<td><h4><label>Date of Launch:</label></h4></td>
						<td><h4><label class="text-success"><?php echo $data['date_launch']; ?></label></h4></td>
					</tr>

					<tr>
						<td><h4><label>Price:</label></h4></td>
						<td><label class="text-danger" style="font-size: 180%;"><?php echo $data['price']; ?></label></td>
					</tr>
				</table>
				<?php } ?>
			</div>
		</div>

		<hr>
		<a href="view-more.php" class="btn btn-primary btn-lg pull-right">Back</a><br>
	</div>
</div>


<?php
	include 'include/footer.php';
?>