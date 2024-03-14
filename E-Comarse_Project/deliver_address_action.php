<?php 
include('db_connection.php');
include('function.php');
$user_id=$_POST['u_id'];
$p_id=$_POST['p_id'];
$add_name=$_POST['f_name'];
$add_mob=$_POST['phn'];
$add_pin=$_POST['pin'];
$add_address=$_POST['add'];
$price=$_POST['price'];
$addi=$_POST['addi'];
    $call=AddDeliveryAddress($user_id,$add_name,$add_mob,$add_pin,$add_address,$addi);
    if($call)
    {
        echo "<script>alert('Inserted');
        window.location.href='paymentpage.php?p_id=$p_id&price=$price';
        </script>";
    }
    else
    {
        echo 'not inserted';
    }
?>