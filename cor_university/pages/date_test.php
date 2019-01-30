<select name="month" class="form-control">
 <!--month start-->
<option>MM</option>
 <?php
    
    //$months=array(1=>"January",2=>"February",3=>"March",4=>"April",5=>"May",6=>"June",7=>"July",8=>"August",9=>"September",10=>"October",11=>"November",12=>"December");
   for($i=date("m");$i<=date("m")+10;$i++){
        
        if(date("m")==$i){
          echo "<option selected value='$i'>$i</option>";
        }else{
          echo "<option value='$i'>$i</option>";
        }
    }
 ?>
<!--start closs-->
 </select>