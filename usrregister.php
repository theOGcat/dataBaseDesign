<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>user register</title>
   <link href="css/bootstrap.min.css" rel="stylesheet"/>
<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>

  <div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
      <center><h3 class="panel-title">User register</h3></center>
      <div class="panel panel-default">
              <div class="panel-body">
          <form action="userregisteraction.php" method="post" class="form-horizontal" role="form">
            <div class="input-group">
              <span class="input-group-addon">user name</span>
              <input type="text" name="username" value="" class="form-control" placeholder="username" required="required"/>
            </div><br/>
			
            <div class="input-group">
              <span class="input-group-addon">&nbsp;&nbsp;password</span>
              <input type="password" name="password" class="form-control" placeholder="password" required="required"/>
            </div><br/>
			
     <div class="input-group">
              <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;name</span>
              <input type="text" name="name" class="form-control" placeholder="name" required="required"/>
            </div><br/>
			 <div class="input-group">
          <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user type</span>
            
                <select class="form-control" id="usertype" name="usertype">
                      <option value="male" >
                      candidates</option>
                       <option value="2">employers</option>
                    </select>
            </div><br/>   
          		 <div class="input-group">
              <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sex</span>
                <select class="form-control" id="sex" name="sex">
                      <option value="male" >
                      male</option>
                       <option value="female" >female</option>
                    </select>            </div><br/>  
			 <div class="input-group">
              <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mobile</span>
              <input type="text" name="mobile" class="form-control" placeholder="mobile" required="required"/>
            </div><br/>
			 <div class="input-group">
              <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email</span>
              <input type="text" name="email" class="form-control" placeholder="Email" />
            </div><br/>
            <div class="form-group">
               <div class="col-xs-2"></div>
               <div class="col-xs-3"><a href="login.html"  class="btn btn-primary form-control">Login</a></div>
              <div class="col-xs-3"><input type="submit" value="Register" class="btn btn-primary form-control"/>
<div class="col-xs-2"></div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>