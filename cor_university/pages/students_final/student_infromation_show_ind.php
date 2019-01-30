     <?php
//session_start();
require_once("database/config_database.php");
       require_once("student_class.php");
         

if(!isset($_SESSION["s_id"])){
    // header("index.php");

    echo "Please Login Your Account";
   }else{

            
       //     $app_id=isset($_SESSION["app_id"])?$_SESSION["app_id"]:'';
      $student_id=isset($_SESSION["s_id"])?$_SESSION["s_id"]:'';
  $student_id='1';          
$final_student_information_show=student_payment::final_student_information_show($student_id);
            
list(
  $applicant_id,$department_id,$s_f_name,$s_l_name,$father_name,$mother_name,$birth_date,$birth_day,$birth_month,$birth_year,$gender,$s_phone,$s_email,
  $s_username,
  $s_password,
  $quota,
  $country,
  $maritial_status,
  $nid_number,
  $religion,
  $s_status,
  $s_role,
  $scholarship,
  $photo,
  $par_division,
  $par_district,
  $par_police_station,
  $par_post_office,
  $par_village_road,
  $par_house,
  $pre_division,
  $pre_district,
  $pre_police_station,
  $pre_post_office,
  $pre_village_road,
  $pre_house)=$final_student_information_show->fetch_row();

//echo "$s_f_name , $s_l_name $s_phone , $s_email $s_username , $s_password,";


//role and country
$student_form_basic_rc = $db->query("select r.name,c.name from {$ext}role r,{$ext}country c where r.id='$s_role' and c.id='$country'");
                     list($role_name,$country_name)=$student_form_basic_rc->fetch_row();
                   
 // echo "<br> $role_name | $country_name |";

//address start
  $student_form_par_address = $db->query("select di.name,dis.name,ps.name,pos.name from {$ext}divisions di,{$ext}districts dis, {$ext}police_stations ps,{$ext}post_offices pos where di.id='$par_division' and dis.id='$par_district' and ps.id='$par_police_station' and pos.id='$par_post_office'");
               list($_par_division,$_par_district, $_par_police_station,$_par_post_office)=$student_form_par_address->fetch_row();

            
 //  echo "$_par_division | $_par_district | $_par_police_station | $_par_post_office |";

   $student_form_pre_address = $db->query("select di.name,dis.name,ps.name,pos.name from {$ext}divisions di,{$ext}districts dis, {$ext}police_stations ps,{$ext}post_offices pos where di.id='$pre_division' and dis.id='$pre_district' and ps.id='$pre_police_station' and pos.id='$pre_post_office'");
   list($_pre_division,$_pre_district, $_pre_police_station,$_pre_post_office)=$student_form_pre_address->fetch_row();
                    
   //  echo "$_pre_division | $_pre_district | $_pre_police_station | $_pre_post_office";


$final_student_guirdian_information_show=student_payment::final_student_guirdian_information_show($student_id);

list($g_name,$g_phone,$g_email,$g_status,$occupation,$g_income,$g_relation,$g_username,$g_password)=$final_student_guirdian_information_show->fetch_row();
    
  //echo "<br> choice | department  | available_seat";
  //echo "<br> $sub_choice_number_1st |  $first_dep_name   |  $first_dep_available_seat<br>";
  //echo "<br> $sub_choice_number_2nd |  $secound_dep_name | $secound_dep_available_seat <br>";
  //echo "<br> $sub_choice_number_3rd |  $third_dep_name   |  $third_dep_available_seat<br>";
  //echo "<br> $sub_choice_number_4th |  $forth_dep_name   |  $forth_dep_available_seat<br>";



 ?>

<?php

$student_info_sho_all =<<<HERE


      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <!-- Nav tabs -->
  <ul class="nav nav-tabs nav-pills nav-justified" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Basic Information</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#academic">Academic</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#payment">Payment</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Manage</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="index.php?page=applicant&apply=edit&self_id=applicant_edit">Update</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a></div>
    </li>
  </ul>
  <!-- Nav tabs closs -->
        </div>
      </div>
      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display text-primary">Students Information</h1>
          </header>
          
            <div class="tab-content">
            <div id="home" class="tab-pane active"><br>
              <!--4th COLUMN start-->
           <div class="col-lg-12">
              <div class="card my_table">
                <div class="card-header">
                  <h4>Status</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <div class="row">
                   <div class="col-lg-3">
                   <img src='pages/students/img/$photo' alt="person" class="img-fluid rounded-circle" style="height:140px;">
                   </div>
                   <div class="col-lg-9">
                    <table class="table table-striped table-hover my_applicant_table">
                      <div class="row">
                      <thead>
                        <tr class="table-success">
                          
                          <th>Username</th>
                          <th>Username</th>
                          <th>Password</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                         
                          <td>$s_username</td>
                          <td>$s_username</td>
                          <td>$s_password</td> 
                        </tr>
                      </tbody>
                    </div>
                    </table>
                    </div>
                    </div>

                    <table class="table table-striped table-hover my_applicant_table">
                      <div class="row">
                      <thead>
                        <tr class="table-success">
                          <th>Payment ID</th>
                          <th>Amount</th>
                          <th>Selected Subject</th>
                          <th>Admission Date</th>
                          <th>Selected</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td> 
                          <td></td> 
                        </tr>
                      </tbody>
                    </div>
                    </table>
                  </div>
                </div>
              </div>
            </div>

<!--4th COLUMN closs-->
            <div class="col-lg-12">
              <div class="card my_table">
                <div class="card-header">
                  <h4>Basic Informaton</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover my_applicant_table">
                      <caption>Comments</caption>
                      <div class="row">
                      <thead>
                        <tr class="table-success">
                          <th>ID</th>
                          <th>Applicant Name</th>
                          <th>Father Name</th>
                          <th>Mother Name</th>
                          <th>Birth Date</th>
                          <th>Gender</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td>$s_f_name $s_l_name</td>
                          <td>$father_name</td>
                          <td>$mother_name</td>
                          <td>$birth_date</td>
                          <td>$gender</td>
                        </tr>
                        <tr>
                          <th></th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        </tbody>
                      </div>
                        <thead>
                        <tr class="table-success">
                          <th>Phone</th>
                          <th>E-mail</th>
                          <th>Status</th>
                          <th>ROle</th>
                          <th>Maritial Status</th>
                          <th>Multi Student</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td scope="row">$s_phone</td>
                          <td>$s_email</td>
                          <td>$s_status</td>
                          <td>$s_role</td>
                          <td>$maritial_status</td>
                          <td></td>
                        </tr>
                        <tr>
                          <th></th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>

                      <thead>
                        <tr class="table-success">
                          <th>Country</th>
                          <th>N-ID Number</th>
                          <th>Quota</th>
                          <th>Apply Date</th>
                          <th>Update Date</th>
                          <th>Religion</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td scope="row">$country_name</td>
                          <td>$nid_number</td>
                          <td>$quota</td>
                          <td></td>
                          <td></td>
                          <td>$religion</td>
                        </tr>
                        <tr>
                          <th>Parmanent Address</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        </tbody>

                        <thead>
                        <tr class="table-success">
                          <th>Division</th>
                          <th>District</th>
                          <th>Police Station</th>
                          <th>Post Office</th>
                          <th>Village / Road</th>
                          <th>Home Name / number</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td scope="row">$_par_division</td>
                          <td>$_par_district</td>
                          <td>$_par_police_station</td>
                          <td>$_par_post_office</td>
                          <td>$par_village_road</td>
                          <td>$par_house</td>
                        </tr>
                        <tr>
                          <th>Present Address</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        </tbody>

                        <thead>
                        <tr class="table-success">
                          <th>Division</th>
                          <th>District</th>
                          <th>Police Station</th>
                          <th>Post Office</th>
                          <th>Village / Road</th>
                          <th>Home Name / number</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td scope="row">$_pre_division </td>
                          <td>$_pre_district </td>
                          <td>$_pre_police_station</td>
                          <td>$_pre_post_office</td>
                          <td>$pre_village_road</td>
                          <td>$pre_house</td>
                        </tr>
                        <tr>
                          <th></th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>

            <div id="academic" class=" tab-pane fade"><br>
            <div class="row">
            <div class="col-lg-6">
              <div class="card my_table">
                <div class="card-header">
                  <h4>SSC OR EQUIVELENT</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover my_applicant_table">
                      <div class="row">
                      <thead>
                        <tr class="table-success">
                          <th>SSC OR EQUIVELENT</th>
                          <th>Board</th>
                          <th>Group</th>
                          <th>Roll Number</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>
                    </div>
                    <div class="row">
                      <thead>
                        <tr class="table-success">
                          <th>Registration Number</th>
                          <th>Passing Year</th>
                          <th>Gpa With Optional</th>
                          <th>Gpa Wihout Optional</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>
                    </div>
                    
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!--FIRST COLUMN CLOSS-->

             <div class="col-lg-6">
              <div class="card my_table">
                <div class="card-header">
                  <h4>HSC OR EQUIVELENT</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover my_applicant_table">
                      <div class="row">
                      <thead>
                        <tr class="table-success">
                          <th>HSC OR Equivelent</th>
                          <th>Board</th>
                          <th>Group</th>
                          <th>Roll</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>
                    </div>
                    <div class="row">
                      <thead>
                        <tr class="table-success">
                          <th>Registration Number</th>
                          <th>Passing Year</th>
                          <th>Gpa With Optional</th>
                          <th>Gpa Without Optional</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>
                    </div>

                    </table>
                  </div>
                </div>
              </div>
            </div>
<!--2ND COLUMN CLOSS-->
            
<!--3rd COLUMN start-->

            <div class="col-lg-12">
              <div class="card my_table">
                <div class="card-header">
                  <h4>SELECTED SUBJECT</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover my_applicant_table">
                      <div class="row">
                      <thead>
                        <tr class="table-success">
                          <th>First Choice</th>
                          <th>Available Seat</th>
                          <th>Secound Choice</th>
                          <th>Available Seat</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>
                    </div>
                   
                    </table>

                    <table class="table table-striped table-hover my_applicant_table">
                      <div class="row">
                      <thead>
                        <tr class="table-success">
                          <th>Third Choice</th>
                          <th>Available Seat</th>
                          <th>Forth Choice</th>
                          <th>Available Seat</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>
                    </div>
                   
                    </table>
                  </div>
                </div>
              </div>
            </div>
<!--3rd COLUMN closs-->

<!--4th COLUMN start-->
           <div class="col-lg-12">
              <div class="card my_table">
                <div class="card-header">
                  <h4>GUARDIAN INFORMATION</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover my_applicant_table">
                      <div class="row">
                      <thead>
                        <tr class="table-success">
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Eamil</th>
                          <th>Occupation</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>$g_name</td>
                          <td>$g_phone</td>
                          <td>$g_email</td>
                          <td>$occupation</td> 
                        </tr>
                      </tbody>
                    </div>
                    </table>
                    <table class="table table-striped table-hover my_applicant_table">
                      <div class="row">
                      <thead>
                        <tr class="table-success">
                          <th>Monthly Income</th>
                          <th>Relation</th>
                          <th>Status</th>
                          <th>Username</th>
                          <th>Pssword</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>$g_income</td>
                          <td>$g_relation</td>
                          <td>$g_status</td>
                          <td>$g_username</td> 
                          <td>$g_password</td> 
                        </tr>
                      </tbody>
                    </div>
                    </table>
                  </div>
                </div>
              </div>
            </div>

<!--4th COLUMN closs-->
            
            </div>

            </div>
<!--payment collaps start-->
            <div id="payment" class="container tab-pane fade"><br>
             <div class="container">
  <h2></h2>
  <div id="accordion">
    <div class="row justify-content-md-center">
        <div class="col-11 col-lg-6  col-md-6  col-sm-9">
            <div class="card my_apply_myform">
                <div class="card-header d-flex align-items-center">
                    <h4>Adminssion Test Form Payment</h4>
                </div>
                <div class="card-body">
                    <form action="index.php" method="post">
                        <div class="col-lg-11 col-md-11  col-sm-10">
                            <div class="form-group-material">
                                <input id="applicant_payment" type="hidden" name="applicant_payment_self_id" required class="input-material">
                                 
                                <label for="applicant_paiment" class="label-material">Applicant ID</label><h3></h3>
                            </div>
                            <div class="form-group-material">
                                <input id="applicant_payment_mumber" type="text" name="applicant_payment_number" required class="input-material">
                                <label for="applicant_payment_mumber" class="label-material">Payment Number </label>
                            </div>
                            <div class="form-group-material">
                                <input id="applicant_payment_amount" type="number" name="applicant_payment_amount" required class="input-material">
                                <label for="applicant_payment_amount" class="label-material">Amount</label>
                            </div>
                        </div>
                        <div class="row justify-content-md-center">
                        <div class="form-group">
                            <input name="applicant_payment_submit" type="submit" value="SUBMIT" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="border-radius: 10px;">
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
<!--payment collaps closs-->

<!--next collaps start here-->
 </div>
 </div>      
<!-- row closs-->
</div>
</section>




HERE;
echo $student_info_sho_all;

}
?>