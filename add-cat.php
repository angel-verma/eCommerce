<?php
  // Insert Coding
  include 'include/db.php';
  if (isset($_POST['submit'])) {
    $cat = $_POST['cat'];

    $query = mysqli_query($conn, "INSERT INTO categories(category) VALUE ('$cat')");

    if ($query == 1) {
      echo "<script>alert('Data inserted !!!')</script>";
    } 
    else {
      echo "<script>alert('Error while inserting the data !!!')</script>";
    }
  }
?>
