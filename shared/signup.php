<?php


$uname = $_POST['uname'];
$upass1 = $_POST['upass1'];
$upass2 = $_POST['upass2'];
$usertype = $_POST['usertype'];
if ($upass1 != $upass2) {
    echo "password mismatch";
    die;
}

include_once "connection.php";

$cipher_text = md5($upass1);

$status = mysqli_query($conn, "insert into user(username,password,usertype) values('$uname','$cipher_text','$usertype')");
if ($status) {
    echo "Signup Success!!";
    
    header("location:success_login.html");
} else {
    echo "Signup Failed!!";
    echo mysqli_error($conn);
}





?>