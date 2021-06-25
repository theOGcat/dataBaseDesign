<?php
require_once 'conn.php';


  if(true)
  {  
  	 if(!empty($_GET['Id']))
		$Id=$_GET['Id'];	
	 else
		$Id="";

    $conditon=" Id=$Id";
    $table= "joinjobs";
	$sql="delete from $table where ".$conditon;
    $result =mysqli_query($conn,$sql);
	exit("<script language='javascript'>alert('delete success！');window.location.href='./application.php';</script>");
	}	

?>