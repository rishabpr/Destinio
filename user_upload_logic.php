<?php
include "connection.php";
if($_REQUEST['country']==''&&$_REQUEST['visa']=='') {
        $query_doc1="select * from user_documents where email='".$_REQUEST['uid']."'";
        $result_doc1=mysqli_query($conn,$query_doc1);
    $c = 0;
    $ans = "[";
    while ($row_doc = mysqli_fetch_array($result_doc1))
    {
        $query_country = "select country_name from visa_countries where id=" . $row_doc[5];
        $result_country = mysqli_query($conn, $query_country);
        $row_country = mysqli_fetch_array($result_country);


        $query_visa = "select visa_type from visa_styles where id=" . $row_doc[6];
        $result_visa = mysqli_query($conn, $query_visa);
        $row_visa = mysqli_fetch_array($result_visa);


        $ans = $ans . "{";

        $ans = $ans . '"document_name":' . '"' . $row_doc[2] . '",';
        $ans = $ans . '"user_id":' . '"' . $row_doc[0] . '",';
        $ans = $ans . '"country_name":' . '"' . $row_country[0] . '",';
        $ans = $ans . '"visa_name":' . '"' . $row_visa[0] . '",';
        $ans = $ans . '"document_file":' . '"' . $row_doc[2] . '",';
        $ans = $ans . '"document_status":' . '"' . $row_doc[4] . '",';
        $ans = $ans . '"document_up_name":' . '"' . $row_doc[3] . '",';
        $ans = $ans . '"document_reason":' . '"' . $row_doc[7] . '"';
        $ans = $ans . "},";
        $c = $c + 1;
    }
    $ans = trim($ans, ",");
    $ans = $ans . "]";
    if($c>0) {
        echo $ans;
    }
    else{
        echo 1;
    }
}

else if ($_REQUEST['country']!=''&&$_REQUEST['visa']!='') {
    $query_doc = "select * from visa_documents where country_id='" . $_REQUEST['country'] . "' and visa_type='" . $_REQUEST['visa'] . "'";
    $result_doc = mysqli_query($conn, $query_doc);

    $query_doc1 = "select * from user_documents where country_id='" . $_REQUEST['country'] . "' and visa_type_id='" . $_REQUEST['visa'] . "' and  email='" . $_REQUEST['uid'] . "'";
    $result_doc1 = mysqli_query($conn, $query_doc1);

    $ans = "[";
    $c = 0;
    while (($row = mysqli_fetch_array($result_doc)) | ($row_doc = mysqli_fetch_array($result_doc1))) {
        $query_country = "select country_name from visa_countries where id=" . $_REQUEST['country'];
        $result_country = mysqli_query($conn, $query_country);
        $row_country = mysqli_fetch_array($result_country);


        $query_visa = "select visa_type from visa_styles where id=" . $_REQUEST['visa'];
        $result_visa = mysqli_query($conn, $query_visa);
        $row_visa = mysqli_fetch_array($result_visa);


        $ans = $ans . "{";


        if($row_doc[2]=='')
        {
            $ans = $ans . '"document_name":' . '"' . $row[3] . '",';
        }
        else
        {
            $ans = $ans . '"document_name":' . '"' . $row_doc[2] . '",';
        }

        $ans = $ans . '"user_id":' . '"' . $row_doc[0] . '",';
        $ans = $ans . '"country_name":' . '"' . $row_country[0] . '",';
        $ans = $ans . '"visa_name":' . '"' . $row_visa[0] . '",';
        $ans = $ans . '"document_file":' . '"' . $row_doc[2] . '",';
        $ans = $ans . '"document_status":' . '"' . $row_doc[4] . '",';
        $ans = $ans . '"document_up_name":' . '"' . $row_doc[3] . '",';
        $ans = $ans . '"document_reason":' . '"' . $row_doc[7] . '"';
        $ans = $ans . "},";
        $c = $c + 1;
    }
    $ans = trim($ans, ",");
    $ans = $ans . "]";
    if ($c > 0) {
        echo $ans;
    } else {
        echo 1;
    }

}
