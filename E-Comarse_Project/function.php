<?php 
function fetchViewSubImage($id)
{
   global $con;
   $sql="SELECT * FROM product_more WHERE product_id = '".$id."'";
   $qur=mysqli_query($con,$sql);
   $result=array();
   while($rec=mysqli_fetch_assoc($qur))
   {
       $result[]=$rec;
   }
   if($result)
   {
       return $result;
   }
   else{
       return false;
   }
}
function AddDeliveryAddress($user_id,$name,$phn_no,$pin_code,$addres,$addit)
{
    global $con;
    $sql="INSERT INTO delivary_address (user_id,name,phn_no,pin_code,Address,additional) VALUES('".$user_id."','".$name."','".$phn_no."','".$pin_code."','".$addres."','".$addit."')";
    $query=mysqli_query($con,$sql);
    if($query)
    {
        return $query;
    }
    else
    {
        return false;
    }
}
function alldata($id)
{
   global $con;
   $sql="SELECT * FROM product WHERE id = '".$id."'";
   $qur=mysqli_query($con,$sql);
   $result=array();
   while($rec=mysqli_fetch_assoc($qur))
   {
       $result[]=$rec;
   }
   if($result)
   {
       return $result;
   }
   else{
       return false;
   }
}
?>