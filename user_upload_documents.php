<html>
<?php
include "connection.php";
session_start();
if (isset($_SESSION['user'])) {
    include "logged_in_header.php";

}

else {
        header('location:user_login.php');

    }
$query_country = "select * from visa_countries ";
$result_country = mysqli_query($conn, $query_country);


?>

<body style="margin-top: 200px" onload="upload_user_documents('','')">
<?php


echo "<div style='padding-left: 100px' >";
$select = "<div class='row'><div class='col-md-4'><select onchange='get_visa(this.value);upload_user_documents(\"\",\"\")' class='form-control'>";
$select .= "<option value=''>Select Country</option> ";
while ($row_country = mysqli_fetch_array($result_country)) {
    $select .= "<option value=" . $row_country[0] . ">" . $row_country['country_name'] . "</option>";
}
$select .= "</select></div>";
echo $select;

echo "<div class='col-md-4'>";
echo  ' <span id="select"></span>';
echo "</div>";
echo "</div>";
echo "</div>";


?>


<br>
<br>
<br>
<span id="sp2"></span>
<br><br><br><br><br><br>
</body>
</html>
<?php
include "user_footer.php";
?>