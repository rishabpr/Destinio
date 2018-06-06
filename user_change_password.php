<?php

include 'connection.php';
session_start();
if(isset($_SESSION['user']))
{
    include "logged_in_header.php";

}
else {
    header('location:user_login.php');

}
?>

<body style="margin-top: 150px">

        <div class="container" >
    <div class="col-lg-5 ">
                <form id="user_change_password_form" >
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" data-rule-required="true" value="<?php   echo  $_SESSION['user'];?>" name="email" id="email" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Old Password</label>
                        <input type="password" data-rule-required="true" minlength="8" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" data-rule-required="true" minlength="8" name="newpassword" id="newpassword" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" data-rule-required="true" minlength="8" data-rule-equalto="#newpassword" data-msg-equalto="password and confirm-password does'not match" name="confirmpassword" id="confirmpassword" class="form-control">
                    </div>
                    <div class="form-group col-lg-offset-2">
                        <input type="button" id="btpass" onclick="user_change_password()" class="btn btn-primary btn-success" value="Change Password">
                    </div>
                    <b><span  id="sp1"></span></b>
                </form>
    </div>
</div>
</body>
</html>
<?php
include "user_footer.php";
?>