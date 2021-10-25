<?php include 'header.php'; ?>
<div class='first-div'>
    <img src='certificat.jpg'/>
    <div class='second-div'>
   
        <h2 style='position:absolute; top:60%; left:12%; color:white'>CERTIFICATE</h2>
   
    </div>
</div>
<div class="kf_content_wrap">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <form method="post">
                    <div class="input-container">
                        <input type="text" name="adhaar-number" placeholder="Enter Your Adhaar Number Here...">
                    </div>
                    <div class="input-container">
                        <button class="btn-style" type="submit" style="background-color:rgb(146, 15, 15)" name="search-result">Search</button>
                    </div>
                    </form>
                    <?php 
                        include 'db.php';
                        $msz = "";
                        if(isset($_POST['search-result']))
                        {
                            $adhaar_number = $_POST['adhaar-number'];
                            $adhaar_number = $_POST['adhaar-number'];
                            $result = mysqli_query($con, "SELECT * FROM certificat WHERE adhaar_number = '$adhaar_number'");
                            $row = mysqli_fetch_assoc($result);
                            
                            if(empty($row))
                            {
                                echo "<script>alert('Certificat Pending!');</script>";
                            }
                            else 
                            {
                                 echo "<h6>Certificate :</h6>"; ?>
                                <a href="Admin/result-image1/<?php echo $row['image']; ?>" download class="btn btn-success">Download Certificat</a>
                                <a href="Admin/result-image1/<?php echo $row['image']; ?>" target="_blank" class="btn btn-success">View Certificat</a>
                            <?php }
                        }
                    ?>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php' ?>