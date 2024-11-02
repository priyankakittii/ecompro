<?php
include "../shared/authgaurd_customer.php";
include "menu.html";
include "../shared/connection.php";

$userid = $_SESSION['userid'];

$sql_obj =  mysqli_query($conn, "select * from cart where userid = $_SESSION[userid]");

while ($row = mysqli_fetch_assoc($sql_obj)) {

     mysqli_query($conn, "insert into orders(userid,pid,address) values($userid,$row[pid],'$_POST[address]')");
      
     
   
}
mysqli_query($conn, "delete from cart where userid = $_SESSION[userid]");

header("location:vieworder.php");

?>