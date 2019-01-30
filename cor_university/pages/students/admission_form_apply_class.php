<?php
//session_start();
//require_once("../../database/config_database.php");
global $ext;
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



public function admission_apply_form_update($update_id){	  
	global $db;
	global $ext;
    $birth_date=$this->birth_year.'-'.$this->birth_month.'-'.$this->birth_day;

	$apply_form_show = $db->query("update {$ext}admission_apply set 
s_f_name='$this->s_f_name',
s_l_name='$this->s_l_name',
father_name='$this->father_name',
mother_name='$this->mother_name',
gender='$this->gender',
birth_date='$birth_date',
birth_day='$this->birth_day',
birth_month='$this->birth_month',
birth_year='$this->birth_year',
s_email='$this->s_email',
s_phone='$this->s_phone',
quota='$this->quota',
country='$this->country',
maritial_status='$this->marital_status',
nid_number='$this->nid_number',
religion='$this->religion',
s_username='$this->s_username',
s_password='$this->s_password',
g_name='$this->g_name',
g_phone='$this->g_phone',
g_email='$this->g_email',
g_relation='$this->g_relation',
occupation='$this->g_occupation',
g_income='$this->g_income',
g_username='$this->g_username',
g_password='$this->g_password' where id='$update_id'");

	echo "update success";
	return $update_id;
        
}
//update closs





}










//=================== applicant_mark table start===============================



