<?php
  //session_start();
  require_once("../../database/config_database.php");
 // require_once("database/config_database.php");
  require_once("admission_form_apply_class.php");

  if(isset($_POST["aplly_submit"])){
	$s_f_name=trim($_POST["s_f_name"]);
	$s_l_name=trim($_POST["s_l_name"]);

	$father_name=trim($_POST["father_name"]);
	$mother_name=trim($_POST["mother_name"]);
	$gender=trim($_POST["gender"]);
	$birth_day=trim($_POST["day"]);
	$birth_month=trim($_POST["month"]);
	$birth_year=trim($_POST["year"]);

	$s_email=trim($_POST["s_email"]);
	$s_phone=trim($_POST["s_phone"]);
	$quota=trim($_POST["quota"]);
	$country=trim($_POST["country"]);
	$marital_status=trim($_POST["marital_status"]);
	$nid_number=trim($_POST["nid_number"]);

	$religion=trim($_POST["religion"]);
	$s_username=trim($_POST["s_username"]);
	$s_password=trim($_POST["s_password"]);
//parmanent address
	$par_division=trim($_POST["par_division"]);
	$par_district=trim($_POST["par_district"]);
	$par_police_station=trim($_POST["par_police_station"]);
	$par_post_office=trim($_POST["par_post_office"]);
	$par_village_road=trim($_POST["par_village_road"]);
	$par_house=trim($_POST["par_house"]);
//present address
	$pre_division=trim($_POST["pre_division"]);
	$pre_district=trim($_POST["pre_district"]);
	$pre_police_station=trim($_POST["pre_police_station"]);
	$pre_post_office=trim($_POST["pre_post_office"]);
	$pre_village_road=trim($_POST["pre_village_road"]);
	$pre_house=trim($_POST["pre_house"]);
//academic information
	$ssc=trim($_POST["ssc"]);
	$ssc_board=trim($_POST["ssc_board"]);
	$ssc_exam_year=trim($_POST["ssc_exam_year"]);
	$ssc_group=trim($_POST["ssc_group"]);
	$ssc_roll=trim($_POST["ssc_roll"]);
	$ssc_regi=trim($_POST["ssc_registration"]);
	$ssc_with_point=trim($_POST["ssc_with_optional"]);
	$ssc_without_point=trim($_POST["ssc_without_optional"]);
	
	$hsc=trim($_POST["hsc"]);
	$hsc_board=trim($_POST["hsc_board"]);
	$hsc_exam_year=trim($_POST["hsc_exam_year"]);
	$hsc_group=trim($_POST["hsc_group"]);
	$hsc_roll=trim($_POST["hsc_roll"]);
	$hsc_regi=trim($_POST["hsc_registration"]);
	$hsc_with_point=trim($_POST["hsc_with_optional"]);
	$hsc_without_point=trim($_POST["hsc_without_optional"]);

	$department_1=trim($_POST["department_1"]);
	$department_2=trim($_POST["department_2"]);
	$department_3=trim($_POST["department_3"]);
	$department_4=trim($_POST["department_4"]);

	//guardin

	$g_name=trim($_POST["g_name"]);
	$g_phone=trim($_POST["g_phone"]);
	$g_email=trim($_POST["g_email"]);
	$g_relation=trim($_POST["g_relation"]);
	$g_occupation=trim($_POST["g_occupation"]);
	$g_income=trim($_POST["g_income"]);
	$g_username=trim($_POST["g_username"]);
	$g_password=trim($_POST["g_password"]);

	


      $photo_tmp=$_FILES["s_photo"]["tmp_name"];
	  $photo_name=$_FILES["s_photo"]["name"];
	  $photo_extension = pathinfo($photo_name, PATHINFO_EXTENSION); 
	 
	
//admission apply form inser object

//	  if($s_email==true && $s_phone==true && $ssc_roll==true && $hsc_roll==true && $s_username==true && $s_password==true ){

	$admission_apply=new admission_apply(
$s_f_name,
$s_l_name,
$father_name,
$mother_name,
$gender,
$birth_day,
$birth_month,
$birth_year,
$s_email,
$s_phone,
$quota,
$country,
$marital_status,
$nid_number,
$religion,
$s_username,
$s_password,
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
$ssc,
$ssc_board,
$ssc_exam_year,
$ssc_group,
$ssc_roll,
$ssc_regi,
$ssc_with_point,
$ssc_without_point,
$hsc,
$hsc_board,
$hsc_exam_year,
$hsc_group,
$hsc_roll,
$hsc_regi,
$hsc_with_point,
$hsc_without_point,
$department_1,
$department_2,
$department_3,
$department_4,
$g_name,
$g_phone,
$g_email,
$g_relation,
$g_occupation,
$g_income,
$g_username,
$g_password,
$photo_extension);


	 $admission_apply->admission_apply_form_save();
   $admission_apply_id=$db->insert_id;
	 if($db->insert_id){
	 	echo "<br>$db->insert_id<br>";
	 	echo "<br>succcessfully insert<br>";
	 }
   
//photo  insert start
	 if($db->insert_id){
	  $photo_loc="img/";
	   copy($photo_tmp,$photo_loc.$db->insert_id.".$photo_extension");	   
	  $db->query("update admission_apply set photo='$db->insert_id.$photo_extension' where id='$db->insert_id'");
	  
	  echo "succcessfull photo update";
	  }

//photo  insert closs


/* apply depaertmet table start*/
if($admission_apply_id){

	 	$admission_apply->apply_department_save($admission_apply_id);
   
    echo "<br>succefully save department";
    echo "<br> $db->insert_id <br>";
	 }

/* apply depaertmet table closs*/

/* background_examinationt table start*/
if($admission_apply_id){

//$db->insert_id='';
    $admission_apply->background_examination_save($admission_apply_id);
   if($db->insert_id){
    echo "<br>succefully save background examination";
    echo "<br> $db->insert_id";
    echo "<br>";
  }
 }




/* background_examination table closs*/





//	}



	echo "<div class='row'>
<header> 
<h1 class='h3 display'>Form</h1>
</header>
<div class='col-lg-6'>
              <div class='card'>
                <div class='card-header'>
                  <h4>Admission Apply</h4>
                </div>
                <div class='card-body'>
                  <div class='table-responsive'>
                  
                    <table class='table table-striped table-hover' border='2'>
                      <thead>
                        <tr>
                          <th>s_f_name</th>
                          <th>s_l_name</th>
                          <th>father_name</th>
                          <th>mother_name</th>
                          <th>gender</th>
                          <th>day</th>
                          <th>month</th>
                          <th>year</th>
                          <th>s_email</th>
                          <th>s_phone</th>
                          <th>quota</th>
                          <th>country</th>
                          <th>marital_status</th>
                          <th>nid_number</th>

                          <th>religion</th>
                          
                          <th>s_username</th>
                          <th>s_password</th>
                          <th>par_division</th>
                          <th>par_district</th>
                          <th>par_police_station</th>
                          <th>par_post_office</th>
                          <th>par_village_road</th>
                          <th>par_house</th>
                          <th>pre_division</th>
                          <th>pre_district</th>
                          <th>pre_police_station</th>
                          <th>pre_post_office</th>
                          <th>pre_village_road</th>
                          <th>pre_house</th>
                          <th>ssc</th>
                          
                          <th>ssc_board</th>
                          <th>ssc_exam_year</th>
                          <th>ssc_group</th>
                          <th>ssc_roll</th>
                          <th>ssc_registration</th>
                          <th>ssc_with_optional</th>
                          <th>ssc_without_optional</th>
                          <th>hsc</th>
                          <th>hsc_board</th>
                          <th>hsc_exam_year</th>
                          <th>hsc_group</th>
                          <th>hsc_roll</th>
                          <th>hsc_registration</th>
                          <th>hsc_with_optional</th>
                          <th>hsc_without_optional</th>
                          <th>department_1</th>
                          <th>department_2</th>
                          <th>department_3</th>
                          <th>department_4</th>
                          <th>g_name</th>
                          <th>g_phone</th>
                          <th>g_email</th>
                          <th>g_relation</th>
                          <th>g_occupation</th>
                          <th>g_income</th>
                          <th>g_username</th>
                          <th>g_password</th>
                          <th>s_photo</th>
                         

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope='row'>$s_f_name</th>
                          <td>$s_l_name</td>
                          <td>$father_name</td>
                          <td>$mother_name</td>
                          <th scope='row'>$gender</th>
                          <td>$birth_day</td>
                          <td>$birth_month</td>
                          <td>$birth_year</td>
                          <th scope='row'>$s_email</th>
                          <td>$s_phone</td>
                          <td>$quota</td>
                          <td>$country</td>
                          <th scope='row'>$marital_status</th>
                          <td>$nid_number</td>
                          <td>$religion</td>
                          
                          <th scope='row'>$s_username</th>
                          <td>$s_password</td>
                          <td>$par_division</td>
                          <td>$par_district</td>
                          <th scope='row'>$par_police_station</th>
                          <td>$par_post_office</td>
                          <td>$par_village_road</td>
                          <td>$par_house</td>
                          <th scope='row'>$pre_division</th>
                          <td>$pre_district</td>
                          <td>$pre_police_station</td>
                          <td>$pre_post_office</td>
                          <th scope='row'>$pre_village_road</th>
                          <td>$pre_house</td>
                          <td>$ssc</td>
                         
                          <td>$ssc_board</td>
                          <th scope='row'>$ssc_exam_year</th>
                          <td>$ssc_group</td>
                          <td>$ssc_roll</td>
                          <td>$ssc_regi</td>
                          <th scope='row'>$ssc_with_point</th>
                          <td>$ssc_without_point</td>
                          <td>$hsc</td>
                          <td>$hsc_board</td>
                          <th scope='row'>$hsc_exam_year</th>
                          <td>$hsc_group</td>
                          <td>$hsc_roll</td>
                          <td>$hsc_regi</td>
                          <th scope='row'>$hsc_with_point</th>
                          <td>$hsc_without_point</td>
                          <td>$department_1</td>
                          <td>$department_2</td>
                          <th scope='row'>$department_3</th>
                          <td>$department_4</td>
                          <td>$g_name</td>
                          <td>$g_phone</td>
                          <th scope='row'>$g_email</th>
                          <td>$g_relation</td>
                          <td>$g_occupation</td>
                          <td>$$g_income</td>
                          <th scope='row'>$g_username</th>
                          <td>$g_password</td>
                          <td>$photo_extension</td>
                          
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
</div>
</div>";


/*


$admission_apply=new admission_apply($s_f_name,
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
$country,
$marital_status,
$nid_number,
$religon,
$s_username,
$s_password,
$division,
$district,
$police_station,
$post_office,
$village_road,
$house,
$ssc,
$ssc_board,
$ssc_exam_year,
$ssc_group,
$ssc_roll,
$ssc_regi,
$ssc_with_point,
$ssc_without_point,
$hsc,
$hsc_board,
$hsc_exam_year,
$hsc_group,
$hsc_roll,
$hsc_regi,
$hsc_with_point,
$hsc_without_point,
$department_1,
$department_2,
$department_3,
$department_4,
$g_name,
$g_phone,
$g_email,
$g_relation,
$g_occupation,
$g_income,
$g_username,
$g_password,
$photo_extension
);

	 $admission_apply->admission_form_save();
echo "$db->insert_id";
	   $photo_loc="img/";
      copy($photo_tmp,$photo_loc.$db->insert_id.".$photo_extension");

      if(!empty($photo_name)){
		  
	   copy($photo_tmp,$photo_loc.$db->insert_id.".jpg");	   
	  $db->query("update admission_apply set photo='$db->insert_id.$photo_extension' where id='$db->insert_id'");
	  
	  echo "succcessfull photo update";
	  }

*/






/*

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
country_id
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
$ssc
$ssc_board
$ssc_exam_year
$ssc_group
$ssc_roll
$ssc_regi
$ssc_with_point
$ssc_without_point 
$hsc
$hsc_board
$hsc_exam_year
$hsc_group
$hsc_roll
$hsc_regi
$hsc_with_point
$hsc_without_point 
$department_1
$department_2
$department_3
$department_4 
$g_name
$g_phone
$g_email
$g_relation
$g_occupation
$g_income
$g_username
$g_password 
$photo_extension ";
 */

}




