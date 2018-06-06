var country_code;
var visa_code;
function visa_id(id) {
    visa_code=id;
    upload_user_documents(country_code,visa_code);

}
function visa_id1(id) {
    visa_code=id;
   view_user_documents(country_code,visa_code);

}
function like(id,like_count,page_stat) {

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          if(page_stat==0) {
              document.getElementById('count').innerHTML=like_count+1;
              document.getElementById('like').style.color='red';
          }
              else
          {

              document.getElementById('like').innerHTML=like_count+1;
              document.getElementById('like').style.color='red';

          }

        }
    };
        xmlhttp.open("GET", "like.php?id="+id+"&likes_count="+like_count, true);
        xmlhttp.send();
}

function get_visa( country_id) {
country_code=country_id;
            var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('select').innerHTML = this.responseText;
            }
        };
            xmlhttp.open("GET", "user_visa.php?data=" + country_id, true);
            xmlhttp.send();


}
function get_visa1( country_id) {
country_code=country_id;
            var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('select').innerHTML = this.responseText;
            }
        };
            xmlhttp.open("GET", "user_visa1.php?data=" + country_id, true);
            xmlhttp.send();


}



function user_login() {


    if ($('#user_login_form').valid())
    {

        var email = document.getElementById('email').value;
        var pass = document.getElementById('pass').value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                if (this.responseText==='no') {

                    document.getElementById("sp101").innerHTML = "Inncorrect Id/Password";
                    document.getElementById("sp1").style.color = 'black';
                }

                else {


                    window.location.href = this.responseText;
                }

            }
        };
        var query = "{\"email\":\"" + email + "\",\"pass\":\"" + pass + "\"}";

        xmlhttp.open("GET", "user_login_check.php?data=" + query, true);
        xmlhttp.send();
    }

}
function add_customer() {
    $("#add_customer_form").validate();
    if ($("#add_customer_form").valid()) {
        var formdata = new FormData();
        var controls = document.getElementById('add_customer_form').elements;
        for (var i = 0; i < controls.length; i++) {
            if (controls[i].type === "file") {
                if (controls[i].files.length > 0) {
                    formdata.append(controls[i].name, controls[i].files[0]);
                }
            }
            else {
                formdata.append(controls[i].name, controls[i].value);
            }
        }

        var xmlhttp;

        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {

            if (this.status == 200 && this.readyState == 4) {
                document.getElementById("sp1").innerHTML = this.responseText;

                if (this.responseText == 'Customer Added Successfully') {

                    window.location.href = "user_login.php";
                }
                else {
                    document.getElementById("sp1").innerHTML = this.responseText;
                }

            }
        };
        xmlhttp.open('POST', 'add_customer_submit.php', true);
        xmlhttp.send(formdata);

    }
}
function add_comment(id) {
if($('#comment_form').valid())
   {

        var email = document.getElementById('email').value;
        var name = document.getElementById('name').value;
        var subject = document.getElementById('subject').value;
        var  message = document.getElementById('message').value;

        var s = '{"email":"' + email + '","name":"' + name + '","subject":"' + subject + '","message":"' + message + '"}';

        var xmlhttp;
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.status == 200 && this.readyState == 4) {
                var output = this.responseText;
                window.location.href='blog-single.php?id='+id;

            }
        };

        xmlhttp.open('GET', 'add_comment.php?data=' + s+"&id="+id, true);
        xmlhttp.send();
    }

}
function view_user_documents( country_code,visa_code) {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var x = this.responseText;

            if (x == 'No Entries Yet!!') {
                document.getElementById('sp2').innerHTML=x;
            }
            else {
                var obj = JSON.parse(x);

                var table = "<div class='table-responsive'><table class='table table-bordered'>";
                table = table + "<tr>";
                table = table + "<th>S.NO</th>";
                table = table + "<th>Document Name</th>";
                table = table + "<th>Country</th>";
                table = table + "<th>Visa Type</th>";
                table = table + "<th>Action</th>";
                table = table + "<th>Preview</th>";
                table = table + "</tr>";
                var status;
                for (var i = 0; i < obj.length; i++) {
                    var ar = obj[i];
                    table = table + "<tr>";
                    table = table + "<td>" + (i + 1) + "</td>";
                    table = table + "<td>" + ar["document_name"] + "</td>";
                    table = table + "<td>" + ar["country_name"] + "</td>";
                    table = table + "<td>" + ar["visa_name"] + "</td>";
                    table = table + "<td><a href='" + ar['document_file'] + "' download>Download</a></td>";
                    table = table + "<td><a href='" + ar['document_file'] + "' target='_blank'>View</a></td>";

                    table = table + "</tr>";

                }
                table = table + "</table></div>";
                document.getElementById("sp2").innerHTML = table;
            }
        }
        else {
            document.getElementById("sp2").innerHTML = "Loading...";
        }
    };
    xmlhttp.open("GET", "user_view_document_logic.php?country_code=" + country_code + "&visa_code=" + visa_code, true);
    xmlhttp.send();


}




