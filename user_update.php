<?php

include 'connection.php';
session_start();
if (isset($_SESSION['user'])) {
    include "logged_in_header.php";
    $query = "select * from visa_customers where customer_email='" . $_SESSION['user'] . "'";
    $query_result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($query_result);
} else {

        header('location:user_login.php');
  }

?>
    <style>
        .div_left
        {
            margin-top:16px;
            float: left;
        }
        .div_right
        {
            float:right;
        }
    </style>
    <body style="margin-top: 150px">

    <div class="container">

        <div class="col-md-12" style="border:0px solid;">
            <form id="user_update_form">
                    <div class="col-md-6 div_left" style="margin-top:0px;">
                        <label>Name</label>
                        <input type="text" data-rule-required="true" value="<?php echo $row['customer_name']; ?>" name="name"
                               id="name" class="form-control">
                    </div>
                    <div class="col-md-6 div_right">
                        <div class="form-group">
                        <label>Address</label>
                        <textarea name="address" class="form-control" data-rule-required="true"
                                  id="address"><?php echo $row['address']; ?></textarea>
                    </div>
                    </div>
                <div class="col-md-6 div_left">
                <div class="form-group">
                    <label>Passport</label>
                    <input type="text" data-rule-required="true" value="<?php echo $row[3]; ?>" minlength="8" maxlength="8"
                           name="passport" id="passport" class="form-control">
                </div>
                </div>
                <div class="col-md-6 div_right">
                <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="text" data-rule-required="true" data-rule-number="true" value="<?php echo $row[9]; ?>"
                           minlength="10" maxlength="10" name="mobile" id="mobile" class="form-control">
                </div>
                </div>
                <div class="col-md-6 div_left" style="margin-top:0px;">
                <div class="form-group">
                    <label>Country Name</label>
                    <?php
                    $query_country = "select * from visa_countries";
                    $result_country = mysqli_query($conn, $query_country);
                    $select = "<select id='country_id' data-rule-required='true' style='display:block !important;' required name='country_id' class='form-control'>";
                    $select .= "<option value=''>Select Country</option>";
                    while ($row_country = mysqli_fetch_array($result_country)) {
                        if ($row_country['id'] == $row['country_id']) {

                            $select .= '<option value="' . $row_country['id'] . '" selected>' . $row_country['country_name'] . '</option>';
                        } else {
                            $select .= '<option value="' . $row_country['id'] . '">' . $row_country['country_name'] . '</option>';
                        }
                    }
                    $select .= "</select>";
                    echo $select;
                    ?>
                </div>
                </div>
                <div class="col-md-6 div_right">
                <div class="form-group">
                    <label>VISA_TYPE ID</label>
                    <?php
                    $query_visa = "select * from visa_styles";
                    $result_visa = mysqli_query($conn, $query_visa);
                    $select = "<select id='visa_type_id' data-rule-required='true' name='visa_type_id' class=' form-control'>";
                    $select .= "<option value=''>Select Visa</option>";
                    while ($row_visa = mysqli_fetch_array($result_visa)) {
                        if ($row_visa['id'] == $row['visa_type_id']) {
                            $select .= '<option value="' . $row_visa['id'] . '" selected>' . $row_visa['visa_type'] . '</option>';
                        } else {
                            $select .= '<option value="' . $row_visa['id'] . '">' . $row_visa['visa_type'] . '</option>';
                        }
                    }
                    $select .= "</select>";
                    echo $select;
                    ?>
                </div>
                </div>
                <div class="col-md-4 col-xs-4 wthree_contact_left_grid form-group col-md-offset-1 col-xs-offset-1">
                    <a href="<?php echo($row['photo']); ?>" target="_blank"> <img style="height: 80px;width: 80px;"
                                                                                  src="<?php echo($row['photo']); ?>"></a>
                    <input type="file" value="<?php echo($row['photo']); ?>" id="photo" name="photo">
                </div>
                <div class="form-group col-lg-offset-2">
                    <input type="button" id="btpass" onclick="user_update()" class="btn btn-primary btn-success"
                           value="Update">
                </div>
                <b><span id="sp1"></span></b>
            </form>
        </div>

    </div>
    </body>
    </html>
<?php
include "user_footer.php";
?>