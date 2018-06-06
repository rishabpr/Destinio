<?php


include "upper_header.php";
?>
                <div class="col-lg-4 col-sm-4 col-xs-4">

                    <?php
                    echo " <label>Country Name</label>";
                    $select = "<select   onchange='val_reset();visa_country(this.value);' id='country_filter' data-rule-required='true'  name='country_filter' class=' form-control'>";
                    $select .= "<option value=''>Select Country</option>";
                    while ($row_country1 = mysqli_fetch_array($result_country)) {
                        $select .= '<option    value="' . $row_country1['id'] . '">(+' . $row_country1['country_code'] . ') ' . $row_country1['country_name'] . '</option>';
                    }
                    $select .= "</select>";
                    echo $select;
                    ?>
                </div>

                <div class="col-lg-4 col-sm-4 col-xs-4">

                   <span id='select'></span>

                </div>
                <br>
                <br>
                <br>


                    <span id="sp2"></span>


                <a onclick="return confirm('Are You Sure Want to delete?')" href="delete_all.php?table=visa_customers&page=view_customers.php"><button  class="btn btn-danger" >Delete All</button></a>

            </div>
        </div>



    </section>

</section>

</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]>
<script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
