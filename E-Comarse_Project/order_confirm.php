<?php
session_start();
include('topbar.php');
if(!isset($_SESSION['uid']))
{
    echo "<script>alert('plz login.....'); window.location.href='index.php';</script>";
}
?>

<?php
include('header.php');
?>


<style>
.x{background-image: linear-gradient( to right,#1f07f7 5%,#64afe8,#bd63db,#07f78b);}

.y{background-image: linear-gradient( to right top,#1b52de 5%,#64afe8,#bd63db,#1b52de);height: 700px; }
.main_p{margin-top:5%;border-radius:10px;}


</style>
</head> 
<body>

<div class=" container-fluid">
		<div class="container-fluid border y border">
			<div class="col-md-3 main_p mx-auto  bg-white border border-danger">
            <form  class="form-group container" >
				
					<div class="text-center mt-4  "><img src="assets/image/successful.png"></div>
                    <div class="text-center text-success"><h2>Order Successful</h2></div>

					<div class="row">
						<div class=" py-4 col-md-12">
                            <div class="ml-5">
							<a href="index.php" class="ml-2 text-decoration-none text-uppercase text-center form-control w-75 x text-white" name="login" style="border-radius:45px;">Thank You</a>
</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</form>


<?php
include('footer.php');
?>