<?php include 'header.php'; 
include 'db.php';
$result = mysqli_query($con, "SELECT * FROM notifications");
?>

<div class='first-div'>
    <img src='news.jpg'/>
    <div class='second-div'>
   
        <h2 style='position:absolute; top:20%; left:12%; color:white'>News & events</h2>
        <p style='position:absolute; top:40%; left:12%; color:white'>Past Moments..&..Ruuning Events..&..Upcoming Events..</p>
   
       

    </div>
</div>
    

    
    <section class="news-wrapper padding-lg">
        <div class="container">
        <?php
            while($row=mysqli_fetch_array($result))
            { ?>
            <ul class="row news-listing">
                <li class="col-xs-6 col-sm-4 grid-item">
                    <div class="inner"> <img src="Admin/notification-image/<?php echo $row['image']; ?>" class="img-responsive" alt="">
                        <div class="cnt-block">
                            <ul class="post-detail">
                                <li><span class="icon-date-icon ico"></span> <span class="bold"><?php echo date_format(date_create($row['created_date']),"d M")  ?></span> <?php echo date_format(date_create($row['created_date']),"Y")  ?></li>
                            </ul>
                            <h2><?php echo $row['title'] ?></h2>
                            <p><?php echo $row['descriptions'] ?></p>
                        </div>
                    </div>
                </li>
            <?php } ?>
            </ul>
            
        </div>
    </section>


<?php include "footer.php"; ?>

