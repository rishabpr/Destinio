<?php
include "connection.php";
$array=json_decode($_REQUEST['data'],true);
date_default_timezone_set ("Asia/Calcutta");
$date=date("D jS \of F Y h:i:s A");
echo "<script>alert(".$_REQUEST['id'].")</script>";
$query_comment="insert into comments values('".$array['name']."','".$array['email']."','".$array['subject']."','".$array['message']."','','".$_REQUEST['id']."','".$date."')";
$result=mysqli_query($conn,$query_comment);
echo $query_comment;
?>