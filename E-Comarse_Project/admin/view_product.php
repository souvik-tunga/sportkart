<?php
session_start();
if(!isset($_SESSION['id']))
{
    echo "<script>alert('plz login.....'); window.location.href='admin.php';</script>";

}
?>
<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="admin.css">
  <link rel="stylesheet" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
<body>
<style>
.left{margin-left:260px;}
</style>

<div class="left">
<div class="card shadow border-0 font-bold text-dark">
                    <div class="card-header">
                        <h3 class="mb-0">Product Details</h3>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">SL No.</th>
                                    <th scope="col">Img</th>
                                    <th scope="col">Product Name</th>
                                    <!-- <th scope="col">Product Details</th> -->
                                    <th scope="col">Category</th>
                                    <th scope="col">Sub Category</th>
                                    <th scope="col">Product Price</th>
                                    <th scope="col">Discount</th>
                                    <th scope="col">Discount Price</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            include('../db_connection.php');
                             $no = 1;
                             global $con;
                             $sql = "SELECT product.*,category.category_name FROM product,category WHERE product.category_id=category.id";
                                $result=mysqli_query($con,$sql);
                                
                                if($result)
                                {
                                    foreach($result as $row)
                                    {
                                      ?>
                             
                                <tr>
                                    <td>
                                     <?php echo $no ;?>
                                    </td>

                                    <td>
                                    <img src="all_product_photo/<?php echo $row['image'];?>" 
                                    class="avatar avatar-lg  rounded-circle me-2">
                                    </td>

                                    <td>
                                    <?php echo $row['product_name']; ?></a>
                                    </td>

                                    <td>
                                        <?php echo $row['category_name']; ?>
                                    </td>

                                    <td>
                                        <?php echo $row['category_name']; ?>
                                    </td>

                                    <td>
                                        ₹ <?php echo $row['product_price']; ?> 
                                    </td>

                                    <td>
                                        ₹ <?php echo $row['discount']; ?>
                                    </td>

                                    <td>
                                        ₹ <?php echo $row['discount_price']; ?>
                                    </td>
                                    
                                    <td class="text-end">
                                    <form action="" method="post">
                                        <!-- <input type="hidden" name="edit_id" value="<?php //echo $row['id']; ?>"> -->
                                        <a href="product_edit.php"  type="submit" name="edit_btn" class="btn-sm btn btn-success"> Edit</a>
                                    </form>
                                    </td>
                                    <td>
                                        <form action="product_delete.php" method="post">
                                            <input type="hidden" name="delete_product" value="<?php echo $row['id']; ?>">
                                            <button  type="submit" name="delete_btn" class="btn-sm btn btn-danger"><i class="bi bi-trash"></i></button>    
                                        </form>
                                    </td>
                                </tr>
                            </div>
                        </div>
</div>
                        <?php    
                            $no++;                        
                          }
                            ?>
                            <?php
                                }
                            ?>
      
<?php
include('includes/footer.php');
?>

 <!-- jquery -->
    <script src = "js/jquery-3.6.0.js"></script>
    <!-- bootstrap js -->
    <script src = "bootstrap/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script src = "js/index1.js"></script>
</body>
</html>
    
                            
                       
     



   