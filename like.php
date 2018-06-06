<?php
include "connection.php";
$id=$_REQUEST['id'];

$likes=$_REQUEST['likes_count']+1;
$query_like="update visa_news set likes=".$likes." where id=".$id;
mysqli_query($conn,$query_like);

?>