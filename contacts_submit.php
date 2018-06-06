<?php
include 'connection.php';

date_default_timezone_set ("Asia/Calcutta");
$t= date(" H:i:s", time());
$d=date('y-m-d');
$ins="insert into visa_contacts VALUES (NULL,'".$_POST['name']."','".$_POST['email']."','".$_POST['number']."','".$_POST['subject']."','".$_POST['message']."','".$t."','".$d."','1')";

if(mysqli_query($conn,$ins)) {
    echo " Query Submitted.We will revert back to as soon as possible";
    header('location:contact.php');
}
else{
    echo "not";
}
