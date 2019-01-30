 <?php
  
require_once("database/config_database.php");
 //require_once("pages/students/admission_form_apply_class.php");
 ?>


 <div class="container">
  <h2>Applicant Informaton</h2>
  
  <div id="accordion">
    <div class="row justify-content-md-center">
        <div class="col-11 col-lg-6  col-md-6  col-sm-9">
            <div class="card my_apply_myform">
                <div class="card-header d-flex align-items-center">
                    <h4>Applicant Result Create</h4>
                    
                </div>
                <?php 

                       $error=isset($_GET["error"])?trim($_GET["error"]):'';
                       $applicant_result_create_id=isset($_SESSION["applicant_result_create_id"])?$_SESSION["applicant_result_create_id"]:'';

                      $succ_result_input= isset($_SESSION["succ_result_input"])?$_SESSION["succ_result_input"]:'';
                     // $applicnt_finaal_select_subject=isset($_SESSION["applicnt_finaal_select_subject"])?$_SESSION["applicnt_finaal_select_subject"]:'';

                        unset($_SESSION["succ_result_input"]);
                        unset($_SESSION["applicant_result_create_id"]);
                        unset($_SESSION["applicnt_finaal_select_subject"]);

                        if($succ_result_input){
                            echo "<div class='card-header d-flex align-items-center'>";
                            echo  $succ_result_input.' Applicant ID >> '.$applicant_result_create_id;
                            echo "</div>";
                           // echo $applicnt_finaal_select_subject;

                        }else{
                            echo $succ_result_input='';
                        }

                     ?>
                <div class="card-body">
                    <form action="pages/students/admin_for_applicant/applicant_result_input_lib.php" method="post">
                        <div class="col-lg-11 col-md-11  col-sm-10">
                            <div class="form-group-material">
                                <input id="applicant_id" type="text" name="applicant_id_mark" required class="input-material">
                                <label for="applicant_id" class="label-material">ID</label>
                            </div>
                            <div class="form-group-material">
                                <input id="applicant_mark" type="text" name="applicant_mark" required class="input-material">
                                <label for="applicant_mark" class="label-material">Marks</label>
                            </div>
                            
                        </div>
                        <div class="row justify-content-md-center">
                            <div class="form-group">
                                <input type="submit" name="applicant_mark_submit" value="SUBMIT" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="border-radius: 10px;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>




    <?php

         if($applicant_result_create_id){

// $applicant_result_create_id=isset($_SESSION["applicant_result_create_id"])?trim($_SESSION["applicant_result_create_id"]):'';
 



         if($applicant_result_create_id){

           // $applicant_result_show_ind=$db->query("select id,applicant_id,mark,total_gpa_with_optional,total_gpa_without_optional,total_mark,total_result_with_optional,total_result_without_optional,status,department,user_id,update_date,merit_position from {$ext}applicant_result where applicant_id='$applicant_result_create_id'");

           //    list($id,$applicant_id,$mark,$total_gpa_with_optional,$total_gpa_without_optional,$total_mark,$total_result_with_optional,$total_result_without_optional,$status,$department,$user_id,$update_date,$merit_position)=$applicant_result_show_ind->fetch_row();
           


           $applicant_result_show_ind=$db->query("select id,applicant_id,mark,total_gpa_with_optional,total_gpa_without_optional,total_mark,total_result_with_optional,total_result_without_optional,status,department,user_id,update_date,merit_position from {$ext}applicant_result where applicant_id='$applicant_result_create_id'");

               list($id,$applicant_id,$mark,$total_gpa_with_optional,$total_gpa_without_optional,$total_mark,$total_result_with_optional,$total_result_without_optional,$status,$department,$user_id,$update_date,$merit_position)=$applicant_result_show_ind->fetch_row();

   //basic data         
            $applicant_basic_information_show=$db->query("select s.id,s.s_f_name,s.s_l_name,s.photo,d.name from {$ext}admission_apply s,{$ext}department d where s.id='$applicant_id' and d.id='$department'");

            list($apply_id,$s_f_name,$s_l_name,$photo,$department_name)=$applicant_basic_information_show->fetch_row();

             include("applicant_result_show.php");
          }



          }
          
    ?>