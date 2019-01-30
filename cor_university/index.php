<?php session_start();
  require_once("database/config_database.php");
 // require_once("pages/user/user_class.php");
 // require_once("lib/pagination.php");
   date_default_timezone_set("Asia/Dhaka");
   
  // if(!isset($_SESSION["username"])){
 //    header("location:index.php");
 //  }
  
?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>University</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css_js/vendor/bootstrap/css/bootstrap.css">
    
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="css_js/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css_js/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css_js/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="css_js/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet his self-->
    <link rel="stylesheet" href="css_js/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css_js/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    
  </head>
  <body>
    
   
    <!--navbar sidebar main inclode php-->
<?php
       include('pages/header/sidebar_2.php');
?>
    <!--navbar sidebar main closs-->
    <div class="page">
    
      <!--navbar header main top include php-->
<?php
       include('pages/header/header_top_2.php');
?>

      <!--navbar header main top closs-->

      
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
      <!--placeholder strate-->
<?php

$student_admission_success=isset($_SESSION["student_admission_success"])?$_SESSION["student_admission_success"]:'';
if ($student_admission_success) {

   echo "<div id='accordion'>
    <div class='row justify-content-md-center'>
        <div class='col-10 col-lg-10  col-md-10 col-sm-10'>
            <div class='card my_apply_myform'>
              <div class='card-header d-flex align-items-center'>
                    <h4>Admission Information</h4>
                    
                </div>
                <div class='card-body'>
                  <div class='col-lg-12 col-md-12  col-sm-12'>
                      $student_admission_success
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>";



  unset($_SESSION["student_admission_success"]);
}

  


//resuolt show
$result_show_ind=isset($_GET["result"])?$_GET["result"]:'';

$applicant_result_submit=isset($_POST['applicant_result_submit'])?$_POST['applicant_result_submit']:'';
$app_id=isset($_SESSION["app_id"])?$_SESSION["app_id"]:'';

if($applicant_result_submit==true || $result_show_ind==true ){
   
  include("pages/students/applicnat_final_result_show.php");
     
}



 if(isset($_GET["page"])){
     $page=$_GET["page"];
if($page=='applicant'){
      $applicant=$_GET["apply"];
       
        if($applicant=='form'){
       include("pages/students/admission_apply_form.php");
      }else if($applicant=='view'){
         include("pages/students/admission_infromation_show.php");
        }
      else if($applicant=='edit'){
         include("pages/students/admission_apply_form_edit.php");
       
      }
     }else if(isset($_POST['applicant_result_submit'])){
        include("pages/students/applicnat_final_result_show.php");
     }
}




//login to closs

$applicant_payment_submit=isset($_POST["applicant_payment_submit"])?$_POST["applicant_payment_submit"]:'';

if(isset($applicant_payment_submit)){
   
   $applicant_payment_number=isset($_POST["applicant_payment_number"])?$_POST["applicant_payment_number"]:'';
  
     if($applicant_payment_number){
     include("pages/students/admission_form_payment.php");
           if($payment_success){
           include("pages/students/admission_infromation_show.php");

      }
     
    }
}

//result show indivitualy

$applicant_result_show_indivitual=isset($_POST['applicant_result_show_indivitual'])?$_POST['applicant_result_show_indivitual']:'';
if($applicant_result_show_indivitual==true){
  include("pages/students/applicnat_final_result_show.php");    
}







//final student
include("pages/students_final/placeholder_final_student.php");
//final student closs




?>

