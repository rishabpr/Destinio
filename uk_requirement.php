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
<img src="img/uk.jpg" class="  img img-responsive" height="100%" width="100%" style="margin-top: 150px">
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <br>
                <p><a href="user_home.php">Home</a> &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;UK Visa Details</p>
            </div>
        </div>
    </div>
</div>


<div class="span4">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="heading wow fadeInUp animated" data-wow-delay="200ms">
                    <br>
                    <h2><b> UK  Visa</b></h2>

                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 abt">
            <br>
                <p>The United Kingdom is a beautiful country that full of opportunities which is a reason why most wish
                    to go to the country whether it is for business, studies or pleasure. However, prior to booking a
                    ticket, customers must procure a visa in order to travel. Customers can apply for a visa online and
                    then will be asked to come to the office on specific dates where they will have to provide the
                    required documents and other necessary details. There are a number of requirements that need to be
                    provided for a visa to be furnished. These are provided below.</p>
                <h2><b>Documents Required to Apply for a UK Visa:</b></h2><br>
                <p>While applying for a UK visa, applicants will have to submit certain documents. These documents are listed below and
                    are compulsory. Additional documents may be required based on the kind of visa being applied for and
                    other factors, if any. The most important ones are listed below.</p>
                <ul style="list-style-type: circle">
                    <li>Receipt that is provided for the fee paid needs to be furnished.</li><br>
                    <li>Document or letter confirming appointment</li><br>
                    <li>A recent passport sized color photograph. This photo guidance is needed when the applicant has
                        been exempted from providing biometrics
                    </li><br>
                    <li>Dated and signed printout of the online application form</li><br>
                    <li>Evidence of sponsors leave for applicant to remain in the UK incase they are applying as
                        dependents
                    </li><br>
                    <li>Evidence of all income that has been stated on application form such as tax returns, pay slips,
                        letter from employer and so on
                    </li><br>
                    <li>Evidence of any asset such as land or property</li><br>
                    <li>In case applicant has applied for a settlement visa then a completed self-assessment form that
                        is signed and dated should also be provided
                    </li><br>
                    <li>Other supporting documents such as proof of age and proof of address</li><br>
                    <li>Marriage or divorce certificate in addition to evidence of applicants family staying in their
                        native country when they travel(if applicable)
                    </li><br>
                    <li>Evidence and documents regarding applicants education</li><br>
                    <li>Evidence of income and bank account, tax submissions and so on.</li><br>
                    <li>Photographs on the application from those who have not submitted biometrics as UKVI does not
                        require passport photos from those who have provided biometrics
                    </li><br>
                </ul>
                <h2><b>Eligibility Criteria for Applying a UK Visa</b></h2><br>
                <p>In order to avail a visa, applicants must meet certain
                    needs and requirements. These requirements are listed below. Additional requirements may be
                    mentioned based on the kind of visa being applied for.</p>
                <ul style="list-style-type: circle">
                    <li>Applicants must furnish proof showing that their entering the country will not harm the country
                        or its public in any way.
                    </li><br>
                    <li>Visa qualification criteria must be met(depends on the kind of visa)</li><br>
                    <li>A passport that is valid for a minimum of 6 months must be provided</li><br>
                    <li>Applicants must not have a criminal record against them nor should they be involved in any
                        criminal case at the time of application for visa.
                    </li><br>
                    <li>Applicant must have enough resources to financially support themselves or their family during
                        the course of their stay in the country.
                    </li><br>
                    <li>Medical tests should be passed and work permit must be furnished in case of </li><br>
                    <li>For certain visa requirements, customers may be asked to appear for interviews</li><br>
                </ul>
                <h2><b>UK Visa - General Refusal Reasons:</b></h2>
                <br>
                <p>There are a few general reasons as to why a person might be refused the leave to enter UK. Some of
                    these include -</p>
                <ul style="list-style-type: circle">
                    <li>Applicant is a subject of a deportation order</li><br>
                    <li>Has been convicted of an offence and has been sent to prison</li><br>
                    <li>Failure to produce required documents such as a valid passport</li><br>
                    <li>If the Secretary of State has directed personally that exclusion of the applicant is conductive
                        to the good of the public in the UK
                    </li><br>
                    <li>False documents have been submitted or false representation has been made</li><br>
                    <li>If the applicant has breached UK immigration law previously by
                        either overstaying, being an illegal immigrant, etc.
                    </li><br>
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



