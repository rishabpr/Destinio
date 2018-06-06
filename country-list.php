<?php
session_start();
if(isset($_SESSION['user']))
{
    include "logged_in_header.php";

}
else {
    include "user_upperheader.php";
}
?>
			<!-- start banner Area -->
			<section class="banner-area relative immigration-top" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Country List			
							</h1>	
							<p class="text-white link-nav"><a href="user_home.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="country-list.php"> Country List</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			<!-- Start counrty-list Area -->
			<section class="counrty-list-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10">Countries that we can process Visa</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>							
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-country-list">
								<img src="img/pages/c1.jpg" alt="">
								<a href="#"><h4>United States</h4></a>
								<p>
                                    All within your reach
                                    - The United States of America - a simply huge country.
								</p>
								<a class="primary-btn" href="usa.php">View Details</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-country-list">
								<img src="img/pages/c2.jpg" alt="">
								<a href="#"><h4>United Kingdom</h4></a>
								<p>
                                    Home of amazing moments
                                    - The UK, which seems a little selective at present.
								</p>
								<a class="primary-btn" href="uk.php">View Details</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-country-list">
								<img src="img/pages/c3.jpg" alt="">
								<a href="#"><h4>Canada</h4></a>
								<p>
                                    Move your imagination – Come and find your story
                                    <br>
                                    <br>

								</p>
								<a class="primary-btn" href="canada.php">View Details</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-country-list">
								<img src="img/pages/c4.jpg" alt="">
								<a href="#"><h4>Australia</h4></a>
								<p>
                                    One’s destination is never a place, but a new way of seeing things.
								</p>
                                <br>
								<a class="primary-btn" href="australia.php">View Details</a>
							</div>
						</div>		
						<div class="col-lg-3 col-md-6">
							<div class="single-country-list">
								<img src="img/pages/c5.jpg" alt="">
								<a href="#"><h4>Germany</h4></a>
								<p>
                                    Nobody can discover the world for somebody else. <br>Travel. Explore. Learn.
								</p>
								<a class="primary-btn" href="germany.php">View Details</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-country-list">
								<img src="img/pages/c6.jpg" alt="">
								<a href="#"><h4>New zeland</h4></a>
								<p>
                                    The World is a book, and those who do not travel read only a page
								</p>
                                <br>
								<a class="primary-btn" href="newzealand.php">View Details</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-country-list">
								<img src="img/ireflag.gif" width="80" height="40" alt="">
								<a href="#"><h4>Ireland</h4></a>
								<p>
                                    Jump into Ireland
                                    - Ireland, the country apparently without any airports.
								</p>
								<a class="primary-btn" href="ireland.php">View Details</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-country-list">
								<img src="img/switflag.jpg" width="80" height="40" alt="">
								<a href="#"><h4>Switzerland</h4></a>
								<p>
                                    It’s about pushing your limits and venturing beyond your comfort zone
								</p>
                                <br>
								<a class="primary-btn" href="switzerland.php">View Details</a>
							</div>
						</div>																			
					</div>
				</div>	
			</section>
			<!-- End counrty-list Area -->
						

			<!-- Start callto Area -->
			<section class="callto-area section-gap relative">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12">
							<h1 class="text-white">No Look Further. Try us today!</h1>
							<h4 class="text-white pt-20 pb-20">
                                So we know that it’s not enough for us to simply encourage more people to study abroad. We also need to make sure that they can actually afford it.
							</h4>

						</div>
					</div>
				</div>	
			</section>
			<!-- End callto Area -->
			<br>
			<br>
			<br>
			<br>

<?php
include "user_footer.php";
?>
		</body>
	</html>



