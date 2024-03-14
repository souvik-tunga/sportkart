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
.add_catagory{height: 400px;  }
/* .main_add{height: 400px;background-image: linear-gradient( to right top,#1b52de 5%,#64afe8,#bd63db,#1b52de);} */
</style>

<div class="left">
    <!-- <nav id="top"> -->

<div class="card shadow border-0 font-bold text-dark">
                    <div class="card-header bg-light" id="top">
                        <div><h3 class="mb-0">Catagory Details</h3> </div>
                        <div class=" text-right">
                        <button type="button" class="btn-sm btn btn-primary mr-4 border border-danger" data-toggle="modal" data-target="#exampleModalCenter">
										Add Catagory
										</button>

										<!-- Modal -->
										<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">Add Catagory</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="">
                                                <form action="catagory_action.php" method="POST" enctype="multipart/form-data">	
                                                <div class="add_catagory shadow bg-light  border">
                                                    <div class="text-center mt-3"><h3>Add Catagory</h3></div>
                                                    <div class="text-center mt-5"><input type="text" name="add_catagory" class="my-4 py-3 w-75 border border-primary rounded text-center text-dark" placeholder="Enter New Catagory"  required="required"></div>
                                                    <div class="text-center mt-5"><input type="file" name="cat_image" class="my-4 py-3 w-75  text-dark"  required="required"></div>
                                                    <div class="mt-4 text-center"><button type="submit" name="submit" class="btn btn-success w-75 mt-5">Add </button></div>
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
									<th></th>
                                    <th scope="col">Category Name</th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									
									
                                    
                                </tr>
                            </thead>
                            <tbody>
							<?php
                            include('../db_connection.php');
                             $no = 1;
                             global $con;
                             $sql = "SELECT * FROM category";
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
                                    </td>

                                    <td>
                                    <?php echo $row['category_name']; ?> 
                                    </td>

									<td> 
                                    </td>

									<td>
                                    </td>

                                    

									<td>
										<!-- Button trigger modal -->
										<form action="" method="post">
										<button type="button" class="btn-sm btn btn-success" data-toggle="modal" data-target="#modal1">
										Edit
										</button>

										<!-- Modal -->
										<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">Update Catagory Name</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body col-md-12 row ">
												<div class="col-md-2">
												</div>
												<div class="col-md-10">
												<h4 class="row ">Catagory Name :</h4>
													<input type="text" class="rounded border border-dark row mt-3 text-center w-75 py-2" value="<?php echo $row['category_name']; ?>"></input>
											</div></div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<button type="button" class="btn btn-success">Save</button>
											</div>
											</div>
										</div>
										</div>
									</td>
									</form>
									
                                    
                                   <td>
                                    
                                        <form action="catagory_delete.php" method="post">
                                            <input type="hidden" name="delete_catagory" value="<?php echo $row['id']; ?>">
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
<tbody>
</table>
</nav>
							
						
<?php
include('includes/footer.php');
?>

 <!-- jquery -->
    <script src = "js/jquery-3.6.0.js"></script>
    <!-- bootstrap js -->
    <script src = "bootstrap/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script src = "js/index1.js"></script>

     <!-- <top bar stick> -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener('scroll', function () {
    if (window.scrollY > 50) {
      document.getElementById('top').classList.add('fixed-top');
      navbar_height = document.querySelector('.navbar').offsetHeight;
      document.body.style.paddingTop = navbar_height + 'px';
    } else {
      document.getElementById('top').classList.remove('fixed-top');
      document.body.style.paddingTop = '0';
    }
  });
});
    </script>
</body>
</html>
    
                            
                       
     




