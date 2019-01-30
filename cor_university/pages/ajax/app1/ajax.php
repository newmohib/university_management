<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>

<select id="divisions">
<?php
  $db=new mysqli("localhost","root","","university_core_test");
  $result=$db->query("select id,name from divisions");
  while(list($id,$name)=$result->fetch_row()){
	  echo "<option value='$id'>$name</option>";
  }
?>
</select>

<div id="district"></div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script>

  $(function(){	  
	  
	 
	  $("#divisions").change(function(){
		 		 		
		    $("#district").html("<img src='../img/ajax_loader.gif' width='50' />");
			
			
		    $.ajax({
		      type:"post",			  
			  data:{"divisions_id":$(this).val()},
	          url:"query_products.php",			 
			  success:function(_data){
				 var html="";				 
				 _data.forEach(function(obj,index){
					 
					 html+=obj.id+" | "+obj.name+"<br/>";
					 
			     });				 
				 
				 $("#district").html(html);
				 
			  }
			  		  
		  });  
		 
		 
	 
	 
	 }); 
	 
	
	  
	   //alert('ok');
  
  
  });

</script>


</body>
</html>
