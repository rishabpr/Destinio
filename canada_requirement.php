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
                <p><a href="user_home.php">Home</a> &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;Canada Tourist Visa</p>
            </div>
        </div>
    </div>
</div>


<div class="span4">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="heading wow fadeInUp animated"  data-wow-delay="200ms">
                    <h2><b>Canada Tourist Visa</b></h2>
                    <div class="line"></div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 abt">
                    <br>
                <p>Canada is a magnificent country and a hotspot destination for worldwide tourists, workers, businessmen and students. The millions of visitors and immigrants travel Canada every year with their different goals, ambitions and future aspects. The diverse culture, favorable Government Policies, visionary leadership and ideal working, business and study environment suits the immigrants with different objectives and aspirations.</p>
                <h3 class="txt_title"><b>How it is to be in Canada?</b></h3><br>
                <p>Canada is among the most ideal countries to live, work, business and study, due to the following reasons:</p>
                <ul style="list-style-type:circle ">
                    <li>Canada is an Advanced Nation with a strong economy,</li><br>
                    <li>Transparent Government policies</li><br>
                    <li>Mesmerizing locations and landscape beauty</li><br>
                    <li>Excellent Living standard of the People</li><br>
                    <li>Quality of Life</li><br>
                    <li>Has got tremendous outdoors, i.e. Hiking, Mountain Biking, Climbing, Kayaking, Canoeing, Skiing, and Snowshoeing Trails across Canada.</li><br>
                </ul>
                <h3 class="txt_title"><b>What are the Basic Requirements to Visit Canada on Tourist Visa?</b></h3><br>
                <p>If you have already planned to visit Canada, you must know the basic requirements to apply for a Tourist Visa:</p>
                <ul style="list-style-type: circle"><p><a id="doc" name="doc"></a><strong>What documents will be required?</strong><br />
                    <li>Two recent passport photos are required. Make sure these photos meet the requirements. For more information on specifications for photographs, see the Related Links section at the bottom of this page.</li><br>
                    <li>You must provide proof that you have enough money for your visit to Canada. The amount of money may vary, depending on the circumstances for your visit, how long you will stay and whether you will stay in a hotel, or with friends or relatives. You can get more information from the Canadian visa office in your country or region.</li><br />
                    <li>You may need to include other documents. These documents could be identification cards, proof of employment, a letter of invitation from relatives or friends in Canada, or a proposed itinerary. Check the website of the visa office responsible for the country or region where you live for more information.</li><br>
                    <li>Have a valid passport and other travel documents</li><br>
                    <li>Be in good health</li><br>
                    <li>Have good moral character.</li><br>
                    <li>Be able to convince the immigration officer that you have your family, property, assets, etc. that would serve as incentive to come back to your home country.</li><br>
                    <li>Be able to convince the immigration officer that you will leave the country before expires your visa.</li><br>
                    <li>Have sufficient funds to support yourself in Canada and the amount depends on how long you will stay in Canada and whether you will be staying with family, friends or any paid accommodation.</li><br>
                </ul>
                <h3 class="txt_title"><b>You may also require:</b></h3><br>
                <ul style="list-style-type: circle">
                    <li>R.V. (Temporary Resident Visa) based on your citizenship</li><br>
                    <li>Medical examination</li><br>
                    <li>Letter of Invitation</li><br>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End banner Area -->

<!-- Start counrty-list Area -->
<!-- End counrty-list Area -->


<!-- Start callto Area -->
<!-- End callto Area -->

<?php
include "user_footer.php";
?>

</body>
</html>



