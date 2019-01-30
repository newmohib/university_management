<?php
//session_start();
//require_once("../../database/config_database.php");
class admission_apply{
    private  $s_f_name;
	private $s_l_name;
	private $father_name;
	private $mother_name;
	private $gender;
	private $birth_day;
	private $birth_month;
	private $birth_year;
	private $s_email;
	private $s_phone;
	private $quota;
	private $country;
	private $marital_status;
	private $nid_number ;
	private $religon;
	private $s_username;
	private $s_password;
	private $division;
	private $district;
	private $police_station;
	private $post_office;
	private $village_road;
	private $house;
	private $ssc;
	private $ssc_board;
	private $ssc_exam_year;
	private $ssc_group;
	private $ssc_roll;
	private $ssc_regi;
	private $ssc_with_point;
	private $ssc_without_point;
	private $hsc;
	private $hsc_board;
	private $hsc_exam_year;
	private $hsc_group;
	private $hsc_roll;
	private $hsc_regi;
	private $hsc_with_point;
	private $hsc_without_point ;
	private $department_1;
	private $department_2;
	private $department_3;
	private $department_4;
	private $g_name;
	private $g_phone;
	private $g_email;
	private $g_relation;
	private $g_occupation;
	private $g_income;
	private $g_username;
	private $g_password;

  function __construct($s_f_name,
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
$g_password ,
$photo_extension){
	  
	  
	$this->s_f_name=$s_f_name;
	$this->s_l_name=$s_l_name;
	$this->father_name=$father_name;
	$this->mother_name=$mother_name;
	$this->gender=$gender;
	$this->birth_day=$birth_day;
	$this->birth_month=$birth_month;
	$this->birth_year=$birth_year;
	$this->s_email=$s_email;
	$this->s_phone=$s_phone;
	$this->quota=$quota;
	$this->country=$country;
	$this->marital_status=$marital_status;
	$this->nid_number=$nid_number;
	$this->religon=$religon;
	$this->s_username=$s_username;
	$this->s_password=$s_password;
	$this->division=$division;
	$this->district=$district;
	$this->police_station=$police_station;
	$this->post_office=$post_office;
	$this->village_road=$village_road;
	$this->house=$house;
	$this->department_1=$department_1;
	$this->department_2=$department_2;
	$this->department_3=$department_3;
	$this->department_4=$department_4;
	$this->ssc=$ssc;
	$this->ssc_board=$ssc_board;
	$this->ssc_exam_year=$ssc_exam_year;
	$this->ssc_group=$ssc_group;
	$this->ssc_roll=$ssc_roll;
	$this->ssc_regi=$ssc_regi;
	$this->ssc_with_point=$ssc_with_point;
	$this->ssc_without_point=$ssc_without_point;
	$this->hsc=$hsc;
	$this->hsc_board=$hsc_board;
	$this->hsc_exam_year=$hsc_exam_year;
	$this->hsc_group=$hsc_group;
	$this->hsc_roll=$hsc_roll;
	$this->hsc_regi=$hsc_regi;
	$this->hsc_with_point=$hsc_with_point;
	$this->hsc_without_point=$hsc_without_point;
	$this->g_name=$g_name;
	$this->g_phone=$g_phone;
	$this->g_email=$g_email;
	$this->g_relation=$g_relation;
	$this->g_occupation=$g_occupation;
	$this->g_income=$g_income;
	$this->g_username=$g_username;
	$this->g_password=$g_password;
	$this->photo_extension=$photo_extension;
  }


  public function admission_form_save(){
		  
	  global $db;
      
   //   $result=$db->query("select u.id,u.password from users u where u.id='$user_id'");
	//  while(list($_user_id,$_password)=$result->fetch_row()){}



/* for  insert*/
   
	  $db->query("insert into admission_apply(s_f_name,
s_l_name,
fathers_name,
mothers_name,
gender,
birth_day,
birth_month,
birth_year,
s_email,
s_phone,
quota,
country_id,
marital_status,
nid_number,
religion,
s_username,
s_password,
division,
district,
police_station,
post_office,
village_road,
house,
department_1,
department_2,
department_3,
department_4,
g_name,
g_phone,
g_email,
g_relation,
occupation,
g_income,
g_username,
g_password,
ssc,
ssc_board_id,
ssc_exam_year,
ssc_group,
ssc_rule,
ssc_registration,
ssc_with_optional_point,
ssc_without_optional_point,
hsc,
hsc_board_id,
hsc_exam_year,
hsc_group,
hsc_rule,
hsc_registration,
hsc_with_optional_point,
hsc_without_optional_point
)values('$this->s_f_name','$this->s_l_name','$this->father_name','$this->mother_name','$this->gender','$this->birth_day','$this->birth_month','$this->birth_year','$this->s_email','$this->s_phone','$this->quota','$this->country','$this->marital_status','$this->nid_number','$this->religon','$this->s_username','$this->s_password','$this->division','$this->district','$this->police_station','$this->post_office','$this->village_road','$this->house','$this->department_1','$this->department_2','$this->department_3','$this->department_4','$this->g_name','$this->g_phone','$this->g_email','$this->g_relation','$this->g_occupation','$this->g_income','$this->g_username','$this->g_password','$this->ssc','$this->ssc_board','$this->ssc_exam_year','$this->ssc_group','$this->ssc_roll','$this->ssc_regi','$this->ssc_with_point','$this->ssc_without_point','$this->hsc','$this->hsc_board','$this->hsc_exam_year','$this->hsc_group','$this->hsc_roll','$this->hsc_regi','$this->hsc_with_point','$this->hsc_without_point')");

	 // return $db->insert_id;
	  echo "successfull insert $db->insert_id $this->s_f_name";
	
	}
  
  

  /* ======== insert is closs======*/
/*
    public function background_examination_save($insert_id){
		  
	  global $db;
  if (isset($insert_id)){
$db->query("insert into background_examination(name,board_id,exam_year,group,rule,registration,with_optional_point,without_optional_point,applicant_id,)values('$this->ssc','$this->ssc_board','$this->ssc_exam_year','$this->ssc_group','$this->ssc_roll','$this->ssc_regi','$this->ssc_with_point','$this->ssc_without_point','$insert_id')");
    echo "background_examination $insert_id<br> ";
    }
}
*/

}
  ?>