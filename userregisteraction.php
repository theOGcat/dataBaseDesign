<?php
 require_once 'conn.php';

if(isset($_POST['username']) && isset($_POST['password'])){
$username = $_POST["username"];
$password      = $_POST["password"];
$name      = $_POST["name"];
$sex      = $_POST["sex"];
$mobile      = $_POST["mobile"];
$email      = $_POST["email"];
$usertype      = $_POST["usertype"];
$sql      = "select * from user where username='$username' ";
$result =mysqli_query($conn,$sql);

$data=array();

if($result&&mysqli_num_rows($result)>0){
  $data =mysqli_fetch_assoc($result);
}

if($data==null){
 $table= "user";
 $sql="insert into {$table} (username,password,realname,sex,mobile,email,role) values('$username','$password','$name','$sex','$mobile','$email','$usertype')";
 $result1=mysqli_query($conn, $sql);
 $n=mysqli_affected_rows($conn);

   $sql      = "select * from user where username='$username' ";
   $result =mysqli_query($conn,$sql);
   if($result&&mysqli_num_rows($result)>0){
     $data =mysqli_fetch_assoc($result);
   }
   if($data!=null){
   	  $usr_Id=$data["Id"];
   	  $sql1="insert into resume(usr_Id) values('$usr_Id')";
      $result2=mysqli_query($conn, $sql1);
   }
    exit("<script language='javascript'>alert('register success! please login ');window.location.href='./login.html';</script>");
} else {

   exit("<script language='javascript'>alert('the user name is exites！');window.location.href='./usrregister.php';</script>");
}
}
?>