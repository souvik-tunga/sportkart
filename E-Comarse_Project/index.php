<?php
session_start();
?>
<?php
include('topbar.php');
?>
    <title>Tunga Sports Kit</title>
  </head>
  <body>
    <!-- <--<Header>-->

<?php
include('header.php');
$sql="SELECT * FROM category";
$query=mysqli_query($con,$sql);
$cate=array();
while($rec=mysqli_fetch_assoc($query))
{
  $cate[]=$rec;
}
?>



  <!-- <First Home Part-1> -->

      <div class="main-floor mt-3 ">
        <div class="max-w-full">
          <div class="max-w-full row bg-light justify-content-around">
            <?php foreach($cate as $val)
            { ?>
            <a href="men_innerpage.php?id=<?php echo $val['id']; ?>">
              <div>
          <div class="relative px-3">
          <picture class="pic-ar ">
            <img alt="Men" src="<?php echo 'admin/cat_pic/'.$val['cat_image']; ?>" class="ph-1">
          </picture>
        </div>
        <div class="first-text">
          <span><?php echo $val['category_name']; ?></span>
        </div>
      </div>
    </a>
    <?php } ?>
  </div>

      <!-- <slider-section>-->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner mt-2">
    <div class="carousel-item active">
      <img src="assets/image/desk.avif" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/image/NBA web.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/image/football.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/image/bannerbat.avif" class="d-block w-100" alt="...">
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

  <!-- <some details> -->

<div class="container-fluid bg-col py-4">
  <div class="col-md-12 justify-content-center ok row text-center">
  <div class="col-md-4 margin_b">
    <a href="">
      <picture > 
        <img src="assets/image/warranty.jpg" class="l-photo"></picture>
     100+ stores Across India</a>
  </div>
  
  <div class="col-md-4 margin_b">
    <picture> 
        <img src="assets/image/return.jpg" class="l-photo"></picture>
    <a href=""> Easy Return</a>
  </div>
  <div class="col-md-4 ">
    <picture> 
        <img src="assets/image/delivery.jpg" class="l-photo"></picture>
    <a href=""> 1M + Happy Customers</a>
  </div>
  </div>
