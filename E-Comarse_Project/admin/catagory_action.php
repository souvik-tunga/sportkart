<?php
    include('../db_connection.php');
    global $con;
    if(isset($_POST['submit'])){
        $add_catagory=$_POST['add_catagory'];
        $folder='cat_pic/';
        $image=$_FILES['cat_image']['name'];
        $file=$_FILES['cat_image']['tmp_name'];


$sql ="INSERT INTO `category` (`category_name`,`cat_image`) VALUES ('".$add_catagory."','".$image."')";
$result = mysqli_query($con,$sql);
if($result){
    move_uploaded_file($file,$folder.$image);
    echo "<script> alert ('Add Catagory successfuly');window.location.href='category.php'; </script>";
}
else{
    echo "<script> alert ('Add Catagory Unsuccessfuly'); window.location.href='category.php';</script>";

}
}
?>