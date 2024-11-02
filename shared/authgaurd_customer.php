<html>

<head>
    <style>
        * {
            margin: 0;
        }

        .userbanner {
            display: flex;
            justify-content: space-around;
            background-color: bisque;
            font-size: 24px;
        }
    </style>
</head>

<body>
    <script>
        function checkLogout() {
            res = confirm("Are you sure want to Logout?");
            if (res) {
                window.location = '../shared/logout.php';
            }
        }
    </script>
</body>

</html>


<?php
include "<authgaurd_style.html";

session_start();
if (!isset($_SESSION['login_status'])) {
    echo "you skipped the login...";
    echo "<a href='../shared/login.html'>login here</a>";
    die;
}

if ($_SESSION['login_status'] == false) {
    echo " Login failed";
    echo "<a href='../shared/login.html'>Login here</a>";
    die;
}
if (!$_SESSION['usertype'] == 'customer') {
    echo "Unauthorized access";
    die;
}
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
$usertype = $_SESSION['usertype'];

echo "<div class='userbanner'>
        <div class='userid'>User Num: #$userid</div>
        <div class='username'>User Name: $username</div>
        <div class='usertype'>Type: $usertype</div>
        <div style='cursor:pointer;text-decoration:underline,;color:blue; font-weight: 100;'>
        <a onclick='checkLogout()'><button style='border: radius 10px; '>Logout</button></a>
        </div>
</div>";


?>