</div>


          <!-- <More In Sports> -->

    <<div>
        <div class="container-fluid bg-light mt-2">
          <p class="h4 text-left font-weight-bold pl-3">Explore More In Sports
            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
          </p>
        </div>
      </div>
      <div class="flex flex-wrap bg-light row justify-content-center mt-3">
          <div class="max-w-full px-3">
            <a href="cricket_innerpage.php">
              <div class="relative flex flex-col min-w-0 overflow-hidden">
              <picture class="relative overflow-hidden block " aria-hidden="true">
                  <img  alt="Rainwear" src="assets/image/cricket.avif" class="img-fluid ">
                </picture>
              </div>
            </a>
          </div>
          <div class="max-w-full mb-3.5 px-4">
            <a href="#">
              <div class="relative flex flex-col min-w-0 overflow-hidden">
              <picture class="relative overflow-hidden block " aria-hidden="true">
                  <img  alt="Rainwear" src="assets/image/football123.avif" class="img-fluid">
                </picture>
              </div>
            </a>
          </div>
        <div class="max-w-full mb-3.5 px-3">
            <a href="#">
              <div class="relative flex flex-col min-w-0 overflow-hidden">
              <picture class="relative overflow-hidden block " aria-hidden="true">
                  <img  alt="Rainwear" src="assets/image/basketball.avif" class="img-fluid">
                </picture>
              </div>
            </a>
          </div>
          <div class="max-w-full mb-3.5 px-4">
            <a href="#">
              <div class="relative flex flex-col min-w-0 overflow-hidden">
              <picture class="relative overflow-hidden block " aria-hidden="true" style="">
                  <img  alt="Rainwear" src="assets/image/hourseriding.avif" class="img-fluid">
                </picture>
              </div>
            </a>
          </div>
        </div>
      </div>
          <!-- <div class="max-w-full mb-3.5 px-4">
            <a href="#">
              <div class="relative flex flex-col min-w-0 overflow-hidden">
              <picture class="relative overflow-hidden block " aria-hidden="true">
                  <img  alt="Rainwear" src="assets/image/football123.avif" class="img-fluid">
                </picture>
              </div>
            </a>
          </div>
        <div class="max-w-full mb-3.5 px-3">
            <a href="#">
              <div class="relative flex flex-col min-w-0 overflow-hidden">
              <picture class="relative overflow-hidden block " aria-hidden="true">
                  <img  alt="Rainwear" src="assets/image/basketball.avif" class="img-fluid">
                </picture>
              </div>
            </a>
          </div>
          <div class="max-w-full mb-3.5 px-4">
            <a href="#">
              <div class="relative flex flex-col min-w-0 overflow-hidden">
              <picture class="relative overflow-hidden block " aria-hidden="true" style="">
                  <img  alt="Rainwear" src="assets/image/hourseriding.avif" class="img-fluid">
                </picture>
              </div>
            </a>
          </div>
        </div>
      </div> -->




               <!-- <Top Rated Man part> -->

          <div>
        <div class="container-fluid bg-light">
          <p class="h4 text-left mt-3 font-weight-bold pl-3">Top Rated In Mens
            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
          </p>
        </div>
      </div>

        <div class="main-floor">
          <div class="container-fluid">
            <div class="max-w-full row bg-light justify-content-center">
            <a href="#">
              <div>
          <div class="relative px-3">
          <picture class="pic-ar">
            <img alt="t-shirt" src="assets/image/t-shirt.avif" class="ph-1">
          </picture>
        </div>
        <div class="first-text">
          <span>T-Shirt</span>
        </div>
      </div>
    </a>
    <a href="#">
      <div>
        <div class="relative px-3">
          <picture class="pic-ar">
            <img deca-image="true" alt="Short-Pant" src="assets/image/Short-Pant.avif" class="ph-1">
          </picture>
        </div>
        <div class="first-text"><span>Short-Pant</span>
        </div>
      </div>
    </a>
    <a href="#">
      <div>
        <div class="relative px-3">
          <picture class="pic-ar">
            <img deca-image="true" alt="Track-Pant" src="assets/image/track-pant.avif" class="ph-1">
          </picture>
        </div>
        <div class="first-text"><span>Track-Pant</span>
        </div>
      </div>
    </a>
    <a href="#">
      <div>
        <div class="relative px-3">
          <picture class="pic-ar">
            <img deca-image="true" alt="Trousers" src="assets/image/Trouser.avif" class="ph-1">
          </picture>
        </div>
        <div class="first-text"><span>Trousers</span>
        </div>
      </div>
    </a>
    <a href="#">
      <div>
        <div class="relative px-3">
          <picture class="pic-ar">
            <img deca-image="true" alt="Sweatshirt" src="assets/image/Hoodie.avif" class="ph-1">
          </picture>
        </div>
        <div class="first-text"><span>Sweatshirt</span>
        </div>
      </div>
    </a>
    <a href="#">
      <div>
        <div class="relative px-3">
          <picture class="pic-ar">
            <img deca-image="true" alt="Sports Footwear" src="assets/image/Sportshoe.avif" class="ph-1">
          </picture>
        </div>
        <div class="first-text"><span>Sports Footwear</span>
        </div>
      </div>
    </a>
    <a href="#">
      <div>
        <div class="relative px-3">
          <picture class="pic-ar">
            <img deca-image="true" alt="Down Jackets" src="assets/image/jackets.avif" class="ph-1">
          </picture>
        </div>
        <div class="first-text"><span>Padded & Down Jackets</span>
        </div>
      </div>
    </a>
    <a href="#">
      <div>
        <div class="relative px-3">
          <picture class="pic-ar">
            <img deca-image="true" alt="Sunglasses" src="assets/image/Sunglass.avif" class="ph-1">
          </picture>
        </div>
        <div class="first-text"><span>Sunglasses</span>
        </div>
      </div>
    </a>
  </div>
