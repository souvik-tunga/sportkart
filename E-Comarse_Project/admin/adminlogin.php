<?php
		include('../db_connection.php');
		$name=$_POST['Name'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		global $con;
	    if (isset($_POST['login'])) {
	    	
		    $sql="SELECT * FROM `admin` WHERE email='$username' AND password='$password'";
			
		    $result = mysqli_query($con, $sql);
		    $row = mysqli_num_rows($result);
		    		

		    if($row>0){
		    	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		    	session_start();
		    	$_SESSION['username']=$row['email'];
				$_SESSION['password']=$row['password'];
		    	$_SESSION['name']=$row['name'];
		    	$_SESSION['id']=$row['id'];
		    	$_SESSION['image']=$row['image'];
		    	header("location:admindashboard.php");
	        }  
	        else{  
	            echo "<script>alert('Error!invalid Admin username and password.');window.location.href='admin.php'</script>";
	        }
    	}
	
?>