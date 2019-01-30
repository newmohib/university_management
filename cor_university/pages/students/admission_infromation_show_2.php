     <?php

       require_once("admission_form_apply_class.php");
          admission_apply::apply_form_show_indiviual(1);
            global $db;
            global $ext;
            $applicant_id='2';

$apply_form_show = $db->query("select 
  a.id,
  a.s_f_name,
  a.s_l_name,
  a.father_name,
  a.mother_name,
  a.birth_date,
  a.birth_day,
  a.birth_month,
  a.birth_year,
  a.gender,
  a.s_phone,
  a.s_email,
  a.s_username,
  a.s_password,
  a.s_status,
  a.s_role,
  a.maritial_status,
  a.multi_student,
  a.country,
  a.nid_number,
  a.quota,
  a.scholarship,
  a.apply_date,
  a.update_date,
  a.photo,
  a.religion,
  a.par_division,
  a.par_district,
  a.par_police_station,
  a.par_post_office,
  a.par_village_road,
  a.par_house,
  a.pre_division,
  a.pre_district,
  a.pre_police_station,
  a.pre_post_office,
  a.pre_village_road,
  a.pre_house,
  a.form_fees_id,
  a.amount,
  a.g_name,
  a.g_phone,
  a.g_email,
  a.g_status,
  a.occupation,
  a.g_income,
  a.g_relation,
  a.g_username,
  a.g_password

from {$ext}admission_apply a where id='$applicant_id'");
list(
  $id,
  $s_f_name,
  $s_l_name,
  $father_name,
  $mother_name,
  $birth_date,
  $birth_day,
  $birth_month,
  $birth_year,
  $gender,
  $s_phone,
  $s_email,
  $s_username,
  $s_password,
  $s_status,
  $s_role,
  $maritial_status,
  $multi_student,
  $country,
  $nid_number,
  $quota,
  $scholarship,
  $apply_date,
  $update_date,
  $photo,
  $religion,
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
  $pre_house,

  $form_fees_id,
  $amount,

  $g_name,
  $g_phone,
  $g_email,
  $g_status,
  $occupation,
  $g_income,
  $g_relation,
  $g_username,
  $g_password)=$apply_form_show->fetch_row();

  




//role and country
$apply_form_basic = $db->query("select r.name,c.name from {$ext}role r,{$ext}country c where r.id='$s_role' and c.id='$country'");
                     list($role_name,$country_name)=$apply_form_basic->fetch_row();
  // 1 for print                  
                     echo "<br> $role_name | $country_name |";

//address start
  $apply_form_par_address = $db->query("select di.name,dis.name,ps.name,pos.name from {$ext}divisions di,{$ext}districts dis, {$ext}police_stations ps,{$ext}post_offices pos where di.id='$par_division' and dis.id='$par_district' and ps.id='$par_police_station' and pos.id='$par_post_office'");
               list($_par_division,$_par_district, $_par_police_station,$_par_post_office)=$apply_form_par_address->fetch_row();

  // 2 for  ppint             
                echo "$_par_division | $_par_district | $_par_police_station | $_par_post_office |";

   $apply_form_pre_address = $db->query("select di.name,dis.name,ps.name,pos.name from {$ext}divisions di,{$ext}districts dis, {$ext}police_stations ps,{$ext}post_offices pos where di.id='$pre_division' and dis.id='$pre_district' and ps.id='$pre_police_station' and pos.id='$pre_post_office'");
                     list($_pre_division,$_pre_district, $_pre_police_station,$_pre_post_office)=$apply_form_pre_address->fetch_row();
 // 3 fro print                    
                     echo "$_pre_division | $_pre_district | $_pre_police_station | $_pre_post_office";

// for academic informaton

    
  global $db;
  global $ext;
// SSC START

  $apply_form_background_ssc_exam = $db->query("select id,name,board,passing_year,roll,regi,ex_group,with_optional_point,without_optional_point from {$ext}background_examination where applicant_id='$applicant_id'");
                     list($ssc_id,$ssc_exam_name,$ssc_board,$ssc_passing_year,$ssc_roll,$ssc_regi,$ssc_ex_group,$ssc_with_optional_point,$ssc_without_optional_point)=$apply_form_background_ssc_exam->fetch_row();

                    // echo "<br> | $ssc_id | $ssc_passing_year | $ssc_roll | $ssc_regi | $ssc_with_optional_point | $ssc_without_optional_point| ";
//for all name query
$apply_form_background_ssc_name = $db->query("select e.name,b.name,g.name from {$ext}background_exam_name e,{$ext}ac_board b,{$ext}ac_group g where e.id='$ssc_exam_name' and b.id='$ssc_board' and g.id='$ssc_ex_group'");
                     list($_ssc_exam_name,$_ssc_board,$_ssc_ex_group)=$apply_form_background_ssc_name->fetch_row();
                    // echo "$_ssc_exam_name | $_ssc_board | $_ssc_ex_group <br>";
// 3 fro print
    echo "<br> $_ssc_exam_name | $_ssc_board | $_ssc_ex_group | $ssc_roll | $ssc_regi | $ssc_with_optional_point | $ssc_without_optional_point| | $ssc_passing_year  <br>";
    
//SSC CLOSS

//HSC START

  $apply_form_background_hsc_exam = $db->query("select id,name,board,passing_year,roll,regi,ex_group,with_optional_point,without_optional_point from {$ext}background_examination where applicant_id='$applicant_id' and passing_year !='$ssc_passing_year'");
                     list($hsc_id,$hsc_exam_name,$hsc_board,$hsc_passing_year,$hsc_roll,$hsc_regi,$hsc_ex_group,$hsc_with_optional_point,$hsc_without_optional_point)=$apply_form_background_hsc_exam->fetch_row();
                     echo "<br>$hsc_id | $hsc_passing_year | $hsc_roll | $hsc_regi | $hsc_with_optional_point | $hsc_without_optional_point | ";
                     

//  for all name query
$apply_form_background_hsc_name = $db->query("select e.name,b.name,g.name from {$ext}background_exam_name e,{$ext}ac_board b,{$ext}ac_group g where e.id='$hsc_exam_name' and b.id='$hsc_board' and g.id='$hsc_ex_group'");
                     list($_hsc_exam_name,$_hsc_board,$_hsc_ex_group)=$apply_form_background_hsc_name->fetch_row();
                     echo "$_hsc_exam_name | $_hsc_board | $_hsc_ex_group <br>";

// 5 fro print

echo "   $_hsc_exam_name | $_hsc_board | $_hsc_ex_group  | $hsc_passing_year | $hsc_roll | $hsc_regi | $hsc_with_optional_point | $hsc_without_optional_point | <br>";

//HSC CLOSS


//department start
$_sub_1st='1';
$_sub_2nd='2';
$_sub_3rd='3';
$_sub_4th='4';
 $apply_form_department_1 = $db->query("select id,subject_id,choice_number from {$ext}applicant_subject where admission_apply_id='$applicant_id'");
                  

 $apply_form_department_2 = $db->query("select id,subject_id,choice_number from {$ext}applicant_subject where admission_apply_id='$applicant_id'");

       while(list($sub_id_2,$sub_subject_id_2,$sub_choice_number_2)=$apply_form_department_2->fetch_row()){
                      //for 1st choice

                      if($sub_choice_number_2==$_sub_1st){
                      list($sub_id_1st,$sub_subject_id_1st,$sub_choice_number_1st)=$apply_form_department_1->fetch_row();
                     // echo "<br> $sub_choice_number_1st <br>";

                     }
                     //for 2nd choice

                     if($sub_choice_number_2==$_sub_2nd){
                      list($sub_id_2nd,$sub_subject_id_2nd,$sub_choice_number_2nd)=$apply_form_department_1->fetch_row();
                     // echo "<br> $sub_choice_number_2nd <br>";

                     }

                     //for 3rd choice
                     if($sub_choice_number_2==$_sub_3rd){
                      list($sub_id_3rd,$sub_subject_id_3rd,$sub_choice_number_3rd)=$apply_form_department_1->fetch_row();
                    //  echo "<br> $sub_choice_number_3rd <br>";

                     }

                     //for 4th choice

                     if($sub_choice_number_2==$_sub_4th){
                      list($sub_id_4th,$sub_subject_id_4th,$sub_choice_number_4th)=$apply_form_department_1->fetch_row();
                     // echo "<br> $sub_choice_number_4th <br>";

                     }

               }
//while loop closs                    


//department name start


    $apply_form_department_name_1= $db->query("select d.id,d.name,d.available_seat from {$ext}department d ");

    $apply_form_department_name_2= $db->query("select d.id,d.name,d.available_seat from {$ext}department d");
   

  while(list($_dep_id,$_dep_name,$_dep_available_seat)=$apply_form_department_name_2->fetch_row()){

    //for 1st choice

             if($_dep_id==$sub_subject_id_1st){
               list($first_dep_id,$first_dep_name,$first_dep_available_seat)=$apply_form_department_name_1->fetch_row();
                  // echo "<br> $first_dep_name | $first_dep_available_seat";

                     }

  //for 2nd choice                   
                     if($_dep_id==$sub_subject_id_2nd){
                 list($secound_dep_id,$secound_dep_name,$secound_dep_available_seat)=$apply_form_department_name_1->fetch_row();
                  // echo "<br> $secound_dep_name | $secound_dep_available_seat";

                     }
//for 3rd choice
                     if($_dep_id==$sub_subject_id_3rd){
                 list($third_dep_id,$third_dep_name,$third_dep_available_seat)=$apply_form_department_name_1->fetch_row();
                  // echo "<br> $third_dep_name | $third_dep_available_seat";

                     }

  //for 4th chice 
  
                   if($_dep_id==$sub_subject_id_4th){
                 list($forth_dep_id,$forth_dep_name,$forth_dep_available_seat)=$apply_form_department_name_1->fetch_row();
                  // echo "<br> $forth_dep_name | $forth_dep_available_seat";

                     }                   

  }
  echo "<br> choice | department  | available_seat";
  echo "<br> $sub_choice_number_1st |  $first_dep_name   |  $first_dep_available_seat<br>";
  echo "<br> $sub_choice_number_2nd |  $secound_dep_name | $secound_dep_available_seat <br>";
  echo "<br> $sub_choice_number_3rd |  $third_dep_name   |  $third_dep_available_seat<br>";
  echo "<br> $sub_choice_number_4th |  $forth_dep_name   |  $forth_dep_available_seat<br>";

 //echo "<br> $first_dep_name | $first_dep_available_seat";

//NEXT WORK DEPARTMENT, PHOTO PRINT, PAYMENT


 ?>

      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <!-- Nav tabs -->
  <ul class="nav nav-tabs nav-pills nav-justified" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Menu 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Dropdown</a>
      <div class="dropdown-menu">
        <a class="dropdown-item nav-link" data-toggle="tab" href="#menu2">Link 1</a>
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
            <h1 class="h3 display text-primary">Applicant Information</h1>
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
                    <table class="table table-striped table-hover my_applicant_table">
                      <div class="row">
                      <thead>
                        <tr class="table-success">
                          <th>Photo</th>
                          <th>Photo</th>
                          <th>Username</th>
                          <th>Password</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>$s_username</td>
                          <td>$s_password</td> 
                        </tr>
                      </tbody>
                    </div>
                    </table>
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
                          <td>$form_fees_id</td>
                          <td>$amount</td>
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
                          <td>$id</td>
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
                          <td>$multi_student</td>
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
                          <td>$apply_date</td>
                          <td>$update_date</td>
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

            <div id="menu1" class=" tab-pane fade"><br>
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
                          <td>$_ssc_exam_name</td>
                          <td>$_ssc_board</td>
                          <td>$_ssc_ex_group </td>
                          <td>$ssc_roll</td>
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
                          <td>$ssc_regi</td>
                          <td>$ssc_passing_year</td>
                          <td>$ssc_with_optional_point </td>
                          <td>$ssc_without_optional_point| </td>
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
                          <td>$_hsc_exam_name </td>
                          <td>$_hsc_board </td>
                          <td>$_hsc_ex_group  </td>
                          <td>$hsc_roll </td>
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
                          <td>$hsc_regi</td>
                          <td>$ssc_passing_year</td>
                          <td>$hsc_with_optional_point</td>
                          <td>$hsc_without_optional_point</td>
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
                          <td>$first_dep_name</td>
                          <td>$first_dep_available_seat</td>
                          <td>$sub_choice_number_2nd</td>
                          <td>$secound_dep_available_seat</td>
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
                          <td>$third_dep_name</td>
                          <td>$third_dep_available_seat</td>
                          <td>$forth_dep_name</td>
                          <td>$forth_dep_available_seat</td>
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
            </div>
          
          <!-- row closs-->
        </div>
      </section>