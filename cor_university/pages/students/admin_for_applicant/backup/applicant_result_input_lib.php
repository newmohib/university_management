<?php
require_once("../../../database/config_database.php");
require_once("../admission_form_apply_class.php");
session_start();
$applicant_mark_submit=isset($_POST["applicant_mark_submit"])?trim($_POST["applicant_mark_submit"]):'';

if(isset($applicant_mark_submit)){

	$applicant_id_mark=isset($_POST["applicant_id_mark"])?trim($_POST["applicant_id_mark"]):'';
	$applicant_mark=isset($_POST["applicant_mark"])?trim($_POST["applicant_mark"]):'';

	//echo "$applicant_id_mark <br> $applicant_mark";




//this is object for mark input aplicant from admission_form_apply_class  to placeholder
   $applicant_result_obj=new applicant_result($applicant_id_mark,$applicant_mark);

	$mark_insert_id=$applicant_result_obj->applicant_mark_save();
	
    if($mark_insert_id){
    	
    	
    	$applicant_result_create_id=$applicant_result_obj->applicant_mark_update($mark_insert_id);
    	if ($applicant_result_create_id){
        $applicant_result_obj->applicant_merit_position();
      }
           
           if ($applicant_result_create_id) {
           	$error='input is successfull and <br> Student ID->> '.$mark_insert_id.'<br> and result is created';
            $_SESSION["applicant_result_create_id"]=$applicant_result_create_id;
             $succ="successfull result create";
            $_SESSION["succ_result_input"]=$succ;
    	    header("location:../../../home.php?page=admin&applicant=mark_input&error=input is successfull");
           }else{
           	$succ="unsuccessfull";
            $_SESSION["succ_result_input"]=$succ;
    	         header("location:../../../home.php?page=admin&applicant=mark_input");
           }
         
    	
    }else{
    	     $succ="insert unsuccessfull";
            $_SESSION["succ_result_input"]=$succ;
    	header("location:../../../home.php?page=admin&applicant=mark_input");
    }
}

?>