<!--placeholder closs-->
        </div>
      </section>
      





      <!-- Header Section-->
      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
            <!-- To Do List-->
            <div class="col-lg-3 col-md-6">
              <div class="card to-do">
                <h2 class="display h4">To do List</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <ul class="check-lists list-unstyled">
                  <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-1" name="list-1" class="form-control-custom">
                    <label for="list-1">Similique sunt in culpa qui officia</label>
                  </li>
                  <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-2" name="list-2" class="form-control-custom">
                    <label for="list-2">Ed ut perspiciatis unde omnis iste</label>
                  </li>
                  <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-3" name="list-3" class="form-control-custom">
                    <label for="list-3">At vero eos et accusamus et iusto </label>
                  </li>
                  <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-4" name="list-4" class="form-control-custom">
                    <label for="list-4">Explicabo Nemo ipsam voluptatem</label>
                  </li>
                  <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-5" name="list-5" class="form-control-custom">
                    <label for="list-5">Similique sunt in culpa qui officia</label>
                  </li>
                  <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-6" name="list-6" class="form-control-custom">
                    <label for="list-6">At vero eos et accusamus et iusto </label>
                  </li>
                  <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-7" name="list-7" class="form-control-custom">
                    <label for="list-7">Similique sunt in culpa qui officia</label>
                  </li>
                  <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-8" name="list-8" class="form-control-custom">
                    <label for="list-8">Ed ut perspiciatis unde omnis iste</label>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Pie Chart-->
            <div class="col-lg-3 col-md-6">
              <div class="card project-progress">
                <h2 class="display h4">Project Beta progress</h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <div class="pie-chart">
                  <canvas id="pieChart" width="300" height="300"> </canvas>
                </div>
              </div>
            </div>
            <!-- Line Chart -->
            <div class="col-lg-6 col-md-12 flex-lg-last flex-md-first align-self-baseline">
              <div class="card sales-report">
                <h2 class="display h4">Sales marketing report</h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet officiis</p>
                <div class="line-chart">
                  <canvas id="lineCahrt"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<!-- 2nd row comlete closs-->



      <!-- Statistics Section-->
      <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-4">
              <!-- Income-->
              <div class="card income text-center">
                <div class="icon"><i class="icon-line-chart"></i></div>
                <div class="number">126,418</div><strong class="text-primary">All Income</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <!-- Monthly Usage-->
              <div class="card data-usage">
                <h2 class="display h4">Monthly Usage</h2>
                <div class="row d-flex align-items-center">
                  <div class="col-sm-6">
                    <div id="progress-circle" class="d-flex align-items-center justify-content-center"></div>
                  </div>
                  <div class="col-sm-6"><strong class="text-primary">80.56 Gb</strong><small>Current Plan</small><span>100 Gb Monthly</span></div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <!-- User Actibity-->
              <div class="card user-activity">
                <h2 class="display h4">User Activity</h2>
                <div class="number">210</div>
                <h3 class="h4 display">Social Users</h3>
                <div class="progress">
                  <div role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar bg-primary"></div>
                </div>
                <div class="page-statistics d-flex justify-content-between">
                  <div class="page-statistics-left"><span>Pages Visits</span><strong>230</strong></div>
                  <div class="page-statistics-right"><span>New Visits</span><strong>73.4%</strong></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


<!-- 3rd row comlete closs-->
 <!-- 
 4th row comlete closs      
      <section class="mt-30px mb-30px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-12">
              
             
             
            </div>
            <div class="col-lg-4 col-md-6">
         
            
              
            </div>
            <div class="col-lg-4 col-md-6">
             
             
            </div>
          </div>
        </div>
      </section>



-->

      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Your company &copy; 2017-2019</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="css_js/vendor/jquery/jquery.js"> </script>
    <script src="css_js/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="css_js/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="css_js/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="css_js/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="css_js/vendor/chart.js/Chart.min.js"></script>
    <script src="css_js/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="css_js/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="css_js/js/charts-home.js"></script>
    <!-- Main File-->
    <script src="css_js/js/front.js"></script>
    <script src="pages/students/address_ajax.js"></script>
    <script src="pages/students/subject_ajax.js"></script>
    
<?php

//require_once("address_ajax.php");

?>


 <script>
   /*   
      $(function() {



    $("#division").change(function() {
        $.ajax({
            url: "pages/students/address_lib.php",
            type: "post",
            data: { "division": $(this).val() },
            success: function(data) {
                $("#district").html(data);
            }
        });
    });


    $("#district").change(function() {
        $.ajax({
            url: "pages/students/address_lib.php",
            type: "post",
            data: { "district": $(this).val() },
            success: function(data) {
                $("#police_station").html(data);
            }
        });
    });


    $("#police_station").change(function() {
        $.ajax({
            url: "pages/students/address_lib.php",
            type: "post",
            data: { "police_station": $(this).val() },
            success: function(data) {
                $("#post_office").html(data);
            }
        });
    });

});
*/
    </script>
  </body>
</html>