<?php
 session_start();
 require_once("../../database/config_database.php");
//$db=new mysqli("localhost","root","","university_core");
 
 if(isset($_POST["applicant_btnLogin"])){
	$username=trim($_POST["username"]);
	$password=trim($_POST["possword"]);
	  
global $db;
	$user_table=$db->query("select u.id,u.s_username,u.s_password,u.s_status,u.s_role from {$ext}admission_apply u where s_username='$username' and s_password='$password'");


	list($app_id,$app_username,$app_password,$app_status,$app_role_id)=$user_table->fetch_row();
  
	if($app_username==$username and $password==$app_password and $app_status==true){
		
	    $_SESSION["app_id"]=$app_id;
	    $_SESSION["app_username"]=$app_username;
	    $_SESSION["app_password"]=$app_password;
		$_SESSION["app_status"]=$app_status;
		$_SESSION["app_role_id"]=$app_role_id;
	   
	 //  $a=$db->query("update users set current_active='1' where username='$_username'");



	  
	  if(isset($_SESSION["app_username"])){
	  	$_SESSION["app_info_show"]=$app_id;
	  	header("location:../../index.php");
	  	
	  }else{
           header("location:applicant_login.php");
	  	
	  }
		
	}else{
	  
	  echo "your account is inactive, please wait some time";	
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
