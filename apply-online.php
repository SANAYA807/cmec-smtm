<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <title>SMTMI</title>
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/fonts.css" rel="stylesheet">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/select2/css/select2.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/iconmoon/css/iconmoon.css" rel="stylesheet">
    <link href="assets/datepicker/css/datepicker.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">


    <style>
    
    .img-responsive{

        width:40%;
    }
    @media (max-width: 375px) {
        .img-responsive{
            width:110%;
        }
        
    }
    
    </style>
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
    <section class="login-wrapper register">
        <div class="inner">
            <div class="regiter-inner">
                <div class="login-logo"> <a href="index.php"><img src="smtmi_logo2.png" class="img-responsive reg_logo" alt=""></a> </div>
                <div class="head-block">
                    <h1>Apply Now</h1>
                </div>
                <div class="cnt-block">
                    <form method="post" class="form-outer"  enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <input name="fname" type="text" placeholder="First Name" class='form_input'>
                            </div>
                            <div class="col-sm-6">
                                <input name="lname" type="text" placeholder="Last Name" class='form_input'>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input name="father-name" type="text" placeholder="Father Name" class='form_input'>
                            </div>
                            <div class="col-sm-6">
                                <input name="mother-name" type="text" placeholder="Mother Name" class='form_input'>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <select class="custom_select" name="gender">
                                    <option value="">Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <select class="custom_select" name="marital-status">
                                    <option value="">Marital Status</option>
                                    <option value="Male">Married</option>
                                    <option value="Female">Unmarried</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <select class="custom_select" name="course">
                                    <option value="">Course</option>
                                    <option value="MBBS">MBBS</option>
                                    <option value="BUMS">BUMS</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <input name="qualification" type="text" placeholder="Qualification" class='form_input'>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input name="adhaar-number" type="text" placeholder="Adhaar Number" class='form_input'>
                            </div>
                            <div class="col-sm-6">
                                <input name="mobile-number" type="text" placeholder="Mobile Number" class='form_input'>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input name="email-id" type="text" placeholder="Email ID" class='form_input'>
                            </div>
                            <div class="col-sm-6 custom">
                                <select class="custom_select" name="nationality" >
                                    <option value="">Nationality</option>
                                    <option value="Indian">Indian</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input name="address" type="text" placeholder="Address" class='form_input'>
                            </div>
                            <div class="col-sm-6">
                                <input name="district" type="text" placeholder="District" class='form_input'>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input name="state" type="text" placeholder="State" class='form_input'>
                            </div>
                            <div class="col-sm-6">
                                <input name="pin-code" type="text" placeholder="Pin Code" class='form_input'>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input name="dob" type="date" class='form_input'>
                            </div>
                            <div class="col-sm-6">
                                <input name="profile-photo" type="file" class='form_input'>
                            </div>
                        </div>
                        <div class="button-outer">
                            <button class="btn" type="submit" name="apply-btn" >Apply Now <span class="icon-more-icon"></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/select2/js/select2.min.js"></script>
    <script src="assets/datepicker/js/datepicker.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>

<?php 
include 'db.php';
if(isset($_POST['apply-btn']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $father_name = $_POST['father-name'];
    $mother_name = $_POST['mother-name'];
    $marital_status = $_POST['marital-status'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $qualification = $_POST['qualification'];
    $adhaar_number = $_POST['adhaar-number'];
    $mobile_number = $_POST['mobile-number'];
    $email_id = $_POST['email-id'];
    $nationality = $_POST['nationality'];
    $address = $_POST['address'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $pin_code = $_POST['pin-code'];
    $dob = $_POST['dob'];
    $filename = $_FILES["profile-photo"]["name"]; 
    $tempname = $_FILES["profile-photo"]["tmp_name"];     
    $folder = "applicants-images/".$filename;
    $image_added = move_uploaded_file($tempname, $folder);
    if($image_added)
    {
        $sql = "INSERT INTO applicants (fname, lname, father_name, mother_name, marital_status, gender, course, qualification, adhaar_number, mobile_number, email_id, nationality, address, district, state, pin_code, dob, image) VALUES ('$fname', '$lname', '$father_name', '$mother_name', '$marital_status', '$gender','$course', '$qualification', '$adhaar_number', '$mobile_number', '$email_id', '$nationality', '$address', '$district', '$state', '$pin_code', '$dob', '$filename')"; 
        $run = mysqli_query($con, $sql); 
        if($run)
        {
            echo "<script>alert('Your Application Submitted Successfully !');</script>";
        }
        else
        {
            echo "<script>alert('Failed !');</script>";
        }
    }
    else
    {
        echo "<script>alert('Failed !');<script>";
    }
}
?>