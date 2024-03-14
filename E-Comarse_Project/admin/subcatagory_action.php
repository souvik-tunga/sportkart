<?php
    include('../db_connection.php');
    global $con;
    if(isset($_POST['submit'])){
        $catagory=$_POST['catagory'];
        $add_subcatagory=$_POST['add_subcatagory'];
        $folder='subcat_pic/';
        $image=$_FILES['subcat_image']['name'];
        $file=$_FILES['subcat_image']['tmp_name'];

$sql ="INSERT INTO `sub_catagory` (`catagory_id`,`subcatagory_name`,`subcat_pic`) VALUES ('".$catagory."','".$add_subcatagory."','".$image."')";
$result = mysqli_query($con,$sql);
if($result){
    move_uploaded_file($file,$folder.$image);
    echo "<script> alert ('Add Sub Catagory successfuly'); window.location.href='sub_category.php';</script>";
}
else{
    echo "<script> alert ('Add Sub Catagory Unsuccessfuly'); window.location.href='sub_category.php';</script>";

}

}