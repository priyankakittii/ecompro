<?php
include "../shared/authgaurd_customer.php";
include_once"../shared/connection.php";

$orderid=$_GET['orderid'];
$status=mysqli_query($conn,"delete from orders where orderid=$orderid");
if($status)
{
    echo"Product removed from cart";
    header("location:vieworder.php");
}
else{
    echo"Failed to remove from Cart";
    echo mysqli_error($conn);
}
?>