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
	<title>t-shirt_innerpage</title>
</head>
<body>

		 <!-- <header> -->

<?php
include('header.php');
global $con;
$id=$_GET['id'];
$sql="SELECT * FROM product WHERE id = '".$id."'";
$query=mysqli_query($con,$sql);
$result=array();
while($rec=mysqli_fetch_assoc($query))
{
  $result[]=$rec;
}
?>

    <!-- <shoe1_innerpage_start> -->
      <?php foreach($result as $val){ 
        $id=$val['id'];
        $call=fetchViewSubImage($id);
        ?>
      <div class="flex-box">
        <div class="left">
          <div class="big-img">
            <img src="<?php echo'admin/all_product_photo/'.$val['image']; ?>">
          </div>
          <div class="image">
            <?php
            foreach($call as $sm_img)
            {
            ?>
            <div class="small-img">
              <img src="<?php echo 'admin/'.$sm_img['sub_image']; ?>" onclick="showImg(this.src)">
            </div>
            <?php } ?>
          </div>
        </div>
      
      <div class="right">
        <div class="url pl-4">Home > Men > T-Shirt</div>
        <div class="shoe_name font-weight-bold pl-4"><?php echo $val['product_name']; ?></div>
        <div class="pl-4">Product code : ISRC2023</div>
          <div class="shoe-rating pl-4">
            <span class="text-danger"><i class="fa fa-star"></i></span>
            <span class="text-danger"><i class="fa fa-star"></i></span>
            <span class="text-danger"><i class="fa fa-star"></i></span>
            <span class="text-danger"><i class="fa fa-star"></i></span>
            <span class="text-danger"><i class="fa fa-star-half-o"></i></span>
          </div>
            <div class="price pl-4">₹<?php echo  $val['discount_price']; ?> ₹<strike><?php echo $val['product_price']; ?></strike></div>
            <div class="size pl-4">
              <h5>Size :</h5>
              <div class="shoe_size active">S</div>
              <div class="shoe_size">M</div>
              <div class="shoe_size">L</div>
              <div class="shoe_size">XL</div>
            </div>
            <div class="quantity pl-4">
              <p>Quantity :</p>
              <input type="number" min="1" max="5" value="1">
            </div>
            <div class="btn-box mt-2 pl-4">
              <button class="btn btn-danger mt-4 mb-2 border border-danger cart-btn">Add to Cart</button>
              <a href="addcart.php?id=<?php echo $val['id']; ?>"><button class="btn btn-info mt-4 mb-2 border border-info buy-btn">Buy Now</button></a>
            </div>
      </div>
    </div>
    <?php } ?>
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