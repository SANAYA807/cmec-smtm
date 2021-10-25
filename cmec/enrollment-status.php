<?php include 'header.php';
include 'db.php';
$msz = "";
if(isset($_POST['adhaar-number']))
{
    $adhaar_number = $_POST['adhaar-number'];
    $result = mysqli_query($con, "SELECT * FROM applicants WHERE adhaarnumber = '$adhaar_number'");
    $row = mysqli_fetch_assoc($result);
    
    if(empty($row))
    {
        echo "<script>alert('Result not found!');</script>";
    }
    else
    {
        $msz = "Status : ".$row['message'];
    }
} 
?>
<div class='first-div'>
    <img src='application.jpg'/>
    <div class='second-div'>
   
        <h2 style='position:absolute; top:60%; left:12%; color:white'>ENROLLMENT STATUS</h2>
   
    </div>
</div>
<div class="kf_content_wrap">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <form method="post" >
                    <div class="input-container">
                        <input type="text" name="adhaar-number" placeholder="Enter your Adhaar number here...">
                    </div>
                    <div class="input-container">
                        <button class="btn-style" style="background-color:rgb(146, 15, 15)" name="check">Check</button>
                    </div><h4><?php echo $msz; ?></h4>
                    </form>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php'; ?>