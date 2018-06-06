<?php
include "connection.php";
$query="select * from visa_user where email='".$_REQUEST['data']."'";
$result=mysqli_query($conn,$query);
$c=0;
$pass;
while($row=mysqli_fetch_array($result))
{
    $pass=$row[1];
    $c=$c+1;
}
if($c>0)
{
    mail($_REQUEST['data'],'Password Recovery','Your Password is::'.$pass);
    echo 'true';
}
else{
    echo 'false';
}
?>

