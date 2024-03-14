include('dbconnect.php');
	session_start();
	$user_id=$_SESSION['user_id'];
	global $conn;
	if(isset($_POST['update_profile'])){
	$update_name=$_POST['update_name'];
	$update_email=$_POST['update_email'];
	$update_pass=$_POST['update_pass'];
	$new_pass=$_POST['new_pass'];
	$confirm_pass=$_POST['confirm_pass'];
	$old_pass = $_POST['old_pass'];
	
   $update_name = mysqli_real_escape_string($conn,$update_name);
   $update_email = mysqli_real_escape_string($conn,$update_email);
		
   mysqli_query($conn, "UPDATE `signup` SET name = '$update_name', email = '$update_email' WHERE id = '$user_id'") or die('query failed');

   
   $update_pass = mysqli_real_escape_string($conn, $update_pass);
   $new_pass = mysqli_real_escape_string($conn, $new_pass);
   $confirm_pass = mysqli_real_escape_string($conn, $confirm_pass);

   	if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      	if($update_pass != $old_pass){
         	echo "<script>alert('old password not matched!');</script>";
      	}
      	elseif($new_pass != $confirm_pass){
         	echo "<script>alert('Confirm password not matched!');</script>";
      	}
      	else{
            mysqli_query($conn, "UPDATE `signup` SET password = '$confirm_pass' WHERE id = '$user_id'") or die('query failed');
	        echo "<script>alert('Password update succssfully!');</script>";
      }
   }

   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 'Assets/image/uploaded_img/'.$update_image;

   if(!empty($update_image)){
      	if($update_image_size > 2000000){
         echo 'image is too large';
      	}
      	else{
         	$image_update_query = mysqli_query($conn, "UPDATE `signup` SET image = '$update_image' WHERE id = '$user_id'") or die('query failed');
         	if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
        }
        	echo "<script>alert('Image update succssfully!');</script>";
      }
   }

}
?>
