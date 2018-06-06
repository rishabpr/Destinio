<!DOCTYPE html>
<html lang="zxx" class="no-js">
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

<img src="img/ireland.jpg" class="  img img-responsive" height="100%" width="100%" style="margin-top: 150px" >


<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <br>
                <p><a href="user_home.php">Home</a> &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp; Study in Ireland</p>
            </div>
        </div>
    </div>
</div>


<div class="span4">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="heading wow fadeInUp animated" data-wow-delay="200ms">
                    <h2><b>Study in Ireland</b></h2>
                    <br>
                    <div class="line"></div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 abt">

                <p>Ireland is an increasingly popular destination for students from all over the world. The friendliness and hospitality for which Irish people are renowned, contribute to the ease with which overseas students adapt to the way of life and in particular, student life. Ireland is famed for the vivid greenness of its countryside and the rich Celtic history of its population. Students studying in this country are assured of a warm welcome from the inhabitants if not always from the weather.</p>

                <h3><b>Visa Procedure for Ireland</b></h3>
                <br>
                <p>Apply for your visa well in advance and allow six to eight weeks for your application to be processed. In visa applications students will be asked to supply the following information:</p>

                <h4><b>Valid passport</b></h4>
                <br>
                <p>Your passport must be valid for at least 6 months after the expected completion of your studies in Ireland. If you hold any previous passport, you should also submit this with your application.</p>

                <h4><b>Evidence of Course</b></h4>
                <br>
                <p>A letter of Acceptance from the college, confirming you have been accepted and enrolled on a course of full-time education, involving a minimum of 15 hours organized daytime study each week. This letter should specify the course you will be studying. It should confirm the amount of fees payable for your course.</p>

                <h4><b>Ability to Follow Your Chosen Course</b></h4>
                <br>
                <p>You must provide evidence that you have attained the necessary level of academic achievement required to follow your chosen course. Such evidence will include - exam results, qualifications obtained and certificates proving this.</p>

                <h4><b>Level of English</b></h4>
                <br>
                <p>You must show that you have the capacity to fully partake in your chosen course through the medium of English and satisfy the Visa Officer in this regard. It is recommended that all applicants, regardless of nationality or educational background, undertake the IELTS test, and provide the original certificate with your visa application.</p>

            </div>
        </div>
    </div>
</div>
<br>
<br>
<?php
include "user_footer.php";
?>
</body>
</html>



