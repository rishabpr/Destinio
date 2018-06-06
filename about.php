<?php
session_start();
include "connection.php";
$query="select * from visa_styles";
$reuslt=mysqli_query($conn,$query);
if(isset($_SESSION['user']))
{
    include "logged_in_header.php";

}
else {
    include "user_upperheader.php";
}
?>
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								About Us				
							</h1>	
							<p class="text-white link-nav"><a href="user_home.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.php"> About Us</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start about-top Area -->
			<section class="about-top-area section-gap">
				<div class="container">
					<div class="row align-items-center justify-content-center">
						<div class="col-lg-6 about-top-left">
							<h1>
								Everything <br>
								You can imagine <br>
								is right here
							</h1>
							<p>
                                We work with international organisations and industry partners to improve border security and make immigration easier. We lead government strategy designed to help migrants settle in different countries.
							</p>
						</div>
						<div class="col-lg-6 about-top-right">
							<img class="img-fluid" src="img/pages/at.jpg" alt="">
						</div>
					</div>
				</div>	
			</section>
			<!-- End about-top Area -->		

			<!-- Start home-about Area -->
			<section class="home-about-area" id="about">
				<div class="container-fluid">				
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-6 no-padding home-about-left">
							<img class="img-fluid" src="img/pages/at1.jpg" alt="">
						</div>
						<div class="col-lg-6 no-padding home-about-right">
							<h1>Globally Connected <br>
							by Large Network</h1>
							<p>
								<span>We are here to listen from you and to deliver exellence</span>
							</p>
							<p>
                                We partner with industry groups, education providers, employers and businesses to make it easier for migrants to explore different countries.
                                We have visa applicant centres around the world where you can post or drop your visa application and passport.
							</p>
							<a class="text-uppercase primary-btn" href="contact.php">get details</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->	


			<!-- Start feature Area -->
			<section class="feature-area section-gap" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-9 pb-40 header-text">
							<h1>Our Unique Features that can impress you</h1>
							<p>
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-user"></span>Expert Technicians</h4>

							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-license"></span>Professional Service</h4>

							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-phone"></span>Great Support</h4>

							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>

							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>

							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>

							</div>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End feature Area -->	

			<!-- Start booking Area -->
<section class="booking-area section-gap relative" id="consultancy">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5 col-md-6 booking-left">
                <h1 class="text-white">
                    Globally Connected <br>
                    by Large Network
                </h1>
                <h4 class="text-white">
                    We are here to listen from you deliver exellence
                </h4>

                <a class="primary-btn" href="about.php">View Detials</a>
            </div>
            <div class="col-lg-4 col-md-6 booking-right">
                <h4 class="mb-20">Book Free Consultancy!</h4>
                <form id="book_consultancy">
                    <input  data-rule-required='true' class="form-control" type="text" name="name" id="name" placeholder="Your name" >
                    <input  data-rule-required='true' class="form-control" type="email" name="email" id="email" placeholder="Email Address" >
                    <input  data-rule-required='true' class="form-control" type="text" minlength="10" maxlength="10" name="phone" id="phone" placeholder="Phone Number">
                    <div   data-rule-required='true' class="default-select" id="default-select"">
                    <?php

                    $select="<select  name='visa' id='visa' data-rule-required='true'>";
                    $select.="<option value=''>Select Visa</option>";
                    while($row=mysqli_fetch_array($reuslt))
                    {
                        $select.="<option value=".$row[1].">".$row[1]."</option>";
                    }
                    $select.="</select>";
                    echo $select;
                    ?>
            </div>
            <textarea   id='message' data-rule-required='true' class="common-textarea form-control mt-10" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
            <input type="button" onclick="book_consultancy()" class="btn btn-default btn-lg btn-block text-center" value="Request Free Consultancy">
            </form>
        </div>
    </div>
    </div>
</section>
			<!-- End booking Area -->

			<br>
			<br>
			<br>


		<?php
        include "user_footer.php";
?>


