 <?php
  
require_once("database/config_database.php");
 //require_once("pages/students/admission_form_apply_class.php");
global $ext;
 ?>


 <div class="container">
  <h2>Students Informaton</h2>
  
  <div id="accordion">
    <div class="row justify-content-md-center">
        <div class="col-11 col-lg-6  col-md-6  col-sm-9">
            <div class="card my_apply_myform">
                <div class="card-header d-flex align-items-center">
                    <h4>Payment Confirmaton</h4>
                    
                </div>
                <?php 

                       
                       $payment_confirmaton=isset($_SESSION["payment_confirmaton"])?$_SESSION["payment_confirmaton"]:'';
                       $payment_con_id=isset($_SESSION["payment_con_id"])?$_SESSION["payment_con_id"]:'';
                        unset($_SESSION["payment_confirmaton"]);
                        unset($_SESSION["payment_con_id"]);
                        

                        if($payment_confirmaton){
                            echo "<div class='card-header d-flex align-items-center'>";
                            echo  $payment_confirmaton.' and Payment ID >> '.$payment_con_id;
                            echo "</div>";
                        }else{
                            echo $payment_confirmaton='';
                        }

                     ?>
                <div class="card-body">
                    <form action="pages/students_final/student_final_admin/payment_confirmation_lib.php" method="post">
                        <div class="col-lg-11 col-md-11  col-sm-10">
                          <div class="form-group-material">
                                <select name="fee_name" class="form-control" id="fee_name">
                                   <option>Select For Payment</option>
                                    <?php
                                     
                                      $department = $db->query("select id,name from {$ext}tuition_fees_name");
                                       while(list($id,$name)=$department->fetch_row()){
                                       echo "<option value='$id'>$name</option>";
                                       
                                     }
                                   ?>
                               </select>
                            </div>
                            <div class="form-group-material">
                                <select name="department" class="form-control" id="department">
                                   <option>Select Department</option>
                                    <?php
                                      
                                      $department = $db->query("select id,name from {$ext}department");
                                       while(list($id,$name)=$department->fetch_row()){
                                       echo "<option value='$id'>$name</option>";
                                       
                                     }
                                   ?>
                               </select>
                            </div>

                            <div class="form-group-material">
                                <input id="student_id" type="text" name="student_id" required class="input-material">
                                <label for="student_id" class="label-material">ID</label>
                            </div>
                            <div class="form-group-material">
                                <input id="payment_amount" type="text" name="payment_amount" required class="input-material">
                                <label for="payment_amount" class="label-material">Amount</label>
                            </div>
                            
                        </div>
                        <div class="row justify-content-md-center">
                            <div class="form-group">
                                <input type="submit" name="payment_confirmaton_submit" value="SUBMIT" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="border-radius: 10px;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
