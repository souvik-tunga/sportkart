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
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box border border-info">
              <div class="inner my-4">
                <a href="view_product.php">
                <h3>Products</h3>

                <!-- <p>150 Product</p> -->
              </div>
              <div class="icon">
                <i class="ion ion-bag text-info"></i>
              </div>
              <a href="view_product.php" class="small-box-footer bg-info text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </a>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box border border-success">
              <div class="inner my-4">
                <a href="category.php">
                <!-- <h3>53<sup style="font-size: 20px">%</sup></h3> -->
                <h3>Categories</h3>
                <!-- <p>3 Categories</p> -->
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars text-success"></i>
              </div></a>
              <a href="category.php" class="small-box-footer bg-success text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box border border-warning shadow">
              <div class="inner my-4">
              <a href="customer.php">
                <h3>Customer</h3>

                <!-- <p class="text-light">7 Customer</p> -->
              </div>
              <div class="icon">
                <i class="ion ion-person-add text-warning"></i>
              </div></a>
              <a href="customer.php" class="small-box-footer bg-warning">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box border border-danger">
              <div class="inner my-4">
                <h3>Order</h3>

                <!-- <p>10 Order</p> -->
              </div>
              <div class="icon">
                <i class="ion fa fa-cart-plus text-danger"></i>
              </div>
              <a href="#" class="small-box-footer  bg-danger text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <div class="card shadow border-0 mb-7 mt-3">
                    <div class="card-header shadow">
                        <h3 class="mb-0">Recent Activity</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">SL No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                    
                                    <th scope="col">Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                    <a class="text-heading font-semibold" href="#">
                                        01
                                    </a> 
                                    </td>
                                    <td>
                                        <img alt="..." src="../assets/image/souvik.jpg" class="pr_img avatar avatar-sm rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            Souvik Tunga
                                        </a>
                                    </td>
                                    
                                    <td>
                                        
                                        <a class="text-heading font-semibold" href="#">
                                            souviktunga6@gmail.com
                                        </a>
                                    </td>
                                    <td>
                                    <a class="text-heading font-semibold" href="#">
                                            8145364482
                                    </a>
                                    </td>
                                    <td>
                                        <span class="">
                                        <i class="fa fa-check text-success"></i> <b>Active</b>
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class=" btn-sm btn btn-success">Edit</a>
                                        <a href="#"  class="btn-sm btn btn-danger">
                                            <i class="bi bi-trash"></i>
                                            </a>
                                    </td>
                                </tr>

                                <tbody>
                                <tr>
                                    <td>
                                    <a class="text-heading font-semibold" href="#">
                                        02
                                    </a> 
                                    </td>
                                    <td>
                                        <img alt="..." src="../assets/image/golf_t-shirt.avif" class="avatar avatar-sm rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            Prasanta Mishra
                                        </a>
                                    </td>
                                    
                                    <td>
                                        
                                        <a class="text-heading font-semibold" href="#">
                                            prasantamishra@gmail.com
                                        </a>
                                    </td>
                                    <td>
                                    <a class="text-heading font-semibold" href="#">
                                            8923521087
                                    </a>
                                    </td>
                                    <td>
                                        <span class="">
                                        <i class="fa fa-close text-danger"></i> <b>Deactive</b>
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class=" btn-sm btn btn-success">Edit</a>
                                        <a href="#"  class="btn-sm btn btn-danger">
                                            <i class="bi bi-trash"></i>
                                            </a>
                                    </td>
                                </tr>
                            </div>
                        </div>


<?php
include('includes/footer.php');

?>