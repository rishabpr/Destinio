<?php

$array=json_decode($_REQUEST['ins_query'],true);
include "connection.php";
$s="select * from visa_user where email='".$array['email']."' and password='".$array['password']."'";
$result=mysqli_query($conn,$s);
if(mysqli_fetch_array($result)) {
    $query = "update visa_user set password='" . $array['newpassword'] . "' where email='" . $array['email'] . "'";
    mysqli_query($conn, $query);
    echo "Password Changed";

}
else
{
    echo " Wrong Password ";
}