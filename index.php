<?php include 'header.php'; 
include 'db.php';
$result = mysqli_query($con, "SELECT * FROM notifications");
?>

<div class="banner-outer">
        <div class="banner-slider">
        
            <div class="slide1">
            <div  style="position: absolute;
    width: 100%;
    height: 100%;
    z-index: -1;
    background-color: #080d15; opacity:0.7">
           
            </div>
                <div class="container">
                    <div class="content animated fadeInRight">
                        <div class="fl-right">
                            <h1 class="animated fadeInRight" style="color:white">Explore the World of <span class="animated fadeInRight">Our Diploma</span> </h1>
                            <p class="animated fadeInRight" style="color:white">Stop to exploring new diseases with the help of knowledge in medical sciences, and spread the love and health. </p>
                            <a href="about.php" class="btn animated fadeInRight">Know More <span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide2" style='background:url("slide-2.jpg");background-repeat:no-repeat;background-size:cover'>
            <div  style="position: absolute;
    width: 100%;
    height: 100%;
    z-index: -1;
    background-color: #080d15; opacity:0.7">
           
            </div>
                <div class="container">
                    <div class="content">
                        <h1 class="animated fadeInUp">CMS & ED Programs</h1>
                        <p class="animated fadeInUp">Number of professional Diploma in dentistry offered by SMTMI.</p>
                        <a href="about.php" class="btn animated fadeInUp">Know More <span class="icon-more-icon"></span></a>
                        <a href="gallery.php" class="btn white animated fadeInUp hidden-xs">Take a Tour <span class="icon-more-icon"></span></a>
                    </div>
                </div>
            </div>
            
            <div class="slide3">

            <div  style="position: absolute;
    width: 100%;
    height: 100%;
    z-index: -1;
    background-color: #080d15; opacity:0.7">
                <div class="container">
                    <div class="content animated fadeInLeft">
                        <h1 class="animated fadeInLeft">CMS & ED Diploma</h1>
                        <p class="animated fadeInLeft">Medical aspirants across the country who aspire to become practising doctors.</p>
                        <a href="about.php" class="btn animated fadeInLeft">Know More <span class="icon-more-icon"></span></a>
                    </div>
                </div>
            </div>
        </div>

       
    </div>


    <section class="about">
        <div class="container-flex">
            <ul class="row our-links" style='padding-top:0%;padding-bottom:10%'>
                <li class="col-sm-4 apply-online clearfix equal-hight" style='background-color:#AE1111;border-right:1px solid white;border-top:1px solid white'>
                    <div class="icon"><img src="images/apply-online-ico.png" class="img-responsive" alt=""></div>
                    <div class="detail" >
                        <h3>Apply Online</h3>
                        <p>Shortest way to confirm your future goal to be a doctor.... </p>
                        <a href="apply-online.php" style='border-color:#AE1111'  class="more"><i style='color:#AE1111' class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li class="col-sm-4 prospects clearfix equal-hight" style='background-color:#AE1111;border-right:1px solid white;border-top:1px solid white'>
                    <div class="icon"><img src="images/prospects-ico.png" class="img-responsive" alt=""></div>
                    <div class="detail">
                        <h3><span>Download</span>Prospects</h3>
                        <p>All about your root plans in easiest way...</p>
                        <a href="" class="more" style='border-color:#AE1111'><i style='color:#AE1111' class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li class="col-sm-4 certification clearfix equal-hight" style='background-color:#AE1111;border-top:1px solid white''>
                    <div class="icon"><img src="images/certification-ico.png" class="img-responsive" alt=""></div>
                    <div class="detail">
                        <h3>Certification</h3>
                        <p>Too many type of categories to get experiences...</p>
                        <a href="" class="more" style='border-color:#AE1111'><i  style='color:#AE1111' class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-sm-push-5 left-block"> <span class="sm-head">St. Mother Teresa Medical Institute</span>
                    <h2>Who we are ?</h2>
                    <p>
We are St. Mother Teresa Medical Institute, we build an environment to share more and more knowledge with specified course structure and with our highly qualified faculties, our researches, publishing and training experience, to distribute medical awareness among the youth.

