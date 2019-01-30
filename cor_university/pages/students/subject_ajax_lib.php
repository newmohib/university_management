<?php
session_start();
require_once("../../database/config_database.php");
	//$db = new mysqli("localhost","root","","test");
	//$department_1='1';

	if(isset($_POST["department_1"])){
		$department_1=$_POST["department_1"];

           $_SESSION["department_1"]=$_POST["department_1"];
           $sess_department_1=$_SESSION["department_1"];
		   $sess_department_2=$_SESSION["department_2"];
		$department=$db->query("select id,name from department");
		echo "<option>Select Secound</option>";

		while(list($id,$name)=$department->fetch_row()){
			if($department_1 !==$id && $sess_department_1 !==$id && $sess_department_2 !==$id){
			echo "<option value='$id'>$name</option>";
			//echo $name.'<br>';
			}
		}

		
		$_SESSION["department_2"]='';


	}



	if(isset($_POST["department_2"])){
		$department_2=$_POST["department_2"];
		$sess_department_1=$_SESSION["department_1"];

           $_SESSION["department_2"]=$_POST["department_2"];
		$department=$db->query("select id,name from department");
		echo "<option>Select Third</option>";

		while(list($id,$name)=$department->fetch_row()){
			if($department_2 !==$id && $sess_department_1 !==$id && $sess_department_2 !==$id){
			echo "<option value='$id'>$name</option>";
			//echo $name.'<br>';
			}
		}		
	}


if(isset($_POST["department_3"])){
		$department_3=$_POST["department_3"];
		$sess_department_1=$_SESSION["department_1"];
		$sess_department_2=$_SESSION["department_2"];

         //  $_SESSION["department_1"]=$_POST["department_1"];
		$department=$db->query("select id,name from department");
		echo "<option>Select Fourth</option>";

		while(list($id,$name)=$department->fetch_row()){
			if($department_3 !==$id && $sess_department_1 !==$id && $sess_department_2 !==$id){
			echo "<option value='$id'>$name</option>";
			//echo $name.'<br>';
			}
		}
		$_SESSION["department_1"]='';
		$_SESSION["department_2"]='';


	}


/*

		$department_1='15';

          
		$department=$db->query("select id,name from department");

		while(list($id,$name)=$department->fetch_row()){
			if($department_1 !==$id){
			echo "<option value='$id'>$name</option>";
			echo $name.'<br>';
			}
		}		
	
*/



?>