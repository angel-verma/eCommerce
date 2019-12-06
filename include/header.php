<!DOCTYPE html>
<html>
<head>
	<title>Online Shopping</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/style.css">
	<link href="js/jquery.autocomplete.css" rel="stylesheet" />
</head>

<!-- Start Header -->
<section>
	<div id="header-wrapper">
		<div class="header-inner">
			<header>
				<div id="logo" class="col-lg-2">
					<a href="index.php"><img src="img/fk-logo.png" alt="" height="40"></a>
				</div>
				<div class="col-lg-10">
					<form action="search.php" class="form-inline" id="inline-form" method="GET">
						<input type="text" name="search" id="txt" autocomplete="on" placeholder="Search for Products, Brands and more..." class="form-control tcal" style="width: 400px;">

						<input type="submit" value="Go" name="search-btn" class="btn btn-success">

						<div class="pull-right">
							<a href="signup.php" class="btn btn-warning btn-lg">Signup</a>

							<a href="login.php" class="btn btn-danger btn-lg">Log In</a>
						</div>

					</form>
				</div>
			</header>
		</div>
	</div>
</section>

<section>
	<div class="menu-header">
		<div id="inner-menu-header">
			<nav>
				<ul>
					<li><a href="">ELECTRONICS <span class="caret"></span></a></li>
					<li><a href="">APPLIANCES <span class="caret"></span></a></li>
					<li><a href="">MEN <span class="caret"></span></a></li>
					<li><a href="">WOMEN <span class="caret"></span></a></li>
					<li><a href="">BABY & KIDS <span class="caret"></span></a></li>
					<li><a href="">HOME & FURNITURE <span class="caret"></span></a></li>
					<li><a href="">BOOKS & MORE <span class="caret"></span></a></li>
					<li><a href="">OFFER ZONE <span class="caret"></span></a></li>
				</ul>
			</nav>
		</div>
	</div>
</section>
<!-- End Header -->

<!-- Start Jquery Library -->
<script src="jquery-3.2.1.min.js"></script>
<script src="js/jquery.autocomplete.js"></script>

<!--ajax autocomplete-->
<script>
$(document).ready(function(){
	$("#txt").autocomplete("auto.php",{
		width: 700,
		autoFill: true,
		selectFirst: true	
    });
});
</script>
<!-- End Jquery Library -->
