




 <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display text-primary">Applicant Information</h1>
          </header>
          
            
        <div class="col-lg-12">
           <div class="card my_table">
               <div class="card-header">
                  <h4>Status</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover my_applicant_table">
                      <div class="row">
                      <thead>
                        <tr class="table-success">
                          <th> ID</th>
                          <th>Name</th>
                          <th>Father Name</th>
                          <th>phone</th>
                          <th>Gender</th>
                          <th>NID-Number</th>
                          <th>Username</th>
                          <th>UPDATE</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr style="overflow-x: auto;">
                          <th></th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                           <td></td>
                          <td>
                        <form action='#' method='post'>
                          <div class='form-group'>
                            <input id='role-name' type='hidden' name='role_id' value='$_id'>
                            <input type='submit' value='EDIT' class='btn btn-success' name='role_edit' style="border-radius: 20px;">
                          </div>
                       </form>

                          

                       <form action='#' method='post'>
                          <div class='form-group'>
                            <input id='role-name' type='hidden' name='role_id' value='$_id'>
                            <input type='submit' value=' VIEW ' class='btn btn-success' name='role_delete' style="border-radius: 10px; color: white;">
                          </div>
                       </form>
                       <form action='#' method='post'>
                          <div class='form-group'>
                            <input id='role-name' type='hidden' name='role_id' value='$_id'>
                            <input type='submit' value='DELETE' class='btn btn-warning' name='role_delete' style="border-radius: 20px; color: white">
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
     </section>