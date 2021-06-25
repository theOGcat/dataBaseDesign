<?php
 require_once 'conn.php';
 session_start();
  ?>
<html>
  <head>
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>My Resume</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<style>
.error{
  color:red;
}
</style>
  </head>
  <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
  <div class="navbar-header">
    <a class="navbar-brand" href="#"> </a>
  </div>
  <div>
    <ul class="nav navbar-nav" style="float: right;">
      <li><a href="index.php">Home</a></li>
     <li ><a href="myapply.php">Apply</a></li>
      <li class="active"><a href="resume.php">My Resume</a></li>
      
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
  </div>
</nav>

 <?php  
     
        $Id=$_SESSION['userId'];
       // echo $Id;
     
      $sql="SELECT * FROM resume where usr_Id={$Id}"; 

     $result =mysqli_query($conn,$sql);

$tempdata=array();

if($result&&mysqli_num_rows($result)>0){
  $tempdata =mysqli_fetch_assoc($result);
}

      $firstname=$tempdata["firstname"];
      $lastname=$tempdata["lastname"];
      $sex=$tempdata["sex"];
      $yearold=$tempdata["yearold"];
      $graduate=$tempdata["graduate"];
      $skill=$tempdata["skill"];
      $mobile=$tempdata["mobile"];
?>
    <div class="container" style="margin-top: 50px;">
        <form action="" method="post" id="form" style="max-width:600px; margin: 0 auto;">
           <div class="control-group">
              <label class="control-label" for="input01">first name</label>
              <div class="controls">
                 <input type="hidden"  name="Id" id="Id" value='<?=$Id ?>'>
                <input type="text"  class="form-control" name="firstname" id="firstname" value="<?=$firstname?>" required>
                <p class="help-block"></p>
              </div>
            </div>
                <div class="control-group">
              <label class="control-label" for="input01">last name</label>
              <div class="controls">
                <input type="text"  class="form-control" name="lastname" id="lastname" value="<?=$lastname?>" required>
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="input01">Sex</label>
              <div class="controls">
                    <select class="form-control" id="sex" name="sex">
                      <option value="male" <?php
                       if($sex=="male")
                        echo "selected='selected'";
                       
                      ?>>
                      male</option>
                       <option value="female" <?php if($sex=="female")
                        echo "selected='selected'";?>>female</option>
                    </select>
              
                <p class="help-block"></p>
              </div>
            </div>
      
             <div class="control-group">
              <label class="control-label" for="input01">old</label>
              <div class="controls">
                    <input type="number"  class="form-control" name="yearold" id="yearold" value="<?=$yearold?>" required>
                <p class="help-block"></p>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label" for="input01">graduate</label>
              <div class="controls">
                    <input type="text"  class="form-control" name="graduate" id="graduate" value="<?=$graduate?>" >
                <p class="help-block"></p>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label" for="input01">skill</label>
              <div class="controls">
                    <input type="text"  class="form-control" name="skill" id="skill" value="<?=$skill?>">
                <p class="help-block"></p>
              </div>
            </div>
           
            <button  type="button" class="btn btn-primary"  id="save" style="width: 100%;">Save</button>
        </form> 
    </div>

     <script type="text/javascript">
    //实例化编辑器
    var um = UM.getEditor('myEditor');
  </script>
  <script>
 var form = $("#form");
function checkform(){
     var firstname=$("#firstname").val();
     var lastname=$("#lastname").val();
   
     if(firstname==""){
       alert('first name is not null');
       $("#firstname").focus();
       return false;
     }
     if(lastname==""){
         alert('last name is not null');
         $("#lastname").focus();
       return false;
     }
    
     return true;
  }
$("button").click(function() {
   if(checkform()){
       var url="updateresumebyid.php";
         $.ajax({
            type:"Post",                  
            url:url,
            data: $('#form').serialize(),
            dataType: "json",
            success:function(data) {   
               if(data.result){
                  //location.href = 'index.php';
                  alert('updte resume success!!!') 
               }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
              alert(XMLHttpRequest.status);         
           } 
        });   
   }
}); 
    </script>
  </body>
</html>
