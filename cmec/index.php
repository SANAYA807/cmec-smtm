<?php include "db.php";

if(isset( $_POST["s_submit"])){
	$s_email=$_POST["s_email"];

	$sql="INSERT INTO suscriber(s_email) VALUES('$s_email')";
	
	if ($con->query($sql) === TRUE) {
		echo '<script>alert("Suscriber mail sent.")</script>';
		} 
		else {
  			echo "Error:". $sql . "<br>" . $conn->error;
				}
			
			}
			
	$result = mysqli_query($con, "SELECT * FROM notifications ORDER BY id LIMIT 4");
?>

<?php include 'header.php'; ?>
<div class="edu2_main_bn_wrap">
	<div id="owl-demo-main" class="owl-carousel owl-theme">
		<div class="item">
			<figure>
				<img src="hero.jpg" alt=""/>
				<figcaption>
					<h2> केन्द्रीय चिकित्सा शिक्षा परिषद नई दिल्ली </h2>
					<span>(Central Medical Education Council New Delhi)</span><br>
					<span>(All India Health & Vocational Education)</span>
					<p>We Rely There Is Nothing Crucial More Than Serve Healthy Life</p>
					<p style="font-weight:700; color:rgba(111, 185, 255,0.9);  text-shadow: 2px 2px #000;">AN AUTONOMOUS COUNCIL APPROVED BY GOVT . OF INDIA<br/>
 Run by RDS & SS ESTABLISHED UNDER ACT 21,1860<br/>
THE GOVT . OF NCT OF DELHI INDIA<br/>
RECOGNIZED BY GOVT . OF INDIA<br/>
AN ISO 9001 : 2015 CERTIFIED
</p>
				</figcaption>
			</figure>
		</div>
		
	</div>
</div>
<div class="kf_content_wrap">
	<section class="kf_edu2_intro_wrap">
		<div class="kf_intro_des_wrap">
			<div class="col-md-12">
				<div class="kf_edu2_heading2">
					<h3>Welcome To Central Medical Education Council</h3>
				</div>
			</div>
			
			<div>
				<span style="font-weight:700; font-size:30px;"><img src="approved.svg" alt="icon" style='width:8%;'/> Approved By</span><br/>
				<p style="margin:5% 0; color:black">CMEC IS AN AUTONOMOUS COUNCIL APPROVED BY GOVT . OF INDIA
 RUN BY RDS & SS-ESTABLISH UNDER ACT 1882
THE GOVT . OF NCT OF DELHI INDIA
RECOGNIZED BY GOVT . OF INDIA
AN ISO 9001 : 2015 CERTIFIED</p>
				<span  style="font-weight:700; font-size:30px;"><img src="education.svg" alt="icon" style='width:10%;height:15%;margin-right:10px'/>Higher Education</span><br/>
				<p style="margin:5% 0; color:black;text-transform:uppercase">CMEC has been Established to provide Higher Education in the field of Paramedical Science, Nursing, Dental, Pharmacy, Yoga and Naturopathy With the Aim for Promting of Healthcare and to Impart Education, Training and Conducting Research in the field of Medical Education.</p>

				<span style="font-weight:700; font-size:30px;"><img src="intra.svg" alt="icon" style='width:10%; margin-right:10px'/>Best Infrastructure</span>
				<p style="margin:5% 0; color:black;text-transform:uppercase">CMEC has best in class infrastructure.In order to achieve its ambition of being a world-class education provider,CMEC is committed to significant enhancement of its facilities and buildings, essential for  research and all-round development of students. </p>
			</div>
		</div>
	</section>
	
	<section class="edu2_counter_wrap">
		<div class="container">
			<div class="edu2_counter_des">
				<span><i class="icon-group2"></i></span>
				<h3 class="counter">10596</h3>
				<h5>STUDENTS ENROLLED</h5>
			</div>
			<div class="edu2_counter_des">
				<span><i class="icon-book236"></i></span>
				<h3 class="counter">12</h3>
				<h5>TOTAL COURSES</h5>
			</div>
			<div class="edu2_counter_des">
				<span><i class="icon-win5"></i></span>
				<h3 class="counter">16</h3>
				<h5>AWARDS & PRIZE</h5>
			</div>
			<div class="edu2_counter_des">
				<span><i class=" icon-user255"></i></span>
				<h3 class="counter">30</h3>
				<h5>TOTAL STAFF </h5>
			</div>
		</div>
	</section>
	<section class="edu2_new_wrap">
		<div class="container">
			<div class="col-md-12">
				<div class="kf_edu2_heading2">
					<h3>Latest News &amp; Event</h3>
				</div>
			</div>
			<div class="row">
				<?php
				while($row=mysqli_fetch_array($result))
				{ ?>
				<div class="col-md-6">
					<div class="edu2_new_des">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="edu2_event_des">
									<h4 style='color:rgb(146, 15, 15); font-weight:700'><?php echo date_format(date_create($row['created_date']),"M")  ?></h4>
									<p style='color:rgb(146, 15, 15); font-weight:700'><?php echo $row['title']; ?></p>
									<ul class="post-option">
										<li>By <a href="#">Admin</a></li>
										<li><?php echo date_format(date_create($row['created_date']),"d/m/Y")  ?></li>
									</ul>
									<span><?php echo date_format(date_create($row['created_date']),"d")  ?></span>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 thumb">
								<figure><img src="Admin/notification-image/<?php echo $row['image']; ?>" alt=""/>
									<!-- <figcaption><a href="#"><i class="fa fa-plus"></i></a></figcaption> -->
								</figure>
							</div>
						</div>
					</div>
				</div>
				<?php
				}
				?>
			</div>
		</div>
	</section>
	
</div>
<div class="edu2_ft_topbar_wrap" style="background-color:rgb(146, 15, 15);">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="edu2_ft_topbar_des">
					<h5>Subcribe weekly newsletter</h5>
				</div>
			</div>
			<div class="col-md-6">
				<div class="edu2_ft_topbar_des">
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
						<input type="email" name="s_email" placeholder="Enter Valid Email Address">
						<button name="s_submit"><i class="fa fa-paper-plane"></i>Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php' ?>