function upload_user_documents(country_code,visa_code) {
    var uid = document.getElementById('uid').value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var x = this.responseText;

            if (this.responseText == 1) {
                document.getElementById("sp2").innerHTML = 'No Entries'
            }

            else {


                var obj = JSON.parse(x);
                var table = table + '<form>';
                table = "<div class='table-responsive'><table class='table table-bordered'>";
                table = table + "<tr>";
                table = table + "<th>S.NO</th>";
                table = table + "<th>Country</th>";
                table = table + "<th>Visa</th>";
                table = table + "<th>Document Name</th>";
                table = table + "<th>Upload</th>";
                table = table + "<th>Status</th>";
                table = table + "<th>Reason</th>";
                table = table + "<th>Action</th>";
                table = table + "</tr>";
                var status;

                for (var i = 0; i < obj.length; i++) {
                    var ar = obj[i];

                    table = table + "<tr>";
                    table = table + "<td>" + (i + 1) + "</td>";
                    table = table + "<td><h5 id='country_name'>" + ar["country_name"] + "</h5></td>";
                    table = table + "<td><h5 id='visa_type'>" + ar["visa_name"] + "</h5></td>";
                    table = table + "<td><input name='document_name'   id='document_name' style='border: transparent' value='" + ar["document_name"] + "' readonly></td>";
                    if (ar['document_status'] == '0') {

                        table = table + "<td><input type='file' name='doc' id='doc' readonly ></td>";
                        table = table + "<td><h4>Rejected</h4></td>";
                        table = table + "<td><h4>" + ar['document_reason'] + "</h4></td>";
                        var id = ar['user_id'];

                        table = table + "<td><input name='document_file' type='button' onclick='saveDoc(country_code,visa_code," + id + ")' value='Save'></td>";
                    }
                    else if (ar['document_status'] == '1') {
                        status = 'Approved';
                        table = table + "<td><h4 id='uploaded_doc'>" + ar['document_file'] + "</h4></td>";
                        table = table + "<td><h4>" + status + "</h4></td>";
                        table = table + "<td><h4></h4></td>";
                        table = table + "<td><h4>Submitted</h4></td>";
                    }
                    else if (ar['document_status'] == '-1') {
                        var doc_name = ar['document_up_name'];
                        var doc_name1 = doc_name.split('/');
                        status = 'Pending';
                        table = table + "<td><h5>" + doc_name1[1] + "</h5></td>";
                        table = table + "<td><h4>" + status + "</h4></td>";
                        table = table + "<td><h4></h4></td>";
                        table = table + "<td><h5>Processing...</h5></td>";

                    }

                    else {
                        status = 'Not Uploaded';
                        table = table + "<td><input type='file' name='doc' id='doc' readonly ></td>";
                        table = table + "<td><h4>" + status + "</h4></td>";
                        table = table + "<td><h5></h5></td>";
                        var c='';
                        table = table + "<td><input name='document_file' type='button' onclick='saveDoc(country_code,visa_code,\"\")' value='Save'></td>";

                    }
                    table = table + "</tr>";


                }
                table = table + "</table></div></form>";
                document.getElementById("sp2").innerHTML = table;


            }
        }


    };

        xmlhttp.open("GET", "user_upload_logic.php?country=" + country_code + "&visa=" + visa_code+"&uid="+uid, true);
        xmlhttp.send();


}

