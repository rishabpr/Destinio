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

<!-- start banner Area -->
<img src="img/canada.jpg" class="  img img-responsive" height="100%" width="100%" style="margin-top: 150px" >
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <br>
                <p><a href="user_home.php">Home</a> &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp; Study in Canada</p>
            </div>
        </div>
    </div>
</div>


<div class="span4">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="heading wow fadeInUp animated"  data-wow-delay="200ms">
                    <h2><b>Study in Canada</b></h2>
                    <div class="line"></div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 abt">
                    <br>
                <p>If you are one of those who seek a high quality of life above anything else, Canada is the place for you. It has been consistently ranked by the UN as the number one country in the world to live in. Having a large Asian Diaspora of students, Canada offers a truly international educational experience.</p>

                <p>Furthermore, the Canadian degree or diploma is instantly recognized around the world as being of the highest standard. And you get all this at a remarkably low cost...both in terms of cost of education and the cost of living. Tuition fees for international students in Canada are much lower than comparable countries.</p>
                <p>With over 90 universities and 150 colleges and technical institutes, featuring virtually every program imaginable, Canada may just be the place of your dreams.</p>

                <h3><b>Student Visa</b></h3>
                    <br>
                <p>All overseas students are required to obtain a Student Authorization and Visa before going to Canada for studies. Students must also meet the requirements of the Canadian Immigration Act and Regulations. Under normal circumstances, allow at least two months for your visa to be processed.</p>

                <h4><b>Visa and Student Authorization Procedure</b></h4>
                <br>
                <p>Submit the completed application kit to the immigration section of the Canadian High commission. Please note that all the documents submitted, must be either original or photocopies notarized and witnessed by a notary public or a magistrate or the Canadian Immigration Officer, and be accompanied by a duplicate copy.</p>

                <h4><b>Documents required </b></h4>
                <br>
                <ul style="list-style-type: circle">
                    <li >Completed Student Application form.</li>
                    <li>Completed Supplementary Questionnaire for students and postdoctoral researchers.</li>
                    <li >Official letter of acceptance from Canadian university, college or Technical Institute.</li>
                    <li>Certificate of Acceptance from the province of Quebec (Only if you plan to study in province of Quebec).</li>
                    <li >TOEFL/IELTS scores if applicable Passport, valid for at least one year from the planned date of entry to Canada, plus valid passports of any accompanying dependants.</li>
                    <li >Bank Draft for the applicable visa processing fees</li>
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



