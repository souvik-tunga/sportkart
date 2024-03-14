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
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="admin.css">
  <link rel="stylesheet" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
<style>
.left{margin-left:260px;}
.add_catagory{ height: 380px;}
/* .main_add{height: 400px;background-image: linear-gradient( to right top,#1b52de 5%,#64afe8,#bd63db,#1b52de);} */
</style>
<div class="left">

<div class="card shadow border-0 font-bold text-dark">
                    <div class="card-header">
                        <div><h3 class="mb-0">Sub Catagory Details</h3> </div>
                        <div class=" text-right">
                            
                        <button type="button" class="btn-sm btn btn-primary mr-4 border border-danger" data-toggle="modal" data-target="#exampleModalCenter">
										Add Sub Catagory
										</button>

										<!-- Modal -->
										<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">Add Sub Catagory</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="">
                                                <form action="subcatagory_action.php"  method="POST" enctype="multipart/form-data">	
                                                <div class="add_catagory shadow bg-light  border">
                                                    <div class="text-center mt-3"><h3>Add Sub Catagory</h3></div>
                                                    <div class=" text-center mt-5">
                                                    
                                                <select class="my-2 py-3 w-75 border border-primary rounded text-center text-dark" name="catagory">
                                                <option >Select Category</option>
                                                
                                                    <?php
                                                    include('../db_connection.php');
                                                    
                                                    $categories = mysqli_query($con,"select * from category");
                                                    while($ro = mysqli_fetch_array($categories)){
                                                        ?>
                                                        <option value="<?php echo $ro['id']?> "><?php echo $ro['category_name']?></option>
                                                        <?php
                                                    }
                                                    ?>

                                                    
                                                </select>
                                                            </div>
                                                        <div class="text-center mt-3"><input type="text" name="add_subcatagory" class="my-2 py-3 w-75 border border-primary rounded text-center text-dark" placeholder="Enter New Sub Catagory"></div>
                                                    <div class="text-center mt-1"><input type="file" name="subcat_image" class="my-4 py-3 w-75 text-dark"  required="required"></div>
                                                        <div class="mt-2 text-center"><button type="submit" name="submit" class="btn btn-success w-75 mt-3">Add </button></div>
                                                    </div>
                                                    </form>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap ">
                            <thead class="shadow bg-light">
                                <tr>
                                    <th scope="col">SL No.</th>
									<th></th>
									<th></th>
                                    <th scope="col">Category Name</th>
									<th></th>
                                    <th scope="col">Subcategory Name</th>
									<th></th>
									<th></th>
									
                                </tr>
                            </thead>
                            <tbody>
							<?php
                            include('../db_connection.php');
                             $no = 1;
                             global $con;
                             $sql = "SELECT sub_catagory.*,category.category_name FROM sub_catagory,category WHERE sub_catagory.catagory_id=category.id";
                                $result=mysqli_query($con,$sql);
                                
                                if($result)
                                {
                                    foreach($result as $row)
                                    {
                                      ?> 
                             
                                <tr>
                                    <td>
                                        <?php echo $no; ?>
                                    </td>

                                    <td>
                                    </td>

                                    <td>
                                    </td>

                                    <td>
                                        <?php echo $row['category_name']; ?> 
                                    </td>

									<td>
                                    </td>

									<td>
                                        <?php echo $row['subcatagory_name']; ?>  
                                    </td>

                                    

									<td>
										<!-- Button trigger modal -->
										<form action="" method="post">
										<button type="button" class="btn-sm btn btn-success" >
										Edit
										</button>

										
									</td>
									</form>
                                   <td> 
                                    <a href="subcatagory_delete.php?delete_subcatagory=<?php echo $row['id']; ?>" class="btn-sm btn btn-danger"><i class="bi bi-trash"></i></a>
        
                                    </td>
                                    </form>
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
<tbody>
</table>
							

<?php
include('includes/footer.php');
?>
</body>
</html>
