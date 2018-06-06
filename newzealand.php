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

<img src="img/newzealand.jpg" class="  img img-responsive" height="100%" width="100%" style="margin-top: 150px" >


<img src="images/study-in-nz.jpg"/>
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <br>
                <p><a href="user_home.php">Home</a> &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp; Study in New Zealand</p>
            </div>
        </div>
    </div>
</div>


<div class="span4">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="heading wow fadeInUp animated"  data-wow-delay="200ms">
                    <h2><b>Study in New Zealand</b></h2>
                    <br>
                    <div class="line"></div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 abt">

                <p>Combining the benefits of a developed country with the charm of a quiet and peaceful countryside, New Zealand offers some distinct advantages over other countries as a destination for education.</p>

                <p>An important one of which is the affordability - getting a degree in NZ actually works out to be cheaper than many courses in India. </p>

                <p>Another significant advantage is the welcoming nature of the New Zealanders and the relative ease in getting there. NZ has recently opened its doors to students from South East Asia. Getting yourself an education in New Zealand can change your life forever.</p>

                <p>If you are not already in New Zealand and are applying to New Zealand to study, you must complete the requirements for the issue of a student visa.</p>

                <p>You will be given the required forms by the New Zealand Government office (the visa issuing officer) in your country. Requirements for a student visa will normally include</p>


                <ul style="list-style-type: circle">
                    <li ><b>Very Important:</b> A written offer of a place, which notifies you that you have been accepted by  an educational institution in New Zealand to study there.</li>
                    <li ><b>Either:</b> A receipt for payment of course fees (You are not required to produce the receipt before your application has been approved in principle)<br>
                        OR - Evidence that you are exempt from course fees. For e.g. A New Zealand Government Scholarship.</li>

                    <li >A complete and signed 'Application for Student Visa' form, with a passport-size photograph. You will be required to pay a non-refundable student visa application fee.</li>

                    <li>A guarantee of accommodation - a written assurance from an educational institution or other person that suitable residential accommodation is available to you in New Zealand.</li>
                    <li >Your passport or certificate of identity, which must be valid for the period of time for which you are applying to study.</li>
                </ul>

                <p>Evidence that funds are available for your maintenance throughout your stay.</p>            </div>
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



