<?php
//session_start();
require_once("../../../database/config_database.php");
//require_once("database/config_database.php");
?>

<!--
    <div class="row">
        <div class="col-11 col-lg-6  col-md-6  col-sm-9">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h4>Adminssion Form</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="col-lg-11 col-md-11  col-sm-10">
                            <div class="form-group-material">
                                <input id="register-username" type="text" name="registerUsername" required class="input-material">
                                <label for="register-username" class="label-material">Username</label>
                            </div>
                            <div class="form-group-material">
                                <input id="register-email" type="email" name="registerEmail" required class="input-material">
                                <label for="register-email" class="label-material">Email </label>
                            </div>
                            <div class="form-group-material">
                                <input id="register-password" type="password" name="registerPassword" required class="input-material">
                                <label for="register-password" class="label-material">Password</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Signin" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
-->

    <!--collaps-->

     <div class="container">
  <h2>Apply For Admission</h2>
  
  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
          Personal Information
        </a>
      </div>
      <div id="collapseOne" class="collapse show" >
        <div class="card-body">
          <div class="row">
        <div class="col-12 col-lg-12  col-md-12  col-sm-12">
            
                
                <div class="card-body">
                    <form>
                        <div class="col-lg-12 col-md-12  col-sm-12">
                            <!--student name start-->
                            
                           <div class="row">
                            <div class="col-lg-6 col-md-6  col-sm-6">
                            <div class="form-group-material">
                                <input id="student_f_name" type="text" name="s_f_name" required class="input-material">
                                <label for="student_f_name" class="label-material">Student First Name</label>
                            </div>

                            </div>
                    <!--        <div class="col-lg-6 col-md-6  col-sm-4">
                            <div class="form-group-material">
                                <input id="student_m_name" type="text" name="s_m_name" required class="input-material">
                                <label for="student_m_name" class="label-material">Student middle Name</label>
                            </div>
                            </div> -->
                            <div class="col-lg-6 col-md-6  col-sm-6">
                            <div class="form-group-material">
                                <input id="student_l_name" type="text" name="s_l_name" required class="input-material">
                                <label for="student_l_name" class="label-material">Student Last Name</label>
                            </div>
                            </div>
                            </div>

                            <!--student name closs-->
                            <!--father mother name start-->
                            <div class="row">
                             <div class="col-lg-6 col-md-6  col-sm-4">
                              <div class="form-group-material">
                                <input id="father_name" type="text" name="father_name" required class="input-material">
                                <label for="father_name" class="label-material">Father Name</label>
                              </div>
                             </div>
                            <div class="col-lg-6 col-md-6  col-sm-4">
                            <div class="form-group-material">
                                <input id="mother_name" type="text" name="mother_name" required class="input-material">
                                <label for="mother_name" class="label-material">Mother Name</label>
                            </div>
                            </div>
                            </div>
                            <hr>
                            <!--father mother name closs-->

                            <!-- gender start-->
                      <div class="row">
                        <div class="col-lg-4 col-sm-4 col-mb-4">
                        <div class="form-group-material i-checks row">
                        <div class="col-lg-12 col-sm-12 col-mb-12">
                        <label class="label-material">Gender</label>
                        </div>
                        <div class="ol-lg-12 col-sm-12 col-mb-12">
                          <input id="male" type="radio" value="male" name="gender" class="form-control-custom radio-custom" checked>
                          <label for="male">Male</label>
                          <input id="female" type="radio" value="female" name="gender" class="form-control-custom radio-custom">
                          <label for="female">Female</label>
                          <input id="other" type="radio" value="other" name="gender" class="form-control-custom radio-custom">
                          <label for="other">Other</label>
                        </div>
                        </div>
                        </div>


                         <!-- gender closs-->

                         <!--birth date  start-->
                    <div class="col-lg-8 col-sm-8 col-mb-8">
                    <div class="form-group-material">
                      <div class="col-lg-12 col-sm-12 col-mb-12">
                        <label class="label-material">Date Of Birth</label>
                      </div>
                      <div class="col-sm-10">
                  <div class="row">
  <!--day strat-->  
                  <div class="col-md-4">
                   <select name="day" class="form-control">
                    <option>DD</option>
                   <?php
                      for($i=1;$i<=31;$i++){
                          
                          if(date("d")==$i){
                            echo "<option selected value='$i'>$i</option>";
                          }else{
                            echo "<option value='$i'>$i</option>";
                          }
                      }
                   ?>
                   </select>
                   
                  </div>
  <!--day closs-->                        
<div class="col-md-4">
 <select name="month" class="form-control">
 <!--month start-->
<option>MM</option>
 <?php
    
    $months=array(1=>"January",2=>"February",3=>"March",4=>"April",5=>"May",6=>"June",7=>"July",8=>"August",9=>"September",10=>"October",11=>"November",12=>"December");
   foreach($months as $key=>$value){
        if(date("m")==$key){
          echo "<option value='$key' selected>$value</option>";
        }else{
          echo "<option value='$key'>$value</option>";
        }
    }
 ?>
<!--start closs-->
 </select>
</div>

<div class="col-md-4">
<select name="year" class="form-control">
 <!--month-->
 <option>YYYY</option>
    <?php
    for($i=date("Y")-50;$i<=date("Y")+1;$i++){
        
        if(date("Y")==$i){
          echo "<option selected value='$i'>$i</option>";
        }else{
          echo "<option value='$i'>$i</option>";
        }
    }
   ?>
 <!--month  closs-->
