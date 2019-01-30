 <?php

require_once("database/config_database.php");


//$show_all_table =<<<HERE

//HERE;

//echo $show_all_table;
      
          
global $db;
global $ext;

if (isset($_POST['applicant_disallowd_submit'])) {
 $applicant_disallowd_id=isset($_POST['applicant_disallowd_id'])?$_POST['applicant_disallowd_id']:'';
 $remark=isset($_POST['remark'])?$_POST['remark']:'';

 //echo $applicant_disallowd_id;
 echo '<br>';
 //echo $remark;


$applicant_disallowd_update_succ=$db->query("update {$ext}applicant_result set remark='$remark',status='1' where applicant_id='$applicant_disallowd_id'");
$applicant_disallowd=isset($applicant_disallowd_update_succ)?'Applicnt Disallowd Successfull ID '.$applicant_disallowd_id:'Applicnt Disallowd Unsuccessfull ID '.$applicant_disallowd_id;
             echo $applicant_disallowd;

}

        


    
          
?>
 <div class="container">
  <h2>Applicant Informaton</h2>
  
  <div id="accordion">
    <div class="row justify-content-md-center">
        <div class="col-11 col-lg-6  col-md-6  col-sm-9">
           <div class="card my_apply_myform">
                <div class="card-header d-flex align-items-center">
                    <h4>Applicant Disallowd</h4>
                    
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="col-lg-11 col-md-11  col-sm-10">
                            <div class="form-group-material">
                                <input id="applicant_id" type="text" name="applicant_disallowd_id"class="input-material" required >
                                <label for="applicant_id" class="label-material">Applicnt ID</label>
                            </div>
                            <div class="form-group-material">
                                <input id="remark" type="text" name="remark" class="input-material" required >
                                <label for="remark" class="label-material">Remark</label>
                            </div>
                            <div class="form-group-material">
                            </div>
                            
                        </div>
                             
                          <div class="row justify-content-md-center">
                              <div class="form-group">
                                  <input type="submit" name="applicant_disallowd_submit" value="SUBMIT" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="border-radius: 10px;">
                              </div>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>




    