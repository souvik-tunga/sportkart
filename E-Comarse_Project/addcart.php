<?php
session_start();
if(!isset($_SESSION['uid']))
{
    echo "<script>alert('plz login.....'); window.location.href='index.php';</script>";

}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <title>Add To Cart</title>
    
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

    
    <!-- <Add to cart Part> -->


    <div class="container cart-page">
          <table>
            <tr>
              <th>Product</th>
              <th>Quantity</th>
              <th>Product Price</th>
              <th></th>
            </tr>
            <?php foreach($result as $val)
            { 
              $id=$val['id'];
              $price=$val['product_price'];
              $dis=$val['discount'];
              $pro=$val['discount_price'];
              ?>
            <tr>
              <td>
                <div class="cart-info d-flex">
                    <img class="p-size border" src="<?php echo'admin/all_product_photo/'.$val['image']; ?>">
                    <div class="pl-3">
                        <p class="font-weight-bold"> <?php echo $val['product_name']; ?></P>
                        <small>Price: ₹<?php echo  $val['product_price']; ?></small>

                    </div>
                </div>
              </td>
              <td><input class="w-25" type="number" min="1" max="5" value="1"></td>
              <td>₹<?php echo  $val['product_price']; ?></td>
              <td><a href=""><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
            </tr>
            <?php } ?>
          </table>
        </div>
        
      <div class="container">
        <div class=" text-center mb-4 total-price ">
            <table>
                <tr>
                    <td class="pl-3"> Total:</td>
                    <td>₹ <?php echo $price ?></td>
                </tr>
                <tr>
                    <td>Discount:</td>
                    <td>₹ <?php echo $dis; ?></td>
                </tr>
                <tr>
                    <td>Total:</td>
                    <td>₹ <?php echo $pro ?></td>
                </tr>
            </table>
            
        </div>
          </div>
        <div class="container text-right buy-b mb-4">
        <a href="paymentpage.php?p_id=<?php echo $id; ?>&price=<?php echo $price; ?>"><button class="btn btn-primary">Proced to Pay <i class="fa fa-shopping-baske"></i></button></a>
          </div>
    


   
     <!-- <Footer-Section> -->

<div class="max-w-full">
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

            <a class="btn btn-primary btn-floating m-1" href="https://www.facebook.com/souvik.tunga.7"role="button">
              <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>

            <a class="btn btn-danger btn-floating m-1" href="#!" role="button">
               <i class="fa fa-google" aria-hidden="true"></i>
             </a>
            <a class="btn btn-primary btn-floating m-1" href="#!" role="button">
               <i class="fa fa-twitter" aria-hidden="true"></i>
             </a>

            <a class="btn btn-info btn-floating m-1" href="https://www.instagram.com/_souvik_tunga_/?fbclid=IwAR32AJxtbeZajp5k2s5N9vhIH-7aDOkUpwwqSAzzjaXbuMc8vpn0BLeiVs0&__coig_restricted=1"role="button">
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



        </div> 
      </div>
      <script src="assets/js/main.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

         

    </body>
    </html>
