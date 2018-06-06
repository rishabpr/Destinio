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
<img src="img/australia.jpg" class="  img img-responsive" height="100%" width="100%" style="margin-top: 150px" >
<!-- start banner Area -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <br>
                <p><a href="user_home.php">Home</a> &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp; Study in Australia</p>
            </div>
        </div>
    </div>
</div>


<div class="span4">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="heading wow fadeInUp animated" data-wow-delay="200ms">
                    <h2><b>Study in Australia</b></h2>
                    <br>
                    <div class="line"></div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 abt">

                <p>Australia has emerged as a popular destination for higher education because of its strong educational infrastructure, a high quality of life, and relatively lower expenses.</p>
                <p>Australian degrees are gaining increased acceptance in the global arena, particularly in the Pacific rim countries. A peaceful and relaxed atmosphere, together with the cosmopolitan charisma of cities like Sydney and Melbourne - Australia could be the ideal destination for you.</p>


                <h3><b>Student Visa</b></h3>
                <br>
                <p>Your pre-visa application will be assessed on the basis of the following criteria:</p>

                <h4><b>Evidence of Enrolment</b></h4>
                <br>
                <p>One of the important requirements for a student visa application is that you must be accepted for enrolment, to undertake a course, by a Government registered Australian education institution. This is verified by the advice of acceptance from the Australian institution (commonly known as Letter of Offer), which is issued to a student who has been offered enrolment in a full-time course. You should not pay any part of the course tuition fee prior to the outcome of the PVA.</p>

                <h4><b>Financial Ability</b></h4>
                <br>
                <p>Sponsor/s will have to provide documentary evidence of having cash assets ( immediately encashable assets like savings and fixed deposits in banks) held for <b>atleast 6 months prior</b> to the pre-visa application date. For school applicants, funds need to be held for 3 months prior to the pre-visa application date.</p>

                <h4><b>English Proficiency</b></h4>
                <br>
                <p>All students have to demonstrate a minimum level of proficiency, measured by an IELTS overall band score of atleast 6.0, except those enrolling for a Diploma course (VET) in which case 5.5 is acceptable. Please note that TOEFL score is not acceptable and IELTS is compulsory even if the student has studied in English medium institutions throughout his/her academic career.</p>




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



