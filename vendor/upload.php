<?php

include "../shared/authgaurd_vendor.php";
$userid = $_SESSION['userid'];

echo "<br>";

include_once "../shared/connection.php";
$impath ="../shared/images/" .$_FILES['pdt_img']['name'];
move_uploaded_file($_FILES['pdt_img']['tmp_name'], $impath);


$status = mysqli_query($conn, "insert into product(name,price,details,code,category,imgpath,uploaded_by,active) values('$_POST[name]',$_POST[price],'$_POST[details]','$_POST[code]','$_POST[category]','$impath',$userid,'$_POST[active]')");


if ($status) {
    echo "Product uploaded succesfully!!";
    header("location:home.php");
    
} else {
    echo "Error in Product Upload";
    echo mysqli_error($conn);
}
?>