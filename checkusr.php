<?php
 require_once 'conn.php';
if(isset($_POST['username']))
   $username = $_POST["username"];
else
   $username ="";
 if(isset($_POST['password']))
    $pwd      = $_POST["password"];
else
    $pwd      = "";
 

  $sql      = "select * from user where username='$username' and password='$pwd'";
   $result =mysqli_query($conn,$sql);
   $data=array();
   
  if($result&&mysqli_num_rows($result)>0){
      $data =mysqli_fetch_assoc($result);
    } 
   
	if($data!=null){
		
	    session_start();
      $_SESSION['username'] = $username;
      $_SESSION['role'] = $data["role"];
      $_SESSION['userId'] = $data["Id"];
	    $arr['code'] = 1;  
      $arr['role'] = $data["role"];
	    $arr['msg'] = 'success';
	    echo json_encode($arr);
     } else {
   
      $arr['code'] = 0;  
       $arr['role'] = 0; 
	    $arr['msg'] = 'error';
	     echo json_encode($arr);
    }
?>