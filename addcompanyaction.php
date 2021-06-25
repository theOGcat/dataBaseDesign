<?php
 require_once 'conn.php';
session_start();
if(isset($_POST['categories']) && isset($_POST['regions'])){
$categories = $_POST["categories"];
$regions      = $_POST["regions"];
$position      = $_POST["position"];
$requirement      = $_POST["requirement"];
$numbers      = $_POST["numbers"];

 $table= "jobposting";
 $company_Id=$_SESSION['userId'];
 $sql="insert into {$table} (categories,regions,position,requirement,numbers,company_Id) values('$categories','$regions','$position','$requirement','$numbers','$company_Id')";
 $result1=mysqli_query($conn, $sql);
 $n=mysqli_affected_rows($conn);

   
    exit("<script language='javascript'>alert(' success!');window.location.href='./aindex.php';</script>");
} else {

   exit("<script language='javascript'>window.location.href='./aindex.php';</script>");

}
?>