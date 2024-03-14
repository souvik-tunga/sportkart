<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
<style>
.x{background-image: linear-gradient( to right,#1f07f7 5%,#64afe8,#bd63db,#07f78b);}

.y{background-image: linear-gradient( to right top,#1b52de 5%,#64afe8,#bd63db,#1b52de);height: 700px; }
.main_p{margin-top:10%;border-radius:10px;}

</style>
</head> 
<body>

<div class=" container-fluid">
		<div class="container-fluid border y border">
			<div class="col-md-3 main_p mx-auto  bg-white border border-danger">
            <form  class="form-group container" action="adminlogin.php" method="POST" enctype="multipart/form-data">
				
					<div class="row">
						<div class="col-md-12  pt-4 pb-4">
							<h2 class="text-center"><b>Admin Login</b></h2>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12  pt-2 ">
						<label class="d-block "><b>Username</b></label>
							<div class=" form-check-inline w-100 " style="border-bottom:2px solid #c5c9c6;">			
							<i class="fa fa-envelope" aria-hidden="true"></i>
									<input type="text" name="username" placeholder="Type your email" class="form-control border-0 shadow-none	" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 pt-2">
						<label class="d-block"><b>Password</b></label>
							<div class="form-check-inline w-100 " style="border-bottom:2px solid #c5c9c6;">
							<i class="fa fa-key" aria-hidden="true"></i>
									<input type="password" name="password" placeholder="Type your password" class="form-control border-0 shadow-none" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 d-flex justify-content-end">
							<a href="#" >Forgot password?</a>
						</div>
					</div>

					<div class="row">
						<div class=" py-4 col-md-12">
							<button class="text-uppercase form-control w-100 x text-white" name="login" style="border-radius:45px;">Login</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</form>
			

</body>
</html>