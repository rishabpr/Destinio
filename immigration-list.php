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
			<section class="banner-area relative immigration-top" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Immigration List				
							</h1>	
							<p class="text-white link-nav"><a href="user_home.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="immigration-list.php"> Immigration List</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	


			<!-- Start service Area -->
			<section class="service-area section-gap list-page-service" id="immigration">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-7 pb-40 header-text text-center">
							<h1 class="pb-10">Requirements to be Immigrants</h1>
							<p>
                                Making you Travel Beyond Horizon.
                            </p>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<a href="usa_requirement.php"><div class="thumb">
									<img height="200px" width="300px" src="img/usa_immg.jpg" alt="">
								</div>

								<p  class="tag">United States</p>
                                    <p>
                                        Visit a single location or make it a multi-destination trip.
                                    </p>
                                </a>


							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<a href="canada_requirement.php"> <div class="thumb">
                                        <img height="200px" width="300px" src="img/canada_immg.jpg" alt="">
								</div>
								<p class="tag">Canada</p>


								<p>
                                    Be in the know about must-see experiences across Canada.
								</p>
                                </a>
							</div>
						</div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-service">
                                <a href="germany_requirement.php"> <div class="thumb">
                                        <img height="200px" width="300px" src="img/germany_immg.jpg" alt="">
                                    </div>
                                    <p class="tag">Germany</p>


                                <p>
                                    A Destination for the New Millennium.
                                </p>
                                </a>
                            </div>
                        </div>
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<a href="australia_requirement.php"><div class="thumb">
                                        <img height="200px" width="300px" src="img/australia_immg.jpg" alt="">
								</div>
								<p class="tag">Australia</p>
                                    <p>
                                        Manly. Seven Miles from Sydney, a Thousand Miles from Care…
                                    </p>
								</a>

							</div>
						</div>	
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
                                <a href="uk_requirement.php">
								<div class="thumb">
                                    <img height="200px" width="300px" src="img/uk_immg.jpg" alt="">
								</div>
								<p class="tag">United Kingdom</p>

								<p>
                                    Beautiful one day, perfect the next
                                </p></a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
                                <a href="newzealand_requirement.php">
								<div class="thumb">

                                    <img height="200px" width="300px" src="img/newzealand_immg.jpg" alt="">
								</div>
								<p class="tag">New Zealand</p>

								<p>
                                    Big agency deals. Small agency feel.
								</p>
                                </a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
                                <a href="ireland_requirement.php">
								<div class="thumb">
                                    <img height="200px" width="300px" src="img/Ireland_immg.jpg" alt="">
								</div>
								<p class="tag">IreLand</p>

								<p>A traveler without observation is a bird without wings
								</p>
                                </a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
                                <a href="switzerland_requirement.php">
								<div class="thumb">
                                    <img height="200px" width="300px" src="img/swiss_immg.jpg" alt="">
								</div>
								<p class="tag">Switzerland</p>

								<p>
                                    There is no moment of delight in any pilgrimage like the beginning of it.
								</p>
                                </a>
							</div>
						</div>																								
					</div>
				</div>	
			</section>
			<!-- End service Area -->

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
								We are here to listen from you  and deliver exellence.
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
<?php
include "user_footer.php";
?>
		</body>
	</html>



