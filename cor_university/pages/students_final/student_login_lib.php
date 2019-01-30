<?php
 session_start();
 require_once("../../database/config_database.php");
//$db=new mysqli("localhost","root","","university_core_test6");
 
 if(isset($_POST["student_btnLogin"])){
	$username=trim($_POST["username"]);
	$password=trim($_POST["possword"]);
	  
global $db;
global $ext;
	$user_table=$db->query("select id,s_username,s_password,s_role from {$ext}final_student where s_username='$username'");


	list($_id,$_username,$_password,$role_id)=$user_table->fetch_row();
  
	if($_username==$username){
		
	    $_SESSION["s_id"]=$_id;
	    $_SESSION["username"]=$_username;
		$_SESSION["_password"]=$_password;
		$_SESSION["role_id"]=$role_id;
	  
	  if(isset($_SESSION["s_id"])){
	  	header("location:../../index.php");
	  	//echo "whats problem";
	  	
	  }
		
	}else{
	  // $error="<span style='color:red;'>Incorrect username or password</span>";
	  echo "your account is unactive, please wait some time";	
	}
 

	  }


	












/*

   $user_table=$db->query("select id,username,password from user where username='$username' and password='$password' and status=1");
   
  list($_id,$_username,$_password)=$user_table->fetch_row();
  
	if(isset($_id)){
	    $_SESSION["s_id"]=$id;
	    $_SESSION["s_username"]=$_username;
	    $db->query("update user set current_active='1' where id='$_id'");	
		header("location:home.php");
	}else{
	   $error="<span style='color:red;'>Incorrect username or password</span>";	
	}
	
 }
 */
?>
