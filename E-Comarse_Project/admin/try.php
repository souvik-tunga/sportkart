<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="admin.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
  <link rel="stylesheet" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
  

   
    <!-- <link rel="stylesheet" href="https://demo.dashboardpack.com/architectui-html-free/main.css"> -->
  <style>
.pr_img{ border-radius: 100%; margin-left:10%;}

.pr{margin-left:2%;}
.add{
    margin-left:25%;
}
.ok{margin-left:15%;}

  </style>
  <title>Ecommerce website</title>
</head>
<body>

<!-- Dashboard -->
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <!-- Vertical Navbar -->
    <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
        <div class="">
            <!-- Toggler -->
            <button class=" navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            
            <div class="container-fluid navbar-brand  bg-info  mb-5 px-6 me-0 shadow">
            <!-- <div class="pr_icon"><i class="fa fa-user-circle-o ml-4" aria-hidden="true"></i> Admin</div> -->
            <?php
                       if($_SESSION['image']==''){
                     ?>
                        <img src="../assets/image/non_photo3.jpg" class="pr_img"> <b> Admin</b>
                     <?php
                     }
                 else
                    {  
                ?>
                    <img class=" pr_img " src="<?php echo $_SESSION['image'];?>">
                <?php  
                    }
                ?>
                   <b> <?php echo $_SESSION['name'];?></b>

               <!-- <img src="../assets/image/non_photo3.jpg" class="h- "> <b> Admin</b> -->
                </br> <div class="ok badge badge-lg badge-dot">
                 <i class="bg-success"></i> Online
                 
</div>  </div>
               
                
            
        
           
<!-- <div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>     -->
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="admindashboard.php" class="mm-active">
                        <i class="metismenu-icon fa fa-home"></i>
                        Dashboard
                    </a>
                </li>
                <li class="app-sidebar__heading">Components</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon fa fa-user-md"></i>
                        Doctor
                        <i class="metismenu-state-icon fa fa-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="Add_doctor.php">
                                <i class="metismenu-icon"></i>
                                Add Doctor
                            </a>
                        </li>
                            
            </ul>
        </div>
    </div>
    
</div>    
     
</nav>
    <!-- Main content -->
    <div class=" mt-3 h-screen flex-grow-1 overflow-y-lg-auto">
        <!-- Header -->
        <header class=" pt-6 mb-2">
            <div class="container-fluid">
                <div class="mb-npx">
                    <div class="row align-items-center">
                        <div class="row col-sm-12  col-12 mb-4 mb-sm-0">
                            <!-- Title -->
                            <div class=" ls-tight"><h2> Dashboard</h2>
                            
                    </div>
                        </div>
                    </div>
                    
                    <!-- Nav -->
                    
                </div>
            </div>
        </header>
        <!-- Main -->
        <main class="py-6 bg-surface-secondary">
            <div class="container-fluid">
                <!-- Card stats -->
                <div class="row g-6 mb-6">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border border-tertiary">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-1">Dashboard</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                                            <i class="fa fa-home"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border border-info">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Products</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-info text-white text-lg rounded-circle">
                                            <i class="fa fa-shopping-bag"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border border-primary">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Product Categories</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                            <i class="fa fa-bar-chart"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border border-danger">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Order</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-danger text-white text-lg rounded-circle">
                                            <i class="fa fa-cart-arrow-down"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border border-warning">
                            <a href="customer.php">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Customers</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white text-lg rounded-circle">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <!-- <recent activity> -->

        <div class="card shadow border-0 mb-7">
                    <div class="card-header">
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
                                        <img alt="..." src="../assets/image/souvik.jpg" class="avatar avatar-sm rounded-circle me-2">
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
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-success"></i>Active
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
                                            Prasun Sai Khatua
                                        </a>
                                    </td>
                                    
                                    <td>
                                        
                                        <a class="text-heading font-semibold" href="#">
                                            jeeshuda@gmail.com
                                        </a>
                                    </td>
                                    <td>
                                    <a class="text-heading font-semibold" href="#">
                                            8328720780
                                    </a>
                                    </td>
                                    <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-danger"></i>Inactive
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
                </main>
             </div>
        </div>

        
                    
                
    <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js"></script>
    <!-- jquery -->
    <script src = "js/jquery-3.6.0.js"></script>
    <!-- bootstrap js -->
    <script src = "bootstrap/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script src = "js/index1.js"></script>
  
  </body>
  
  </html>