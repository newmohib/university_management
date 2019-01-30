<?php

//this page for link index.php for applicant payment


require_once("database/config_database.php");
 // require_once("database/config_database.php");
 // require_once("pages/students/admission_form_apply_class.php");


     $applicant_payment_self_id=$_POST["applicant_payment_self_id"];
     $applicant_payment_number=$_POST["applicant_payment_number"];
     $applicant_payment_amount=$_POST["applicant_payment_amount"];

     if($applicant_payment_number){
	  
	      
	$payment_success=$db->query("update admission_apply set form_fees_id='$applicant_payment_number',amount='$applicant_payment_amount' where id='$applicant_payment_self_id'");
	  
	  //  go index file
	  }
     

?>