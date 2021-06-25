<?php
require_once 'conn.php';
session_start();
if(!isset($_SESSION["username"])) {
  exit("<script language='javascript'>window.location.href='login.html';</script>");
}
  if(true)
  {  
  	 if(!empty($_GET['Id']))
      $Id=$_GET['Id']; 
    else
      $Id="";
   $userId=$_SESSION['userId'];
   $sql      = "select * from joinjobs where jobposting='$Id' and user_Id='$userId' ";
   $result =mysqli_query($conn,$sql);
   $data=null;
   if($result&&mysqli_num_rows($result)>0){
     $data =mysqli_fetch_assoc($result);
   }
   if($data==null){

     $table= "joinjobs";
     $sql="insert into {$table} (jobposting,user_Id,createdt) values('$Id','$userId','".date('Y-m-d H:i:s')."')";
     $result1=mysqli_query($conn, $sql);

    }
     exit("<script language='javascript'>window.location.href='./myapply.php';</script>");

  }
?>