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
$id=$_GET['p_id'];
$price=$_GET['price'];
$u_id=$_SESSION['uid'];
global $con;
$sql="SELECT * FROM delivary_address WHERE user_id = '".$u_id."'";
$query=mysqli_query($con,$sql);
$rows=mysqli_num_rows($query);
$result=array();
while($rec=mysqli_fetch_assoc($query))
{
  $result[]=$rec;
}
?>
<div class="container my-5 py-5">

  <!--Section: Design Block-->
  <section>

    <div class="row">
    <div class="col-md-8 mb-4">
      <?php 
      if($rows<1)
      {
        ?>
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0 text-font text-uppercase">Delivery address</h5>
          </div>
          <div class="card-body">
            <form action="deliver_address_action.php" method="post">
              <input type="hidden" name="u_id"  value="<?php echo $_SESSION['uid'];?>">
              <input type="hidden" name="p_id" value="<?php echo $id; ?>">
              <input type="hidden" name="price" value="<?php echo $price; ?>">
              <div class="form-outline mb-4">
                <input type="text" id="form11Example4" name="f_name" class="form-control" />
                <label class="form-label" for="form11Example4">Name</label>
              </div>

             
              <!-- Text input -->
              <div class="form-outline mb-4">
                <input type="text" id="form11Example4" name="add" class="form-control" />
                <label class="form-label" for="form11Example4">Address</label>
              </div>
<!-- Email input -->
<div class="form-outline mb-4">
                <input type="text" id="form11Example5" name="pin" class="form-control" />
                <label class="form-label" for="form11Example5">Pincode</label>
              </div>

              <!-- Number input -->
              <div class="form-outline mb-4">
                <input type="number" id="form11Example6" name="phn" class="form-control" />
                <label class="form-label" for="form11Example6">Phone</label>
              </div>

              <!-- Message input -->
              <div class="form-outline mb-4">
                <textarea class="form-control" name="addi" id="form11Example7" rows="4"></textarea>
                <label class="form-label" for="form11Example7">Additional information</label>
              </div>

            
              <div class="text-center">
          <button class="border-0 rounded text-white font-weight-bolder" style="padding:10px 25px; background-color:blue;">Place Order</button>

        </div>
            </form>
          </div>
          </div>
          <?php
          }
           else{ ?>
<div class="col-md-12">
  <form action="order_action.php" method="post">
  <input type="hidden" name="u_id"  value="<?php echo $_SESSION['uid'];?>">
              <input type="hidden" name="p_id" value="<?php echo $id; ?>">
              <input type="hidden" name="price" value="<?php echo $price; ?>">
<div class="" id="accordionExample">
          <div class="card body accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <div class="accordion-button collapsed text-uppercase text-font h4" type="button"
                data-mdb-toggle="collapse" data-mdb-target="#collapseOne" aria-expanded="false"
                aria-controls="collapseOne">
                Customer Address 
              </div>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
              data-mdb-parent="#accordionExample">
              <div class="accordion-body">
                <div class=" d-flex">
                  <input type="text" id="form1" class="form-control" />
                  <label class="form-label" for="form1">Enter code</label>
                </div>
              </div>
            </div>

            </div>
        </div>

        <div class="card mb-4">
          <div class="card-body">
            <p class="text-uppercase fw-bold mb-3 text-font"> address</p>
            <div class="row">
              <?php foreach($result as $val)
              { ?>
              <div class="col-md-4">
                <input type="radio" required value="<?php echo $val['id']?>" name="address">
                <label for=""><?php echo $val['name']; ?></label>
                <div><?php echo $val['Address']; ?> ,<?php echo $val['additional']; ?></div>
                <div><?php echo $val['phn_no']; ?></div>
                <div><?php echo $val['pin_code']; ?></div>


            
              </div>
              <?php } ?>
              
            </div>


            </div>
        </div>
        <div class="" id="accordionExample">
          <div class="card body accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <div class="accordion-button collapsed text-uppercase text-font h4" type="button"
                data-mdb-toggle="collapse" data-mdb-target="#collapseOne" aria-expanded="false"
                aria-controls="collapseOne">
                Payment Option
              </div>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
              data-mdb-parent="#accordionExample">
              <div class="accordion-body">
                <div class="form-outline d-flex">
                  <input type="text" id="form1" class="form-control" />
                  <label class="form-label" for="form1">Enter code</label>
                </div>
              </div>
            </div>

            </div>
        </div>

        <div class="card mb-4">
          <div class="card-body">
            <p class="text-uppercase fw-bold mb-3 text-font"> Payment</p>
            <div class="row">
              <div class="col-md-4">
                <input type="radio" required value="cash" name="payment">.
                <label for="">Cash On Delivery</label>
              </div>
              
            </div>


            </div>
        </div>
        <div class="col-md-12">
          <button class="btn bg-primary">Confirm Order</button>
        </div>
        </form>
</div>
<?php }?>
      </div>
      <!-- <div class="col-md-4 mb-4 position-static">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0 text-font">1 item <span class="float-end mt-1"
                style="font-size: 13px ;"></span></h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <img src="admin/all_product_photo/abcd.webp"
                  class="rounded-3" style="width: 100px;" alt="Blue Jeans Jacket" />
              </div>
              <div class="col-md-6 ms-3">
                <span class="mb-0 text-price">₹599</span>
                <p class="mb-0 text-descriptions">Black men t-shirt</p>
                <span class="text-descriptions fw-bold">Black</span> <span
                  class="text-descriptions fw-bold">L</span>
                <p class="text-descriptions mt-0">Qty: <span class="text-descriptions fw-bold">1</span>
                </p>
              </div>
            </div>
            <div class="card-footer mt-4">
              <ul class="list-group list-group-flush">
                <li
                  class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0 text-muted">
                  Subtotal
                  <span>₹599</span>
                </li>
                <li
                  class="list-group-item d-flex justify-content-between align-items-center px-0 fw-bold text-uppercase">
                  Total to pay
                  <span>₹599</span>
                </li>
              </ul>
            </div> -->


          </div>
        </div>
      </div>
    </div>

  </section>
  <!--Section: Design Block-->

</div>

<?php
include('footer.php');
?>