<!DOCTYPE html>
<html lang="zxx" class="no-js">

<?php
include "connection.php";
$query_news = "select * from visa_news";
$result_news = mysqli_query($conn, $query_news);
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
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Blog Home
                </h1>
                <p class="text-white link-nav"><a href="user_home.php">Home </a> <span class="lnr lnr-arrow-right"></span>
                    <a href="blog-home.php"> Blog Home</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start blog-posts Area -->
<section class="blog-posts-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 post-list blog-post-list">

                <?php

                echo '<div class="single-post">';

                while ($row_news = mysqli_fetch_array($result_news)) {

                    echo "<a href='blog-single.php?id=".$row_news['id']."'><h1>" . $row_news['caption'] . " </h1 ></a>";

                    echo "<p style='word-break:break-all'>".$row_news['introduction']."</p >";

                    echo "<div class='bottom-meta' >";
                        echo "<div class='user-details row align-items-center' >";
                            echo '<div class="comment-wrap col-lg-6" >';
                            echo "<ul >";
                                echo "<li ><a  href='' onclick='like(".$row_news['id'].",".$row_news['likes'].",0)' ><span id='heart' class='lnr lnr-heart' ></span id='count' > <span>".$row_news['likes']."</span> likes </a ></li >";

                                echo "</ul >";
                                echo "</div >";

                                echo "<div class='social-wrap col-lg-6' >";
                                echo "<ul >";
                                echo '<li ><a href = "#" ><i title="facebook" class="fa fa-facebook" ></i ></a ></li >';
                                echo '<li ><a href = "#" ><i  title="twitter"class="fa fa-twitter" ></i ></a ></li >';
                                echo '<li ><a href = "#" ><i  title="dribble"class="fa fa-dribbble" ></i ></a ></li >';
                                echo '<li ><a href = "#" ><i  title="behance"class="fa fa-behance" ></i ></a ></li >';
                                echo '</ul >';
                            echo "</div>";
                            echo "</div>";
                        echo "</div>";

                }
                ?>
            </div>
            </div>

            <div class="col-lg-4 sidebar">


                <div class="single-widget protfolio-widget">
                    <img src="img/blog/user2.jpg" alt="">
                    <a ><h4>Sanjay</h4></a>
                    <p>
                        Founder of Destinio have only one vision to provide all the possible services under one roof.
                    </p>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>






                <div class="single-widget tags-widget">
                    <h4 class="title">People We Work For</h4>
                    <ul>
                        <li>Students</li>
                        <li>Tourist</li>
                        <li>Adventure</a></li>
                        <li>Business People</li>
                        <li>Special Workers</li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End blog-posts Area -->


<?php
include "user_footer.php";
?>
</body>
</html>



