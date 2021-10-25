<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <title>Admin Login -SMTMI</title>
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/fonts.css" rel="stylesheet">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/iconmoon/css/iconmoon.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body class="fill-bg">
    <div id="loading">
        <div class="element">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>
    <section class="login-wrapper">
        <div class="inner">
            <div class="login">
                <div class="login-logo">
                    <a href="index.php"><img src="smtmi_logo2.png" style="width:300px;height:100px" class="img-responsive" alt=""></a>
                </div>
                <div class="head-block">
                    <h1>LOGIN Now</h1>
                </div>
                <div class="cnt-block">
                    <form action="" method="post" class="form-outer">
                        <input name="username" type="text" placeholder="Username" style="border-radius:0;border:none">
                        <input name="password" type="password" placeholder="password">
                        <div class="button-outer">
                            <center><button type="submit" class="btn login-btn" name="admin-login-btn">Login now <span class="icon-more-icon"></span></button></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>

<?php
session_start();
 if(isset($_SESSION['id']))
 {
    header("location:Admin/admin-dashboard.php");
 }

include 'db.php';
if(isset($_POST['admin-login-btn']))
{ 
    
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password='$password'";
    $run = mysqli_query($con, $sql);
    if($run->num_rows>0)
    {
        $_SESSION['id']= $username;
        header("location:Admin/admin-dashboard.php");
    }
    else
    {
        echo "<script>alert('Wrong Username or Password!');</script>";
    }
}
?>
