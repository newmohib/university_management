<?php


/*
$perPage = 2;
$page = (isset($_GET['pg'])) ? (int)$_GET['pg'] : 1;
$startAt = $perPage * ($page - 1);
 
 
$rs=$db->query("SELECT COUNT(*) FROM {$ext}admission_apply");
list($total)= $rs->fetch_row();
$totalPages = ceil($total / $perPage);
$apply_form_show=$db->query("select a.id from {$ext}admission_apply a LIMIT $startAt, $perPage");


//for placeholder variable
$page_placeholder='admin';
echo print_pagination($page_placeholder,$page,$totalPages);


*/


/*

              <div class="row" style="margin: auto;">
                  <div class="col-lg-12">
                    <hr>
                   <form action='#' method='post'>
                         <div class='form-group'>
                             <input type='submit' value='DELETE' class='btn btn-warning' name='role_delete' style="border-radius: 20px; color: white">
                        </div>
                    </form> 
                    <?php $page_placeholder='admin';
                          echo print_pagination($page_placeholder,$page,$totalPages);
                      ?>
                      <hr>
                  </div>
               </div>


*/








function print_pagination($pid,$page,$totalPages){
	
$next=($page+1)<$totalPages?($page+1):$totalPages;
$pre=($page-1)>0?($page-1):1;
 
    $links = "<a href='?page=$pid&applicant=show_all&pg=1'>First</a> ";
	$links .= "<a href='?page=$pid&applicant=show_all&pg=$pre'>Previous</a> ";

/*	
	for ($i = $page-5;$i<=$page+5;$i++) {
	 if($i>0 && $i<=$totalPages){
	  $links .= ($i != $page ) ? "<a href='?page=$pid&pg=$i'> $i</a> " : "$page ";
     }		 
	  
	}
*/
	$links.= "<a href='?page=$pid&applicant=show_all&pg=$next'>Next</a> ";
    $links.= "<a href='?page=$pid&applicant=show_all&pg=$totalPages'>Last</a> ";
		
/*	$links.="<form  method='get'>";
	$links.= "<input type='hidden' size='1' name='page' value='$pid' />";
    $links.= "<input type='text' size='1' name='pg' />";
    $links.="<input type='submit' value='go' />";
    $links.= "</form>";
*/
	return $links;
}


?>