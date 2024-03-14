<?php
    session_start();
    include('topbar.php');
    if(!isset($_SESSION['uid']))
{
    echo "<script>alert('plz login.....'); window.location.href='index.php';</script>";
}
    
    ?>
    
             <!-- <header> -->
    <?php
    include('header.php');
?>


<style>
.okk{width:1000px; margin-left:250px; margin-top:5%;}
</style>

<div class="okk">
<div class="card shadow border-0">
                    <div class="card-header">
                        <h3 class="mb-0">Order History</h3>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">SL No.</th>
                                    <th scope="col">Product Id</th>
                                    <th scope="col">Payment Option</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Price</th>
                                    

                                    
                                    
                                    
                                    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            include('db_connection.php');
                             $no = 1;
                             global $con;
                             $sql = "SELECT * FROM order_table";
                                $result=mysqli_query($con,$sql);
                                
                                if($result)
                                {
                                    foreach($result as $row)
                                    {
                                      $id=$row['product_id'];
                                      
                                      $sql_one="SELECT * FROM product WHERE id='".$id."'";
                                      $query=mysqli_query($con,$sql_one);
                                      $call=mysqli_fetch_assoc($query);
                                      ?>  
                                <tr>
                                    <td>
                                    <a class="text-heading font-semibold" href="#">
                                    <?php echo $no ;?></a>
                                    </td>
                                    <td>
                                    <a class="text-heading font-semibold" href="#">
                                        <?php echo $row['id']; ?></a>
                                       
                                    </td>
                                    
                                   
                                    <td>
                                    <a class="text-heading font-semibold" href="#">
                                        <?php echo $row['payment_option']; ?></a>
                                    </td>
                                    <td>
                                    <a class="text-heading font-semibold" href="#">
                                        <?php echo $row['pick_date']; ?></a>
                                    </td>
                                    <td>
                                    <a class="text-heading font-semibold" href="#">
                                        <?php echo $row['price']; ?></a>
                                    </td>
                                    <td>
                                    
                                    
                              
                                   
                                    
                                </tr>
                            </div>
                        </div>
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







                            
                       
     



   