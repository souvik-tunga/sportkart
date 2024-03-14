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
<div class="card shadow border-0">
                    <div class="card-header">
                        <h3 class="mb-0">Customer Details</h3>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">SL No.</th>
                                    <th scope="col">
                                       <input class="form-check-input border-dark" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label " for="flexCheckDefault">
                                            
                                    </label>All
                                     </th>
                                    <th scope="col"></th>
                                    <th scope="col">first Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Status</th>
                                    
                                    <th scope="col"></th>
                                    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            include('../db_connection.php');
                             $no = 1;
                             global $con;
                             $sql = "SELECT * FROM signup";
                                $result=mysqli_query($con,$sql);
                                
                                if($result)
                                {
                                    foreach($result as $row)
                                    {
                                      ?>  
                                <tr>
                                    <td>
                                    <a class="text-heading font-semibold" href="#">
                                    <?php echo $no ;?></a>
                                    </td>
                                    
                                    <td>
                                    <div class="form-check">
                                        <input class="form-check-input border-dark" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label " for="flexCheckDefault">
                                            
                                    </label>
                                     </div>
                                    </td>
                                    <td>
                                    <a class="text-heading font-semibold" href="#">
                                    <img src="<?php echo ($row['img']=='')?'../assets/image/non_photo2.jpg':'../'.$row['img'];?>" 
                                    class="avatar avatar-sm rounded-circle me-2">
                                    </td>
                                    <td>
                                    <a class="text-heading font-semibold" href="#">
                                        <?php echo $row['firstname']; ?></a>
                                    </td>
                                    <td>
                                    <a class="text-heading font-semibold" href="#">
                                        <?php echo $row['lastname']; ?></a>
                                    </td>
                                    <td>
                                    <a class="text-heading font-semibold" href="#">
                                        <?php echo $row['email']; ?></a>
                                    </td>
                                    <td>
                                    <a class="text-heading font-semibold" href="#">
                                        <?php echo $row['number']; ?></a>
                                    </td>
                                    <td>
                                    <div>
                                    <i class="fa fa-check text-success"></i> <b>Active</b>
                                   </div>
                                    </td>
                                    <!-- <td>
                                    <div>
                                    <i class="fa fa-times text-danger"></i> <b>Deactive</b>
                                   </div>
                                    </td> -->
                                    <td class="text-end">
                                    <form action="" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                        <button  type="submit" name="edit_btn" class="btn-sm btn btn-success"> Edit</button>
                                    </form>
                                    </td>
                                    <td>
                                        <form action="customer_delete.php" method="post">
                                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
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
    
                            
                       
     



   