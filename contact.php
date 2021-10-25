<?php include "header.php"; ?>
   

    <div class='first-div'>
    <img src='images/Contact.png'/>
    <div class='second-div'>
   
        <h2 style='position:absolute; top:20%; left:12%; color:white'>Contact Us</h2>
        <p style='position:absolute; top:40%; left:12%; color:white'>Straightest, Fastest & Easiest way to connect with without any problem.</p>
   
       <a href='apply-online.php'><button type="button" style=" position:absolute;top:55%;
        left:12%;background-color:#AE1111; color:white;border:none"
        class="btn btn-primary btn-lg">Contact Now</button></a>
       </div>

    </div>
</div>

    <section class="form-wrapper padding-lg">
        <div class="container">
            <form name="contact-form" id="ContactForm" method="post">
                <div class="row input-row">
                    <div class="col-sm-6">
                        <input name="name" type="text" placeholder="Name"
                        style="border:none;border:1px solid rgb(73, 73, 73);border-radius:0"
                        >
                    </div>
                    <div class="col-sm-6">
                        <input name="contact" type="text" placeholder="Contact"
                        style="border:none;border:1px solid rgb(73, 73, 73);border-radius:0;"
                        >
                    </div>
                </div>
                <div class="row input-row">
                    <div class="col-sm-6">
                        <input name="email" type="text" placeholder="Email"
                        style="border:none;border:1px solid rgb(73, 73, 73);border-radius:0;"
                        >
                    </div>
                    <div class="col-sm-6">
                        <input name="query" type="text" placeholder="Message"
                        style="border:none;border:1px solid rgb(73, 73, 73);border-radius:0;"
                        >
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button class="btn" type="submit" name="send-msz">Send Message<span class="icon-more-icon"></span></button>
                        <div class="msg"></div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    
    <section class="google-map">
        <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.849044186599!2d80.85276931436495!3d26.87653676811808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfe2aa8cf0017%3A0x3ca156f693ec7816!2sSeetapur%20Bypass%20(Dubagg%20Bus%20Stnd)!5e0!3m2!1sen!2sin!4v1611839426128!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
        <div class="container">
            <div class="contact-detail">
                <div class="address">
                    <div class="inner">
                        <h3>SMTMI</h3>
                        <p style="color:white">Dubagga Sitapur Bypass Near Joggers Park Lucknow</p>
                    </div>
                    <div class="inner">
                        <h3><a href="tel:919695691080">+91-969-569-1080</a></h3>
                    </div>
                    <div class="inner"> <a href="mailto:smtlko084@gmail.com">smtlko84@gmail.com</a> </div>
                </div>
                <div class="contact-bottom">
                    <ul class="follow-us clearfix">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                
            </div>
        </div>
       
    </section>

    

<?php include "footer.php"; 
include 'db.php';
if(isset($_POST['send-msz']))
{
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $query = $_POST['query'];

    $run = mysqli_query($con, "INSERT INTO contact (c_name, c_email, c_mobile, c_msg) VALUES('$name','$contact','$email','$query')");
    if($run)
    {
        echo "<script>alert('Contact Details Submitted!');</script>";
    }
    else
    {
        echo "<script>alert(Failed!');</script>";
    }
}
?>