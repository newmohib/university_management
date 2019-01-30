<?php

global $ext;
class payment_con{
	private $fee_name;
	private $department;
    private $student_id;
	private $payment_amount;
    private  $user_id;

	
  function __construct(
 $fee_name,
$department,
$student_id,
$payment_amount,
$user_id
 ){

  	$this->fee_name=$fee_name;
  	$this->department=$department;
  	$this->student_id=$student_id;
  	$this->payment_amount=$payment_amount;
  	$this->user_id=$user_id;
  }


public function payment_confirmaton_save(){
global $ext;
global $db;

$db->query("insert into {$ext}tuition_fees_con(fees_name_id,department_id,student_id,amount,user_id)values('$this->fee_name','$this->department','$this->student_id','$this->payment_amount','$this->user_id')");

$payment_con_id=$db->insert_id;

return $payment_con_id;
//echo "$this->fee_name , $this->department , $this->student_id , $this->payment_amount , $this->user_id";
	
	}

	
}

//admission payment start


class student_payment{
  private $tuition_fee_name;
  private $applicant_id;
  private $payment_nu;
  private $payment_amount;

 
  function __construct(
 $tuition_fee_name,
$applicant_id,
$payment_nu,
$payment_amount
 ){

    $this->tuition_fee_name=$tuition_fee_name;
    $this->applicant_id=$applicant_id;
    $this->payment_nu=$payment_nu;
    $this->payment_amount=$payment_amount;
  }


public static function payment_con_test($student_id){
global $ext;
global $db;
$payment_con_test=$db->query("select id,fees_name_id,student_id,amount,department_id from {$ext}tuition_fees_con where student_id='$student_id'");


return $payment_con_test;
}



public function applicant_admission_payment_save(){
global $ext;
global $db;

$db->query("insert into {$ext}tuition_fees_payment(applicant_id,fees_name_id,payment_number,amount)values('$this->applicant_id','$this->tuition_fee_name','$this->payment_nu','$this->payment_amount')");

$payment_save_id=$db->insert_id;

return $payment_save_id;


  
  }


  public static function student_information_save($payment_save_id,$applicant_id,$department_id){   
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

  //$birth_date=$this->birth_year.'-'.$this->birth_month.'-'.$this->birth_day;

    $db->query("insert into {$ext}final_student(
admission_apply_id,
department_id,
s_f_name,
s_l_name,
father_name,
mother_name,
birth_date,
birth_day,
birth_month,
birth_year,
gender,
s_phone,
s_email,
s_username,
s_password,
quota,
country,
maritial_status,
nid_number,
religion,
s_status,
s_role,
scholarship,
photo,
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
pre_house
)values('$applicant_id','$department_id','$s_f_name','$s_l_name','$father_name','$mother_name','$birth_date','$birth_day','$birth_month','$birth_year','$gender','$s_phone','$s_email',
'$s_username',
  '$s_password',
 '$quota',
'$country',
 '$maritial_status',
 '$nid_number',
 '$religion',
  '1',
  '8',
 '$scholarship',
 '$photo',
  '$par_division',
  '$par_district',
  '$par_police_station',
  '$par_post_office',
  '$par_village_road',
  '$par_house',
  '$pre_division',
  '$pre_district',
  '$pre_police_station',
  '$pre_post_office',
  '$pre_village_road',
  '$pre_house'
)");
$final_student_id=$db->insert_id;
echo $final_student_id;
if ($final_student_id) {
  $db->query("insert into {$ext}users(username,password,role_id,profile_id,status)values('$s_username','$s_password','8','$final_student_id','1')");
   // echo "<br>";
   //$student_user_id=$db->insert_id;
   // echo "$s_username $student_user_id";
}
     

if ($student_user_id) {
    $db->query("insert into {$ext}guardian(final_student_id,g_name,g_phone,g_email,g_status,occupation,monthly_income,g_relation,g_username,g_password)values('$final_student_id','$g_name','$g_phone','$g_email','1','$occupation','$g_income','$g_relation','$g_username','$g_password')");
    $final_guardian_id=$db->insert_id;
   // echo "<br>";
   // echo "$final_guardian_id";
   // echo "<br>";
}

if ($final_guardian_id) {
    $db->query("insert into {$ext}users(username,password,role_id,profile_id,status)values('$g_username','$g_password','9','$final_guardian_id','1')");

    $guardian_user_id=$db->insert_id;
   // echo "<br>";
   // echo "$guardian_user_id";

    return $guardian_user_id;
  }

}


//student infromation show

public static function final_student_information_show($student_id){
global $ext;
global $db;
$final_student_information_show_ind=$db->query("select admission_apply_id,
department_id,
s_f_name,
s_l_name,
father_name,
mother_name,
birth_date,
birth_day,
birth_month,
birth_year,
gender,
s_phone,
s_email,
s_username,
s_password,
quota,
country,
maritial_status,
nid_number,
religion,
s_status,
s_role,
scholarship,
photo,
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
pre_house
 from {$ext}final_student where id='$student_id'");


return $final_student_information_show_ind;
}

//guardian informaton

public static function final_student_guirdian_information_show($student_id){
global $ext;
global $db;
$final_student_guirdian_information_show=$db->query("select 
  g_name,g_phone,g_email,g_status,occupation,monthly_income,g_relation,g_username,g_password
 from {$ext}guardian where final_student_id='$student_id'");


return $final_student_guirdian_information_show;
}

  
}





?>