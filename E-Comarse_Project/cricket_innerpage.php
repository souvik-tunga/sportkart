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
	<title>Cricket Innerpage</title>
</head>
<body>

		 <!-- <header> -->
<?php
include('header.php');
?>



      	 <!-- <slider-section>-->

    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
   
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/image/cricket4.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/image/cricket2.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/image/cricket1.avif" class="d-block w-100" alt="...">
    </div>
     </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

  <!-- <some deatils> -->
<div class="border">
<div class="container-fluid my-2">
  <div class="col-md-12 justify-content-center ok row text-center">
  <div class="col-md-3 margin_b">
    <a href="">
      <picture > 
        <img src="assets/image/apparel.png" class="c-photo"></picture>
     Cricket Apparels</a>
  </div>
  <div class="col-md-3 margin_b">
    <picture> 
        <img src="assets/image/bats ball.png" class="c-photo"></picture>
    <a href=""> Cricket Bats & Balls</a>
  </div>
  <div class="col-md-3 margin_b">
    <picture> 
        <img src="assets/image/kit.png" class="c-photo"></picture>
    <a href="">&nbsp;&nbsp;&nbsp; Cricket Kit &nbsp;&nbsp;&nbsp; </a>
  </div>
  <div class="col-md-3">
    <picture> 
        <img src="assets/image/cricket Shoe.jpg" class="c-photo"></picture>
    <a href=""> Cricket Shoes</a>
  </div>
  </div>
</div>
          </div>

		<!-- <trending Bat> -->

      <div>
        <div class="container-fluid bg-light">
          <p class="h4 text-left mt-3 font-weight-bold pl-2">Trending Cricket Bat 
            <i class="fa fa-hand-o-right"></i>
          </p>
        </div>
      </div>

     <div class="collection_list mt-1 row bg-light ml-0 border-dark overflow-hidden justify-content-center m-0 p-0">
              <div class="">
                <div class="collection_img position-relative">
                  <a href="cricket_bat_innerpage.php"><img src="assets/image/cricket_bat2.avif" class="w-100"></a>
                  <span class="justify-content-end d-flex text-danger whishlist-icon position-relative">
                    <i class="fa fa-heart-o"></i>
                  </span>
                </div>
                <div class="text-center">
                  <div class="rating mt-4">
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star-half-o"></i></span>
                  </div>
                  <p class="text-capitalize my-1">Tennis Ball Cricket Bat</p>
                  <span class="font-weight-bold">₹499 ₹<strike>599</strike></span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>

              <div class="px-1 ">
                <div class="collection_img position-relative">
                 <a href="cricket_bat_innerpage1.php"> <img src="assets/image/cricket_bat4.avif" class="w-100"></a>
                  <span class="justify-content-end d-flex text-danger whishlist-icon position-relative">
                    <i class="fa fa-heart-o"></i>
                  </span>
                </div>
                <div class="text-center">
                  <div class="rating mt-4">
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                  </div>
                  <p class="text-capitalize my-1">Tennis Ball Cricket Bat T900</p>
                  <span class="font-weight-bold">₹1,099 ₹<strike>1,199</strike></span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger  mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>

              <div class="">
                <div class="collection_img position-relative">
                  <img src="assets/image/cricket_bat3.avif" class="w-100">
                  <span class="justify-content-end d-flex text-danger whishlist-icon position-relative">
                    <i class="fa fa-heart-o"></i>
                  </span>
                </div>
                <div class="text-center">
                  <div class="rating mt-4">
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star-half-o"></i></span>
                  </div>
                  <p class="text-capitalize my-1">Cricket Bat Tennis Ball</p>
                  <span class="font-weight-bold">₹699 ₹<strike>799</strike></span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger  mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>

              <div class="px-1">
                <div class="collection_img position-relative">
                  <img src="assets/image/cricket_bat1.avif" class="w-100">
                  <span class="justify-content-end d-flex text-danger whishlist-icon position-relative">
                    <i class="fa fa-heart-o"></i>
                  </span>
                </div>
                <div class="text-center">
                  <div class="rating mt-4">
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star-half-o"></i></span>
                  </div>
                  <p class="text-capitalize my-1">Tennis Cricket Bat MW500</p>
                  <span class="font-weight-bold">₹499</span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger  mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>
              <div class="">
                <div class="collection_img position-relative">
                  <img src="assets/image/cricket_bat5.avif" class="w-100">
                  <span class="justify-content-end d-flex text-danger whishlist-icon position-relative">
                    <i class="fa fa-heart-o"></i>
                  </span>
                </div>
                <div class="text-center">
                  <div class="rating mt-4">
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star-half-o"></i></span>
                  </div>
                  <p class="text-capitalize my-1">Tennis Wg540 Cricket Bat</p>
                  <span class="font-weight-bold">₹399 ₹<strike>449</strike></span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger  mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>
            </div>
          </div>

         <!-- <slider-part->-->

<div class="">
    <div class="mt-2">
      <img src="assets/image/cricket2.webp" class="d-block w-100" alt="...">
    </div>


          <!-- <Blog> -->

      <div>
        <div class="container-fluid bg-light">
          <p class="h4 text-center mt-4 font-weight-bold pl-2">Read our Sporty Stories
            <i class="fa fa-hand-o-right"></i>
          </p>
        </div>
      </div>

     <div class="collection_list mt-1 row bg-light ml-0 border-dark
     overflow-hidden justify-content-center m-0 p-0 col-md-12"> <div
     class="col-md-3 border"> <div class="collection_img position-relative">
     <img src="assets/image/cricket_blog1.avif" class="w-100 "> </div>

                <div class="text-left pl-3 mb-2">
                  <p class="text-capitalize my-1 font-weight-bold mt-2">Top 5 Monsoon Accessories You Need</p>
                 
                  <div class="mt-3"><p>(2 min Read)</p>
                   <button class="btn-outline-primary blog-btn mt-2 px-2">Read Now</button>
                </div>
              </div>
              </div>

              
              <div class=" col-md-3 border">
                <div class="collection_img position-relative">
                  <img src="assets/image/cricket_blog2.avif" class="w-100">
                </div>

                <div class="text-left pl-2 mb-2">
                  <p class="text-capitalize my-1 font-weight-bold mt-2">How To Choose The Best Rain Jacket For Travellers</p>
                 
                  <div class="mt-0"><p>(2 min Read)</p>
                   <button class="btn-outline-primary blog-btn px-2">Read Now</button>
                </div>
              </div>
              </div>

              <div class="col-md-3 border">
                <div class="collection_img position-relative">
                  <img src="assets/image/cricket_blog3.avif" class="w-100">
                </div>

                <div class="text-left pl-2">
                  <p class="text-capitalize my-1 font-weight-bold mt-2">How To Choose Waterproof Shoes ?</p>
                 
                  <div class="mt-4 "><p>(2 min Read)</p>
                   <button class="btn-outline-primary blog-btn mb-2 px-2">Read Now</button>
                </div>
              </div>
              </div>

              <div class="col-md-3 border">
                <div class="collection_img position-relative">
                  <img src="assets/image/cricket_blog4.avif" class="w-100">
                </div>

                <div class="text-left pl-2 mb-2">
                  <p class="text-capitalize my-1 font-weight-bold mt-2">Travel in monsoon - Top 7 places to visit in India during monsoon</p>
                 
                  <div class=" "><p>(2 min Read)</p>
                   <button class="btn-outline-primary blog-btn px-2" >Read Now</button>
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