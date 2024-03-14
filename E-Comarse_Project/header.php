<?php
include('topbar.php');
include('db_connection.php');
include('function.php');
?>
<!-- <header> -->

<div id="header">
      <div class="max-w-full headerrr pr-2 ">
                <div class="h-text text-right px-2 text-white ">
                     <a href="#">
                        <i class="fa fa-firefox"> App Download</i > 
                    </a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="#">
                        <i class="fa fa-question-circle"> Help</i>
                    </a>
                  </div>
          </div>
        </div>

          <!-- <Navbar>-->

       
  <nav id="navbar_top">
    <div class="navbar navbar-expand-xl  bg-primary py-2 ">
      <div class="container ">
         <div class="mx-auto order-lg-2 ">
         
           <button type="button" class="btn  position-relative  text-h" data-target="#mymodel" data-toggle="modal">
            <?php if(!isset($_SESSION['name']))
            {
              ?>
            <a class=" text-h" ><i class="fa fa-user" aria-hidden="true"></i> Account</a>
              <?php
            }
            else{
              ?>
              
  <button class="btn text-s text-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?php
    if($_SESSION['image']==''){
      ?>
      <i class="fa fa-user" aria-hidden="true"></i>
      <?php
    }
    else
    {  
      ?>
    <img class="nav_img" src="<?php echo $_SESSION['image'];?>">
  <?php  
}
?>
<?php echo $_SESSION['name'];?>
    
  
  </button>
  <div class="dropdown-menu menu-d" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="profile.php"><i class="fa fa-user"></i> Profile</a>
    <a class="dropdown-item" href="order_history.php"><i class="fa fa-shopping-cart"></i> Order</a>
    <a class="dropdown-item" href="#"><i class="fa fa-cog"></i> Setting</a>
    <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
    <!-- <a class="dropdown-item" href=""><i class="fa fa-download"></i> Download App</a> -->
    
  </div>

              <?php 
            }
            ?>
            
          </button>
            <div class="modal" id="mymodel">
              <div class="modal-dialog">
                <div class="modal-content ">                  
                  <div class="">
              <div class="form-container ">
                <div class="form-btn">
                  
                  <span class="font-weight-bold" onclick="register()">Register</span>
                  <span class="font-weight-bold" onclick="login()">Login</span>
                  <button type="button" class="close pl-4" data-dismiss="modal"> &times;</button>
                  <hr id="Indicator">
                </div> 
                  <form action="login.php" name="myform" method="POST" id="LoginForm"  >
                    <input type="text" id="email" name="email" placeholder="&#xf0e0; Emter email">
                    <input type="password" id="pass" name="password" placeholder="&#xf023; Password">
                    <button type="submit" class="btn border border-dark"  onclick="return validateform();">Login</button>
                    <a class="text-dark" href="#">Forgot Password ?</a>
                  </form>

                    <form action="signup.php" method="post" id="RegForm" >
                    <input type="text" id="ph" name="number" placeholder="&#xf095; Phone number" onkeyup="validphone(this)">
                    <input type="text" id="email_reg" name="email" placeholder="&#xf0e0; Emter email">
                    <input type="text" id="fname" name="fname" placeholder="&#xf007; First Name"  onkeyup="checkname1(this)">
                    <input type="text" id="lname" name="lname" placeholder="&#xf007; Last Name" onkeyup="checkname1(this)">
                    <input type="password" id="password_reg" name="password" placeholder="&#xf023; Password">
                    <!-- <input type="submit" name="insert" value="Register" class="btn btn-success border border-dark" onclick="return checknumber();" > -->
                    <button type="submit" id="check_n" name="submit" class="btn border border-dark" onclick="return checknumber()">Register</button>
                  </form>

              </div>
            </div>
                </div>
              </div>
            </div>

         
           <button type="button" class="btn position-relative text-h ">
            <a class=" text-h" href="#"><i class="fa fa-heart" aria-hidden="true"></i> Whishlist</a>
          </button>
         
          <button type="button" class="btn position-relative text-h">
            <a class=" text-h" href="addcart.php"><i class="fa fa-cart-plus" aria-hidden="true"></i> Cart</a>
          </button>
          
           
        </div>
          
  
        
        <button class="navbar-toggler border-white text-white mr-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse text-left" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto text-center">
            <li class="nav-item active py-2 text-h">
              <a class="nav-link text-h" href="index.php"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item pl-2 py-2 text-capitalize text-h">
              <a class="nav-link text-h " href="#"> All Sports </a>
            </li>
             <li class="nav-item px-2 py-2 text-capitalize text-h">
              <a class="nav-link text-h " href="#"> About Us </a>
            </li>
             <li class="nav-item px-2 pr-4 py-2 text-h">
              <a class="nav-link text-h " href="#">Blogs</a>
            </li>
            <li class="">
       <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control  text-center " type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn  border ">
              <i class="fa fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->
             <button type="button" class="btn position-relative search-w ">
              <input class="form-control mr-sm-2 text-center " type="search" placeholder="Search For 6000+ Products">
          </button>
            </li>
          </ul>
         
        </div>
      </div>
       </nav>
       