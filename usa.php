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

            <img src="img/usa.jpg" class="  img img-responsive" height="100%" width="100%" style="margin-top: 150px" >


<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <br>
                <p><a href="user_home.php">Home</a> &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp; Study in USA</p>
            </div>
        </div>
    </div>
</div>

    <div class="span4">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="heading wow fadeInUp animated"  data-wow-delay="200ms">
                        <h2><b>Study in USA</b></h2>
                        <div class="line"></div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 abt">
                    <br>
                    <p>It is talked of as the land of dream fulfillment, of cutting edge quality, of mega bucks and of life as you want it to be.</p>
                    <p>Whatever you have heard about the U.S., it's true. And getting an education there is probably the simplest and most reputable way of being a part of the great American dream. And also, US education is eminently affordable, if done the right way. Unlike other parts of the world, where self-funding is the only way to pay for your education, the US education system offers an array of scholarships and loans besides earn-as-you-learn opportunities. Information on all this and lots more, is available on this site.</p>
                    <p>We have information on more than 200 US Institutions and more than 600 courses. If you would like to study in USA, we have something for you.</p>

                    <h3><b>Student Visa</b></h3>
                        <br>
                    <p>To enter the United States as a student, you must apply at a US Embassy or Consulate for a student visa. You are required to make an appointment in India to apply for a visa. You can apply for a visa only after you receive the requisite I-20 or IAP-66 form from the institution you have been accepted to. The information outlined below is designed to help you understand the visa process.</p>
                    <p>Two types of visa: There are mainly two types of student visas:</p>

                    <ul>
                        <li><b>F-1 (Student Visa) -</b> The F-1 visa is for full-time students enrolled in an academic or language program. F-1 students may stay in the US for the full length of their academic program plus 60 days. F-1 students must maintain a full-time course load and complete their studies by the expiration date listed on the I-20 form.</li>
                        <li><b>J-1 (Exchange Visitor Visa) -</b> The J-1 visa is issued for students needing practical training that is not available in their home country to complete their academic program. The training must be directly related to the academic program. The J-1 visa obligates the student to return to their home country for a minimum of two years after the end of their studies in the US before being eligible to apply for an immigrant (permanent residence) visa.</li>

                    </ul>

                    <p>The rules and regulations governing the entrance of all international students into the United States are complicated and should be properly looked into before applying for a visa.</p>

                    <h4><b>Visa Application Procedure: Documents required are</b></h4>
                    <br>
                    <ul  style="list-style-type: circle" >
                        <li>Valid Passport</li>
                        <li>One Passport size photograph (Black and White or Colour)</li>
                        <li >A Non-immigrant Visa Application (Form 156) available from the Consular section.</li>
                        <li >Form I-20 executed by the authorizing official of institution concerned, signed by the applicant.</li>
                        <li >Evidence of financial ability to cover the costs of the education and maintenance involved</li>
                        <li >Visa fee to be paid in Indian Rupees by Bank Draft</li>
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



