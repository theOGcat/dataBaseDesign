<?php
header("Content_type:text/html;charset=utf-8");  
header('Content-type: application/json');  
require_once 'conn.php';
session_start();
if(true)
{  
	$user_Id=$_SESSION['userId'];
	$sql="SELECT * FROM  jobposting  where jobposting.company_Id=$user_Id "; 
	//echo $sql;   
	$result =mysqli_query($conn,$sql); 
	$data=array();
	if($result&&mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
			$data[]=$row;
		}
	}	 	 
	if($data!=null){
		$jsondata = json_encode($data);
		ob_clean();
		echo urldecode($jsondata);  
	}
}else
{
	$info="{\"success\":\"false\",\"data\":\"\",\"error\":\"null\"}";
	echo $info;
}

?>