A course in medicine and health sciences requires students to learn and carry out by the Hippocratic Oath for moral conduct which says,

that as a medical practician a person needs to practice arts and science of medicine honestly in all aspects i.e. patient care,

teaching and research. Students holding a degree in medical and health science will get career opportunities

from Hospitals, Private clinics in the healthcare sectors.

A medical and health science graduate can work with research centres, laboratories, and Pharmaceuticals Industry.

To pursue a career in medicine and health science, one must have a degree in medical specialization. 
                        </p>
                </div>
                <div class="col-sm-5 col-sm-pull-7">
                    <div class="video-block">
                        <div id="thumbnail_container"> <img src="who.jpeg" id="thumbnail" class="img-responsive" alt=""> </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="why-choose padding-lg">
        <div class="container">
            <h2><span>The Numbers Say it All</span>Why Choose Us</h2>
            <ul class="our-strength">
                <li>
                    <div class="icon"><span class="icon-certification-icon"> </span></div>
                    <span class="counter">01</span>
                    <div class="title">Certified Courses</div>
                </li>
                <li>
                    <div class="icon"><span class="icon-student-icon"></span></div>
                    <span class="counter">5400</span>
                    <div class="title">Students Enrolled </div>
                </li>
                <li>
                    <div class="icon"><span class="icon-book-icon"></span></div>
                    <div class="couter-outer"><span class="counter">100</span><span>%</span></div>
                    <div class="title">Passing to Institutes</div>
                </li>
                <li>
                    <div class="icon"><span class="icon-parents-icon"></span></div>
                    <div class="couter-outer"><span class="counter">100</span><span>%</span></div>
                    <div class="title">Satisfied Parents</div>
                </li>
            </ul>
        </div>
    </section>

    
    <section class="news-events padding-lg">
        <div class="container">
            <h2>News and events</h2>
            <ul class="row cs-style-3">
            <?php
            while($row=mysqli_fetch_array($result))
            { ?>
                <li class="col-sm-4">
                    <div class="inner" style="box-shadow:2px 2px 5px lightgray">
                        <figure> <img src="Admin/notification-image/<?php echo $row['image']; ?>" class="img-responsive">
                            <figcaption>
                                <a href="news.php">
                                <div class="cnt-block" style="cursor:pointer"> 
                                    <h3><?php echo $row['title'] ?></h3>
                                    <div class="bottom-block clearfix">
                                        <div class="date">
                                            <div class="icon"><span class="icon-calander-icon"></span></div>
                                            <span><?php echo date_format(date_create($row['created_date']),"d M")  ?></span> 2017
                                        </div>
                                    </div>
                                </div></a>
                            </figcaption>
                        </figure>
                    </div>
                </li>
            <?php } ?>
            </ul>
            <div class="know-more-wrapper"> <a href="news.php" class="know-more">More <span class="icon-more-icon"></span></a> </div>
        </div>
    </section>



    
    <section class="testimonial padding-lg">
        <div class="container">
            <div class="wrapper">
                <h2>Our Testimonials</h2>
                <ul class="testimonial-slide">
                    <li>
                        <p>I feel grateful that I have been the part of SMTMI.It not only tought me medical skills but also made me 
                        a better person in general.
                        </p>
                        <span>Pankaj Kumar <span>India</span></span>
                    </li>
                    <li>
                        <p>The most positive aspect at SMTMI is the chance to enrich the knowledge
                         in the medical field.The environment of SMTMI is so good that helps you in your over all growth .</p>
                        <span>Vijay Kumar <span>India</span></span>
                    </li>
                   
                </ul>
                <div id="bx-pager">
                    <a data-slide-index="0" href="#"><img src="stu1.jpeg" class="img-circle" style='width:80px;height:80px;border-radius:1000%' alt="" /></a>
                    <a data-slide-index="1" href="#"><img src="stu2.jpeg" class="img-circle" style='width:80px;height:80px;border-radius:1000%' alt="" /></a>
                    
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>