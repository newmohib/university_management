<?php
  //session_start();
  require_once("../../database/config_database.php");
 // require_once("database/config_database.php");
  require_once("admission_form_apply_class.php");

  if(isset($_POST["aplly_submit"])){
	$s_f_name=trim($_POST["s_f_name"]);
	$s_l_name=trim($_POST["s_l_name"]);

	$fathers_name=trim($_POST["father_name"]);
	$mothers_name=trim($_POST["mother_name"]);
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

	$religon=trim($_POST["religon"]);
	$s_username=trim($_POST["s_username"]);
	$s_password=trim($_POST["s_password"]);
	$division=trim($_POST["division"]);
	$district=trim($_POST["district"]);

	$police_station=trim($_POST["police_station"]);
	$post_office=trim($_POST["post_office"]);
	$village_road=trim($_POST["village_road"]);
	$house=trim($_POST["house"]);
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
	 
	 // $photo_loc="../img/";
    //  copy($photo_tmp,$photo_loc.$db->insert_id.".$photo_extension");
/*
      if(!empty($photo_name)){
		  
	   copy($photo_tmp,$photo_loc.$db->insert_id.".jpg");	   
	  $db->query("update item set photo='$db->insert_id.jpg' where id='$db->insert_id'");
	  
	  
	  }
*/

//extra

//	  $birth_date='2-5-2018';




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
$photo_extension);

	 $admission_apply->admission_form_save();
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