class applicant_result{
	private $applicant_id;
	private $mark;
//	private $gpa_with_optional;
//	private $gpa_without_optional;
//	private $total_result;
//	private $status;
//	private $department;
//	private $user_id;



function __construct($applicant_id,$mark){

$this->applicant_id=$applicant_id;
$this->mark=$mark;
 }
 //constractor closs

public function applicant_mark_save(){
	global $db;
    global $ext;
$db->query("insert into {$ext}applicant_result(applicant_id,mark,status)values('$this->applicant_id','$this->mark','0')");

return $db->insert_id;

}
//licant_mark_save() closs

//update functon start
public function applicant_mark_update($mark_id){
   global $db;
   global $ext;
  
  $applicant_mark=$db->query("select mark,applicant_id from {$ext}applicant_result where id='$mark_id'");
   list($_mark,$applicant_id)=$applicant_mark->fetch_row();
  $applicant_gpa=$db->query("select with_optional_point,without_optional_point from {$ext}background_examination where applicant_id='$applicant_id'");

    $total_gpa_with_optional=null;
    $total_gpa_without_optional=null;
   while(list($gpa_with_optional,$gpa_without_optional)=$applicant_gpa->fetch_row()){
   	 	$total_gpa_with_optional+=$gpa_with_optional;
   	 	$total_gpa_without_optional+=$gpa_without_optional;
   	 
   }
  // echo '<br>';
   //echo $total_gpa_with_optional;
  // echo '<br>';
  // echo $total_gpa_without_optional;

$gpa_80='8';
$mark_120='1.2';

$total_gpa_with_optional_input=$total_gpa_with_optional * $gpa_80;
$total_gpa_without_optional_input=$total_gpa_without_optional * $gpa_80;
$total_mark=$_mark * $mark_120;

$total_result_with_optional=$total_gpa_with_optional_input + $total_mark;
$total_result_without_optional=$total_gpa_without_optional_input + $total_mark;


  // echo '<br>';
  // echo $total_result_with_optional;
  // echo '<br>';
  // echo $total_result_without_optional;
  // echo '<br>';
   //echo $_mark;

$applicant_result_create = $db->query("update {$ext}applicant_result set 
total_gpa_with_optional='$total_gpa_with_optional_input',
total_gpa_without_optional='$total_gpa_without_optional_input',
total_mark='$total_mark',
total_result_with_optional='$total_result_with_optional',
total_result_without_optional='$total_result_without_optional' where id='$mark_id'");
//echo $applicant_result_create;

return $applicant_id;

}


public function applicant_merit_position(){
   global $db;
   global $ext;

  $applicant_merit_position=$db->query("select id,applicant_id from {$ext}applicant_result  ORDER BY total_result_without_optional DESC");
             $serial=isset($serial)?$serial:'0';
              while(list($id,$applicant_id)=$applicant_merit_position->fetch_row()){

                
                $serial+=1;
                echo $serial.'<br>';
              $db->query("update {$ext}applicant_result set merit_position='$serial' where id=$id");
               
              }
return $applicant_merit_position;


}


// new start


public function applicant_merit_position_with_optional(){
   global $db;
   global $ext;

  $applicant_merit_position_with_optional=$db->query("select id,applicant_id from {$ext}applicant_result  ORDER BY total_result_without_optional DESC");
             $serial=isset($serial)?$serial:'0';
              while(list($id,$applicant_id)=$applicant_merit_position_with_optional->fetch_row()){

                
                $serial+=1;
              //  echo $serial.'<br>';
              $db->query("update {$ext}applicant_result set merit_position_with_optional='$serial' where id='$id'");
               
              }

return $applicant_merit_position_with_optional;

}

//department select it is not use
/*
public function applicant_department_select2(){
   global $db;
   global $ext;

  $applicant_department_select_with_optional=$db->query("select id,applicant_id, total_result_with_optional,total_result_without_optional, merit_position from {$ext}applicant_result where status !='1'  ORDER BY merit_position ASC");

               list($id,$applicant_id,$total_result_with_optional,$total_result_without_optional,$merit_position)=$applicant_department_select_with_optional->fetch_row();

          // echo $applicant_id; DESC;

            $applicant_department_choice=$db->query("select s_id.subject_id,s_id.choice_number,s_id.admission_apply_id,d.name,d.available_seat from {$ext}applicant_subject s_id,{$ext}department d where s_id.subject_id=d.id and s_id.admission_apply_id='$applicant_id' ORDER BY choice_number ASC ");
                  $applicnt_finaal_select_subject=null;
                 while(list($subject_id,$choice_number,$admission_apply_id,$department_name,$available_seat)=$applicant_department_choice->fetch_row()){

                      if ($choice_number==1) {
                      	$result=$db->query("select count(*) from {$ext}applicant_result where department='$subject_id'");
                      	list($count)=$result->fetch_row();
                        
                        if($count<0){
						  $applicnt_finaal_select_subject=$subject_id;
						  break;
						 }

                      }else if ($choice_number==2) {
                      	$result=$db->query("select count(*) from {$ext}applicant_result where department='$subject_id'");
                      	list($count)=$result->fetch_row();
                        
                        if($count<10){
						  $applicnt_finaal_select_subject=$subject_id;
						  break;
						 }

                      }else if ($choice_number==3) {
                      	$result=$db->query("select count(*) from {$ext}applicant_result where department='$subject_id'");
                      	list($count)=$result->fetch_row();
                        
                        if($count<10){
						  $applicnt_finaal_select_subject=$subject_id;
						  break;
						 }

                      }else if ($choice_number==4) {
                      	$result=$db->query("select count(*) from {$ext}applicant_result where department='$subject_id'");
                      	list($count)=$result->fetch_row();
                        
                        if($count<10){
						  $applicnt_finaal_select_subject=$subject_id;
						  break;
						 }

                      }
                                       
                                       
                }

              



}
*/

//applicant_department_select


public function applicant_department_select(){
   global $db;
   global $ext;

  $applicant_department_select_with_optional=$db->query("select id,applicant_id, total_result_with_optional,total_result_without_optional, merit_position from {$ext}applicant_result  ORDER BY merit_position ASC");

               while(list($id,$applicant_id,$total_result_with_optional,$total_result_without_optional,$merit_position)=$applicant_department_select_with_optional->fetch_row()){

          // echo $applicant_id; DESC;

            $applicant_department_choice=$db->query("select s_id.subject_id,s_id.choice_number,s_id.admission_apply_id,d.name,d.available_seat from {$ext}applicant_subject s_id,{$ext}department d where s_id.subject_id=d.id and s_id.admission_apply_id='$applicant_id' ORDER BY choice_number ASC ");
                  $applicnt_finaal_select_subject=null;
                 while(list($subject_id,$choice_number,$admission_apply_id,$department_name,$available_seat)=$applicant_department_choice->fetch_row()){

                      
                      	$result=$db->query("select count(*) from {$ext}applicant_result where department='$subject_id'");
                      	list($count)=$result->fetch_row();
                        
                        if($count<3){
						  $applicnt_finaal_select_subject=$subject_id;
						  break;
						 }

                      


          //  $result=$db->query("select count(*) from {$ext}applicant_result where department='$subject_id'");
  
		  // 	 list($count)=$result->fetch_row();
		   	 // echo $count;
              
          //    $applicnt_finaal_select_subject=null;
		//	 if($count<10){
		//		  $applicnt_finaal_select_subject=null;
		//		 }



}
$db->query("update {$ext}applicant_result set department='$applicnt_finaal_select_subject',status='1' where applicant_id='$applicant_id'");
$_SESSION["applicnt_finaal_select_subject"]=$applicnt_finaal_select_subject;
}

}




 static function applicant_final_result_show($applicant_result_create_id){
   global $db;
   global $ext;


            $applicant_result_show_ind=$db->query("select id,applicant_id,mark,total_gpa_with_optional,total_gpa_without_optional,total_mark,total_result_with_optional,total_result_without_optional,status,department,user_id,update_date,merit_position from {$ext}applicant_result where applicant_id='$applicant_result_create_id'");

               list($id,$applicant_id,$mark,$total_gpa_with_optional,$total_gpa_without_optional,$total_mark,$total_result_with_optional,$total_result_without_optional,$status,$department,$user_id,$update_date,$merit_position)=$applicant_result_show_ind->fetch_row();

   //basic data         
            $applicant_basic_information_show=$db->query("select s.id,s.s_f_name,s.s_l_name,s.photo,d.name from {$ext}admission_apply s,{$ext}department d where s.id='$applicant_id' and d.id='$department'");

            list($apply_id,$s_f_name,$s_l_name,$photo,$department_name)=$applicant_basic_information_show->fetch_row();
            

}

}
//=================== applicant_mark table closs===============================




  ?>