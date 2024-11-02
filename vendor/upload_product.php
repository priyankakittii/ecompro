
<?php
include "../shared/authgaurd_vendor.php";
include "menu.html";
?>



<!DOCTYPE html>

<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</head>

<body>
    <div class="d-flex justify-content-center align -items-center">
        <form action="upload.php" method="post" enctype="multipart/form-data" class="w-50 bg-warning p-5">
            <h3 class="text-center">Upload Product</h3>
            <input class="form-control mt-2" type="text" placeholder="Product Name" name="name">
            <input class="form-control mt-2" type="text" placeholder="Product Price" name="price">

            <textarea class="form-control mt-2" id="" cols="20" row="5" placeholder="Product Details"
                name="details"></textarea>
            <input class="form-control mt-2" type="text" placeholder="Product Code" name="code">
            <label class="text-success ms-2 mt-2">Category</label>


            <select class="form-control" name="category">
                <option>Electronics</option>
                <option>Home Applicances</option>
                <option>Fashion</option>
                <option>Sports</option>
            </select>


            <label class="text-success  ms-2  mt-2">Active</label>
            <select class="form-control mt-2" name="active">
                <option>Yes</option>
                <option>No</option>

            </select>

            <input type="file" class="form-control mt-2" accept=".jpg,.jpeg,.png"  name="pdt_img">
            <div class="text-center mt-3">
                <button class="btn btn-success">Upload</button>
            </div>




        </form>

</body>

</html>