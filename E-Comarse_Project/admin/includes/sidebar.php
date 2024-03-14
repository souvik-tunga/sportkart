<style>
.pr_img{ border-radius: 100%;}


  </style>
 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
             <div class="image">
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
                  ?></div>
                    <b class="text-light"> <?php echo $_SESSION['name'];?></b>
              </div>
            </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
          <li class="nav-item">
            <a href="admindashboard.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
                <!-- <span class="right badge badge-danger"></span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
                Products
                <i class="fas fa-angle-right right"></i>
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="product_add.php" class="nav-link">
                  <i class="bi bi-cart-plus nav-icon"></i>
                  <p>Add Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_product.php" class="nav-link">
                  <i class="bi bi-cart-check-fill nav-icon"></i>
                  <p>View Product</p>
                </a>
              </li>
          </ul>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-bar-chart"></i>
              <p>
                Product Categories
                <i class="fas fa-angle-right right"></i>
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="category.php" class="nav-link">
                  <i class="bi bi-bar-chart nav-icon"></i>
                  <p>View & Add Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="sub_category.php" class="nav-link">
                  <i class="fa fa-sliders nav-icon"></i>
                  <p>View & Add Sub Cat..</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p>
                Order
              </p>
            </a>
            
          <li class="nav-item">
            <a href="customer.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Customer
              </p>
            </a>        
          </li>
          
             <div class="image" style="margin-top:235px;">
                  <li class="nav-item ml-3">
                  <a class="text-dark" href="adminprofile.php">
                     <?php
                        if($_SESSION['image']==''){
                      ?>
                          <img src="../assets/image/non_photo3.jpg" class="pr_img"> <b> Admin</b>
                      <?php
                      }
                  else
                      {  
                  ?>
                      <img class=" pr_img w-30 h-10" src="<?php echo $_SESSION['image'];?>">
                  <?php  
                      }
                  ?>
                    <b class="text-light"><?php echo $_SESSION['name'];?></a></div></li></b>
                   
                    <li class="nav-item mt-2">
                        <a class="ml-4  text-light" href="adminlogout.php">
                            <i class="fa fa-sign-out"></i> Logout
                        </a>
                    </li>
      </nav>
    </div>
  </aside>