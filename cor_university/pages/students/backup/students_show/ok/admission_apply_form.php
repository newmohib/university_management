<?php
//session_start();
require_once("../../../database/config_database.php");
//require_once("database/config_database.php");
?>


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



<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="address_ajax.js"></script>