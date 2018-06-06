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
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">

		<!-- start banner Area -->
			<section class="banner-area relative immigration-top" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Course List			
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="course-list.php"> Course List</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start top-course Area -->
			<section class="top-course-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10">Top Courses That are open for Students</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>							
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-top-course">
								<div class="thumbs relative">
									<div  class="overlay overlay-bg"></div>
									<img   class="img-fluid" src="img/engg.jpg" alt="">
									<a class="thumb-btn" href="engg_course.php">Addmission Going On</a>
								</div>
								<div class="details">
									<div   class="title justify-content-between d-flex">
										<a href="engg_course.php"><h4>Engineering</h4></a>
										<p class="price">
											$3500
										</p>
									</div>
									<p>
                                        Do not forget the prestige that comes with studying engineering. Non-engineers will be like “wow” when they hear that you are an engineer.
									</p>
                                    								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-top-course">
								<div class="thumbs relative">
									<div class="overlay overlay-bg"></div>
									<img  height="200px" class="img-fluid" src="img/it.jpg" alt="">
									<a class="thumb-btn" href="it_course.php">Addmission Going On</a>
								</div>
								<div class="details">
									<div class="title justify-content-between d-flex">
										<a href="it_course.php"><h4>Information Technology</h4></a>
										<p class="price">
											$3000
										</p>
									</div>
									<p>
                                        Doing an information technology course, you won’t just learn the theoretical part but also get the opportunity to make things.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-top-course">
								<div class="thumbs relative">
									<div class="overlay overlay-bg"></div>
									<img  height="300px" width="300px" class="img-fluid" src="img/pages/tc2.jpg" alt="">
                                    <br>
                                    <br>

									<a class="thumb-btn" href="manage_course.php">Addmission Going On</a>
								</div>
								<div class="details">
									<div class="title justify-content-between d-flex">
										<a href="manage_course.php"><h4>Business Management</h4></a>


										<p class="price">
											$2300
										</p>
									</div>
									<p>
                                        The benefit of studying business management is that it can equip entrepreneurs with essential business skills and knowledge.
                                    </p>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-top-course">
								<div class="thumbs relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/pages/tc1.jpg" alt="">
									<a class="thumb-btn" href="pharmacy_course.php">Addmission Going On</a>
								</div>
								<div class="details">
									<div class="title justify-content-between d-flex">
										<a href="pharmacy_course.php"><h4>Pharmacy Technician</h4></a>
										<p class="price">
											$2600
										</p>
									</div>
									<p>
                                        Pharmacy technician programs are designed to prepare you with the necessary technical education.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-top-course">
								<div class="thumbs relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/hospitality.jpg" alt="">
									<a class="thumb-btn" href="hospi_course.php">Addmission Going On</a>
								</div>
								<div class="details">
									<div class="title justify-content-between d-flex">
										<a href="hospi_course.php"><h4>Hospitality Management </h4></a>
										<p class="price">
											$2100
										</p>
									</div>
									<p>
                                        Working within the hotel industry, you’ll probably a variety of career opportunities available in hotels.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-top-course">
								<div class="thumbs relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/fashion.jpg" alt="">
									<a class="thumb-btn" href="fashion_course.php">Addmission Going On</a>
								</div>
								<div class="details">
									<div class="title justify-content-between d-flex">
										<a href="fashion_course.php"><h4>Fashion Designing</h4></a>
										<p class="price">
											$2700
										</p>
									</div>
									<p>
                                        Fashion designing is an exciting career choice that allows designers to create clothing and accessories.
                                    </p>
								</div>
							</div>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End top-course Area -->
			

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
			
			<!-- start footer Area -->		
    <?php
    include "user_footer.php";
    ?>
		</body>
	</html>



