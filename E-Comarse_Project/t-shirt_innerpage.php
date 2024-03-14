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
	<title>T-Shirt Innerpage</title>
</head>
<body>

		 <!-- <header> -->
<?php
include('header.php');
$sql="SELECT * FROM product WHERE subcatagory_id=19";
$query=mysqli_query($con,$sql);
$rec=array();
while($shir=mysqli_fetch_assoc($query))
{
  $rec[]=$shir;
}
?>




  <!-- <some deatils> -->
  <div>
        <div class="container-fluid bg-light mt-5 mb-5">
          <p class="h4 text-left mt-2 font-weight-bold pl-2">All T-Shirt Collection
            <i class="fa fa-hand-o-right"></i>
          </p>
        </div>
      </div>



      <div class="main-floor mt-3 ">
        <div class="max-w-full">
          <div class="max-w-full row bg-light justify-content-around">
          <?php foreach($rec as $row)

            { ?>
            <a href="t-shirt1.php?id=<?php echo $row['id']; ?>">
              <div>
          <div class="relative px-3">
          <picture class="pic-ar ">
            <img alt="Men" src="<?php echo 'admin/all_product_photo/'.$row['image']; ?>" class="ph-2">
            <span class="justify-content-end d-flex text-danger whishlist-icon position-relative">
                    <i class="fa fa-heart-o"></i>
                  </span>
          </picture>
        </div>
        <div class="first-text">
        <div class="text-center">
                  <div class="rating mt-4">
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star-half-o"></i></span>
                  </div>
            </div>
          <span><?php echo $row['product_name']; ?></span>
          <div>
          <span class="font-weight-bold">₹ <?php echo $row['discount_price']; ?> ₹<strike><?php echo $row['product_price']; ?></strike></span> 
            </div>
            <div>
            <a href="#" class="btn btn-outline-danger mt-1 mb-2 border border-danger add-cart">Add to Cart</a></div>
        </div>
      </div>
    </a>
    <?php } ?>
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