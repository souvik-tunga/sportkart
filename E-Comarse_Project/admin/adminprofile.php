<?php
session_start();
if(!isset($_SESSION['id']))
{
    echo "<script>alert('plz login.....'); window.location.href='admin.php';</script>";

}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
  <link rel="stylesheet" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
  <script src="../assets/js/jquery-3.6.4.min.js"></script>


<body>

<?php
include('../db_connection.php');
function getUserProfileData(){
  global $con;
  $id=$_SESSION['id'];
  $sql="SELECT * FROM admin WHERE id='".$id."'";
  $query=mysqli_query($con,$sql);
  $data=mysqli_fetch_assoc($query);
  return $data;

}

$row=getUserProfileData();
?>


<section class="py-5 my-5">
    <div class="container ">
      <h1 class="mb-5 pl-2">Admin Profile</h1>
      <div class="bg-white background_c rounded-lg d-block d-sm-flex">
        <div class="profile-tab-nav border-right">
          <div class="p-4">
            <form action="adminPupdate.php" method="post" enctype="multipart/form-data">
            <div class="img-circle text-center mb-3" >
            <img src="<?php echo ($row['image']=='')?'../assets/image/non_photo3.jpg':$row['image'];?>" id="image-show" alt="Image" class="background_c">
              <label class="d-flex text-light justify-content-end profile-p" for="update_image">
           <i class="fa fa-camera"></i>
         </label>
                  <div class="pl-5"><input type="file" class="text-center" name="image" id="update_image" style="display:none;" onchange="readURL(this)" ></div>
                  <input type="hidden" name="old_img"  value="<?php echo $row['image']; ?>">
            </div>
            <h4 class="text-center"> <i class="bi bi-check2-circle text-primary"></i></h4>
          </div>
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
              <i class="fa fa-home text-center mr-1"></i> 
              Account
            </a>
            <a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
              <i class="fa fa-key text-center mr-1"></i> 
              Password
            </a>
            
          </div>
        </div>
        <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
            <h3 class="mb-4"> Profile</h3>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label> Name</label>
                    <input type="text" name="update_name" class="form-control" value="<?php echo $_SESSION['name'];?>">
                </div>
              </div>
              <!-- <div class="col-md-6">
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="update_lname" class="form-control" value="">
                </div>
              </div> -->
              <div class="col-md-6">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="update_email" class="form-control" value=" <?php echo $_SESSION['username'];?>">
                </div>
              </div>
              <!-- <div class="col-md-6">
                <div class="form-group">
                    <label>Phone number</label>
                    <input type="text" name="update_number" class="form-control" value="">
                </div>
              </div> -->
              
              
            </div>
            <div>
              <button class="btn btn-primary" name="update">Update</button>
              <a href="admindashboard.php" class="btn btn-light border px-3">Cancel</a>
            </div>
          </div>
          <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
            <h3 class="mb-4">Password Settings</h3>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label>Old password</label>
                    <input type="password" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label>New password</label>
                    <input type="password" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label>Confirm new password</label>
                    <input type="password" class="form-control">
                </div>
              </div>
            </div>
            <div>
              <button class="btn btn-primary">Update</button>
              <a href="admindashboard.php" class="btn btn-light border px-3">Cancel</a>
            </div>
          </div>
          
          </form>
        </div>
      </div>
    </div>
  </section>

<script src="../assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>
</html>

