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

<img src="img/switzerland.jpg" class="  img img-responsive" height="100%" width="100%" style="margin-top: 150px" >


<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <br>
                <p><a href="user_home.php">Home</a> &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp; Study in Switzerland</p>
            </div>
        </div>
    </div>
</div>


<div class="span4">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="heading wow fadeInUp animated" data-wow-delay="200ms">
                    <h2><b>Study in Switzerland</b></h2>
                    <br>
                    <div class="line"></div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 abt">

                <p>Switzerland is one of the most beautiful countries of the world. Its green mountain, valleys and natural climate attracts the students from across the world. Switzerland is world famous for its hospitality and business education. We offer all the major courses to our candidates who wish to do their higher education in one of the most beautiful country of the world.</p>

                <p>You may well ask yourself as a student, 'what can Switzerland offer me?' Well, there are many advantages to studying in Switzerland. The high quality of education is relatively accessible and a large percentage of the student population are foreign students. You will meet and associate with people from all over the world, giving you a very global outlook and politically neutral understanding of life. Switzerland is a small country in the centre of Europe and exploration of surrounding regions can easily be undertaken with the minimum amount of travel. Switzerland is an ideal location if you enjoy outdoor pursuits.</p>

                <p>After a grueling day of lectures, what can students do to relax? All universities and colleges offer a variety of recreational activities for their students. There are several inter-university sports tournaments and you are likely to find tennis courts, sports centers and a cafe-bar where students can socialize. Away from campus, students are entitled to discounts at exhibitions, theatres, art galleries, and museums.</p>

                <p>As with any country, as a potential student you must meet the entry requirements of your chosen university, as well as those of the country itself. All students must be in possession of a valid passport and in addition, students from certain countries will also require Swiss entry visas. Student entry visas should be requested from the Swiss Embassy or Consulate in your home country, after you have received your acceptance letters from the university. Assistance and advice for students is readily available from your chosen institution. Many universities will also require you to demonstrate your linguistic proficiency.</p>


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



