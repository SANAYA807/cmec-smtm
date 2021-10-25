<?php 
session_start();
if(!isset($_SESSION['id']))
{
	header("location:../index.php");
}
include 'header.php';  
include '../db.php';
$result1 = mysqli_query($con, "SELECT * FROM applicants");
$applicants = $result1->num_rows;
$result2 = mysqli_query($con, "SELECT * FROM gallery");
$results = $result2->num_rows;
$result3 = mysqli_query($con, "SELECT * FROM notifications");
$notifications = $result3->num_rows;
$result4 = mysqli_query($con, "SELECT * FROM applicants WHERE message='Approved'");
$students = $result4->num_rows;
?>
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="page-bar">
			<div class="page-title-breadcrumb">
				<div class=" pull-left">
					<div class="page-title">Dashboard</div>
				</div>
				<ol class="breadcrumb page-breadcrumb pull-right">
					<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
							href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
					</li>
					<li class="active">Dashboard</li>
				</ol>
			</div>
		</div>
		<div class="state-overview">
			<div class="row">
				<div class="col-xl-3 col-md-6 col-12"> 
					<div class="info-box bg-b-green">
						<span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
						<div class="info-box-content">
							<span class="info-box-text">Total Applications</span>
							<span class="info-box-number"><?php echo $applicants; ?></span>
							<div class="progress">
								<div class="progress-bar" style="width: 45%"></div>
							</div>
						</div>
					</div>->
				</div>
				<div class="col-xl-3 col-md-6 col-12">
					<div class="info-box bg-b-yellow">
						<span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
						<div class="info-box-content">
							<span class="info-box-text">Total Results</span>
							<span class="info-box-number"><?php echo $results; ?></span>
							<div class="progress">
								<div class="progress-bar" style="width: 40%"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-12">
					<div class="info-box bg-b-blue">
						<span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
						<div class="info-box-content">
							<span class="info-box-text">Total News</span>
							<span class="info-box-number"><?php echo $notifications ?></span>
							<div class="progress">
								<div class="progress-bar" style="width: 85%"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-12">
					<div class="info-box bg-b-pink">
					<span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
						<div class="info-box-content">
							<span class="info-box-text">Total Students</span>
							<span class="info-box-number"><?php echo $students ?></span>
							<div class="progress">
								<div class="progress-bar" style="width: 50%"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php' ?>