<?php include 'header.php';
include 'db.php';
$result = mysqli_query($con, "SELECT * FROM notifications ORDER BY id DESC"); ?>
<div class='first-div'>
    <img src='news.jpg'/>
    <div class='second-div'>
   
        <h2 style='position:absolute; top:60%; left:12%; color:white'>NEWS & EVENTS</h2>
   
    </div>
</div>
<div class="kf_content_wrap">
    <section class="our_event_page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kf_edu2_heading2">
                        <h3>Latest News & Event</h3>
                    </div>
                </div>
                <?php
                while($row=mysqli_fetch_array($result))
                { ?>
                <div class="col-md-6">
                    <div class="edu2_event_wrap">
                        <div class="edu2_event_des">
                            <h4 style='color:rgb(146, 15, 15);'><?php echo date_format(date_create($row['created_date']),"M")  ?></h4>
                            <h6><?php echo $row['title']; ?></h6>
                            <ul class="post-option">
                                    <li>By<a href="#">Admin </a><?php echo date_format(date_create($row['created_date']),"d/m/Y")  ?></li>
                            </ul>
                            <p style='color:black'><?php echo $row['descriptions']; ?></p>
                            <span><?php echo date_format(date_create($row['created_date']),"d")  ?></span>
                        </div>
                            
                        <figure><img src="Admin/notification-image/<?php echo $row['image']; ?>">
                        </figure>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php' ?>