<?php
session_start();
include "connection.php";
if (isset($_SESSION['user'])) {
    include "logged_in_header.php";

}
else {
    header('location:user_login.php');
}
$query_country = "select * from visa_countries ";
$result_country = mysqli_query($conn, $query_country);
?>

<body style="margin-top: 200px" onload="view_user_documents('','')">
<div class="container">
    <?php
    echo "<div  class='container'>";
    $select = "<div class='row'><div class='col-md-6'><select onchange='get_visa1(this.value);view_user_documents(this.value,\"\")' class='form-control'>";
    $select .= "<option value=''>Select Country</option> ";
    while ($row_country = mysqli_fetch_array($result_country)) {
        $select .= "<option value=" . $row_country[0] . ">" . $row_country['country_name'] . "</option>";
    }
    $select .= "</select></div>";
    echo $select;
    echo "<div class='col-md-6'>";
    echo ' <span id="select"></span>';
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<br>";
    echo "<br>";
    echo '<span  id = "sp2" ></span>';
    ?>

    <br>
    <br>
    <br>
    <br>

</div>
</body>
<?php
include "user_footer.php";
?>
