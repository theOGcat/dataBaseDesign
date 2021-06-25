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
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
  <div class="navbar-header">
    <a class="navbar-brand" href="#"> </a>
  </div>
  <div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="aindex.php">Home</a></li>
     <li ><a href="application.php">Application</a></li>     
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
  </div>
</nav>
  <div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
      <center><h3 class="panel-title">add company</h3></center>
      <div class="panel panel-default">
              <div class="panel-body">
          <form action="addcompanyaction.php" method="post" class="form-horizontal" role="form">
            <div class="input-group">
              <span class="input-group-addon">&nbsp;&nbsp;categories</span>
              <input type="text" name="categories" value="" class="form-control" placeholder="categories" required="required"/>
            </div><br/>
			
            <div class="input-group">
              <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;regions</span>
              <input type="text" name="regions" class="form-control" placeholder="regions" required="required"/>
            </div><br/>
			
     <div class="input-group">
              <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;position</span>
              <input type="text" name="position" class="form-control" placeholder="position" required="required"/>
            </div><br/>
			
          		      
			 <div class="input-group">
              <span class="input-group-addon">requirement</span>
              <input type="text" name="requirement" class="form-control" placeholder="requirement" required="required"/>
            </div><br/>
			 <div class="input-group">
              <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;numbers</span>
              <input type="number" name="numbers" class="form-control" placeholder="numbers" />
            </div><br/>
            <div class="form-group">
               <div class="col-xs-2"></div>
               <div class="col-xs-3"></div>
              <div class="col-xs-3" ><input type="submit" value="add" class="btn btn-default form-control" style=" margin-left: 0px"/>
<div class="col-xs-2"></div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>