function saveDoc(country_name,visa_type,id) {
    var document_name=document.getElementById('document_name').value;
                var file_data = $('#doc').prop('files')[0];
            var form_data = new FormData();
            form_data.append('file', file_data);
            form_data.append('document_name', document_name);

            $.ajax({
                url: "upload_document_submit.php?country_name="+country_name+"&visa_type="+visa_type+"&id="+id,
                type: "POST",
                data: form_data,
                contentType: false,
                cache: false,
                processData:false,
                success: function(data) {
                    upload_user_documents('','');
                    alert(data);
                }
            });

}

function user_change_password() {
    $('#user_change_password_form').validate();
   if ($('#user_change_password_form').valid())
    {
        var email, password, newpassword, confirmpassword;
        email = document.getElementById("email").value;
        password = document.getElementById("password").value;
        newpassword = document.getElementById("newpassword").value;
        confirmpassword = document.getElementById("confirmpassword").value;
        if (password === newpassword) {
            document.getElementById("sp1").innerHTML = " New Password and Old password can't be  Same ";
        }
        else if (newpassword !== confirmpassword) {
            document.getElementById("sp1").innerHTML = " New and Confirm Password must be same";
        }
        else {
            var s = "{\"email\":\"" + email + "\",\"password\":\"" + password + "\",\"newpassword\":\"" + newpassword + "\",\"confirmpassword\":\"" + confirmpassword + "\"}";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {


                if (this.readyState == 4 && this.status == 200) {


                    if (this.responseText == 'Password Changed') {
                        window.location.href = "logout.php";
                    }
                    else {

                        document.getElementById("sp1").innerHTML = this.responseText;
                    }
                }
           };
            xmlhttp.open("GET", "user_change_password_update.php?ins_query=" + s, true);
            xmlhttp.send();
        }
    }
}

function book_consultancy()
{
    if($('#book_consultancy').valid())
    {
        var email = document.getElementById('email').value;
        var name = document.getElementById('name').value;
        var phone = document.getElementById('phone').value;
        var  message = document.getElementById('message').value;
        var  visa= document.getElementById('visa').value;

        var s = '{"email":"' + email + '","name":"' + name + '","phone":"' + phone + '","message":"' + message + '","visa":"' + visa + '"}';

        var xmlhttp;
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.status == 200 && this.readyState == 4) {
                var output = this.responseText;

                if (output == 'true') {
                    window.location.href ='immigration-list.php';
                }
            }
        };

        xmlhttp.open('GET', 'book_consultancy.php?data=' + s, true);
        xmlhttp.send();
    }

}
function  forgot_password() {
    var email=document.getElementById('forgot_email').value;
    alert(email);
    if(email=='') {
        alert('Email Empty');
    }

    else
    {
        var xmlhttp;
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.status == 200 && this.readyState == 4) {
                var output = this.responseText;

                if (output) {
                    alert('Password Sent to Your Registered Email');
                }
                else
                {
                    alert('Email doesn\'t Exist');
                }
            }
        };

        xmlhttp.open('GET', 'forgot_page.php?data=' + email, true);
        xmlhttp.send();

    }

}









function user_update() {

    if ($("#user_update_form").valid()) {
        var status;

        var photo = document.getElementById('photo').value;
        if (photo == "") {
            status = 0;
        }
        else {
            status = 1;
        }
        var formdata = new FormData();
        var controls1 = document.getElementById('user_update_form').elements;
        //alert(controls);
        for (var i = 0; i < controls1.length; i++) {
            if (controls1[i].type === "file") {
                if (controls1[i].files.length > 0) {
                    formdata.append(controls1[i].name, controls1[i].files[0]);
                    //  alert(formdata.append(controls[i].name, controls[i].files[0]));
                }
            }
            else {
                formdata.append(controls1[i].name, controls1[i].value);
                //alert(formdata.append(controls[i].name,controls[i].value));
            }
        }

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText == "Entry Updated") {
                    window.location.href = "user_home.php";
                }
                else {
                    document.getElementById("sp1").innerHTML = this.responseText;

                }
            }
        };
        xmlhttp.open("POST", "user_update_submit.php?status=" + status, true);
        xmlhttp.send(formdata);
    }
}