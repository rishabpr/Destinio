<?php
session_start();
include "connection.php";
$status= $_REQUEST['status'];
$customer_name=$_REQUEST['name'];
$address=$_REQUEST['address'];
$passport_number=$_REQUEST['passport'];
$country_id=$_REQUEST['country_id'];
$visa_type_id=$_REQUEST['visa_type_id'];
$mobile=$_REQUEST['mobile'];
if($status==1) {
    $photo = $_FILES['photo']['name'];
    $temp = $_FILES['photo']['tmp_name'];
    $size = $_FILES['photo']['size'];
    $type = $_FILES['photo']['type'];
    $path = "photos/" . $photo;
    $extension = strtolower(pathinfo($photo, PATHINFO_EXTENSION));
    if ($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg') {
        move_uploaded_file($temp, $path);
        $query_customer = "update visa_customers set customer_name='" . $customer_name . "', address='" . $address . "',passport_number='" . $passport_number . "',country_id='" . $country_id . "',visa_type_id='" . $visa_type_id . "',mobile='" . $mobile . "',photo='" . $path . "' where customer_email='" . $_SESSION['user']."'";
        mysqli_query($conn, $query_customer);
                echo "Entry Updated";
    } else {
        echo "please upload PNG or JPG or JPEG Images";

    }
}
else {
    $query_update = "update visa_customers set customer_name='" . $customer_name . "', address='" . $address . "',passport_number='" . $passport_number . "',country_id='" . $country_id . "',visa_type_id='" . $visa_type_id . "',mobile='" . $mobile . "' where customer_email='" . $_SESSION['user']."'";
    mysqli_query($conn, $query_update);
    echo "Entry Updated";
}