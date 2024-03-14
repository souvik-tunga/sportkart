<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
  <link rel="stylesheet" href="bootstrap.css/css/bootstrap.css">
	<title>Account</title>
</head>
<body>
    <div class="container bg-info text-center">
        <div class="row">
            <div class="">
                <h2>
                    Welcome  <?php echo $_SESSION['email']; ?>
                </h2>
            </div>
        </div>
</div>

</body>
</head>
</html>