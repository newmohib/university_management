
<section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display text-primary">Applicant Result Create</h1>
          </header>
          
            
        <div class="col-lg-12">
           <div class="card my_table">
               <div class="card-header">
                  <h4>ALL Applicant</h4>
                </div>
                <div class="card-header">
                   
  <!--  
  <ul class="nav nav-tabs nav-pills nav-justified" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#Show">Show All</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Academic</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Payment</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Manage</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="index.php?page=applicant&apply=edit&self_id=$applicant_edit">Update</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a></div>
    </li>
  </ul>
 -->

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="Show" class="container tab-pane active"><br>
        <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover my_applicant_table">
                      <div class="row">
                      <thead>
                        <tr class="table-success">
                          <th> ID</th>
                          <th>Marks</th>
                          <th>GPA With Optional</th>
                          <th>GPA Without Optional</th>
                          <th>Mrks 120%</th>
                          <th>Total Result With Optional</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th><?php echo $applicant_id=isset($applicant_id)?$applicant_id:'';?>
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
                     <table class="table table-striped table-hover my_applicant_table">
                      <div class="row">
                      <thead>
                        <tr class="table-success">
                          <th>Total Result Without Optional</th>
                          <th>Current Status</th>
                          <th>Department</th>
                          <th>Update</th>
                          <th>Merit Position</th>
                          <th>VIEW Result</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                           

                          <th><?php echo $total_result_without_optional=isset($total_result_without_optional)?trim($total_result_without_optional):'';?></th>
                           <td><?php echo $status=isset($status)?trim($status):'';?></td>
                           <td><?php echo $department=isset($department)?trim($department):'';?></td>
                           <td><?php echo $user_id=isset($user_id)?trim($user_id):'';?></td>
                           <td><?php echo $merit_position=isset($merit_position)?trim($merit_position):'';?></td>
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
               </div> 
                <div class="row" style="margin: auto;">
                  <div class="col-lg-12">
                    <hr>
                      <hr>
                  </div>
                </div>
          </div>
        </div>

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
                          
                          <th>Username</th>
                          <th>Username</th>
                          <th>Password</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                         
                          <td>$s_username</td>
                          <td>$s_username</td>
                          <td>$s_password</td> 
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
                          <th>Payment ID</th>
                          <th>Amount</th>
                          <th>Selected Subject</th>
                          <th>Admission Date</th>
                          <th>Selected</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>$form_fees_id</td>
                          <td>$amount</td>
                          <td></td>
                          <td></td> 
                          <td></td> 
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