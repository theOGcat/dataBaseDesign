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
		<title>employers Home Page</title>
	
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
          publish Job's list
      </blockquote>
    <ul class="nav navbar-nav" style="float: right">
      <li class="active"><a href="index.php">Home</a></li>
     <li ><a href="application.php">Application</a></li>     
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
        <a class="btn btn-default" data-type="add" href="addcompany.php" style="float: right;">add</a>
     <button   id="remove" name="remove" class="btn btn-default"  style="float: right; margin-right: 10px;"><i class="glyphicon glyphicon-remove"></i>delete</button>
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
    url: 'getcompanyjobslistjson.php',
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
       field: '#',
        checkbox: true
    },{
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
        field: 'requirement',
        title: 'requirement',
         
    } 

    ]
});

$remove.click(function () {  
   var ids = getSelection();
    if(ids==""){
       alert('please select the delete data');
    }else
    {

       $.ajax({
         type:"Post",
         url:"delcompanyjobsbyid.php",
         data: {"Id":ids},
         dataType: "json",
         success:function(data) {          
           if(data.result){
              /**
              $table.bootstrapTable(  
                "refresh"    
              );   
              **/
              window.location.href='aindex.php';           
           }else{
              layer.msg(data);
          } 
         },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
              alert(XMLHttpRequest.status);         
         } 
      }); 
    }

  });

   function getSelection() {
        return $.map($table.bootstrapTable('getSelections'), function (row) {
            return row.Id
        });
    }
  
</script>
</body>
</html>