</div>
           <!-- <Women Athleisure Range> -->

           <div>
        <div class="container-fluid bg-light ">
          <p class="h4 text-left mt-3 font-weight-bold pl-3">Women Athleisure Range
            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
          </p>
        </div>
      </div>

        <div class="main-floor">
          <div class="container-fluid bg-light">
            <div class="max-w-full row  justify-content-center">
            <a href="">
              <div>
          <div class="relative px-3">
          <picture>
            <img alt="Tops & Tees" src="assets/image/womentop.avif" class="ph-1">
          </picture>
        </div>
        <div class="first-text">
          <span>Tops & Tees</span>
        </div>
      </div>
    </a>
    <a href="#">
      <div>
        <div class="relative px-3">
          <picture class="pic-ar">
            <img deca-image="true" alt="Leggings" src="assets/image/womenleg.avif" class="ph-1">
          </picture>
        </div>
        <div class="first-text"><span>Legging</span>
        </div>
      </div>
    </a>
    <a href="#">
      <div>
        <div class="relative px-3">
          <picture class="pic-ar">
            <img deca-image="true" alt="Track-Pant" src="assets/image/women-track-pant.avif" class="ph-1">
          </picture>
        </div>
        <div class="first-text"><span>Track-Pant</span>
        </div>
      </div>
    </a>
    <a href="#">
      <div class="items">
        <div class="relative px-3">
          <picture class="pic-ar">
            <img deca-image="true" alt="Sports Bra" src="assets/image/sportsbra.avif" class="ph-1">
          </picture>
        </div>
        <div class="first-text"><span>Sports Bra</span>
        </div>
      </div>
    </a>
    <a href="#">
      <div>
        <div class="relative px-3">
          <picture class="pic-ar">
            <img deca-image="true" alt="Sweatshirt" src="assets/image/womenshirt.avif" class="ph-1">
          </picture>
        </div>
        <div class="first-text"><span>Sweatshirt</span>
        </div>
      </div>
    </a>
    <a href="#">
      <div>
        <div class="relative px-3">
          <picture class="pic-ar">
            <img deca-image="true" alt="Sports Shoes" src="assets/image/sportshoewomen.avif" class="ph-1">
          </picture>
        </div>
        <div class="first-text"><span>Sports Shoes</span>
        </div>
      </div>
    </a>
    <a href="#">
      <div>
        <div class="relative px-3">
          <picture class="pic-ar">
            <img deca-image="true" alt="Down Jackets" src="assets/image/downjackets.avif" class="ph-1">
          </picture>
        </div>
        <div class="first-text"><span>Padded & Down Jackets</span>
        </div>
      </div>
    </a>
    <a href="#">
      <div>
        <div class="relative px-3">
          <picture class="pic-ar">
            <img deca-image="true" alt="Sunglasses" src="assets/image/Sunglass.avif" class="ph-1">
          </picture>
        </div>
        <div class="first-text"><span>Sunglasses</span>
        </div>
      </div>
    </a>
  </div>
</div>
</div>

           <!-- <slider-part->-->

