<!--<?php
session_start();
if(!isset($_SESSION["username"])) {
  exit("<script language='javascript'>window.location.href='login.html';</script>");
}
?>-->
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Company Home Page</title>
	
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/bootstrap-table.css">

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>

	</head>

	<body >
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
  <div class="navbar-header">
    <a class="navbar-brand" href="#"> </a>
  </div>
  <div>
      <blockquote >
          Application Job's list
      </blockquote>
    <ul class="nav navbar-nav" style="float: right;">
      <li ><a href="aindex.php">Home</a></li>
     <li class="active"><a href="application.php">Application</a></li>     
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
  </div>
</nav>
  <div >

 <div >
   
</div>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
      
      <table id="table" class="table-condensed"></table>
  </div>
  <div class="col-md-1"></div>
</div>


</div>

<script >

var $table = $('#table'),
$remove = $('#remove'),
selections = [];

$('#table').bootstrapTable({
    url: 'getapplicationlistjson.php',
    search:false,
    uniqueId:"Id",
    pageSize:"20",
    pageNumber:"1",
    search:true,
    sidePagination:"client",
    striped:true,
    pagination:true,
    height:$(window).height()-200,
    width:"80%",
    columns: [
   {
        field: 'Id',
        title: 'ID',
    }
    ,  {
        field: 'categories',
        title: 'categories',
    }, {
        field: 'regions',
        title: 'regions',
         
    }, {
        field: 'position',
        title: 'position',
         
    }, {
        field: 'numbers',
        title: 'numbers',
         
    }, {
        field: 'firstname',
        title: 'firstname',
         
    }  , {
        field: 'lastname',
        title: 'lastname',
         
    } , {
        field: 'sex',
        title: 'sex',
         
    } , {
        field: 'yearold',
        title: 'yearold',
         
    } , {
        field: 'graduate',
        title: 'graduate',
         
    }, {
        field: 'skill',
        title: 'skill',
         
    }, {
        field: 'createdt',
        title: 'createdt',
         
    }

    ]
});


  
</script>
</body>
</html>