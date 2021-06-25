<?php
  header("Content_type:text/html;charset=utf-8");  
  header('Content-type: application/json');  
  require_once 'conn.php';

  $Id= $_POST['Id'];
  if(true)
  {  
  	 if(!empty($_POST['Id']))
      $Id=$_POST['Id']; 
    else
      $Id="";
 if(!empty($_POST['firstname']))
      $firstname=$_POST['firstname']; 
   else
      $firstname="";

  if(!empty($_POST['lastname']))
      $lastname=$_POST['lastname']; 
   else
      $lastname="";

   if(!empty($_POST['sex']))
      $sex=$_POST['sex']; 
   else
    $sex="";

   if(!empty($_POST['yearold']))
      $yearold=$_POST['yearold']; 
   else
      $yearold="";
 

   if(!empty($_POST['graduate']))
      $graduate=$_POST['graduate']; 
   else
    $graduate="";

     if(!empty($_POST['skill']))
      $skill=$_POST['skill']; 
   else
    $skill="";


     $table= "resume";
      $where=" usr_Id=$Id limit 1";
     $sql="update $table set firstname='$firstname',lastname='$lastname',sex='$sex',yearold='$yearold',graduate='$graduate',skill='$skill' where ".$where;
     $result =mysqli_query($conn,$sql); 
     echo "{\"result\":\"true\"}";
  }else
 {
 	 echo "{\"result\":\"false\"}";
	}	

?>