<div class="">
    <div class="mt-2">
      <img src="assets/image/cricket2.webp" class="d-block w-100" alt="...">
    </div>

            <!-- <Trending Collection> -->
    <div>
        <div class="container-fluid bg-light">
          <p class="h4 text-left mt-3 font-weight-bold pl-3">Trending Team Sport
            <i class="fa fa-hand-o-right"></i>
          </p>
        </div>
      </div>

      <div class="collection_list mt-3 row bg-light ml-0 border-dark overflow-hidden justify-content-center m-0 p-0">
              <div class="">
                <div class="collection_img position-relative">
                  <img src="assets/image/cricket_bat2.avif" class="w-100 ">

                  <span class="justify-content-end d-flex text-danger whishlist-icon position-relative">
                    <i class="fa fa-heart-o"></i>
                  </span>
                </div>
                <div class="text-center">
                  <div class="rating mt-4">
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star-half-o"></i></span>
                  </div>
                  <p class="text-capitalize my-1">Kids Tennis Cricket Bat</p>
                  <span class="font-weight-bold">₹450 ₹<strike>499</strike></span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>

              <div class="px-1 ">
                <div class="collection_img position-relative">
                  <img src="assets/image/football_shoe1.avif" class="w-100">
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
                  <p class="text-capitalize my-1">Mens Football Shoes</p>
                  <span class="font-weight-bold">₹599 ₹<strike>699</strike></span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>

              <div class="">
                <div class="collection_img position-relative">
                  <img src="assets/image/jearsy1.avif" class="w-100">
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
                  <p class="text-capitalize my-1">Men Football Shorts F100 - Black</p>
                  <span class="font-weight-bold">₹220 ₹<strike>249</strike></span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>

              <div class="px-1">
                <div class="collection_img position-relative">
                  <img src="assets/image/football2.avif" class="w-100">
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
                  <p class="text-capitalize my-1">Football Ball Training Size 5</p>
                  <span class="font-weight-bold">₹499</span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger  mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>
              <div class="">
                <div class="collection_img position-relative">
                  <img src="assets/image/cricket_t-shirt2.avif" class="w-100">
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
                  <p class="text-capitalize my-1">Cricket White Full Sleeve Men</p>
                  <span class="font-weight-bold">₹ 299 ₹<strike>399</strike></span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>

              <div class="">
                <div class="collection_img position-relative">
                  <img src="assets/image/cricket_bag1.avif" class="w-100 mt-3">
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
                  <p class="text-capitalize my-1">50 L Cricket Kit Bag JR</p>
                  <span class="font-weight-bold">₹800</span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger  mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>

              <div class="px-1">
                <div class="collection_img position-relative">
                  <img src="assets/image/cricket_t-shirt.avif" class="w-100 mt-3">
                  <span class="justify-content-end d-flex text-danger whishlist-icon position-relative">
                    <i class="fa fa-heart-o"></i>
                  </span>
                </div>
                <div class="text-center">
                  <div class="rating mt-4">
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <!-- <span class="text-danger"><i class="fa fa-star"></i></span> -->
                    <span class="text-danger"><i class="fa fa-star-half-o"></i></span>
                  </div>
                  <p class="text-capitalize my-1">CT 500 Adult T-Shirt Mint</p>
                  <span class="font-weight-bold">₹399 ₹<strike>499</strike></span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger  mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>

              <div class="">
                <div class="collection_img position-relative">
                  <img src="assets/image/basketball_wall1.avif" class="w-100 mt-3">
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
                  <p class="text-capitalize my-1">Basketball Hoop Wall mount K90</p>
                  <span class="font-weight-bold">₹999 ₹<strike>1,199</strike></span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>

              <div class="px-1">
                <div class="collection_img position-relative">
                  <img src="assets/image/cricket_ball2.avif" class="w-100 mt-3">
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
                  <p class="text-capitalize my-1">Cricket Tennis Ball Red</p>
                  <span class="font-weight-bold">₹50</span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger  mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>
              <div class="">
                <div class="collection_img position-relative">
                  <img src="assets/image/cricket_bat1.avif" class="w-100 mt-3">
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
                  <p class="text-capitalize my-1">Adult Tennis Cricket Bat</p>
                  <span class="font-weight-bold">₹799  ₹<strike>999</strike></span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger  mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>


            </div>


      <!-- <slide part- 2> -->

        <section class="slider m-0 p-0">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner mt-2 ">
    <div class="carousel-item active">
      <img src="assets/image/mencollection5.avif" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/image/skate.avif" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/image/banner.jpg" class="d-block w-100" alt="...">
    </div>

  </div>
 <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
