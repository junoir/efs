<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Welcome to EFS Investments</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wind Energy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
<link href="css/owl.theme.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
<link href="css/imagehover.css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/percircle.css">
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!-- menu -->
<link rel="stylesheet" href="css/main.css">
<script type="text/javascript" src="js/main.js"></script>
<!-- //menu -->
<script src="js/owl.carousel.js"></script>  
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({
 
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		autoPlay:true,
		items : 4,
		itemsDesktop : [640,5],
		itemsDesktopSmall : [414,4]
 
	});
	
}); 
</script>
<script src="js/jarallax.js"></script>
<script src="js/SmoothScroll.min.js"></script>

   <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <script type="text/javascript">
        $(function() {
            setTimeout(function() {
                $("#successMessage").hide('blind', {}, 500)
            }, 7000);
        });
    </script>
    
</head>

<?php

    $message = '';
    if ($_POST['submit']) {
         $name = $_POST['name'];
         $number = $_POST['number'];
         $email = $_POST['email'];
         $message = $_POST['message'];
         $from = 'EFS Investments';
         $to = 'ewensonfransiskus@yahoo.com';
         $subject = 'New Message from EFS Investments';
        
         $body = "From: $name\n E-Mail: $email\n Tel: $number\n Message:\n $message";
         
         if (mail ($to, $subject, $body, $from)) {
            $message = 'Message Sent Successfully!';
         } else {
            $message = 'Ah! Try again, please?';
         }
         if($message && $message != ''){?>
         <script type="text/javascript">
         $(document).ready(function(){
            $('#successMessage').modal();
         });
         </script>  
         <?php }
     }
?>

  <!-- Modal content-->
            <div id="successMessage" class="modal fade" role="dialog">
              <div class="modal-dialog">
    
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Message Alert</h4>
                  </div>
                  <div class="modal-body">
                    <p><?=$message?></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
            
              </div>
            </div>

<body>
	<!-- banner -->
	<div class="banner" id="home">
		<!-- menu -->
			<div id="toggle_m_nav">
			  <div id="m_nav_menu" class="m_nav">
				<div class="m_nav_ham" id="m_ham_1"></div>
				<div class="m_nav_ham" id="m_ham_2"></div>
				<div class="m_nav_ham" id="m_ham_3"></div>
			  </div>
			</div>

		<div id="m_nav_container" class="m_nav">
			  <ul id="m_nav_list" class="m_nav">
				<li class="m_nav_item" id="m_nav_item_1"> <a href="#home">Home</a> </li>
				<li class="m_nav_item" id="moble_nav_item_2"> <a href="#about">About Us</a> </li>
				<li class="m_nav_item" id="moble_nav_item_4"> <a href="#team">What We Do?</a> </li>
				<li class="m_nav_item" id="moble_nav_item_7"> <a href="#contact">Contact Us</a> </li>
			  </ul>
			</div>
		<!-- menu -->
		<div class="container">
			<div class="agile-logo">
				<a href="index.html"><img class="navbar-brand" src="images/logo.png"></a>
			</div>
			<div class="w3l-banner-grids" data-spy="scroll" data-target=".w3ls-text">
				<div class="slider">
					<div class="callbacks_container">
						<ul class="rslides" id="slider4">
							<li>
								<div class="w3ls-text">
									<h3>What Makes Us Great ?</h3>
									<p>We are a well know transportation company dealing with major clients in South Africa. Leave it to us you are in good hands with our highly qualified staff.</p>
									<a href="#about">More</a>
								</div>
							</li>
							<li>
								<div class="w3ls-text">
									<h3>What We Specialize In</h3>
									<p>Transportation is key, tho we also specialize in Warehousing and storage, clearing services, packaging and much more.</p>
									<a href="#team">More</a>
								</div>
							</li>
							<li>
								<div class="w3ls-text">
									<h3>Need Some Help ?</h3>
									<p>We are ready to assit you with major hauling and cargo to storage, down to cleaning services</p>
									<a href="#contact">More</a>
								</div>
							</li>
						</ul>
					</div>
					<script src="js/responsiveslides.min.js"></script>
					<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					 </script>
					<!--banner Slider starts Here-->
				</div>
				<div class="agileinfo-social-grids">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-rss"></i></a></li>
						<li><a href="#"><i class="fa fa-vk"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //banner -->
