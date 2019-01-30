<?php session_start();
 require_once("../../database/config_database.php");
 //$db=new mysqli("localhost","root","","university_core");
 if(isset($_SESSION["app_id"])){
  unset($_SESSION["app_username"]);
  unset($_SESSION["app_password"]);
  unset($_SESSION["app_status"]);
  unset($_SESSION["app_role_id"]);
  session_destroy();

  header("location:../../../index.php");
  
}else if (isset($_SESSION["s_id"])) {
	     $_SESSION["s_id"]=$_id;
	    $_SESSION["username"]=$_username;
		$_SESSION["_password"]=$_password;
		$_SESSION["role_id"]=$role_id;

		unset($_SESSION["s_id"]);
		unset($_SESSION["username"]);
		unset($_SESSION["_password"]);
		unset($_SESSION["role_id"]);
        header("location:../../../index.php");
}
 
  
?>