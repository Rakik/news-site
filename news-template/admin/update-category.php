<?php include "header.php"; 
if($_SESSION["user_role"] == '0'){
    header("Location: {$hostname}/admin/post.php ");
}
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading"> Update Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6" >
                <?php  include "config.php";
                $cat_id= $_GET['id'];
                $sql= "SELECT * FROM category WHERE category_id = '{$cat_id}'";
                $result = mysqli_query($conn,$sql) ;

                if(mysqli_num_rows($result)>0){
                    while($row =mysqli_fetch_assoc($result)){   
                    }
                ?>




                  <form action="" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="cat_id"  class="form-control" value="1" placeholder="">
                      </div>

                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat_name" class="form-control" value="Html"  placeholder="" required>
                      </div>
                      <input type="submit" name="sumbit" class="btn btn-primary" value="Update" required />
                  </form>
                  <?php
                    }
                    
                ?>
                </div>
              </div>
            </div>
          </div>
          <?php
          if(isset($_POST['submit'])){
              $sql1 = "UPADTE category SET category_id ='{$_POST['cat_id']}', category_name ='{$_POST['cat_name']}' WHERE category_id  ={$_POST['cat_id']}";

                if(mysqli_query($conn,$sql1)){
                    header("Location: {$hostname}/admin/category.php "); 
                }
            }
                

              


          ?>
<?php include "footer.php"; ?>
