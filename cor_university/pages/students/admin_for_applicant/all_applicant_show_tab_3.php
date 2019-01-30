




 <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display text-primary">Applicant Information</h1>
          </header>
          
            
        <div class="col-lg-12">
           <div class="card my_table">
               <div class="card-header">
                  <h4>ALL Applicant</h4>
                </div>
                <div class="card-header">
                   
  <!-- Nav tabs -->
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
  <!-- Nav tabs closs -->

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
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
  
               </div>
              
              </div>
        </div>
      </div>
     </section>