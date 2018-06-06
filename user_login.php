<?php


include "user_upperheader.php";
include 'connection.php';
$query_country = "select * from visa_countries";
$result_country = mysqli_query($conn, $query_country);

$query_visa = "select * from visa_styles";
$result_visa = mysqli_query($conn, $query_visa);

session_start();
if(isset($_SESSION['user']))
{
   header('location:user_home.php');
}
?>
<!DOCTYPE html>

<body >
<div class="container" id="container_login">


	<h2 style="color: white">Sign In Now</h2>
    <br>
    <br>
    <form  id="user_login_form" class="form-group  col-lg-5 col-md-5 col-xs-5 col-sm-5" method="post" >
		<div>
			<label  for="email">Email</label>
			<input data-rule-required="true"  data-msg-required="Please Enter Email" class="form-control" type="email"   name="email" id="email">
			<br>
		</div>

			<div >
			<label for="pass">Password</label>
			<input class="form-control" type="password" minlength="6" name="pass" id="pass" data-rule-required="true">
		</div>

        <br>

		<div class="">
			<br>
			<input type="button" id="btn_login" onclick="user_login()" class="btn btn-primary"  value="Login">
			<a class="btn btn-danger " href="user_home.php">
				Cancel
			</a>



            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <label>Password Recovery</label>
                      </div>
                        <div class="modal-body">
                            <form id="forgot">
                            <input class="form-control" type="email" id="forgot_email" placeholder="Enter Email">
                            <br>
                            <input type="button" class="alert alert-dark" onclick="forgot_password()" value="Submit">
                            </form>
                        </div>

                    </div>

                </div>
            </div>
            <div >
                <br>

                <a href="#" data-toggle="modal" data-target="#myModal">Forgot Password?</a>
            </div>
            <br>



		</div>
	</form>

</div>
<span id="sp101"></span>
</body>
</html>
<br>
<br>
<br>
<?php
include "user_footer.php";
?>