</section>


        <!-- <Trending Pants> -->

     <div>
        <div class="container-fluid bg-light">
          <p class="h4 text-left mt-2 font-weight-bold pl-2">Most Trending Shorts
            <i class="fa fa-hand-o-right"></i>
          </p>
        </div>
      </div>

     <div class="collection_list mt-1 row bg-light ml-0 border-dark overflow-hidden justify-content-center m-0 p-0">
              <div class="">
                <div class="collection_img position-relative">
                  <img src="assets/image/short1.avif" class="w-100">
                  <span class="justify-content-end d-flex text-danger whishlist-icon position-relative">
                    <i class="fa fa-heart-o"></i>
                  </span>
                </div>
                <div class="text-center">
                  <div class="rating mt-4">
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star"></i></span>
                    <span class="text-danger"><i class="fa fa-star-half-o"></i></span>
                  </div>
                  <p class="text-capitalize my-1">Men Tennis Shorts-TSH100</p>
                  <span class="font-weight-bold">₹299 ₹<strike>349</strike></span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>

              <div class="px-1 ">
                <div class="collection_img position-relative">
                  <img src="assets/image/short2.avif" class="w-100">
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
                  <p class="text-capitalize my-1">Men Basketball Shorts SH100</p>
                  <span class="font-weight-bold">₹249 ₹<strike>299</strike></span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger  mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>

              <div class="">
                <div class="collection_img position-relative">
                  <img src="assets/image/short3.avif" class="w-100">
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
                  <p class="text-capitalize my-1">Mens Running Breathable Shorts</p>
                  <span class="font-weight-bold">₹220 ₹<strike>249</strike></span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger  mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>

              <div class="px-1">
                <div class="collection_img position-relative">
                  <img src="assets/image/short4.avif" class="w-100">
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
                  <p class="text-capitalize my-1">Men golf shorts MW500</p>
                  <span class="font-weight-bold">₹499</span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger  mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>
              <div class="">
                <div class="collection_img position-relative">
                  <img src="assets/image/short5.avif" class="w-100">
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
                  <p class="text-capitalize my-1">Men Tenis Shorts-Black</p>
                  <span class="font-weight-bold">₹299 ₹<strike>349</strike></span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger  mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>
            </div>
          </div>



          <!-- <Like To Move part> -->

      <div>
        <div class="container-fluid bg-light border border-primary mt-2">
          <p class="h4 text-left mt-2 font-weight-bold pl-3">Like To Move
            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
          </p>
        </div>
      </div>
      <div class="flex flex-wrap bg-light row justify-content-center mt-2 p-0 m-0">
          <div class="max-w-full px-3">
            <a href="#">
              <div class="relative flex flex-col min-w-0 overflow-hidden mt-2">
              <picture class="relative overflow-hidden block " aria-hidden="true">
                  <img  alt="Rainwear" src="assets/image/cardio.avif" class="img-fluid ">
                </picture>
              </div>
            </a>
          </div>
          <div class="max-w-full px-3">
            <a href="#">
              <div class="relative flex flex-col min-w-0 overflow-hidden mt-2">
              <picture class="relative overflow-hidden block " aria-hidden="true">
                  <img  alt="Rainwear" src="assets/image/runing.avif" class="img-fluid">
                </picture>
              </div>
            </a>
          </div>
        <div class="max-w-full px-3">
            <a href="#">
              <div class="relative flex flex-col min-w-0 overflow-hidden mt-2">
              <picture class="relative overflow-hidden block " aria-hidden="true">
                  <img  alt="Rainwear" src="assets/image/body_b.avif" class="img-fluid">
                </picture>
              </div>
            </a>
          </div>
          <div class="max-w-full px-3">
            <a href="#">
              <div class="relative flex flex-col min-w-0 overflow-hidden mt-2">
              <picture class="relative overflow-hidden block " aria-hidden="true" style="">
                  <img  alt="Rainwear" src="assets/image/training.avif" class="img-fluid">
                </picture>
              </div>
            </a>
          </div>
        </div>
      </div>

        <!-- <Trending Sunglass> -->

     <div>
        <div class="container-fluid bg-light">
          <p class="h4 text-left mt-3 font-weight-bold pl-2">Most Trending Sunglasses
            <i class="fa fa-hand-o-right"></i>
          </p>
        </div>
      </div>

     <div class="collection_list  row bg-light ml-0 border-dark overflow-hidden justify-content-center m-0 p-0">
              <div class="">
                <div class="collection_img position-relative">
                  <img src="assets/image/sunglass1.avif" class="w-100">
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
                  <p class="text-capitalize my-1">Adult Cycling Sunglasses</p>
                  <span class="font-weight-bold">₹299 ₹<strike>349</strike></span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger  mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>

              <div class="px-1 ">
                <div class="collection_img position-relative">
                  <img src="assets/image/sunglass2.avif" class="w-100">
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
                  <p class="text-capitalize my-1">Adult Hiking Sunglasses - MH570</p>
                  <span class="font-weight-bold">₹299 ₹<strike>399</strike></span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>

              <div class="">
                <div class="collection_img position-relative">
                  <img src="assets/image/sunglass3.avif" class="w-100">
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
                  <p class="text-capitalize my-1">Adult High-Definition Cycling Sunglasses</p>
                  <span class="font-weight-bold">₹399 ₹<strike>449</strike></span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger  mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>

              <div class="px-1">
                <div class="collection_img position-relative">
                  <img src="assets/image/sunglass4.avif" class="w-100">
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
                  <p class="text-capitalize my-1">Hiking Sunglasses MH120A</p>
                  <span class="font-weight-bold">₹349 </span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger  mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>
              <div class="">
                <div class="collection_img position-relative">
                  <img src="assets/image/sunglass5.avif" class="w-100">
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
                  <p class="text-capitalize my-1">Cycling Sunglasses ST100 Black</p>
                  <span class="font-weight-bold">₹349 ₹<strike>399</strike></span> 
                  <div>
                  <a href="#" class="btn btn-outline-danger  mt-1 mb-2 border border-danger add-cart">Add to Cart</a>
                </div>
              </div>
              </div>
            </div>
          </div>


             <!-- <Frame Part>  -->
 

        <div class="max-w-full row col-md-12 m-0 p-0 mt-2 justify-content-center">
          <div class="col-md-6 ">
            <picture>
              <img src="assets/image/frame1.avif" class="frame-photo w-100 " >
            </picture>
          </div>
        
          <div class="col-md-6 mt-1 w-100 h-50 ">
            <picture>
              <img src="assets/image/frame2.avif" class="frame-photo w-100">
            </picture>
            <div class="col-md-12 m-0 p-0 py-3 ">
            <picture>
              <img src="assets/image/frame3.avif" class="frame-photo w-100">
            </picture>
          </div>
          <div class="col-md-12 m-0 p-0">
            <picture>
              <img src="assets/image/frame4.avif" class="frame-photo w-100">
            </picture>
          </div>
          </div>
          
        </div>
      </div>
    </div>


            <!-- <Blog> -->

      <div>
        <div class="container-fluid bg-light">
          <p class="h4 text-center mt-4 font-weight-bold pl-2">Read our Sporty Stories
            <i class="fa fa-hand-o-right"></i>
          </p>
        </div>
      </div>

     <div class="collection_list mt-1 row bg-light ml-0 border-dark overflow-hidden justify-content-center m-0 p-0 col-md-12">
              <div class="col-md-3 border">
                <div class="collection_img position-relative">
                  <img src="assets/image/blog1.avif" class="w-100 ">
                </div>

                <div class="text-left pl-3 mb-2">
                  <p class="text-capitalize my-1 font-weight-bold mt-2">Top 5 Monsoon Accessories You Need</p>
                 
                  <div class="mt-3"><p>(2 min Read)</p>
                   <button class="btn-outline-primary blog-btn mt-2 px-2">Read Now</button>
                </div>
              </div>
              </div>

              
              <div class=" col-md-3 border">
                <div class="collection_img position-relative">
                  <img src="assets/image/blog2.avif" class="w-100">
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
                  <img src="assets/image/blog3.avif" class="w-100">
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
                  <img src="assets/image/blog4.avif" class="w-100">
                </div>

                <div class="text-left pl-2 mb-2">
                  <p class="text-capitalize my-1 font-weight-bold mt-2">Travel in monsoon - Top 7 places to visit in India during monsoon</p>
                 
                  <div class=" "><p>(2 min Read)</p>
                   <button class="btn-outline-primary blog-btn px-2" >Read Now</button>
                </div>
              </div>
              </div>
            </div>

 <?php
 include('footer.php');
 ?>
    </body>
    </html>
