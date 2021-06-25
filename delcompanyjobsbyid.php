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

    $Ids=implode(",",$Id);
    $conditon=" Id in ($Ids) ";
    $table= "jobposting";
		$sql="delete from $table where ".$conditon;
    $result =mysqli_query($conn,$sql);
		echo "{\"result\":\"true\"}";
  }else
 {
 	 echo "{\"result\":\"false\"}";
	}	
?>