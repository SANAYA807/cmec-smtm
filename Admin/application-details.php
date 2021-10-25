<?php
    if(isset($_GET['id']))
    {
        include '../db.php';
        include 'header.php';
        $id = $_GET['id'];
        $result = mysqli_query($con, "SELECT * FROM `applicants` WHERE id='$id'");
        $row = mysqli_fetch_assoc($result);
        ?>
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="page-bar">
                    <div class="page-title-breadcrumb">
                        <div class=" pull-left">
                            <div class="page-title">Application Details</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-sidebar">
                            <div class="card card-topline-aqua">
                                <div class="card-body no-padding height-9">
                                    <div class="row">
                                        <div class="profile-userpic">
                                            <img src="../applicants-images/<?php echo $row['image'] ?>" class="img-responsive" alt=""> </div>
                                    </div>
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name"><?php echo $row['fname']." ".$row['lname']; ?> </div>
                                    </div>
                                    <ul class="list-group list-group-unbordered">
                                        <li class="list-group-item">
                                            <b>Contact</b> <a class="pull-right"><?php echo $row['mobile_number']; ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Email</b> <a class="pull-right"><?php echo $row['email_id']; ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Address</b> <a class="pull-right"><?php echo $row['district'].", ".$row['state'].", ".$row['pin_code']."."; ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="profile-content">
                            <div class="row">
                                <div class="card">
                                    <div class="card-topline-aqua">
                                        <header></header>
                                    </div>
                                    <div class="white-box">
                                        <div class="tab-content">
                                            <div class="tab-pane active fontawesome-demo" id="tab1">
                                                <div id="biography">
                                                    <div class="row">
                                                        <div class="col-md-4 col-12 b-r"> <strong>First Name</strong>
                                                            <br>
                                                            <p class="text-muted"><?php echo $row['fname']; ?></p>
                                                        </div>
                                                        <div class="col-md-4 col-12 b-r"> <strong>Last Name</strong>
                                                            <br>
                                                            <p class="text-muted"><?php echo $row['lname']; ?></p>
                                                        </div>
                                                        <div class="col-md-4 col-12"> <strong>Father Name</strong>
                                                            <br>
                                                            <p class="text-muted"><?php echo $row['father_name']; ?></p>
                                                        </div>
                                                        <div class="col-md-4 col-12"> <strong>Mother Name</strong>
                                                            <br>
                                                            <p class="text-muted"><?php echo $row['mother_name']; ?></p>
                                                        </div>
                                                        <div class="col-md-4 col-12"> <strong>Gender</strong>
                                                            <br>
                                                            <p class="text-muted"><?php echo $row['gender']; ?></p>
                                                        </div>
                                                        <div class="col-md-4 col-12"> <strong>Marital Status</strong>
                                                            <br>
                                                            <p class="text-muted"><?php echo $row['marital_status']; ?></p>
                                                        </div>
                                                        <div class="col-md-4 col-12"> <strong>Course</strong>
                                                            <br>
                                                            <p class="text-muted"><?php echo $row['course']; ?></p>
                                                        </div>
                                                        <div class="col-md-4 col-12"> <strong>Qualification</strong>
                                                            <br>
                                                            <p class="text-muted"><?php echo $row['qualification']; ?></p>
                                                        </div>
                                                        <div class="col-md-4 col-12"> <strong>Adhaar Number</strong>
                                                            <br>
                                                            <p class="text-muted"><?php echo $row['adhaar_number']; ?></p>
                                                        </div>
                                                        <div class="col-md-4 col-12"> <strong>Nationality</strong>
                                                            <br>
                                                            <p class="text-muted"><?php echo $row['nationality']; ?></p>
                                                        </div>
                                                        <div class="col-md-4 col-12"> <strong>Date of Birth</strong>
                                                            <br>
                                                            <p class="text-muted"><?php echo date_format(date_create($row['dob']),"d-m-Y")  ?></p>
                                                        </div>
                                                        <div class="col-md-4 col-12"> <strong>Applying Date</strong>
                                                            <br>
                                                            <p class="text-muted"><?php echo date_format(date_create($row['created_date']),"d-m-Y")  ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</html>
<?php 
    include 'footer.php';
    include '../db.php';
    if(isset($_POST['change-status']))
    { 
        $id = $_POST['sid'];
        $message = $_POST['message'];
        $run = mysqli_query($con, "UPDATE applicatants SET message = '$message' WHERE id='$id'");
        if($run)
        {
            echo "<script>alert('Application Status Updated !');<script>";
            header("location:application.php");
        }
        else
        {
            echo "<script>alert('Failed !');<script>";
            header("location:application.php");
        }
    }  }
?>