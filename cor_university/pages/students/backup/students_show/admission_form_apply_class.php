<?php
//session_start();
//require_once("../../database/config_database.php");
class admission_apply{
	private $s_f_name;
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
	private $nid_number;
	private $religion;
	private $s_username;
	private $s_password;

	private $par_division;
	private $par_district;
	private $par_police_station;
	private $par_post_office;
	private $par_village_road;
	private $par_house;

	private $pre_division;
	private $pre_district;
	private $pre_police_station;
	private $pre_post_office;
	private $pre_village_road;
	private $pre_house;

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
	private $hsc_without_point;

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

	private $photo_extension;

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

$photo_extension){
	  
	  
	

	$this->s_f_name=$s_f_name;
	$this->s_l_name= $s_l_name;
	$this->father_name= $father_name;
	$this->mother_name= $mother_name;
	$this->gender= $gender;
	$this->birth_day= $birth_day;
	$this->birth_month= $birth_month;
	$this->birth_year= $birth_year;

	$this->s_email= $s_email;
	$this->s_phone= $s_phone;
	$this->quota= $quota;
	$this->country= $country;
	$this->marital_status= $marital_status;
	$this->nid_number= $nid_number;
	$this->religion= $religion;
	$this->s_username= $s_username;
	$this->s_password= $s_password;

	$this->par_division= $par_division;
	$this->par_district= $par_district;
	$this->par_police_station= $par_police_station;
	$this->par_post_office= $par_post_office;
	$this->par_village_road= $par_village_road;
	$this->par_house= $par_house;

	$this->pre_division= $pre_division;
	$this->pre_district= $pre_district;
	$this->pre_police_station= $pre_police_station;
	$this->pre_post_office= $pre_post_office;
	$this->pre_village_road= $pre_village_road;
	$this->pre_house= $pre_house;

	$this->ssc= $ssc;
	$this->ssc_board= $ssc_board;
	$this->ssc_exam_year= $ssc_exam_year;
	$this->ssc_group= $ssc_group;
	$this->ssc_roll= $ssc_roll;
	$this->ssc_regi= $ssc_regi;
	$this->ssc_with_point= $ssc_with_point;
	$this->ssc_without_point= $ssc_without_point;

	$this->hsc= $hsc;
	$this->hsc_board= $hsc_board;
	$this->hsc_exam_year= $hsc_exam_year;
	$this->hsc_group= $hsc_group;
	$this->hsc_roll= $hsc_roll;
	$this->hsc_regi= $hsc_regi;
	$this->hsc_with_point= $hsc_with_point;
	$this->hsc_without_point= $hsc_without_point;

	$this->department_1= $department_1;
	$this->department_2= $department_2;
	$this->department_3= $department_3;
	$this->department_4= $department_4;

	$this->g_name= $g_name;
	$this->g_phone= $g_phone;
	$this->g_email= $g_email;
	$this->g_relation= $g_relation;
	$this->g_occupation= $g_occupation;
	$this->g_income= $g_income;
	$this->g_username= $g_username;
	$this->g_password= $g_password;

	$this->photo_extension= $photo_extension;
  }


  public function admission_apply_form_save(){
		  
	global $db;
	$birth_date=$this->birth_year.'-'.$this->birth_month.'-'.$this->birth_day;
   //   $result=$db->query("select u.id,u.password from users u where u.id='$user_id'");
	//  while(list($_user_id,$_password)=$result->fetch_row()){}



/* for  insert*/
   
	  $db->query("insert into admission_apply(
s_f_name,
s_l_name,
father_name,
mother_name,
gender,
birth_date,
birth_day,
birth_month,
birth_year,

s_email,
s_phone,
quota,
country,
maritial_status,
nid_number,
religion,
s_username,
s_password,

par_division,
par_district,
par_police_station,
par_post_office,
par_village_road,
par_house,

pre_division,
pre_district,
pre_police_station,
pre_post_office,
pre_village_road,
pre_house,

g_name,
g_phone,
g_email,
g_relation,
occupation,
g_income,
g_username,
g_password

)values(
'$this->s_f_name',
'$this->s_l_name',
'$this->father_name',
'$this->mother_name',
'$this->gender',
'$birth_date',
'$this->birth_day',
'$this->birth_month',
'$this->birth_year',

'$this->s_email',
'$this->s_phone',
'$this->quota',
'$this->country',
'$this->marital_status',
'$this->nid_number',
'$this->religion',
'$this->s_username',
'$this->s_password',

'$this->par_division',
'$this->par_district',
'$this->par_police_station',
'$this->par_post_office',
'$this->par_village_road',
'$this->par_house',

'$this->pre_division',
'$this->pre_district',
'$this->pre_police_station',
'$this->pre_post_office',
'$this->pre_village_road',
'$this->pre_house',

'$this->g_name',
'$this->g_phone',
'$this->g_email',
'$this->g_relation',
'$this->g_occupation',
'$this->g_income',
'$this->g_username',
'$this->g_password')");

	  

	  
	  

	 return $db->insert_id; 
	
	}


	/* apply depaertmet table start*/
	 public function apply_department_save($admission_apply_id){
		  
	global $db;

/* for  insert*/
   
	  $db->query("insert into applicant_subject(subject_id,choice_number,admission_apply_id

)values(
'$this->department_1','1','$admission_apply_id')");

	  $db->query("insert into applicant_subject(subject_id,choice_number,admission_apply_id

)values(
'$this->department_2','2','$admission_apply_id')");

	  $db->query("insert into applicant_subject(subject_id,choice_number,admission_apply_id

)values(
'$this->department_3','3','$admission_apply_id')");

	  $db->query("insert into applicant_subject(subject_id,choice_number,admission_apply_id

)values(
'$this->department_4','4','$admission_apply_id')");

	  

	 return $db->insert_id; 
	
	}

	/* apply depaertmet table closs*/


  /* background_examinationt table start*/

	 public function background_examination_save($admission_apply_id){
		  
	global $db;

/* for  insert*/
   
	  $db->query("insert into background_examination(name,board,passing_year,roll,regi,ex_group,with_optional_point,without_optional_point,applicant_id)values('$this->ssc','$this->ssc_board','$this->ssc_exam_year','$this->ssc_roll','$this->ssc_regi','$this->ssc_group','$this->ssc_with_point','$this->ssc_without_point','$admission_apply_id')");

	   $db->query("insert into background_examination(name,board,passing_year,roll,regi,ex_group,with_optional_point,without_optional_point,applicant_id)values('$this->hsc','$this->hsc_board','$this->hsc_exam_year','$this->hsc_roll','$this->hsc_regi','$this->hsc_group','$this->hsc_with_point','$this->hsc_without_point','$admission_apply_id')");


	  

	 return $db->insert_id; 
	
	}



  /* background_examination table closs*/
  


/*aplicent informaton show function start*/

 public function apply_form_show_indiviual($applicant_id){	  
	global $db;
	global $ext;

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
    
    //echo $g_name;
    //return $s_f_name;
                     
   
}



















static function apply_form_2(){	  
	global $db;
	global $ext;

	$apply_form_show = $db->query("select id,name from {$ext}country");
                     while(list($id,$name)=$apply_form_show->fetch_row()){
                     echo $name.'<br>';
                     
                   }
}


}
  ?>