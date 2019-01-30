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
<select id="district3">
</select>

<div id="district"></div>
<div id="district2"></div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script>

  $(function(){	  
	  
	 
	  $("#divisions").change(function(){
		 		 	//alert('f_name');	
		   // $("#district").html("<img src='../img/ajax_loader.gif' width='50' />");
			
			
		    $.ajax({
		      type:"post",			  
			  data:{"divisions_id":$(this).val()},
	          url:"query_products.php",			 
			  success:function(_data){
				 var html="";
				 var district_arry= [];				 
				 _data.forEach(function(obj,index){
				 	district_arry.push(obj);

                    localStorage.district=JSON.stringify(district_arry);
					 
					 html+=obj.id+" | "+obj.name+"<br/>";
					 
			     });				 
				 
				// $("#district").html(html);
				 
			  }
			  		  
		  });  
		 
		 
	 init()
	 
	 }); 
	 
	
	  
	   //alert('ok');
  
  
  });

//alert('f_name');
  function init(){

	if(localStorage.district){
		district=JSON.parse(localStorage.district);
		
		var district_print= [];
		var district_print3= [];
		for(var i=0;i<district.length;i++){
			var id=district[i].id;
			var name=district[i].name;
			district_print.push(id);
			district_print.push(name);
			//document.write("<select name='years'>");
	        //document.write("<option>" + name + "</option>");
			document.getElementById("district3").innerHTML +="<option name='"+id+"'>" + name + "</option>";
		}
		document.getElementById("district2").innerHTML =district_print+' ';
		//document.getElementById("district3").innerHTML =district_print3;
	}else{
		document.getElementById("district").innerHTML ='';
	}
}

</script>

</select>
</body>
</html>
