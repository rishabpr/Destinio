<html>
<head>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="dist/jquery.validate.js"></script>
    <script src="js/user.js"></script>
    <link href="css/user.css" rel="stylesheet">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Destinio</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<header id="header" id="home">
    <div class="container">
        <div class="row header-top align-items-center">
            <div class="col-lg-4 col-sm-4 menu-top-left">
			    			<span>
			    				We believe we helps people <br>
								for happier lives
			    			</span>
            </div>
            <div class="col-lg-4 menu-top-middle justify-content-center d-flex">
                <a href="user_home.php">
                    <img class="img-fluid" src="img/destionio%20logo%202%20(1).png" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-sm-4 menu-top-right">
                <a class="tel" href="#">+91-8054732235</a>
                <span class="lnr lnr-phone-handset"></span>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">

        <div class="row align-items-center justify-content-center d-flex">
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="user_home.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="immigration-list.php">Immigration</a></li>
                    <li><a href="course-list.php">Course</a></li>
                    <li><a href="country-list.php">Country</a></li>
                    <li class="menu-has-children"><a href="#">Blog</a>
                        <ul>
                            <li><a href="blog-home.php">News</a></li>
                            <li><a href="blog-single.php?id=14">Blog Single</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li class="menu-has-children"><a href="#">Manage Account</a>
                        <ul>
                            <?php echo"<li><a href='#'><b>".$_SESSION['user']."</b></a></li>";?>
                            <li><a href="user_change_password.php">Change Password</a></li>
                            <li><a href="user_update.php">Update Profile</a></li>
                            <li><a href="user_view_documents.php">View Documents</a></li>
                            <li><a href="user_upload_documents.php">Upload Documents</a></li>
                            <li><a href="logout.php">Log Out</a></li>
                            <input  type="hidden" id="uid" value="<?php echo $_SESSION['user'];?>">
                        </ul>
                    </li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->

</body>
</html>
