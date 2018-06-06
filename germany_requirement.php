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

<img src="img/germany.jpg" class="  img img-responsive" height="100%" width="100%" style="margin-top: 150px" >


<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <br>
                <p><a href="user_home.php">Home</a> &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp; Study in Germany</p>
            </div>
        </div>
    </div>
</div>


<div class="span4">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="heading wow fadeInUp animated" data-wow-delay="200ms">
                    <h2><b>Requirements for Germany's Visa</b></h2>
                    <br>

                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 abt">

                <p>
                    When you apply for a Germany VISA (Schengen visa for Germany), there are certain documents you have to complete before making an appointment.  If you are travelling to more than one Schengen country, you will apply in the German Embassy/Consulate in your country if Germany is the country you will stay longer. If there is no significant difference in days in-between the Schengen countries you will be visiting, you will apply for a Schengen visa at the Germany Embassy/Consulate if Germany is the first port of entry in the Schengen Area.</p>
                <p>The list of documents required in order for applying for a Schengen visa in a German Embassy/Consulate depends on the type of visa you are applying for.<br />


        </p>
                <h3><b>Application form</b></h3><br>
        <p>Generally, you start with filling the application form which you can download here in our website.  Detailed and accurate information about yourself and the purpose of your travel are required in the application form so make sure you are honest. Capital letters are recommendable, so handwriting doesn’t become an issue.</p>
        <p>If the applicant has never had a Schengen visa before, he/she must hand the application form and other required documents in person, after making an appointment in the Embassy. In other cases, the applicant can hand the documentation scanned via mail.</p>
        <h3><b>Passport</b></h3><br>
        <p>Your passport has to be valid for a minimum of 6 months before the due date in order to be eligible to apply for a Schengen Visa for Germany.</p>
        <h3><b>Photo Requirement</b></h3><br>
        <p>Two photos are required per application form. Photos have to apply to certain criteria which you find <a href="http://www.germany-visa.org/visa-photo-requirements/">here</a>!</p>
                <h3><b>Accommodation</b></h3><br>
        <p>Proof of booked and paid accommodation in Germany is to be sent to the Embassy/Consulate together with all the other documentation.</p>
        <p>If you are staying with friends/relatives, a copy of their ID and Passport as well as proof that they can support your stay is mandatory.</p>
                <h3><b>Transportation</b></h3><br>
        <p>

Purchased return ticket within the planned duration of your trip is required, plane or otherwise.</p>
<h3><b>Travel Health Insurance</b></h3><br>
<p>Valid health insurance covering the total number of days you will be staying in Germany is mandatory.</p>
                <h3><b>Itinerary</b></h3><br>
<p>If the purpose of the travel is tourism/leisure you must also send a copy of your detailed itinerary.</p>

                <h3><b>Bank Statement</b></h3><br>
<p>A formal statement of your financial situation from the bank for the last 3 months is mandatory.</p>
                <h3><b>Status</b></h3><br>
<ul style="list-style-type: circle">
    <li>If you are a student, you have to hand in proof of being enrolled in a tertiary educational institution as well as a formal letter from the designated authorities that gives you permission to travel during that period.</li>
    <li>If you are employed, a copy of your contract is mandatory as well as a letter which stated that you are permitted by the employer to take the annual leave during that period.</li>
    <li>If self-employed you have to hand in official documents confirming your own business (e.g. A copy of CK1 registration papers/VAT Registration including name and proof of business activities.</li>
</ul><br>
                <h3><b>Minors</b></h3>
                <br>
<ul style="list-style-type: circle">
    <li>Minors have to hand in the original birth certificate among others.</li>
    <li>If they are travelling alone the consent of both parents represented by a signature in the application form and a formal letter is requested.</li>
    <li>If they are travelling with one of the parents, the consent of both parents is still required.</li>
</ul>
<br>
<h3><b>Depending on the purpose of your trip to Germany, there are slight differences in the typo of documentation required.</b></h3><br>
<ul style="list-style-type: circle">
    <li>For a tourist visa, you will not be required to have any formal invitation letter of any sort.</li>
    <li>For a student’s visa however, in addition to all the documentation above, you have to hand in the letter of acceptance at the educational institution you are planning to study in, as well as proof of financial sustainability for the time being in Germany, among others.</li>
    <li>For a business trip, you will have to hand in a formal invitation letter by the parties residing in Germany, fully explaining the nature of your visit.</li>
    <li>For employment in Germany, you have to hand in your employer’s formal letter stating the positing you’ve been accepted for, period of employment, nature of the job, and the exact dates of when you are expected to enter and leave the country.</li>
</ul>
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



