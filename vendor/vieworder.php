<?php
include "../shared/authgaurd_vendor.php";
include "menu.html";
include "../shared/connection.php";

?>

<html lang="en">

<head>
    <style>
        .pdt-card {
            width: 300px;
            display: inline-block;
            margin: 10px;
            border: 2px solid grey;
            padding: 10px;

        }

        .pdt-img {
            width: 100%;
            height: 200px;
        }

        .price {
            font-size: 24px;
        }

        .price::before {
            content: "Rs."
        }

        .name {
            font-size: 22px;
            font-weight: bold;
            color: violet;
        }
    </style>
</head>

<body>
    <h1>Orders placed</h1>
</body>

</html>
<?php


$sql_obj = mysqli_query($conn, "select * from orders join product on orders.pid=product.pid where uploaded_by=$_SESSION[userid]");

while ($row = mysqli_fetch_assoc($sql_obj)) {


    echo "<div class='pdt-card'>
            <div class='name'>$row[name]</div>
            <div class='price'>$row[price]</div>    
            <div class='code'>$row[code]</div>            
            <img class='pdt-img' src='$row[imgpath]'>   
            <div class='category'>$row[category]</div>                                 
            <div class='details'>$row[details]</div>
            <div class= 'text-center'>
                
            </div>
        </div>";
    
}







?>