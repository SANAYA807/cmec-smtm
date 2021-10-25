<?php include 'header.php' ?>
<div class='first-div'>
    <img src='getin.png'/>
    <div class='second-div'>
   
    <h2 style='position:absolute; top:60%; left:12%; color:white'>CONTACT US</h2>
   
    </div>
</div>
<div class="kf_content_wrap">
    <div class="kf_location_wrap ">
        <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.6157117983703!2d77.16132911440597!3d28.581300193150156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1d121b56f969%3A0x938b4dda806f13f!2sBenito%20Juarez%20Marg%2C%20South%20Campus%2C%20South%20Moti%20Bagh%2C%20New%20Delhi%2C%20Delhi%20110021!5e0!3m2!1sen!2sin!4v1611587441598!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="location_des" style="background-color:rgb(97, 97, 97);" >
            <h6 style='color:white;'>Central Medical Education Council </h6>
            <p style='color:lightgray;'>Get direction to reach us.</p>
            <ul class="location_meta">
                <li style='color:white;'><strong style="color:rgb(223, 223, 223)">State Office :-  </strong>HARDOI SITAPUR BY PASS ROAD LKO. </li>
                <li ><i style='color:white;' class="fa fa-phone"></i> <a style='color:white;' href="tel:919451449869">+91-945-144-9869</a></li>
                <li style='color:white;'><i style='color:white;' class="fa fa-map-marker"></i>Benito Juarez Marg South Motibagh New Delhi-110021.</li>
                <li><i style='color:white;' class="fa fa-envelope-o"></i>  <a style='color:white;' href="mailto:infocmecindia@gmail.com
">  infocmecindia@gmail.com
</a></li>
            </ul>
            <a style='color:white;' href="#">Contct Us Now and Get Started <i class="fa fa-long-arrow-right"></i></a>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact_2_headung">
                        <h3 style='color:rgb(146, 15, 15);'>Get In Touch</h3>
                        <p>If you anticipate your future in medicals, so we are here for you & get ready for your future in medics with a single confirmation click. </p>
                    </div>
                </div>
            </div>
            <div class="contct_wrap">
                <div class="row">
                    <div class="col-md-8">
                        <form method="post">
                            <div class="contact_des">
                                <h4>Contact Form</h4>
                                <div class="inputs_des des_2">
                                    <input type="text" name="name" placeholder="Name"><i style='color:rgb(146, 15, 15);' class="fa fa-user"></i>
                                </div>

                                <div class="inputs_des des_2">
                                    <input type="text" name="email" placeholder="E-mail">
                                    <i style='color:rgb(146, 15, 15);' class="fa fa-envelope-o"></i>
                                </div>
                                <div class="inputs_des des_2">
                                    <input type="text" name="phone" placeholder="Phone">
                                    <i style='color:rgb(146, 15, 15);' class="fa fa-phone"></i>
                                </div>
                                <div class="inputs_des des_3">
                                    <textarea name="descriptions"></textarea>
                                    <i style='color:rgb(146, 15, 15);' class="fa fa-comments-o"></i>
                                </div>
                                <div class="inputs_des des_2">
                                    <button type="submit" name="contact-btn">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="contact_heading">
                            <h4>Contact info</h4>
                            <p>Connect with </p>
                        </div>
                        <ul class="contact_meta">
                            <li><i style='color:rgb(146, 15, 15);' class="fa fa-home"></i>Benito Juarez Marg South Motibagh New Delhi-110021.</li>
                            <li><i style='color:rgb(146, 15, 15);' class="fa fa-phone"></i><a href="tel: 9451449869 "> +91-945-144-9869</a></li>
                            <li><i style='color:rgb(146, 15, 15);' class="fa fa-envelope-o"></i><a href="mailto: infocmecindia@gmail.com">infocmecindia@gmail.com</a></li>
                        </ul>
                        <div class="contact_heading social">
                            <h4>Get Social</h4>
                        </div>
                        <ul class="cont_socil_meta">
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'footer.php';

include 'db.php';
if(isset($_POST['contact-btn']))
{
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $descriptions = $_POST['descriptions'];
    $sql = "INSERT INTO contacts (`name`,`email`,`phone`, `descriptions`) VALUES ('$name','$email', '$phone', '$descriptions')";
    $run = mysqli_query($con, $sql);
    if($run)
    {
        echo "<script>alert('Your contact details submitted successfull!')</script>";
    }
    else
    {
        echo "<script>alert('Failed!!')</script>";
    }
}
?>