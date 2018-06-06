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
<section class="banner-area" id="home">
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-start">
            <div class="banner-content col-lg-9">
                <h6>Process Visa without within hours</h6>
                <h1 class="text-white">
                    Immigrations &  <br>
                    Visa Consultation
                </h1>
                <a href="#consultancy" class="genric-btn circle">Book Consultancy</a>
            </div>
            <img class="header-img img-fluid align-self-end d-flex" src="img/header-img.png" alt="">
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start callto Area -->
<section class="calltotop-area pt-70 pb-70">
    <div class="container">
        <div class="callto-section">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-4 call-left no-padding">
                    <p>
                        Start <span>planning</span> your <br>
                        New <span>Dream</span>
                    </p>
                </div>
                <div class="col-lg-5 call-middle">
                    <p>
                        Without leaps of imagination or dreaming, we lose the excitement of possibilities. Dreaming, after all is a form of planning.”
                        ―<b> Gloria Steinem</b>
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End callto Area -->

<!-- Start service Area -->
<section class="service-area section-gap" id="immigration">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7 pb-40 header-text text-center">
                <h1 class="pb-10">Requirements to be Immigrants</h1>
                <p>
                    Make You Travel Beyond Horizon.
                </p>
            </div>
        </div>
        <div class="row">
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

<center> <h3>Do not limit yourself. Go and Explore Yourself with following brands</h3></center>
<section class="brand-area pt-100" style="margin-top: -40px">
    <div class="container">

        <div class="row logo-wrap">
            <a class="col single-img" href="#">
                <img class="d-block mx-auto" src="img/l1.png" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="d-block mx-auto" src="img/l2.png" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="d-block mx-auto" src="img/l3.png" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="d-block mx-auto" src="img/l4.png" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="d-block mx-auto" src="img/l5.png" alt="">
            </a>
        </div>
    </div>
</section>
<!-- End brand Area -->

<!-- Start latest-blog Area -->
<section class="latest-blog-area section-gap" id="blog">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Latest News from our Blog</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 single-blog">
                <img class="img-fluid" src="img/b1.jpg" alt="">
                <ul class="tags">
                    <li><a style="cursor: default">Travel</a></li>
                    <li><a style="cursor: default">Life style</a></li>
                </ul>
                <a href="blog-single.php"><h4>Portable latest Fashion for young women</h4></a>


            </div>
            <div class="col-lg-6 single-blog">
                <img class="img-fluid" src="img/b2.jpg" alt="">
                <ul class="tags">
                    <li><a style="cursor: default">Company </a></li>
                    <li><a style="cursor: default">Partner</a></li>
                </ul>
                <a href="blog-single.php"><h4>Partner is all about on which bussiness depends</h4></a>

            </div>
        </div>
    </div>
</section>
<!-- End latest-blog Area -->

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



