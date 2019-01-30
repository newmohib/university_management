<?php


if(isset($_GET["final_student"])){
     $student=$_GET["student"];
     
     if($student=='admission_payment_form'){
       
     include("pages/students_final/final_student_admission_payment_from.php"); 
       
     }

   }


?>