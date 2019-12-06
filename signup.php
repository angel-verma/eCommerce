<?php
  include 'include/header.php';
  include 'insert.php';
?>

<div class="container" style="width: 50%;">
  <br><br>
  <div class="jumbotron">
    <form action="" method="POST">
     <label>Enter Name</label>
     <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required><br><br>

     <label>Enter Email</label>
     <input type="email" name="email" class="form-control" placeholder="Enter Email Address" required><br><br>

     <label>Enter Password</label>
     <input type="password" name="password" class="form-control" placeholder="Enter Password" required><br><br>

     <label>Enter Number</label>
     <input type="number" name="contact" class="form-control" placeholder="Enter Contact Number" required>

     <br><br>
     <input type="submit" name="signup" value="Submit" class="btn btn-success" required>
   </form>
 </div>
</div>

<?php
  include 'include/footer.php';
?>
