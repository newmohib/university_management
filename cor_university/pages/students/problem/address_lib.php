
<?php
require_once("../../database/config_database.php");
	//$db = new mysqli("localhost","root","","test");
	
	if(isset($_POST["division"])){
		$division_id=$_POST["division"];
		$districts=$db->query("select id,name from districts where divisions_id='$division_id'");
		while(list($id,$name)=$districts->fetch_row()){
			echo "<option value='$id'>$name</option>";
			//echo "$id";
		}		
	}

	//district

	if(isset($_POST["district"])){
		$district_id=$_POST["district"];
		$police_stations=$db->query("select id,name from police_stations where districts_id='$district_id'");
		while(list($id,$name)=$police_stations->fetch_row()){
			echo "<option value='$id'>$name</option>";
			//echo "$id";
		}		
	}


?>