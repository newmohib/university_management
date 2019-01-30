<?php
//session_start();
//require_once("../../database/config_database.php");
require_once("database/config_database.php");


if(isset($_POST['id_submit'])){
	$id=$_POST['id'];



$result=$db->query("select a.s_f_name,
a.s_l_name,
a.fathers_name,
a.mothers_name,
a.gender,
a.birth_day,
a.birth_month,
a.birth_year,
a.s_email,
a.s_phone,
a.quota,
a.country_id,
a.marital_status,
a.nid_number,
a.religion,
a.s_username,
a.s_password,
a.division,
a.district,
a.police_station,
a.post_office,
a.village_road,
a.house,
a.department_1,
a.department_2,
a.department_3,
a.department_4,
a.g_name,
a.g_phone,
a.g_email,
a.g_relation,
a.occupation,
a.g_income,
a.g_username,
a.g_password,
a.ssc,
a.ssc_board_id,
a.ssc_exam_year,
a.ssc_group,
a.ssc_rule,
a.ssc_registration,
a.ssc_with_optional_point,
a.ssc_without_optional_point,
a.hsc,
a.hsc_board_id,
a.hsc_exam_year,
a.hsc_group,
a.hsc_rule,
a.hsc_registration,
a.hsc_with_optional_point,
a.hsc_without_optional_point from admission_apply a where a.id='$id'");

  while(list($s_f_name,
$s_l_name,
$fathers_name,
$mothers_name,
$gender,
$birth_day,
$birth_month,
$birth_year,
$s_email,
$s_phone,
$quota,
$country_id,
$marital_status,
$nid_number,
$religion,
$s_username,
$s_password,
$division,
$district,
$police_station,
$post_office,
$village_road,
$house,
$department_1,
$department_2,
$department_3,
$department_4,
$g_name,
$g_phone,
$g_email,
$g_relation,
$occupation,
$g_income,
$g_username,
$g_password,
$ssc,
$ssc_board_id,
$ssc_exam_year,
$ssc_group,
$ssc_rule,
$ssc_registration,
$ssc_with_optional_point,
$ssc_without_optional_point,
$hsc,
$hsc_board_id,
$hsc_exam_year,
$hsc_group,
$hsc_rule,
$hsc_registration,
$hsc_with_optional_point,
$hsc_without_optional_point)=$result->fetch_row()){

  	echo " $s_f_name 
$s_l_name 
$fathers_name 
$mothers_name 
$gender 
$birth_day 
$birth_month 
$birth_year 
$s_email 
$s_phone 
$quota
$country_id 
$marital_status 
$nid_number 
$religion 
$s_username 
$s_password 
$division 
$district 
$police_station 
$post_office 
$village_road 
$house 
$department_1 
$department_2 
$department_3 
$department_4 
$g_name 
$g_phone 
$g_email 
$g_relation 
$occupation 
$g_income 
$g_username 
$g_password 
$ssc 
$ssc_board_id 
$ssc_exam_year 
$ssc_group 
$ssc_rule 
$ssc_registration 
$ssc_with_optional_point 
$ssc_without_optional_point 
$hsc 
$hsc_board_id 
$hsc_exam_year 
$hsc_group 
$hsc_rule 
$hsc_registration 
$hsc_with_optional_point 
$hsc_without_optional_point <br><br><br>";


echo" ";



  }

}

?>





     <div class="container">
  <h2>Apply For Admission</h2>
  
  <div id="accordion">
    <div class="card">

      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
          Personal Information
        </a>
      </div>
      <div id="collapseOne" class="collapse show" >
        <div class="card-body">
          <div class="row">
        <div class="col-12 col-lg-12  col-md-12  col-sm-12">
            
                
                <div class="card-body">
                    <form action="#" method="post" >
                    	
                    	<div class="row">
    	 
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="id" type="text" name="id" required class="input-material">
                                <label for="id" class="label-material">ID</label>
                            </div>
                      </div>
                     
                </div>
                <hr>


          <!--===========guardian start=========-->

                 <div class="row">
                      <div class="col-lg-3 col-sm-3 col-mb-3">
                            <div class="form-group-material i-checks ">
                                <input id="aplly_submit" type="submit" name="id_submit" required class="input-material" value="SUBMIT">
                                
                            </div>
                      </div>
                 </div>
                    </form>
                        <div class="col-lg-12 col-md-12  col-sm-12">
                  
                  <div class="row">
                  	<div class="col-lg-12 col-md-12  col-sm-12">
					<header> 
					
					</header>
				  </div> 
				  <div class="col-lg-12 col-md-12  col-sm-12">       
                 <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Father Name</th>
                          <th>Mother Name</th>
                          <th>Gender</th>
                          <th>Birth Day</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>$s_f_name</td>
                          <td>$s_l_name</td>
                          <td>$fathers_name</td>
                          <th scope="row">$mothers_name</th>
                          <td>$gender</td>
                          <td>$birth_day</td>
                          

                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                </div>
                </div>
                            <!--student name closs-->
                            <!--father mother name start-->
                 <div class="row">
                  	<div class="col-lg-12 col-md-12  col-sm-12">
					<header> 
					
					</header>
				  </div> 
				  <div class="col-lg-12 col-md-12  col-sm-12">       
                 <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Quota</th>
                          <th>Country</th>
                          <th>Marital Status</th>
                          <th>N-ID Number</th>
                          <th>Religion</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">$s_email</th>
                          <td>$s_phone</td>
                          <td>$quota</td>
                          <td>@$country_id</td>
                          <th scope="row">$marital_status</th>
                          <td>$nid_number</td>
                          <td>$religion</td>
                          

                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                </div>
                </div>
                            <!--father mother name closs-->

                            <!-- gender start-->
                    <div class="row">
                  	<div class="col-lg-12 col-md-12  col-sm-12">
					<header> 
					
					</header>
				  </div> 
				  <div class="col-lg-12 col-md-12  col-sm-12">       
                 <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Division</th>
                          <th>District</th>
                          <th>Police Station</th>
                          <th>Post Office</th>
                          <th>Village/Road</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">s_username</th>
                          <td>$s_password</td>
                          <td>$division</td>
                          <td>@$district</td>
                          <th scope="row">$police_station</th>
                          <td>$post_office</td>
                          <td>$village_road</td>
                          

                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                </div>
                </div>

                         <!--birth date  closs-->
                         <!--phone and married  start-->
                   <div class="row">
                  	<div class="col-lg-12 col-md-12  col-sm-12">
					<header> 
					
					</header>
				  </div> 
				  <div class="col-lg-12 col-md-12  col-sm-12">       
                 <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>House Number</th>
                          <th>1st Subject</th>
                          <th>2nd Subject</th>
                          <th>3rd Subject</th>
                          <th>4th Subject</th>
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">$house</th>
                          <td>$department_1</td>
                          <td>$department_2</td>
                          <td>$department_3</td>
                          <th scope="row">$department_4</th>
                          
                          

                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                </div>
                </div>
                        <!--phone and married  closs-->

                        <!--national id and quota  start-->
              <div class="row">
                  	<div class="col-lg-12 col-md-12  col-sm-12">
					<header> 
					
					</header>
				  </div> 
				  <div class="col-lg-12 col-md-12  col-sm-12">       
                 <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>S.S.C / Equivalent</th>
                          <th>Board</th>
                          <th>Year</th>
                          <th>Group</th>
                          <th>ROll</th>
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">$ssc</th>
                          <td>$ssc_board_id</td>
                          <td>$ssc_exam_year</td>
                          <td>$ssc_group</td>
                          <th scope="row">$ssc_rule</th>
                          
                          

                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                </div>
                </div>
                <div class="row">
                  	<div class="col-lg-12 col-md-12  col-sm-12">
					<header> 
					
					</header>
				  </div> 
				  <div class="col-lg-12 col-md-12  col-sm-12">       
                 <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          
                          <th>Registration</th>
                          <th>GPA whith optional</th>
                          <th>GPA whith optional</th>
                          <th>GPA whithout optional</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          
                          <th scope="row">$ssc_registration</th>
                          <td>$ssc_with_optional_point</td>
                          <td>@$ssc_without_optional_point</td>
                          <td>$hsc_board_id</td>

                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                </div>
                </div>

                 <div class="row">
                  	<div class="col-lg-12 col-md-12  col-sm-12">
					<header> 
					
					</header>
				  </div> 
				  <div class="col-lg-12 col-md-12  col-sm-12">       
                 <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>H.S.C / Equivalent</th>
                          <th>Board</th>
                          <th>Year</th>
                          <th>Group</th>
                          <th>ROll</th>
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">$hsc_exam_year</th>
                          <td>$hsc_group</td>
                          <td>$hsc_rule</td>
                          <td>$hsc_registration</td>
                          <th scope="row">$hsc_with_optional_point</th>
                          
                          

                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                </div>
                </div>
                <div class="row">
                  	<div class="col-lg-12 col-md-12  col-sm-12">
					<header> 
					
					</header>
				  </div> 
				  <div class="col-lg-12 col-md-12  col-sm-12">       
                 <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          
                          <th>Registration</th>
                          <th>GPA whith optional</th>
                          <th>GPA whith optional</th>
                          <th>GPA whitout optional</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          
                          <th scope="row">$hsc_registration</th>
                          <td>$hsc_with_optional_point</td>
                          <td>$hsc_without_optional_point</td>
                          

                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                </div>
                </div>

                        <!--national id and quota   start-->
                  


                

     
                    
                </div>
            
        </div>
    </div>
        </div>
      </div>
    </div>






    </div>
  </div>
