 <?php




$show_all_table =<<<HERE





HERE;

echo $show_all_table;





 //require_once("pages/students/admin_for_applicant/pagination/pagination.php");
       require_once("pages/students/admission_form_apply_class.php");
      
          
global $db;
global $ext;
?>  


<?php

        

// $applicant_result_create_id=isset($_SESSION["applicant_result_create_id"])?trim($_SESSION["applicant_result_create_id"]):'';
 

            $applicant_department_select=$db->query("select id,applicant_id, total_result_with_optional,total_result_without_optional, merit_position from {$ext}applicant_result where status !='1'  ORDER BY merit_position ASC");

               list($id,$applicant_id,$total_result_with_optional,$total_result_without_optional,$merit_position)=$applicant_department_select->fetch_row();

          // echo $applicant_id; DESC;

            $applicant_department_choice=$db->query("select s_id.subject_id,s_id.choice_number,s_id.admission_apply_id,d.name,d.available_seat from {$ext}applicant_subject s_id,{$ext}department d where s_id.subject_id=d.id and s_id.admission_apply_id='$applicant_id' ORDER BY choice_number ASC ");

             //  list($subject_id,$choice_number,$admission_apply_id,$department_name,$available_seat)=$applicant_department_choice->fetch_row();
          // echo $available_seat;
            // include("applicant_result_show.php");
          
     
          
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
                <div class="card-body">
                    <form action="pages/students/admin_for_applicant/applicant_result_input_lib.php" method="post">
                        <div class="col-lg-11 col-md-11  col-sm-10">
                            <div class="form-group-material">
                                <input id="applicant_id" type="text" name="applicant_id_mark" required class="input-material" readonly value="<?php echo  isset($applicant_id)?trim($applicant_id):''; ?>">
                                <label for="applicant_id" class="label-material">ID</label>
                            </div>
                            <div class="form-group-material">
                                <input id="total_result_with_optional" type="text" name="total_result_with_optional" required class="input-material" value="<?php echo  isset($total_result_with_optional)?trim($total_result_with_optional):''; ?>">
                                <label for="total_result_with_optional" class="label-material"> Total Marks With optional</label>
                            </div>
                            <div class="form-group-material">
                                <input id="total_result_without_optional" type="text" name="total_result_without_optional" required class="input-material" value="<?php echo  isset($total_result_without_optional)?trim($total_result_without_optional):''; ?>">
                                <label for="total_result_without_optional" class="label-material">Total Marks Without optional</label>
                            </div>
                            <div class="form-group-material">
                                <input id="total_result_without_optional" type="text" name="total_result_without_optional" required class="input-material" value="<?php echo  isset($merit_position)?trim($merit_position):''; ?>">
                                <label for="total_result_without_optional" class="label-material">Merit Position</label>
                            </div>

                            <div class="form-group-material">
                            <div class="col-lg-7 col-md-11  col-sm-10">
                                <select name="quota" class="form-control input-material" id="quota" >
                                  <option>Department</option>
                                       <?php
                                      // $db = new mysqli("localhost","root","","test");
                                       
                                       while(list($subject_id,$choice_number,$admission_apply_id,$department_name,$available_seat)=$applicant_department_choice->fetch_row()){
                                        echo "<option class='dropdown-divider'>  $choice_number</option>";
                                        echo "<option value='$subject_id'>$department_name</option>";
                                       
                                       
                                     }
                                   ?>
                               </select>
                            </div>
                            </div>
                            
                        </div>
                             
                          <div class="row justify-content-md-center">
                              <div class="form-group">
                                  <input type="submit" name="applicant_department_select_submit" value="SUBMIT" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="border-radius: 10px;">
                              </div>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>




    