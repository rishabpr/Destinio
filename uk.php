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
<img src="img/uk.jpg" class="  img img-responsive" height="100%" width="100%" style="margin-top: 150px" >
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <br>
                <p><a href="user_home.php">Home</a> &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp; Study in UK</p>
            </div>
        </div>
    </div>
</div>


<div class="span4">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="heading wow fadeInUp animated"  data-wow-delay="200ms">
                    <br>
                    <h2><b>Study in UK</b></h2>
                    <div class="line"></div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 abt">
                    <br>
                <p>A high degree of sophistication, a matchless charm, and above all, educational quality that's backed by centuries of tradition, the United Kingdom is just the right place to give your career that global edge.</p>
                <p>In addition to the hallowed Oxford and Cambridge, UK have a large number of other universities which rank among the best in the world and offer a wide range of courses.</p>

                <p>One major advantage of U.K. education is its one-year Masters Degree for almost all courses, saving your considerable time and money. Also, unlike those in other countries, most UK universities recognize the Indian education system of 3 year graduation.</p>


                <p>UK qualifications are recognized and respected throughout the world. Your UK qualification will be a solid foundation for building your future, boosting your career and prospects for a higher salary. UK universities, colleges and schools will provide a vibrant, creative and challenging environment in which to develop your potential.</p>

                <p>Quality standards for UK institutions are among the best in the world. Universities, colleges and schools continually have to prove that their courses meet strict criteria. Many other countries are now trying to follow the example of the UK. We represent a number of quality colleges and universities from UK. We  do  represent   some top leading  colleges from  UK where college fee  structure is very much reasonable for Indian students and in the meantime quality of education is maintained at the top level. Such  colleges offer a range of courses like hospitality management, accounting, business management, BBA, MBA at a very reasonable fee structure.</p>

                <h3><b>Student Visa</b></h3>
                <br>
                <p>Visa applications have to be made on IM2A forms, which are available free of cost at the British Embassies. This form has to be filled up by the student and submitted to the embassy, along with the Visa application fee and the required documents as mentioned below.</p>

                <h4><b>Immigration Rules for Students</b></h4>
                    <br>
                <ul style="list-style-type: circle">
                    <li >You must intend to study at a publicly funded university or college, a bonafide private institution or a fee-paying independent school.</li>
                    <li>You must  be able to and intend to follow a full time degree course, or a weekday, full time course at a single institution involving at least 15 hours of organized, daytime study per week.</li>
                    <li >You must be able to pay for your course and the living expenses of your  husband or wife and children (if they are with you) without working in  UK or claiming public funds.</li>
                    <li >You must not intend to work in UK unless you are accepted for a course lasting longer than six months, when you may work part-time or during vacations.</li>
                    <li >You must intend to leave UK at the end of your studies.</li>
                </ul>
                <br>
                <h3><b>Documents Required For a Student Visa</b></h3>
                    <br>
                <h4><b>A letter of acceptance on the course</b></h4>
                <br>
                <p>This will be a letter from your institution confirming that a place has been offered to you and that the course is full-time as defined by the immigration law. The letter should state how long the course will last. Where your course is more advanced and specialized, the letter should also state what level of English is needed for the course (giving minimum test marks, if appropriate) and confirm that you satisfy this requirement.</p>

                <h4><b>Evidence that you can pay the course fees and support yourself and your family, if applicable</b></h4>
                <br>
                <p>Depending on your circumstances, this could include evidence of government sponsorship, a letter from a sponsor in UK confirming they can support you, together with evidence that they can do this, and/or your own bank statements. You should also provide a letter from your place of study stating the full cost of the course, what arrangements are acceptable for payment and whether you have already paid fees or a deposit.</p>
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



