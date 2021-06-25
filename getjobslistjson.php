<?php
header("Content_type:text/html;charset=utf-8");  
header('Content-type: application/json');  
require_once 'conn.php';
if(true)
{  
	
	$sql="SELECT * FROM jobposting";    
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