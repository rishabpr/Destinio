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
                    <h2><b>Study in Germany</b></h2>
                    <br>
                    <div class="line"></div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 abt">

                <p>There are no study fees in Germany. German institutions of higher education welcome students from all nationalities. Students however have to arrange for living expenses on their own which can total to about DM 1300 per month.In addition to the living expenses there can be some other miscellaneous expenses to the extent of DM 1000 per semester.</p>

                <h4><b>Admission to Undergraduate Studies</b></h4>
                <br>
                <p>Students applying for an undergraduate course in Germany have to undertake a one - year bridge program. This is to compensate for 13 years of school education in Germany compared to 12 years in India. In order to be eligible for this bridging course, students from India are required to have an excellent academic record up to Senior Secondary Level (10 + 2), and must have basic knowledge of the German language (G III Level of Max Mueller Bhavans).</p>

                <p>After completion of the bridge program, Indian students are required to pass an assessment test in order to get admission into a German institution for the equivalent of the Bachelors degree. Students who have cleared the IIT Joint Entrance Examination (JEE) will be exempted from the assessment test.</p>

                <p>Students who have successfully completed two years of undergraduate studies are also exempted from the assessment test. However, they have to prove their proficiency in the German language.</p>

                <h4><b>Admission to Postgraduate Courses</b></h4>
                <br>
                <p>German universities have recently introduced international courses leading to a Master's degree. Some courses begin with English as a medium of instruction. Students need an Indian undergraduate degree to qualify. Some universities also accept the three years Indian Bachelors degree.</p>

                <h4><b>Admission to PhD Courses</b></h4>
                <br>
                <p>Like in many other countries international students must have a Master's Degree, and must have identified a professor in Germany who is willing to act as their doctoral guide.</p>

                <h4><b>Entrance Requirements</b></h4>
                <br>
                <p>Admission to programmes in Germany are granted on the basis of previous academic record. However, for some management courses a GMAT is required, and some engineering programmes require a GRE score. You will need to check the requirements of the university you are applying to.</p>
                <p>The TOEFL is a standard test required for programmes that have English as a medium of instruction.</p>


                <h4><b>Applying for admission</b></h4>
                <br>
                <p>You have to apply for admission directly to the universities. Application forms can be requested from the International offices of universities. The filled applications have to be sent back to the university along with documents required to be attached. The attached documents must normally be authenticated copies of your certificates. You will also have to include authenticated copies of certificates confirming your knowledge of German, if required.</p>
                <p>The Winter semester starts in October and the Summer semester starts in April. <strong>The application deadline</strong> is 15th July for the Winter semester and 15th January for the Summer semester. </p>


                <h4><b>Student Visa</b></h4>
                    <br>
                <p>Student interested to take up full time study in Germany are required to apply for a student visa. It is initially granted for a period of three months. It has to be extended by the authorities in Germany within three months of your stay in Germany. Extension is given for one year at a time till the end of the course. All International students must leave Germany on completion of the course of study.</p>
                <p>Students have to fulfill the following requirements before being granted a student visa.</p>
                <p>Submit the following documents:</p>

                <ul style="list-style-type: circle">
                    <li >Completed Visa Application Form</li>
                    <li >Photographs</li>
                    <li >Visa Application Fee</li>
                    <li>Evidence of Admission</li>
                    <li>Proof of Adequate Financial Resources</li>
                    <li >Health Certificate</li>
                </ul>
                    <br>
                <p>The visa is issued when the student is assessed to be a genuine student, who intends to undertake further studies in Germany, abide by visa conditions, and depart on completion of the course. The student should convince the visa officer that his German language skills are adequate for the course he/she is undertaking. That the course is relevant to his/her current academic / professional status. That he/she will comply with visa conditions and leave Germany after completion of the course.</p>

                <p>Processing of the <strong>visa can take up to eight weeks</strong></p>
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



