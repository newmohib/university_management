<?php
require_once("../../database/config_database.php");
require_once("student_class.php");
global $ext;
session_start();
$payment_submit=isset($_POST["payment_submit"])?trim($_POST["payment_submit"]):'';

if(isset($payment_submit)){

	$tuition_fee_name=isset($_POST["tuition_fee_name"])?trim($_POST["tuition_fee_name"]):'';
	$applicant_id=isset($_POST["applicant_id"])?trim($_POST["applicant_id"]):'';
$payment_nu=isset($_POST["payment_nu"])?trim($_POST["payment_nu"]):'';
$payment_amount=isset($_POST["payment_amount"])?trim($_POST["payment_amount"]):'';


  $payment_con_test= student_payment::payment_con_test($applicant_id);

   list($id,$fees_name_id,$student_id,$amount,$department_id)=$payment_con_test->fetch_row();
  


if ($id==$payment_nu and $fees_name_id==$tuition_fee_name and $applicant_id==$student_id and $amount==$payment_amount) {


   $applicant_admission_payment_obj=new student_payment($tuition_fee_name,$applicant_id,$payment_nu,$payment_amount);

     $payment_save_id=$applicant_admission_payment_obj->applicant_admission_payment_save();

//echo $payment_save_id;

//student information save functon

     if (isset($payment_save_id)) {
     $student_admission_success=student_payment::student_information_save($payment_save_id,$applicant_id,$department_id);

      if (isset($student_admission_success)) {
         $_SESSION["student_admission_success"]='<pre><h2>your payment and addmissin are successfull <br> Thank you For Admission and Welcome Our UNIVERSITY</h2><pre>';
        header("location:../../index.php");
      }
     }




}else{
  echo "your informaton is wrong";
}







/*

$payment_confirmaton_obj=new payment_con($fee_name,$department,$student_id,$payment_amount,$user_id);

  $payment_con_id=$payment_confirmaton_obj->payment_confirmaton_save();

  if ($payment_con_id) {
    $_SESSION["payment_confirmaton"]='Payment cofirmaton Successfull';
    $_SESSION["payment_con_id"]=$payment_con_id;
    $_SESSION["final_student"]='payment_con_form';

    header("location:../../../home.php");
  }

*/




/*


   $applicant_result_obj=new applicant_result($applicant_id_mark,$applicant_mark);

	$mark_insert_id=$applicant_result_obj->applicant_mark_save();
	
    if($mark_insert_id){
    	
    	
    	$applicant_result_create_id=$applicant_result_obj->applicant_mark_update($mark_insert_id);
    	if ($applicant_result_create_id){
        $applicant_merit_position=$applicant_result_obj->applicant_merit_position();
        $applicant_merit_position_with_optional=$applicant_result_obj->applicant_merit_position_with_optional();
        if ($applicant_merit_position=true && $applicant_merit_position_with_optional=true) {
          $applicant_result_obj->applicant_department_select();
        }
        
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



*/

}

?>