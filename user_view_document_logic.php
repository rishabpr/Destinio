<?php
include "connection.php";
if($_REQUEST['country_code']=='')
{
    $query_doc = "select * from visa_documents";
}
else if( $_REQUEST['country_code']!='' &&$_REQUEST['visa_code']=='')
{
    $query_doc = "select * from visa_documents where country_id=".$_REQUEST['country_code'];
}
else
{
    $query_doc = "select * from visa_documents where country_id='".$_REQUEST['country_code']."' and visa_type='".$_REQUEST['visa_code']."'";
}

$result_doc = mysqli_query($conn, $query_doc);
$ans = "[";
$c = 0;
while (($row = mysqli_fetch_array($result_doc))) {
    $query_country = "select country_name from visa_countries where id=" . $row['country_id'];
    $result_country = mysqli_query($conn, $query_country);
    $row_country = mysqli_fetch_array($result_country);


    $query_visa = "select visa_type from visa_styles where id=" . $row['visa_type'];
    $result_visa = mysqli_query($conn, $query_visa);
    $row_visa = mysqli_fetch_array($result_visa);


    $ans = $ans . "{";
    $ans = $ans . '"id":' . $row[0] . ",";
    $ans = $ans . '"document_name":' . '"' . $row[3] . '",';
    $ans = $ans . '"country_name":' . '"' . $row_country[0] . '",';
    $ans = $ans . '"visa_name":' . '"' . $row_visa[0] . '",';
    $ans = $ans . '"document_file":' . '"' . $row[4] . '"';

    $ans = $ans . "},";
    $c = $c + 1;
}
$ans = trim($ans, ",");
$ans = $ans . "]";
if ($c > 0) {
    echo $ans;
} else {
    echo "No Entries Yet!!";
}
