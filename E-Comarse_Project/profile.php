<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  
	<title>My Profile</title>
</head>
<body>

<?php
include('header.php');
?>

<?php
include('db_connection.php');
function getUserProfileData(){
  global $con;
  $uid=$_SESSION['uid'];
  $sql="SELECT * FROM signup WHERE id='".$uid."'";
  $query=mysqli_query($con,$sql);
  $data=mysqli_fetch_assoc($query);
  return $data;
}

$row=getUserProfileData();
?>
      
    <!-- <profile part> -->

      <div class="container ">
        <div class="row d-flex justif-content-center">
          <div class="col-md-10 mt-3 mb-5 pt-5 ">
            <div class="row border">
            
              <div class="col-sm-4 bg-info rounded-left">
              <a href="index.php"><i class="fa fa-arrow-left text-dark mt-2"></i></a>
                <div class=" text-center text-white">
        
                
                <img class="w-50 mt-1" src="<?php echo ($row['img']=='')?'assets/image/non_photo2.jpg':$row['img'];?>">
                <input type="hidden" name="old_img" value="<?php echo $row['img'];?>" />
                  <h3 class="font-weight-bold mt-3"> <?php echo $_SESSION['name'];?> <?php echo $_SESSION['lname'];?></h3>
                  
                  <a href="update_profile.php"><button class="btn btn-primary mb-2 "> Edit Profile <i class="fa fa-edit"></i></button></a>
                </div>
              </div>
              <div class="col-sm-8 rounded-right bg-white">
                <h4 class="mt-1 text-center pr-5">Information <i class="bi bi-person-check"></i></h4>
                <!-- <hr class="badge-primary w-25 mt-0"> -->
                <div class="row px-3">
                  <div class="col-sm-6">
                    <p class="font-weight-bold"><i class="fa fa-user"></i> First Name : </p>
                    <h6> <?php echo $_SESSION['name'];?></h6>
                    <!-- <input type="text" class="text-center"  value="Souvik"> -->
                  </div>
                  <div class="col-sm-6">
                    <p class="font-weight-bold"><i class="fa fa-user"></i> Last Name :</p>
                    <h6> <?php echo $_SESSION['lname'];?></h6>
                    <!-- <input type="text"  value="Tunga"> -->
                  </div>
                  <div class="col-sm-6">
                    <p class="font-weight-bold mt-2"><i class="fa fa-phone"></i> Phone Number :</p>
                    <h6><?php echo $_SESSION['number'];?></h6>
                    <!-- <input type="Number"  value="8670668820"> -->
                  </div>
                  <div class="col-sm-6">
                    <p class="font-weight-bold mt-2"><i class="fa fa-envelope"></i> Email :</p>
                    <h6 > <?php echo $_SESSION['email'];?></h6>
                  </div>
                  <hr class="badge-primary w-100 mt-0">

                </div>
                <h5 class="text-center pr-5"><i class="fa fa-home"></i> Address</h5>
                <div class="max-w-full row">
                  <div class="col-sm-9">
                    <h6 class="mt-2" ><i class="fa fa-hand-o-right" aria-hidden="true"></i> None..?! </h6>
                  </div>
                    <div class="col-sm-3">
                    <a href="logout.php"><button class="btn btn-dark w-100 mb-0 ">Logout <i class="fa fa-sign-out"></i></button></a>
                  </div>
              </div>
            </div>
          </div>
            </div>
        </div>
      </div>

		<!-- <Footer-Section> -->

<div class="max-w-full mt-3 ">
  <footer class="text-left text-white f-color" >
    <div class="container p-4 pb-0">
      <section>
        <div class="row">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Tunga Fashion >></h6>
            <p>© 2023 Souvik Tunga Fashion E-Retail Pvt. Ltd.</p>
            <p>
             <img src="assets/image/delivery.jpg" class="f-1" alt="Delivery-van-icon"> Free Shipping</p>
            <p>
             <img src="assets/image/return.jpg" class="f-1" alt="Return Icon"> Easy Returns</p>
             <p>
             <img src="assets/image/warranty.jpg" class="f-1" alt="warranty Icon"> 100% AUTHENTIC</p>
          </div>
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 text-center">
            <h6 class="text-uppercase mb-4 font-weight-bold">Top Categories</h6>
            <p>
              <a class="text-white">Cricket</a>
            </p>
            <p>
              <a class="text-white">Football</a>
            </p>
            <p>
              <a class="text-white">Basketball</a>
            </p>
            <p>
              <a class="text-white">Batminton</a>
            </p>
            <p>
              <a class="text-white">Riding</a>
            </p>
          </div>

          <hr class="w-100 clearfix d-md-none" />
          <hr class="w-100 clearfix d-md-none" />

          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 ">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fa fa-home" aria-hidden="true"></i>  Contai, Purba Medinipur, NY 10012, IND</p>
            <p><i class="fa fa-envelope" aria-hidden="true"></i> souviktunga6@gmail.com</p>
            <p><i class="fa fa-mobile" aria-hidden="true"></i> + 91 8670668820</p>
            <p><i class="fa fa-phone-square" aria-hidden="true"></i> + 91 234 567 89</p>
          </div>
  
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3 text-center">
            <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

            <a class="btn btn-primary btn-floating m-1" href="#!" role="button">
              <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>

            <a class="btn btn-danger btn-floating m-1" href="#!" role="button">
               <i class="fa fa-google" aria-hidden="true"></i>
             </a>
            <a class="btn btn-primary btn-floating m-1" href="#!" role="button">
               <i class="fa fa-twitter" aria-hidden="true"></i>
             </a>

            <a class="btn btn-info btn-floating m-1" href="#!"role="button">
               <i class="fa fa-instagram" aria-hidden="true"></i>
               </a>

            <a class="btn btn-success btn-floating m-1" href="#!" role="button">
               <i class="fa fa-linkedin" aria-hidden="true"></i>
             </a>
          </div>
        </div>
        <div class="text-left p-3">
        100% SECURE TRANSACTION : 
      <a href="#">
      <picture>
        
        <img src="assets/image/mastercard.png" class="t-photo">
        <img src="assets/image/payment.avif" class="t-photo">
        <img src="assets/image/credit_card1.avif" class="t-photo">
        
      </picture>
      </a>
    </div>
      </section> 
    </div>

    <div class="text-center p-3 f-text">
        Experience The TUNGA Sport Mobile App : 
      <a href="#">
      <picture>

        <img src="assets/image/googleplay.png" class="f-photo">
        <img src="assets/image/applestore.png" class="f-photo">
      </picture>
      </a>
    </div>
  </footer>
</div>



<script src="assets/js/main.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>
</html>