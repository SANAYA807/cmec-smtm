<?php include 'header.php'; 
include 'db.php';
$result = mysqli_query($con, "SELECT * FROM gallery");
?>

<div class='first-div'>
    <img src='gallery.jpg'/>
    <div class='second-div'>
   
        <h2 style='position:absolute; top:20%; left:12%; color:white'>Gallery</h2>
        <p style='position:absolute; top:40%; left:12%; color:white'>Collection of Unforgetable and Blissful Moments</p>
   
      
       </div>

    </div>
</div>
    <!-- <div class="inner-banner blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <h1></h1>
                        <p>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    
    <section class="campus-tour padding-lg">
       
        <ul class="gallery clearfix isotopeContainer">
        <?php
            while($row=mysqli_fetch_array($result))
            { ?>
            <li class="isotopeSelector contest" style="margin:2%;box-shadow:2px 2px 2px lightgray">
                <div class="overlay">
                    
                    <a class="galleryItem" href="Admin/gallery-image/<?php echo $row['image']; ?>"><span class="icon-enlarge-icon"></span></a>
                     
                </div>
                <figure><img src="Admin/gallery-image/<?php echo $row['image']; ?>" class="img-responsive" alt=""
               
                ></figure>
            </li>
            <?php } ?>
        </ul>
        
    </section>

<?php include "footer.php"; ?>