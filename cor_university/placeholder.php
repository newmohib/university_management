
<?php

/*include('../students/admission_apply_form.php'); */
//include('pages/students/admission_apply_form.php');

/*role */
//include('pages/role/role_form.php');
//include('pages/role/role_lib.php');


   
   if(isset($_GET["page"])){
	   $page=$_GET["page"];
	   
	   if($page=='adminssion_form'){
		   
		 include("pages/students/admission_apply_form.php"); 
		   
	   }else if($page=='role'){
		   $roles=$_GET["roles"];
		  // include("pages/role/role_form.php");
	   	if($roles=='create'){
	   		include("pages/role/role_form.php");
	   	}else if($roles=='manage'){
		   include("pages/role/role_delete.php");
		   include("pages/role/role_update.php");
		}else if($roles=='view'){
          // include("pages/role/role_show_one.php");
		   include("pages/role/role_show.php");
		}
		  
	   }else if($page=='applicant'){
	   	$roles=$_GET["apply"];
		   
		   //include("pages/contact/view_contact.php");
	   	  if($roles=='form'){
		   include("pages/students/admission_apply_form.php");
		  }else if($roles=='view'){
		   include("pages/students/admission_infromation_show.php");
		  }
	   }else if($page=='admin'){
		    
		    $applicant=$_GET["applicant"];
		    if($applicant=='show_all'){
		    	include('pages/students/admin_for_applicant/all_applicant_show.php');
		    }else if($applicant=='mark_input'){
		    	include('pages/students/admin_for_applicant/applicant_result_input.php');
		    }else if($applicant=='department_select'){
		    	include('pages/students/admin_for_applicant/all_applicant_depertment_select.php');
		    }else if($applicant=='all_applicant_subject_show'){
		    	include('pages/students/admin_for_applicant/applicnat_final_result_show_all.php');
		    }else if($applicant=='indivitual_applicant_subject_show'){
		    	include('pages/students/admin_for_applicant/applicnat_final_result_show_indivitual.php');
		    }else if($applicant=='applicnat_final_result_show_all_by_merit'){
		    	include('pages/students/admin_for_applicant/applicnat_final_result_show_all_by_merit.php');
		   
	   }
		  // include("pages/user/add_user.php");
		   
		 
	   }else if($page==5){
		   
		   include("pages/user/manage_user.php");
		  
	   }else if($page==6){
		   
		   include("pages/user/view_user.php");
		  
	   }else if($page==7){
		   
		    include("pages/product/add_product.php");
		  
	   }else if($page==8){
		   
		    include("pages/product/manage_product.php");
		  
	   }else if($page==9){
		   
		    include("pages/product/view_products.php");
		  
	   }else if($page==10){
		   
		    include("pages/product/edit_product.php");
		  
	   }else if($page==11){
		   
		    include("pages/order/view_orders.php");
		  
	   }
	   
   }else{
	   
      // include("pages/students/admission_apply_form.php");
   }




if(isset($_POST["admin_view_applicant"])){
	   $applicant_id=$_POST["applicant_id"];
	   
	   if($applicant_id){
		   
		 include("pages/students/admission_infromation_show.php"); 

}
}

if(isset($_POST["admin_edit_applicant"])){
	   $applicant_id=$_POST["applicant_id"];
	   
	   if($applicant_id){
		   
		 include("pages/students/admission_apply_form_edit.php");


}
}




$applicant_mark_submit=isset($_POST["applicant_mark_submit"])?trim($_POST["applicant_mark_submit"]):'';

if(isset($applicant_mark_submit)){

	//include("pages/students/admin_for_applicant/applicant_result_input_lib.php");

}


//final student start 

  $final_student=isset($_GET["final_student"])?$_GET["final_student"]:'';
  $final_student_session=isset($_SESSION["final_student"])?$_SESSION["final_student"]:'';
   unset($_SESSION["final_student"]);

   
if($final_student==true || $final_student_session==true){
    // $student=$_GET["student"];
     $student=isset($_GET["student"])?$_GET["student"]:'';
     
     if($student=='payment_con_form' || $final_student_session=='payment_con_form'){
       
     include("pages/students_final/student_final_admin/payment_confirmation_from.php"); 
       
     }

   }


//final student closs






?>