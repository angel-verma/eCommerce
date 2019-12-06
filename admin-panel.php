<?php
	include 'include/header.php';
  include 'add-cat.php';
  include 'add-pro.php';
?>

<div class="container" style="width: 50%;">
  <br><br>
  <div class="jumbotron">
  	<h2 class="text-center"><b>Admin Panel</b></h2>
  	<hr>
  	<center>
    <!-- <a href="add-cat.php" class="btn btn-primary">Add Category</a><br><br> -->

    <!-- Add Category -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCategory">
      Add Category
    </button>
    <br><br>

    <!-- Modal -->
    <div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title text-center text-primary" id="myModalLabel">Add Category</h3>
          </div>
          <div class="modal-body">
            <form method="POST">
              <input type="text" name="cat" placeholder="Add Category" class="form-control"><br>

              <input type="submit" name="submit" value="Submit" class="btn btn-success">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Add Category Modal -->

    <!-- <a href="add-pro.php" class="btn btn-primary">Add Product</a><br><br> -->

    <!-- Add Product -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProduct">
      Add Product
    </button><br><br>

    <!-- Modal -->
    <div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title text-center text-primary" id="myModalLabel">Add Category</h3>
          </div>
          <div class="modal-body">
            <form method="POST" enctype="multipart/form-data">
              <table class="table">
                <tr>
                  <td><label>Category</label></td>
                  <td><input type="text" name="cat" class="form-control" placeholder="Enter Category"></td>
                </tr>

                <tr>
                  <td><label>Brand</label></td>
                  <td><input type="text" name="brand" class="form-control" placeholder="Enter Brand"></td>
                </tr>

                <tr>
                  <td><label>Model No.</label></td>
                  <td><input type="text" name="model_no" class="form-control" placeholder="Enter Model Number"></td>
                </tr>

                <tr>
                  <td><label>Features</label></td>
                  <td><input type="text" name="features" class="form-control" placeholder="Enter Features"></td>
                </tr>

                <tr>
                  <td><label>Date of Launch</label></td>
                  <td><input type="date" name="ldate" class="form-control" placeholder="Enter Date of Launch"></td>
                </tr>

                <tr>
                  <td><label>Price</label></td>
                  <td><input type="text" name="price" class="form-control" placeholder="Enter Price"></td>
                </tr>

                <tr>
                  <td><label>Product Image</label></td>
                  <td><input type="file" name="pimage" placeholder="Enter Price"></td>
                </tr>
              </table>

              <input type="submit" name="addproduct" value="Submit" class="btn btn-success">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>


    <a href="remove-product.php" class="btn btn-primary">Remove Product</a><br><br>
    <a href="" class="btn btn-primary">Update Product</a><br><br>
    </center>
    <hr>
    <a href="index.php" class="btn btn-success">Back</a>
 </div>
</div>

<?php
  include 'include/footer.php';
?>