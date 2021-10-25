<?php 
include 'db.php';
if(isset($_POST['login-btn']))
{
	$username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password='$password'";
    $run = mysqli_query($con, $sql);
    if($run->num_rows>0)
    {
		session_start();
        $_SESSION['id']= $username;
        header("location:Admin/admin-dashboard.php");
    }
    else
    {
        echo "<script>alert('Wrong Username or Password!');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Central Medical Education Council </title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/header.css" rel="stylesheet">
	<link href="css/aboutus.css" rel="stylesheet">
	<link href="css/fullcalendar.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/jquery.bxslider.css" rel="stylesheet"> 
	<link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="js/dl-menu/component.css" rel="stylesheet">
	<link href="svg/style.css" rel="stylesheet">
	<link href="css/widget.css" rel="stylesheet">
	<link href="css/online-admission.css" rel="stylesheet"/>
	<link href="css/typography.css" rel="stylesheet">
	<link href="css/shortcodes.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<link href="css/color.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/selectric.css" rel="stylesheet">
	<link rel="stylesheet" href="css/jquery.sidr.dark.css">
</head>

<body>
    <div class="kode_wrapper">
    <div class="modal fade" id="reg-box" tabindex="-1" role="dialog">
        <div class="modal-dialog">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            <div class="clearfix"></div>
        </div>
    </div>
    <div class="modal fade" id="signin-box" tabindex="-1" role="dialog">
        <div class="modal-dialog">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-content">
				<div class="user-box" >
                    <h2 >Sign In</h2>
                    <div class="form">
					<form method="post">
                        <div class="input-container">
                            <input type="text" name="username" placeholder="E-mail">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="input-container">
                            <input type="password" name="password" placeholder="Password">
                            <i class="fa fa-unlock"></i>
                        </div>
                        <div class="input-container">
                            <button class="btn-style" name="login-btn" style="background-color:rgb(146, 15, 15);">Sign In</button>
                        </div>
					</form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
	</div>
    	<header id="header_2">
    		<div style="background-color:rgb(146, 15, 15)"  class="top_bar_2">
	    		<div class="container">
	    			<div class="row">
	    				<div class="col-md-2">
	    					<!-- <div class="pull-left">
	    						<em class="contct_2"> <a class="acol" href="mailto:infocmecindia@gmail.com">infocmecindia@gmail.com</a>



								</em>
	    					</div> -->
						</div>
						<div class="col-md-2">
	    					<!-- <div class="pull-left">
	    						<em class="contct_2"><i class="fa fa-phone"></i> <a class="acol" href="tel:+22 22222222"> +91-945-144-9869</a></em>
	    					</div> -->
	    				</div>
	    				<div class="col-md-8">	
    						<ul class="login_wrap">
								<li><a href="#" data-toggle="modal" data-target="#signin-box"><i class="fa fa-sign-in"></i>Admin Login</a></li>
    						</ul>    					
	    				</div>
	    			</div>
	    		</div>
			</div>
    		<div class="kode_navigation">
    			<div class="container">
    				<div class="row">
    					<div class="col-md-2">
    						<div class="logo_wrap">
    							<a href="index.php"><img src="cmec_logo.png" alt="" style="width:220px; height:130px"></a>
    						</div>
    					</div>
    					<div class="col-md-10">
    						<div class="nav_2" id="navigation">
    							<ul>
    								<li><a href="index.php">Home</a></li>
									<li><a href="about-us.php">About Us</a></li>
									<li><a href="courses.php">Courses</a></li>
									<li><a href="affiliation.php">Affiliation</a></li>
									<li><a href="#">Application</a>
										<ul class='sub_menu'>
											<li><a href="online-admission.php">Online Admission</a></li>
											<li><a href="enrollment-status.php">Enrollment Status</a></li>
										</ul>
									</li>
                                    <li><a href="result.php">Result</a></li>
									<li><a href="certificat.php">Certificate</a></li>
									<li><a href="news-events.php">News & Event</a></li>
                                    <li><a href="contact-us.php">Contact Us</a></li>
    							</ul>
					            <div id="kode-responsive-navigation" class="dl-menuwrapper">
					                <button class="dl-trigger">Open Menu</button>
					                <ul class="dl-menu">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about-us.php">About Us</a></li>
										<li><a href="courses.php">Courses</a></li>
										<li><a href="affiliation.php">Affiliation</a></li>
										<li><a href="#">Application</a>
											<ul>
												<li style="background-color:#AE1111"><a href="online-admission.php">Online Admission</a></li>
												<li style="background-color:#AE1111"><a href="enrollment-status.php">Enrollment Status</a></li>
											</ul>
										</li>
										<li><a href="result.php">Result</a></li>
										<li><a href="certificat.php">Certificate</a></li>
										<li><a href="news-events.php">News & Event</a></li>
                                        <li><a href="contact-us.php">Contact Us</a></li>
					                </ul>
					            </div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
		</header>
