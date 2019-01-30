<?php
      	 
$perPage = 2;
$page = (isset($_GET['pg'])) ? (int)$_GET['pg'] : 1;
$startAt = $perPage * ($page - 1);
 
 
$rs=$db->query("SELECT COUNT(*) FROM user");
list($total)= $rs->fetch_row();
$totalPages = ceil($total / $perPage);


	  
   $con_table=$db->query("select u.id,u.username,u.password,r.name,u.inactive from user u,role r where r.id=u.role_id  LIMIT $startAt, $perPage");
   
   echo "<table class='table'>";
   echo "<tr><th>Id</th><th>Username</th><th>Password</th><th>Role</th><th>Status</th></tr>";
   
   while(list($id,$username,$password,$rolename,$inactive)=$con_table->fetch_row()){
	   
	   //$added_on=date("d M Y h:i A",strtotime($added_on));
	   $status=$inactive==0?"Active":"Inactive";
	   
	 echo "<tr><td>$id</td><td>$username</td><td>$password</td><td>$rolename</td><td>$status</td></tr>";  
   }
   
   echo "</table>";
   // for placeholder variable value
   $page_placeholder='6';
   
   echo print_pagination($page_placeholder,$page,$totalPages);
   
?>