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

<img src="img/usa.jpg" class="  img img-responsive" height="100%" width="100%" style="margin-top: 150px">


<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <br>
                <p><a href="user_home.php">Home</a> &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;
                    Requirements List</p>
            </div>
        </div>
    </div>
</div>

<div class="span4">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="heading wow fadeInUp animated" data-wow-delay="200ms">

                    <div class="line"></div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 abt">
                <br>
                <h3> <b> Overview</b></h3><br>


                <p> The B-1/B-2 visitor visa is for people traveling to the United States temporarily for business (B-1)
                    or for pleasure or medical treatment (B-2). Generally, the B-1 visa is for travelers consulting with
                    business associates, attending scientific, educational, professional or business
                    conventions/conferences, settling an estate or negotiating contracts. The B-2 visa is for travel
                    that is recreational in nature, including tourism, visits with friends or relatives, medical
                    treatment and activities of a fraternal, social or service nature. Often, the B-1 and B-2 visas are
                    combined and issued as one visa: the B-1/B-2.
                </p>
                <h3><b> Qualifications </b></h3>
                <br>

                <p>If you apply for a B-1/B-2 visa, you must demonstrate to a consular officer that you qualify for a
                    U.S. visa in accordance with the U.S. Immigration and Nationality Act (INA). Section 214(b) of the
                    INA presumes that every B-1/B-2 applicant is an intending immigrant. You must overcome this legal
                    presumption by showing:</p>
                <ul style="list-style-type:lower-greek;">
                    <li> That the purpose of your trip to the United States is for a temporary visit, such as business,
                        pleasure, or medical treatment</li><br>
                       <li> That you plan to remain in the United States for a specific, limited period of time</li><br>
                        <li>Evidence of funds to cover your expenses while in the United States</li><br>
                        <li>That you have a residence outside the United States, as well as other binding social or economic
                            ties, that will ensure your return abroad at the end of your visit</li><br>
                        <li>Personal or domestic employees and crew members working aboard vessels within the Outer
                            Continental Shelf may qualify for B-1 visas under certain circumstances.</li><br>
                </ul>

              <h3> <b> Application Items</b></h3>
                <br>

               <p> If you apply for a business/tourist visa, you must pay your $160 application fee and submit the
                following:</p>
            <ul style="list-style-type:lower-greek;">

                <li>A Nonimmigrant Visa Electronic Application (DS-160) Form.</li><br>
                <li>A passport valid for travel to the United States with a validity date at least six months beyond your
                intended period of stay in the United States (unless country-specific agreements provide exemptions). If
                more than one person is included in your passport, each person desiring a visa must submit an
                    application.</li><br>
                <li>One (1) 2 x 2 inches (51 x 51 mm) photograph taken within the last six months. .</li><br>
                <li>If a visa is issued, there may be an additional visa issuance reciprocity fee, depending on your
                nationality.</li><br>
                </ul>

            </div>
        </div>
    </div>
</div>
<br>
<br>
<?php
include "user_footer.php";
?></body>
</html>



