<?php
  // Insert Coding (Adding Product)
  include 'include/db.php';
  if (isset($_POST['addproduct'])) {
    $cat = $_POST['cat'];
    $brand = $_POST['brand'];
    $model_no = $_POST['model_no'];
    $features = $_POST['features'];
    $ldate = $_POST['ldate'];
    $price = $_POST['price'];

    $fname = $_FILES['pimage']['name'];
    $tname = $_FILES['pimage']['tmp_name'];
    move_uploaded_file($tname, "uploads/".$fname);

    $query = mysqli_query($conn, "INSERT INTO products(category, brand, model_no, features, date_launch, price, image) VALUES ('$cat', '$brand', '$model_no', '$features', '$ldate', '$price', '$fname')");

    if ($query == 1) {
      echo "<script>alert('Data inserted !!!')</script>";
    } 
    else {
      echo "<script>alert('Error while inserting the data !!!')</script>";
    }
  }
?>