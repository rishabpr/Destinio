<?php
include 'connection.php';
$array=json_decode($_REQUEST['data'],true);
date_default_timezone_set ("Asia/Calcutta");
$t= date(" H:i:s", time());
$d=date('y-m-d');

$ins="insert into visa_contacts VALUES (NULL,'".$array['name']."','".$array['email']."','".$array['phone']."','booking for ".$array['visa']."','".$array['message']."','".$t."','".$d."','1')";

if(mysqli_query($conn,$ins)) {
   echo 'true';

}
else{
    echo "not";
}
