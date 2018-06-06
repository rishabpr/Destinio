<?php
include "connection.php";

$array=json_decode($_REQUEST['data'],true);


    $query_user = "select * from visa_user where email='" . $array['email'] . "' and password='" . $array['pass'] . "'";
    $result_user=mysqli_query($conn,$query_user);
    $c=0;

    while($row_user=mysqli_fetch_array($result_user))
    {
        $c=$c+1;
    }


    if($c>0)
    {
        session_start();
        $_SESSION['user']=$array['email'];
        $_SESSION['type']='user';

        echo "user_home.php";
    }
    else
    {

        echo 'no';
    }


?>