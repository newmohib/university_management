<?php
   header('Content-Type: application/json');
   $db=new mysqli("localhost","root","","university_core_test");
   
   $divisions_id=$_POST["divisions_id"];
   
  $result=$db->query("select id,name from districts where divisions_id='$divisions_id'");
  
  $districts=array();
  while(list($id,$name)=$result->fetch_row()){
	  	 
	 array_push($districts,array("id"=>$id,"name"=>$name));
	 
  }
  
  
  echo json_encode($districts);

?>