<!-- about -->
	<div class="about" id="about">
		<div class="container">
			<div class="wthree-about-info">
				<div class="portfolio" id="portfolio">
					
					<div class="wthree-about-info">
						<h3>Welcome to EFS Investments</h3>
						<p>We specialise in order fulfillment services for persons or companies lease of trucks, bus hire and private carriers.</p>
						<b><p>Our services includes:</p></b>
							
							<ul class="listing">
							  <li>Warehousing and storage</li>
							  <li>Order fulfilment</li>
							  <li>Sourcing and procurement</li>
							  <li>Delivery of goods</li>
							  <li>Clearing services</li>
							  <li>Material handling</li>
							  <li>Inbound and outbound transportation</li>
							  <li>Packaging and assembly</li>
							  <li>Material handling</li>
							  <li>Construction</li>
							  <li>Property development </li>
							  <li>Renovations</li>
							  <li>Interior deco</li>
							</ul>
					 </div>  
				 </div>
			</div>
			
		</div>

	</div>
	

		</div>

	</div>
	


	<!-- team -->
	<div class="team" id="team">
		<div class="container">
			<div class="wthree-about-info">
				<h3>What We Do?</h3>
			</div>


			<div class="team-grids">
				<div id="owl-demo" class="owl-carousel owl-theme">
					<div class="item">
						<div class="team-info">
							<img src="images/trans_work.jpg" alt="" />
							<div class="team-caption"> 
								<h4>Transportation</h4>
							</div>
						</div>	
					</div>


					<div class="item">
						<div class="team-info">
							<img src="images/constru_work.jpg" alt="" />
							<div class="team-caption"> 
								<h4>Construction</h4>
							</div>
						</div>	
					</div>

					<div class="item">
						<div class="team-info">
							<img src="images/shop_work.jpg" alt="" />
							<div class="team-caption"> 
								<h4>Retail Service</h4>
							</div>
						</div>	
					</div>

					<div class="item">
						<div class="team-info">
							<img src="images/work.jpg" alt="" />
							<div class="team-caption"> 
								<h4>Consultation</h4>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- //team -->

	<!-- contact -->
	<div class="contact" id="contact">
		<div class="container">
			<div class="wthree-about-info">
				<h3>Contact Us</h3>
			</div>
			<div class="agile-contact-grids">
				<div class="col-md-6 agile-contact-left">
					
					<div class="address-grid">
						<h4>Our Address</h4>
						<ul class="w3_address">
							<li><i class="fa fa-map-marker" aria-hidden="true"></i>
							House No. 2005, Orwetoveni, Otjiwarongo, Otjozonjupa Region, Namibia
							</br>P.O. Box 5087, Walvis Bay, Namibia
						
							</li>

							<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@example.com">
								ewensonfransiskus@yahoo.com </a></li>

							<li><i class="fa fa-mobile" aria-hidden="true"></i>+264 8122 2337 | +264 85670 1455 | 264812223537</li>
						</ul>
					</div>
					


				<div class="contact-form">
						<h4>Contact Form</h4>
						<form target="" method="POST">
							<div class="styled-input agile-styled-input-top">
								<input name="name" class="form-control" id="usr" required>
								<label>Name</label>
								<span></span>
							</div>
                            <div class="styled-input">
								<input name="number" class="form-control" id="pwd" required>
								<label>Contact No.</label>
								<span></span>
							</div>
                            
							<div class="styled-input">
								<input name="email" class="form-control" id="pwd" required> 
								<label>Email</label>
								<span></span>
							</div> 
							
							<div class="styled-input">
								<textarea class="form-control" name="message" id="comment" required></textarea>
								<label>Message</label>
								<span></span>
							</div>	 
							<input type="submit" name="submit" value="Submit">
						</form>
					</div>
				</div>



				<div class="col-md-6 agile-contact-right">
					<div class="agileits-map">
					</div>
					<div class="map-grid">

						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59813.30261110025!2d16.62375143422172!3d-20.45157689622704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1bf4ae1458427ed9%3A0x7c48f10693a1d452!2sOtjiwarongo%2C+Namibia!5e0!3m2!1sen!2sza!4v1478089354261" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //contact -->




<!-- footer -->
 <section>
           
	<div class="footer">
				<div class="container">
						

						<div class="footer-bottom"> 

								<div class="col-lg-6">
					             <h3 align="left"><a href="index.html"><img src="images/bottom_logo.png"></a></h3>
					             </div>
								<div class="col-lg-6 push_top">
									<a href="#about" class="scroll">About</a> 
									<a href="#team" class="scroll">What We Do</a> 
									<a href="#contact" class="scroll">Contact Us</a> 
									<p>Copyright © EFS Investments | Powered by <a href="http://www.dotcomholdings.co.za/">iDotcom</a></p>

						</div>
						</div>
				</div>
	</div>	



</section>

<!-- //footer -->



	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
        
        <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('m_nav_item,w3ls-text').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
</body>	
</html>