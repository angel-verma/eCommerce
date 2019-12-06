<?php
  include 'include/header.php';

  // Login coding Start...
  session_start();
  include 'include/db.php';

  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM signup WHERE user_name='$username' AND user_password='$password' ");

    $count = mysqli_num_rows($query);

    if ($count > 0) {
      $_SESSION['login'] = $username;

      $data = mysqli_fetch_array($query);

      if ($data['user_name'] == $username && $data['user_password'] == $password) {
          //echo "login success";
        header("location:admin-panel.php");
      }
    } 
    else {
          //echo "error";
      header("location:error.php");
    }
  } 
  // Login coding Ends...
?>

<div class="container" style="width: 50%;">
  <br><br>
  <div class="jumbotron">
    
    <div class="text-center text-primary">
      <b style="font-size: 200%;">Login</b>
    </div>
    <hr>
    
    <form action="" method="POST" class="form-horizontal form-back">
      <div class="form-group input-group">
       <!-- <label>Enter User Name</label> -->
       <span class="input-group-addon">
        <span class="glyphicon glyphicon-user text-primary"></span>
      </span>
      <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
    </div>

    <div class="form-group input-group">
     <!-- <label>Enter Password</label> -->
     <span class="input-group-addon">
      <span class="glyphicon glyphicon-lock text-primary"></span>
    </span>
    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
  </div>

  <div class="form-group">
   <input type="submit" name="login" value="Submit" class="btn btn-success" style="width: 100%;">
 </div>

</form>
</div>
</div>
<br><br>
<?php
  include 'include/footer.php';
?>
