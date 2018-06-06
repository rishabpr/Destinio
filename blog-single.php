<?php
session_start();
if (isset($_SESSION['user'])) {
    include "logged_in_header.php";

} else {
    include "user_upperheader.php";
}
include "connection.php";
$query_news = "select * from visa_news where id=" . $_REQUEST['id'];
$result_news = mysqli_query($conn, $query_news);
$row_news = mysqli_fetch_array($result_news);


$query_comments = "select * from comments where news_id=" . $_REQUEST['id'];
$result_comments = mysqli_query($conn, $query_comments);

$c = 0;
while ($row_comments = mysqli_fetch_array($result_comments)) {
    $c = $c + 1;
}

?>
<br>
<br>
<br>
<br>


<section class="blog-posts-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 post-list blog-post-list">
                <div class="single-post">
                    <img class="img-fluid" src="img/blog/p1.jpg" alt="">

                    <a href="#">
                        <h1>
                            <?php echo $row_news['caption']; ?>
                        </h1>
                    </a>
                    <div class="content-wrap">


                        <p style="word-break: break-all">
                            <?php echo $row_news['introduction']; ?>
                        </p>

                        <blockquote class="generic-blockquote" style="word-break: break-all">
                            <?php echo $row_news['special']; ?>
                        </blockquote>

                        <p style="word-break: break-all">
                            <?php echo $row_news['description']; ?>
                        </p>


                    </div>
                    <div class="bottom-meta">
                        <div class="user-details row align-items-center">
                            <div class="comment-wrap col-lg-6 col-sm-6">
                                <ul>
                                    <li><p id="like"><span
                                                    class="lnr lnr-heart"></span>
                                            <span><?php echo $row_news['likes']; ?></span> likes</p></li>

                                </ul>
                            </div>
                            <div class="social-wrap col-lg-6">
                                <ul>
                                    <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" title="dribble"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#" title="behance"><i class="fa fa-behance"></i></a></li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <!-- Start nav Area -->
                    <section class="nav-area pt-50 pb-100">
                        <div class="container">
                            <div class="row justify-content-between">
                                <?php
                                $query_news = "select * from visa_news ";
                                $result_news = mysqli_query($conn, $query_news);
                                $d = 0;

                                while ($row = mysqli_fetch_array($result_news)) {

                                    if ($d == 0) {

                                        echo ' <div class="col-sm-6 nav-left justify-content-start d-flex">';
                                        echo '<div class="thumb">';
                                        echo '<img src="img/blog/prev.jpg" alt="">';
                                        echo '</div>';
                                        echo '<div class="post-details">';
                                        echo ' <p>Prev Post</p>';
                                        echo '  <h4 class="text-uppercase"><a href="blog-single.php?id=' . $row['id'] . '">' . $row['caption'] . '</a></h4>';
                                        echo '</div>';
                                        echo '</div>';

                                    } else if ($d == 1) {

                                        echo ' <div class="col-sm-6 nav-left justify-content-start d-flex">';
                                        echo '<div class="thumb">';
                                        echo '<img src="img/blog/prev.jpg" alt="">';
                                        echo '</div>';
                                        echo '<div class="post-details">';
                                        echo ' <p>Prev Post</p>';
                                        echo '  <h4 class="text-uppercase"><a href="blog-single.php?id=' . $row['id'] . '">' . $row['caption'] . '</a></h4>';
                                        echo '</div>';
                                        echo '</div>';

                                    }
                                    $d = $d + 1;
                                }

                                ?>
                    </section>
                    <!-- End nav Area -->

                    <!-- Start comment-sec Area -->
                    <section class="comment-sec-area pt-80 pb-80">
                        <div class="container">
                            <div class="row flex-column">
                                <h5 class="text-uppercase pb-80"><?php if ($c > 1) {
                                        echo $c . " Comments";
                                    } else {
                                        echo $c . " Comment";
                                    } ?> </h5>

                                <?php
                                $query_comments = "select * from comments where news_id=" . $_REQUEST['id'];
                                $result_comments = mysqli_query($conn, $query_comments);

                                while ($row_comment = mysqli_fetch_array($result_comments)) {

                                    echo '<div class="comment-list">';
                                    echo '  <div class="single-comment justify-content-between d-flex">';
                                    echo '<div class="user justify-content-between d-flex">';
                                    echo '<div class="thumb">';
                                    echo '<img src="img/blog/c1.jpg" alt="">';
                                    echo '</div>';
                                    echo '<div class="desc">';
                                    echo ' <h5><a href="">' . $row_comment['name'] . '</a></h5>';
                                    echo '<p class="date"> at <b>' . $row_comment['date'] . '</b></p>';
                                    echo '<p class="comment">' . $row_comment['message'] . ' </p>';
                                    echo ' </div>';
                                    echo '</div>';

                                    echo '</div>';
                                    echo '</div>';

                                }
                                ?>

                            </div>
                        </div>
                    </section>
                    <!-- End comment-sec Area -->

                    <!-- Start commentform Area -->
                    <section class="commentform-area pt-80">
                        <div class="container">
                            <h5 class="pb-50">Leave a Comment</h5>
                            <div class="row flex-row d-flex">
                                <div class="col-lg-4 col-md-6">
                                    <input id="name" name="name" placeholder="Enter your name"
                                           onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = 'Enter your name'"
                                           class="common-input mb-20 form-control" required="" type="text">
                                    <input id="email" name="email" placeholder="Enter your email"
                                           onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = 'Enter your email'"
                                           class="common-input mb-20 form-control" required="" type="email">
                                    <input id="subject" name="subject" placeholder="Subject"
                                           onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = 'Enter your Subject'"
                                           class="common-input mb-20 form-control" required="" type="text">

                                </div>
                                <div class="col-lg-8 col-md-6">
                                    <textarea id="message" class="form-control mb-10" name="message"
                                              placeholder="Messege"
                                              onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"
                                              required=""></textarea>
                                    <?php echo "<button  onclick='add_comment(" . $_REQUEST['id'] . ")' class='primary-btn mt-20' href=''>Comment</a>" ?>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End commentform Area -->


                </div>
            </div>
            <div class="col-lg-4 sidebar">


                <div class="single-widget protfolio-widget">
                    <img src="img/blog/user2.jpg" alt="">
                    <a><h4>Sanjay</h4></a>
                    <p>
                        Founder of Destinio have only one vision to provide all the possible services under one roof.
                    </p>
                    <ul>
                        <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" title="dribble"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#" title="behance"><i class="fa fa-behance"></i></a></li>
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

