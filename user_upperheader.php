<?php



include 'connection.php';
$query_country = "select * from visa_countries";
$result_country = mysqli_query($conn, $query_country);

$query_visa = "select * from visa_styles";
$result_visa = mysqli_query($conn, $query_visa);


?>
<html>
<head>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="dist/jquery.validate.js"></script>
    <script src="js/user.js"></script>
<link href="css/user.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
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
                    <li ><a href="user_home.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="immigration-list.php">Immigration</a></li>
                    <li><a href="course-list.php">Course</a></li>
                    <li><a href="country-list.php">Country</a></li>
                    <li class="menu-has-children"><a href="">Blog</a>
                        <ul>
                            <li><a href="blog-home.php">News</a></li>

                        </ul>
                    </li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="user_login.php">Login</a></li>
                    <li><a data-toggle="modal"  data-target="#myModal1" href="">Sign Up</a></li>

                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->
<div class="container">
    <form id="add_customer_form" method="get" enctype="multipart/form-data">
        <!-- Modal -->
        <div id="myModal1" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label> Customer Name</label>
                            <input type="text" data-rule-required="true" name="customer_name" id="customer_name"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control" data-rule-required="true"
                                      id="address"></textarea>
                        </div>
                        <div class="form-group">
                            <label> Passport Number</label>
                            <input type="text" data-rule-required="true" minlength="8" maxlength="8"
                                   name="passport_number" id="passport_number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label> Email ID</label>
                            <input type="email" data-rule-required="true" name="customer_email"
                                   id="customer_email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label> Password</label>
                            <input type="password" data-rule-required="true" minlength="8"
                                   name="customer_password" id="customer_password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label> Confirm Password</label>
                            <input type="password" data-rule-required="true"
                                   data-rule-equalto="#customer_password"
                                   data-msg-equalto="password and confirm-password does'not match"
                                   name="confirm_password" id="confirm_password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Country Name</label>
                            <?php
                            $query_country = "select * from visa_countries";
                            $result_country = mysqli_query($conn, $query_country);
                            $select = "<select id='country_id' data-rule-required='true' style='display:block !important;' required name='country_id' class='form-control'>";
                            $select .= "<option value=''>Select Country</option>";
                            while ($row_country = mysqli_fetch_array($result_country)) {
                                $select .= '<option value="' . $row_country['id'] . '">(+' . $row_country['country_code'] . ') ' . $row_country['country_name'] . '</option>';
                            }
                            $select .= "</select>";
                            echo $select;
                            ?>
                        </div>
                        <br>
                        <div class="form-group">
                            <br>
                            <label>VISA_TYPE ID</label>
                            <?php
                            $select = "<select id='visa_type_id' data-rule-required='true' name='visa_type_id' class=' form-control'>";
                            $select .= "<option value=''>Select Visa</option>";
                            while ($row_visa = mysqli_fetch_array($result_visa)) {
                                $select .= '<option value="' . $row_visa['id'] . '">' . $row_visa['visa_type'] . '</option>';
                            }
                            $select .= "</select>";
                            echo $select;
                            ?>
                        </div>
                        <br>
                        <div class="form-group">
                            <br>
                            <label>Photo</label>
                            <input type="file" data-rule-required="true" name="photo" id="photo"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="button" value="Submit" onclick="add_customer()" id="btn_submit"
                                   class="btn btn-primary btn-success">
                        </div>
                        <label class="alert-info" id="sp1"></label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

</body>
</html>