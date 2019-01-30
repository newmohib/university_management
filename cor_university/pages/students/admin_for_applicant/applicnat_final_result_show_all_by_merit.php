<?php
  
require_once("database/config_database.php");
 //require_once("pages/students/admission_form_apply_class.php");

           


           $applicant_result_show_ind_1=$db->query("select id,applicant_id,mark,total_gpa_with_optional,total_gpa_without_optional,total_mark,total_result_with_optional,total_result_without_optional,status,department,user_id,update_date,merit_position from {$ext}applicant_result ORDER BY merit_position ASC");

               list($id,$applicant_id,$mark,$total_gpa_with_optional,$total_gpa_without_optional,$total_mark,$total_result_with_optional,$total_result_without_optional,$status,$department,$user_id,$update_date,$merit_position)=$applicant_result_show_ind_1->fetch_row();

   
            $applicant_result_show_ind_2=$db->query("select id,applicant_id,mark,total_gpa_with_optional,total_gpa_without_optional,total_mark,total_result_with_optional,total_result_without_optional,status,department,user_id,update_date,merit_position from {$ext}applicant_result ORDER BY merit_position ASC");




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
                    <form action="#" method="post">
                        <div class="col-lg-11 col-md-11  col-sm-10">
                            <div class="form-group-material">
                                <select name="department_id" class="form-control" id="department_id">
                                   <option>Select</option>
                                    <?php
                                      // $db = new mysqli("localhost","root","","test");
                                      $department = $db->query("select id,name from department");
                                       while(list($id,$name)=$department->fetch_row()){
                                       echo "<option value='$id'>$name</option>";
                                       
                                     }
                                   ?>
                               </select>
                            </div>
                  
                        </div>
                        <div class="row justify-content-md-center">
                            <div class="form-group">
                                <input type="submit" name="applicant_department_submit" value="SUBMIT" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="border-radius: 10px;">
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

    //    if ($applicant_department_submit) {

        //include("applicant_result_show.php");
$applicant_all_result_top =<<<HERE
<section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display text-primary">Applicant Result Create</h1>
          </header>

          <!--4th COLUMN start-->
           <div class="col-lg-12">
              <div class="card my_table">
                <div class="card-header">
                  <h4>Status</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <div class="row">
                   
                   <div class="col-lg-12">
                   <table class="table table-striped table-hover my_applicant_table">
                      <div class="row">
                      <thead>
                        <tr class="table-success">
                          <th>Serial Number</th>
                          <th> ID</th>
                          <th>Name</th>
                          <th>Status</th>
                          <th>Department</th>
                          <th>Merit Position</th>
                          <th>Result</th>
                          
                        </tr>
                      </thead>


HERE;
echo $applicant_all_result_top;
         $department_merit_position=0;
        while(list($id,$applicant_id,$mark,$total_gpa_with_optional,$total_gpa_without_optional,$total_mark,$total_result_with_optional,$total_result_without_optional,$status,$department,$user_id,$update_date,$merit_position)=$applicant_result_show_ind_2->fetch_row()){

         $status=$status==1?'Selected':'';
         $department_merit_position+=1;

  

           $applicant_basic_information_show=$db->query("select s.id,s.s_f_name,s.s_l_name,s.photo,d.name from {$ext}admission_apply s,{$ext}department d where s.id='$applicant_id' and d.id='$department'");

            list($apply_id,$s_f_name,$s_l_name,$photo,$department_name)=$applicant_basic_information_show->fetch_row();


$applicant_all_result_loop =<<<HERE


                     
                      <tbody>
                        <tr>
                        <td>$department_merit_position</td>
                         <th>$applicant_id
                          </th>
                           <td style="text-transform: capitalize;">$s_f_name
                           $s_l_name</td>
                           <th>$status</th>
                           <td>$department_name</td>
                           <td>$merit_position</td>
                           <td>$total_result_without_optional</td>
                          
                        </tr>
                      </tbody>
                    

HERE;
echo $applicant_all_result_loop;



        }

$admission_appl_full_bottom=<<<HERE

</div>
                    </table>
</div>
                     
     </div>

                    
                  </div>
                </div>
              </div>
            </div>

<!--4th COLUMN closs-->
      </div>
     </section>



HERE;
echo $admission_appl_full_bottom;


 
    //    }


       

$admission_appl_full_form =<<<HERE


HERE;
echo $admission_appl_full_form;

          
          
    ?>