 <?php




$show_all_table =<<<HERE





HERE;

echo $show_all_table;





 //require_once("pages/students/admin_for_applicant/pagination/pagination.php");
       require_once("pages/students/admission_form_apply_class.php");
      
          
global $db;
global $ext;
          
           
$perPage = 2;
$page = (isset($_GET['pg'])) ? (int)$_GET['pg'] : 1;
$startAt = $perPage * ($page - 1);
 
$rs=$db->query("SELECT COUNT(*) FROM {$ext}admission_apply");
list($total)= $rs->fetch_row();
$totalPages = ceil($total / $perPage);

 
$apply_form_show=$db->query("select 
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

from {$ext}admission_apply a LIMIT $startAt, $perPage");

$show_all_table_top=<<<HERE


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
        <a class="dropdown-item" href="index.php?page=applicant&apply=edit">Update</a>
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



HERE;

echo $show_all_table_top;


   while(list(
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
  $g_password)=$apply_form_show->fetch_row()){


$show_all_table_loop=<<<HERE


 <table class="table table-striped table-hover my_applicant_table">
                      <div class="row">
                      <thead>
                        <tr class="table-success">
                          <th> ID</th>
                          <th>Name</th>
                          <th>phone</th>
                          <th>Gender</th>
                          <th>NID-Number</th>
                          <th>Username</th>
                          <th>UPDATE</th>
                          <th>View</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>$id</th>
                           <td>$s_f_name $s_l_name</td>
                           <td>$s_phone</td>
                           <td>$gender</td>
                           <td>$nid_number</td>
                           <td>$s_username</td>
                          <td>
                        <form action='home.php' method='post'>
                          <div class='form-group'>
                            <input id='edit_admin' type='hidden' name='applicant_id' value='$id'>
                            <input type='submit' value='EDIT' class='btn btn-success' name='admin_edit_applicant' style="border-radius: 20px;">
                          </div>
                       </form>
                       </td>
                          
                       <td>
                       <form action='home.php' method='post'>
                          <div class='form-group'>
                            <input id='view_delete' type='hidden' name='applicant_id' value='$id'>
                            <input type='submit' value=' VIEW ' class='btn btn-success' name='admin_view_applicant' style="border-radius: 10px; color: white;">
                          </div>
                       </form>
                       </td>
                       <td>
                       <form action='all_applicant_manage_lib.php' method='post'>
                          <div class='form-group'>
                            <input id='applicant_delete' type='hidden' name='applicant_id' value='$id'>
                            <input type='submit' value='DELETE' class='btn btn-warning' name='admin_delete_applicant' style="border-radius: 20px; color: white">
                          </div>
                       </form>
                         </td> 
                        </tr>
                      </tbody>
                    </div>
                    </table>





HERE;

echo $show_all_table_loop;




   
   }
   
$page_placeholder='admin';
$show_all_table_footer=<<<HERE



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
                <div class="row" style="margin: auto;">
                  <div class="col-lg-12">
                    <hr>
                
                    <?php 
                          $page_placeholder='admin';
                          echo print_pagination($page_placeholder,$page,$totalPages);
                      ?>
                      <hr>
                  </div>
                </div>
          </div>
        </div>
      </div>
     </section>



HERE;

echo $show_all_table_footer;












?>




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
                          <th>phone</th>
                          <th>Gender</th>
                          <th>NID-Number</th>
                          <th>Username</th>
                          <th>UPDATE</th>
                          <th>View</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>$id</th>
                           <td>$s_f_name $s_l_name</td>
                           <td>$s_phone</td>
                           <td>$gender</td>
                           <td>$nid_number</td>
                           <td>$s_username</td>
                          <td>
                        <form action='#' method='post'>
                          <div class='form-group'>
                            <input id='edit_delete' type='hidden' name='role_id' value='$id'>
                            <input type='submit' value='EDIT' class='btn btn-success' name='edit_delete' style="border-radius: 20px;">
                          </div>
                       </form>
                       </td>
                          
                       <td>
                       <form action='#' method='post'>
                          <div class='form-group'>
                            <input id='view_delete' type='hidden' name='role_id' value='$id'>
                            <input type='submit' value=' VIEW ' class='btn btn-success' name='view_delete' style="border-radius: 10px; color: white;">
                          </div>
                       </form>
                       </td>
                       <td>
                       <form action='#' method='post'>
                          <div class='form-group'>
                            <input id='applicant_delete' type='hidden' name='role_id' value='$id'>
                            <input type='submit' value='DELETE' class='btn btn-warning' name='applicant_delete' style="border-radius: 20px; color: white">
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
                <div class="row" style="margin: auto;">
                  <div class="col-lg-12">
                    <hr>
                <!--    <form action='#' method='post'>
                         <div class='form-group'>
                             <input type='submit' value='DELETE' class='btn btn-warning' name='role_delete' style="border-radius: 20px; color: white">
                        </div>
                    </form> -->
                    <?php $page_placeholder='admin';
                          echo print_pagination($page_placeholder,$page,$totalPages);
                      ?>
                      <hr>
                  </div>
                </div>
          </div>
        </div>
      </div>
     </section>