/*
      $photo_tmp=$_FILES["s_photo"]["tmp_name"];
	  $photo_name=$_FILES["s_photo"]["name"];
	  $photo_extension = pathinfo($file, PATHINFO_EXTENSION); 
	 
	  $photo_loc="../img/";
      copy($photo_tmp,$photo_loc.$db->insert_id.".$photo_extension");
*/

 //   $select=trim(isset($_POST["select"])?$_POST["select"]: 0) ;
//	$create=trim(isset($_POST["create"])?$_POST["create"]: 0) ;
//	$update=trim(isset($_POST["update"])?$_POST["update"]: 0) ;
//	$delete=trim(isset($_POST["delete"])?$_POST["delete"]: 0) ;
//	$alter=trim(isset($_POST["alter"])?$_POST["alter"]: 0) ;

/*
    if($role_name==true && $user_password==true){

	$role_user=new role($role_name,$user_password,$create,$update,$delete,$select,$alter);
	 $role_user->save();
	 header("location:../../home.php?role_success='succcessfuly save role'&page=role");
	//header("location:../../home.php?page=role&&role_success='succcessfuly save role'");
	}else{
		$role_error="please enter right information ";
		header("location:../../home.php?role_error='$role_error'");
	}

*/

/*========for show all ===========*/


//role::show_all();

/*========isset clossd===========*/
?>