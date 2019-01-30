
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
                   <div class="col-lg-3">
                   <img src='pages/students/img/<?php echo $photo=isset($photo)?trim($photo):'';?>' alt="person" class="img-fluid rounded-circle" style="height:140px;">
                   </div>
                   <div class="col-lg-9">
                    <table class="table table-striped table-hover my_applicant_table">
                      <div class="row">
                      <thead>
                        <tr class="table-success">
                          
                          <th> ID</th>
                          <th>Name</th>
                          <th>Status</th>
                          <th>Department</th>
                          <th>Merit Position</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                         <th><?php echo $applicant_id=isset($applicant_id)?$applicant_id:'';?>
                          </th>
                           <td style="text-transform: capitalize;"><?php echo $s_f_name=isset($s_f_name)?$s_f_name:'';?>
                           <?php echo $s_l_name=isset($s_l_name)?$s_l_name:'';?></td>
                           <th><?php echo $status=$status==1?'Seleceted':'';?></th>
                           <td><?php echo $department_name=isset($department_name)?trim($department_name):'';?></td>
                           <td><?php echo $merit_position=isset($merit_position)?trim($merit_position):'';?></td>
                          
                        </tr>
                      </tbody>
                    </div>
                    </table>
                    </div>
                     <div class="col-lg-12">
                    <table class="table table-striped table-hover my_applicant_table">
                      <div class="row">
                      <thead>
                        <tr class="table-success">
                          
                          
                          <th>Marks</th>
                          <th>GPA With Optional</th>
                          <th>GPA Without Optional</th>
                          <th>Total Mrks 120%</th>
                          <th>Total Result With Optional</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                         
                          </th>
                           <td><?php echo $mark=isset($mark)?$mark:'';?></td>
                           <td><?php echo $total_gpa_with_optional=isset($total_gpa_with_optional)?$total_gpa_with_optional:'';?></td>
                           <td><?php echo $total_gpa_without_optional=isset($total_gpa_without_optional)?trim($total_gpa_without_optional):'';?></td>
                           <td><?php echo $total_mark=isset($total_mark)?trim($total_mark):'';?></td>
                         <td><?php echo $total_result_with_optional=isset($total_result_with_optional)?trim($total_result_with_optional):'';?></td>  
                        </tr>
                      </tbody>
                    </div>
                    </table>
                    </div>
                    </div>

                    <table class="table table-striped table-hover my_applicant_table">
                      <div class="row">
                      <thead>
                        <tr class="table-success">
                          <th>Total Result Without Optional</th>
                          <th></th>
                          <th>VIVA Date</th>
                          <th>Admission Date</th>
                          <th>Class Strt</th>
                          <th>VIEW Details</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th><?php echo $total_result_without_optional=isset($total_result_without_optional)?trim($total_result_without_optional):'';?></th>
                           
                           <td><td><?php echo date('d-M-Y');?></td></td>
                           <td><?php echo date('d-M-Y');?></td>
                           <td><?php echo date('d-M-Y');?></td>
                           <td>
                         <form action='#' method='post'>
                            <div class='form-group'>
                              <input id='view_delete' type='hidden' name='role_id' value='$id'>
                              <input type='submit' value=' VIEW ' class='btn btn-success' name='view_delete' style="border-radius: 10px; color: white;">
                            </div>
                         </form>
                         </td> 
                        </tr>
                      </tbody>
                    </div>
                    </table>
                  </div>
                </div>
              </div>
            </div>

<!--4th COLUMN closs-->
      </div>
     </section>