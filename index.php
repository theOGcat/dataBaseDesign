<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>candidates Home Page</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-table.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-table.js"></script>

</head>

<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"> </a>
        </div>
        <div>
            <blockquote>
                Job list
            </blockquote>
            <ul class="nav navbar-nav" style="float: right;">

                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="myapply.php">Apply</a></li>
                <li><a href="resume.php">My Resume</a></li>
                <li><a href="contactus.php">Contact us</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<div>

    <div>

    </div>
    <div class="row">
        <div class="col-md-1"></div>
     <div class="col-md-10">
              <table id="table" class="table-condensed"></table>
          </div>


        <div class="col-md-1"></div>
    </div>


</div>

<script>

    var $table = $('#table'),
        $remove = $('#remove'),
        selections = [];

    $('#table').bootstrapTable({
        url: 'getjobslistjson.php',
        search: false,
        uniqueId: "Id",
        pageSize: "20",
        pageNumber: "1",
        search: true,
        sidePagination: "client",
        striped: true,
        pagination: true,
        height: $(window).height() - 200,
        width: "80%",
        columns: [
            {
                field: 'Id',
                title: 'ID',
            }
            , {
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

            }, {
                field: '#',
                title: 'control', formatter: function (value, row, index) {
                    var d = "<a href='sendresume.php?Id=" + row.Id + "'>send resume</a>";
                    return d + "&nbsp";
                },
                width: "15%"
            }

        ]
    });


</script>
</body>
</html>