<?php
include "../shared/authgaurd_customer.php";
$pid=$_GET['pid'];
$userid = $_SESSION['userid'];

// echo "received pid = $pid";

include "../shared/connection.php";
$status = mysqli_query($conn, "insert into cart(userid,pid) values($userid, $pid)");

if ($status) {
    echo "Added to cart succesfully!!";
    header("location:viewcart.php");
    
    
} else {
    echo "Error in adding to cart";
    echo mysqli_error($conn);
}


?>