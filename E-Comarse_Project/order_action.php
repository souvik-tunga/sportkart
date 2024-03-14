<?php 
include('db_connection.php');
include('function.php');
$user_id=$_POST['u_id'];
    $pr_id=$_POST['p_id'];
    $delivery_add=$_POST['address'];
    $payment_opt=$_POST['payment'];
    $pick_date = date('Y-m-d');
    $price=$_POST['price'];
    global $con;
    $sql="INSERT INTO order_table(cust_id,product_id,delivery_address_id,payment_option,pick_date,price) VALUES('".$user_id."','".$pr_id."','".$delivery_add."','".$payment_opt."','".$pick_date."','".$price."')";
    $query=mysqli_query($con,$sql);
    if($query)
    {
        echo "<script> window.location.href='order_confirm.php';</script>";
    }
    else
    {
        echo "<script>alert('Order Not Confirm')</script>";
    }
?>