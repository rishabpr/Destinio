<?php

include "connection.php";
session_start();
$country_name=$_REQUEST['country_name'];
$visa_type=$_REQUEST['visa_type'];
$document_name=$_REQUEST['document_name'];
$document_file=$_FILES['file']['name'];
$temp=$_FILES['file']['tmp_name'];
$size=$_FILES['file']['size'];
$type=$_FILES['file']['type'];
$path="documents/".$document_file;
$path2="C:/Users/prabh/PhpstormProjects/visa_processing/documents/".$document_file;

$extension=strtolower(pathinfo($document_file,PATHINFO_EXTENSION));
move_uploaded_file($temp,$path2);
if($extension=='txt'||$extension=='pdf'||$extension=='doc'||$extension=='docx')
{
    copy($path, $path2);
    if($_REQUEST['id']=='') {
        $ins = "insert into user_documents VALUES ('','" . $_SESSION['user'] . " ','" . $document_name . "','" . $path . "','-1',$country_name,$visa_type,'')";
    }
    else{
        $ins="update user_documents set document_file='".$path."',status='-1' ,reason='' where id=".$_REQUEST['id'];
    }
$result=  mysqli_query($conn,$ins);
echo "Document Submitted";
}
else{
    echo "Please Upload  File of Formats (PDF or TEXT or DOC or DOCX) ";

}
