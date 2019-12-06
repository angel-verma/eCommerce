<?php include 'include/header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Filter Result</title>
</head>
<body>
<br>
<div class="container">
<div class="jumbotron">
<table class="table table-bordered">
	<tr class="active">
		<td><label class="text-uppercase">Category</label></td>
		<td><label class="text-uppercase">Brand</label></td>
		<td><label class="text-uppercase">Modal Number</label></td>
		<td><label class="text-uppercase">Features</label></td>
		<td><label class="text-uppercase">Price</label></td>
		<td><label class="text-uppercase">Image</label></td>
	</tr>

	<?php
		include 'include/db.php';
		$bname = "";

		if (isset($_GET['sub'])) {
		 	if (!isset($_GET['pro'])) {
		 		# This code will execute when no checkbox is selected then all product will display

		 		$query = mysqli_query($conn, "SELECT * FROM products");
		 	}
		 	else {
		 		$fil=$_GET['pro'];
		 		$min=$_GET['min'];
		 		$max=$_GET['max'];
		 		

		 		foreach ($fil as $brandname) {
		 			$bname=$bname."brand="."'".$brandname."'"."or";
		 		}
		 		
		 		// echo "select * from product where $bname brand_name=''"
		 		$query = mysqli_query($conn, "SELECT * FROM products WHERE price BETWEEN '$min' AND '$max' AND ($bname brand='') ");
		 	}
		}
		mysqli_error($conn);
		while($data = mysqli_fetch_array($query)) {
	?>
	<tr>
		<td><?php echo $data['category']; ?></td>
		<td><?php echo $data['brand']; ?></td>
		<td><?php echo $data['model_no']; ?></td>
		<td><?php echo $data['features']; ?></td>
		<td><?php echo $data['price']; ?></td>
		<td><img src="<?php echo "uploads/".$data['image']; ?>" alt="" height="100" width="100"></td>
	</tr>
	<?php } ?>
</table>
</div>
</div>
</body>
</html>
<?php include 'include/footer.php'; ?>