</select>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>

                         <!--birth date  closs-->
                         <!--phone and married  start-->
                    <hr>
                    <div class="row">
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="email" type="text" name="email" required class="input-material">
                                <label for="email" class="label-material">Email</label>
                            </div>
                      </div>
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="phone" type="text" name="phone" required class="input-material">
                                <label for="phone" class="label-material">Phone </label>
                            </div>
                      </div>
                    </div>
                        <hr>
                        <!--phone and married  closs-->

                        <!--national id and quota  start-->
              <div class="row">

                 <div class="col-lg-6 col-sm-6 col-mb-6">
                    <div class="form-group-material row">
                       <div class="col-sm-10">
                        <div class="row">
                            <div class="col-md-6">
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                               <label class="label-material">Quota</label>
                              </div>
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                               <select name="quota" class="form-control">
                                  <option>Quota</option>
                               </select>
                              </div> 
                            </div>                       
                            <div class="col-md-6">
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                                <label class="label-material">Nationality</label>
                              </div>
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                               <select name="country_id" class="form-control">
                                      <option>country</option>
                               </select>
                               </div>
                            </div>
                        </div>
                       </div>
                            
                    </div>
                 </div>

                        
                        

                        <div class="col-lg-6 col-sm-6 col-mb-6">
                          <div class="form-group-material i-checks row">
                            <div class="col-lg-12 col-sm-12 col-mb-12">
                            <label class="label-material">Marital Status</label>
                            </div>
                            <div class="ol-lg-12 col-sm-12 col-mb-12">
                              <input id="married" type="radio" value="married" name="Marital_Status" class="form-control-custom radio-custom" checked>
                              <label for="married">Married</label>
                              <input id="unmarried" type="radio" value="unmarried" name="Marital_Status" class="form-control-custom radio-custom">
                              <label for="unmarried">Unmarried</label>
                              <input id="divorce" type="radio" value="divorce" name="Marital_Status" class="form-control-custom radio-custom">
                              <label for="divorce">Divorce</label>
                              <input id="Marital_other" type="radio" value="other" name="Marital_Status" class="form-control-custom radio-custom">
                              <label for="Marital_other">Other</label>
                            </div>
                          </div>
                        </div>
                   </div>
                        <hr>

                        <!--national id and quota   start-->
                  <div class="row">
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="nid_number" type="text" name="nid_number" required class="input-material">
                                <label for="nid_number" class="label-material">National ID Number</label>
                            </div>
                      </div>
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="religon" type="text" name="religon" required class="input-material">
                                <label for="religon" class="label-material">Religion </label>
                            </div>
                      </div>
                 </div>
                 <hr>
<!--user , password start-->
                  <div class="row">
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="username" type="text" name="username" required class="input-material">
                                <label for="username" class="label-material">Username</label>
                            </div>
                      </div>
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="password" type="text" name="password" required class="input-material">
                                <label for="password" class="label-material">Password </label>
                            </div>
                      </div>
                 </div>
                 <hr>
<!--user , password closs-->

<!--address start-->

              <div class="row">

<div class="col-lg-12 col-sm-12 col-mb-12">
   <div class="form-group-material row">
      <div class="col-sm-10">
       <div class="row">
           <div class="col-lg-6 col-sm-12 col-mb-6">
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <label class="label-material">division</label>
             </div>
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <select name="division" class="form-control" id="division">
                 <option>division</option>
                  <?php
                    // $db = new mysqli("localhost","root","","test");
                     $add_division = $db->query("select id,name from divisions");
                     while(list($id,$name)=$add_division->fetch_row()){
                     echo "<option value='$id'>$name</option>";
                     
                   }
                 ?>
              </select>
             </div> 
           </div>                       
           <div class="col-md-6">
             <div class="col-lg-12 col-sm-12 col-mb-12">
               <label class="label-material">district</label>
             </div>
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <select name="district" class="form-control" id="district">
                     <option>district</option>
              </select>
              </div>
           </div>
       </div>
      </div>
           
   </div>
</div>
</div>


<div class="row">
<div class="col-lg-12 col-sm-12 col-mb-12">
   <div class="form-group-material row">
      <div class="col-sm-10">
       <div class="row">
           <div class="col-md-6">
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <label class="label-material">police_station</label>
             </div>
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <select name="police_station" class="form-control" id="police_station">
                 <option>police station</option>
              </select>
             </div> 
           </div>                       
           <div class="col-md-6">
             <div class="col-lg-12 col-sm-12 col-mb-12">
               <label class="label-material">post_office</label>
             </div>
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <select name="post_office" class="form-control" id="post_office">
                     <option>post office</option>
              </select>
              </div>
           </div>
       </div>
      </div>
           
   </div>
</div>
</div>

                <div class="row">
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="village_road" type="text" name="village_road" required class="input-material">
                                <label for="village_road" class="label-material">village / road</label>
                            </div>
                      </div>
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="house" type="text" name="house" required class="input-material">
                                <label for="house" class="label-material">house Number</label>
                            </div>
                      </div>
                </div>
                <hr>
<!--address closs-->




                        <div class="form-group">
                            <input type="submit" value="Signin" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            
        </div>
    </div>
        </div>
      </div>
    </div>

<!--2nd card-->    
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        Collapsible Group Item #2
      </a>
      </div>
      <div id="collapseTwo" class="collapse show" >
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
          Collapsible Group Item #3
        </a>
      </div>
      <div id="collapseThree" class="collapse show" >
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="address_ajax.js"></script>