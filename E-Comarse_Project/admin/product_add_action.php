<?php
    include('../db_connection.php');
    global $con;
    if(isset($_POST['submit'])){
        $name=$_POST['product'];
        $category=$_POST['category'];
        $sub_catagory=$_POST['sub_catagory'];
        $product_details=$_POST['product_details'];
        $product_price=$_POST['product_price'];
        $discount=$_POST['discount'];
        $discount_price=$_POST['discount_price'];
   
        $image=$_FILES['images']['name'];
        $file=$_FILES['images']['tmp_name'];
        $folder='all_product_photo/'. $image;

        $product_subimage=$_FILES['product_sub_image'];

        $sql="INSERT INTO `product` (`product_name`,`category_id`,`subcatagory_id`,`product_details`,`product_price`,`discount_price`,`discount`,`image`) VALUES ('".$name."','".$category."','".$sub_catagory."','".$product_details."','".$product_price."','".$discount_price."','".$discount."','".$image."')";
        $result=mysqli_query($con,$sql);
        if($result)
        
	
        {
            move_uploaded_file($file,$folder);
            $product_id=mysqli_insert_id($con);

            foreach ($product_subimage['name'] as $key => $value) {
                $img_more_name=$product_subimage['name'][$key];
                $img_more_tmp_name=$product_subimage['tmp_name'][$key];
                $image_more_location='product_more_pic/'.time().$img_more_name;
                $sql1="INSERT INTO `product_more` (`product_id`,`sub_image`) VALUES ('".$product_id."','".$image_more_location."')";
                $result1=mysqli_query($con,$sql1);
                // echo $sql1;
                if($result1){
                    move_uploaded_file($img_more_tmp_name,$image_more_location);
                }
            }
                //  echo "okk";
                    // exit();
                    echo "<script>alert('product data added successfully');window.location.href='product_add.php';</script>";
                }
                else{
                    echo"<script>alert('product data added unsuccessfully');window.location.href='product_add.php';</script>";
                }
                }

?>