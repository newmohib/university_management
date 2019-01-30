     <?php

       require_once("admission_form_apply_class.php");
        //  admission_apply::apply_form_show_indiviual(1);
            global $db;
            global $ext;
            $applicant_id='2';

$apply_form_show = $db->query("select 
  a.id,
  a.s_f_name,
  a.s_l_name,
  a.father_name,
  a.mother_name,
  a.birth_date,
  a.birth_day,
  a.birth_month,
  a.birth_year,
  a.gender,
  a.s_phone,
  a.s_email,
  a.s_username,
  a.s_password,
  a.s_status,
  a.s_role,
  a.maritial_status,
  a.multi_student,
  a.country,
  a.nid_number,
  a.quota,
  a.scholarship,
  a.apply_date,
  a.update_date,
  a.photo,
  a.religion,
  a.par_division,
  a.par_district,
  a.par_police_station,
  a.par_post_office,
  a.par_village_road,
  a.par_house,
  a.pre_division,
  a.pre_district,
  a.pre_police_station,
  a.pre_post_office,
  a.pre_village_road,
  a.pre_house,
  a.form_fees_id,
  a.amount,
  a.g_name,
  a.g_phone,
  a.g_email,
  a.g_status,
  a.occupation,
  a.g_income,
  a.g_relation,
  a.g_username,
  a.g_password

from {$ext}admission_apply a where id='$applicant_id'");
list(
  $id,
  $s_f_name,
  $s_l_name,
  $father_name,
  $mother_name,
  $birth_date,
  $birth_day,
  $birth_month,
  $birth_year,
  $gender,
  $s_phone,
  $s_email,
  $s_username,
  $s_password,
  $s_status,
  $s_role,
  $maritial_status,
  $multi_student,
  $country,
  $nid_number,
  $quota,
  $scholarship,
  $apply_date,
  $update_date,
  $photo,
  $religion,
  $par_division,
  $par_district,
  $par_police_station,
  $par_post_office,
  $par_village_road,
  $par_house,
  $pre_division,
  $pre_district,
  $pre_police_station,
  $pre_post_office,
  $pre_village_road,
  $pre_house,
  $form_fees_id,
  $amount,
  $g_name,
  $g_phone,
  $g_email,
  $g_status,
  $occupation,
  $g_income,
  $g_relation,
  $g_username,
  $g_password)=$apply_form_show->fetch_row();

     ?>


      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <!-- Nav tabs -->
  <ul class="nav nav-tabs nav-pills nav-justified" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Menu 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Dropdown</a>
      <div class="dropdown-menu">
        <a class="dropdown-item nav-link" data-toggle="tab" href="#menu2">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a></div>
    </li>
  </ul>
  <!-- Nav tabs closs -->
        </div>
      </div>
      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display text-primary">Applicant Information</h1>
          </header>
          <div class="row">
            <div class="tab-content">
            <div id="home" class="tab-pane active"><br>
            <div class="col-lg-12">
              <div class="card my_table">
                <div class="card-header">
                  <h4>Basic Informaton</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover my_applicant_table">
                      <caption>Comments</caption>
                      <thead>
                        <tr class="table-success">
                          <th >ID</th>
                          <th>Applicant Name</th>
                          <th>Father Name</th>
                          <th>Mother Name</th>
                          <th>Birth Date</th>
                          <th>Gender</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?php echo "$id";?></td>
                          <td><?php echo "$s_f_name $s_l_name";?></td>
                          <td><?php echo "$father_name";?></td>
                          <td><?php echo "$mother_name";?></td>
                          <td><?php echo "$birth_date";?></td>
                          <td><?php echo "$gender";?></td>
                        </tr>
                        <tr>
                          <th></th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        </tbody>
                        <thead>
                        <tr class="table-success">
                          <th>Phone</th>
                          <th>E-mail</th>
                          <th>Status</th>
                          <th>ROle</th>
                          <th>Maritial Status</th>
                          <th>Multi Student</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td scope="row"><?php echo "$s_phone";?></td>
                          <td><?php echo "$s_email";?></td>
                          <td><?php echo "$s_status";?></td>
                          <td><?php echo "$s_role";?></td>
                          <td><?php echo "$maritial_status";?></td>
                          <td><?php echo "$multi_student";?></td>
                        </tr>
                        <tr>
                          <th></th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>

                      <thead>
                        <tr class="table-success">
                          <th>Country</th>
                          <th>N-ID Number</th>
                          <th>Quota</th>
                          <th>Apply Date</th>
                          <th>Update Date</th>
                          <th>Religion</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td scope="row"><?php echo "$country";?></td>
                          <td><?php echo "$nid_number";?></td>
                          <td><?php echo "$quota";?></td>
                          <td><?php echo "$apply_date";?></td>
                          <td><?php echo "$update_date";?></td>
                          <td><?php echo "$religion";?></td>
                        </tr>
                        <tr>
                          <th>Parmanent Address</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        </tbody>

                        <thead>
                        <tr class="table-success">
                          <th>Division</th>
                          <th>District</th>
                          <th>Police Station</th>
                          <th>Post Office</th>
                          <th>Village / Road</th>
                          <th>Home Name / number</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td scope="row"><?php echo "$par_division";?></td>
                          <td><?php echo "$par_district";?></td>
                          <td><?php echo "$par_police_station";?></td>
                          <td><?php echo "$par_post_office";?></td>
                          <td><?php echo "$par_village_road";?></td>
                          <td><?php echo "$par_house";?></td>
                        </tr>
                        <tr>
                          <th>Present Address</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        </tbody>

                        <thead>
                        <tr class="table-success">
                          <th>Division</th>
                          <th>District</th>
                          <th>Police Station</th>
                          <th>Post Office</th>
                          <th>Village / Road</th>
                          <th>Home Name / number</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td scope="row"><?php echo "$pre_division";?></td>
                          <td><?php echo "$pre_district";?></td>
                          <td><?php echo "$pre_police_station";?></td>
                          <td><?php echo "$pre_post_office";?></td>
                          <td><?php echo "$pre_village_road";?></td>
                          <td><?php echo "$pre_house";?></td>
                        </tr>
                        <tr>
                          <th></th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>

            <!--tab manu 2nd start-->
            <div id="menu1" class="tab-pane fade"><br>
            <div class="col-lg-12">
              <div class="card my_table">
                <div class="card-header">
                  <h4>Basic Informaton</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover my_applicant_table">
                      <caption>Comments</caption>
                      <thead>
                        <tr class="table-success">
                          <th >ID</th>
                          <th>Applicant Name</th>
                          <th>Father Name</th>
                          <th>Mother Name</th>
                          <th>Birth Date</th>
                          <th>Gender</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?php echo "$id";?></td>
                          <td><?php echo "$s_f_name $s_l_name";?></td>
                          <td><?php echo "$father_name";?></td>
                          <td><?php echo "$mother_name";?></td>
                          <td><?php echo "$birth_date";?></td>
                          <td><?php echo "$gender";?></td>
                        </tr>
                        <tr>
                          <th></th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        </tbody>
                        <thead>
                        <tr class="table-success">
                          <th>Phone</th>
                          <th>E-mail</th>
                          <th>Status</th>
                          <th>ROle</th>
                          <th>Maritial Status</th>
                          <th>Multi Student</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td scope="row"><?php echo "$s_phone";?></td>
                          <td><?php echo "$s_email";?></td>
                          <td><?php echo "$s_status";?></td>
                          <td><?php echo "$s_role";?></td>
                          <td><?php echo "$maritial_status";?></td>
                          <td><?php echo "$multi_student";?></td>
                        </tr>
                        <tr>
                          <th></th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>

                      <thead>
                        <tr class="table-success">
                          <th>Country</th>
                          <th>N-ID Number</th>
                          <th>Quota</th>
                          <th>Apply Date</th>
                          <th>Update Date</th>
                          <th>Religion</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td scope="row"><?php echo "$country";?></td>
                          <td><?php echo "$nid_number";?></td>
                          <td><?php echo "$quota";?></td>
                          <td><?php echo "$apply_date";?></td>
                          <td><?php echo "$update_date";?></td>
                          <td><?php echo "$religion";?></td>
                        </tr>
                        <tr>
                          <th>Parmanent Address</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        </tbody>

                        <thead>
                        <tr class="table-success">
                          <th>Division</th>
                          <th>District</th>
                          <th>Police Station</th>
                          <th>Post Office</th>
                          <th>Village / Road</th>
                          <th>Home Name / number</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td scope="row"><?php echo "$par_division";?></td>
                          <td><?php echo "$par_district";?></td>
                          <td><?php echo "$par_police_station";?></td>
                          <td><?php echo "$par_post_office";?></td>
                          <td><?php echo "$par_village_road";?></td>
                          <td><?php echo "$par_house";?></td>
                        </tr>
                        <tr>
                          <th>Present Address</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        </tbody>

                        <thead>
                        <tr class="table-success">
                          <th>Division</th>
                          <th>District</th>
                          <th>Police Station</th>
                          <th>Post Office</th>
                          <th>Village / Road</th>
                          <th>Home Name / number</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td scope="row"><?php echo "$pre_division";?></td>
                          <td><?php echo "$pre_district";?></td>
                          <td><?php echo "$pre_police_station";?></td>
                          <td><?php echo "$pre_post_office";?></td>
                          <td><?php echo "$pre_village_road";?></td>
                          <td><?php echo "$pre_house";?></td>
                        </tr>
                        <tr>
                          <th></th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <!--tab manu 2nd closs-->

            <div id="menu2" class=" tab-pane fade"><br>
            <div class="col-lg-12">
              <div class="card my_table">
                <div class="card-header">
                  <h4>Striped table with hover effect</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Username</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>
          </div>
        </div>
      </section>