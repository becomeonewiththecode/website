<?php
set_include_path('includes:../includes');
 ?>
 <!--- begin header --->
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content='Journey into using code and open source tools to create change'>
     <meta name="keywords" content="GIT, ansible, docker, terraform, consul, vagrant, config management, continous integration, continuos delivery, change managment ">
     <title>Become one with the Code</title>
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet">
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet">
     <link href="css/custom.css" rel="stylesheet">
 </head>
 <body>


<?php
include 'navbar.inc'
?>

<?php
include 'left.inc';
?>

<!--- begin center column Place information here--->
<div class="col-md-8">
  <div class="container-fluid">

    <!-- begin content -->
    <div class="well-lg">
      <h1>Become one with the Code</h1>
    </div>
      <div class="jumbotron">
        <div class="row">
          <div class="col-xs-2">
            <span class="fa fa-code fa-5x"></span>
          </div>
          <div class="col-xs-10">
            <h4 class="list-group-item-heading">Code:</h4>
            <p>
            The command line is where it starts and ends, use code to create change. A journey into understanding how to use code to create change whether it's a PAAS or IAAS environments using various open source software.
            </p>
          </div>
        </div>
      </div>

      <div class="list-group">
        <a href="#" class="list-group-item active">Infrastructure as CODE or Software defined network provides the following</a>
        <button type="button" class="list-group-item">Robust Systems</button>
        <button type="button" class="list-group-item">Monitoring</button>
        <button type="button" class="list-group-item">Service Discovery</button>
        <button type="button" class="list-group-item">Orchestration</button>
      </div>

      <div class="list-group">
        <a href="#" class="list-group-item active">Software defined Network</a>
        <button type="button" class="list-group-item">Codify</button>
      </div>
    <!--- end content--->

  </div>
</div>
<!--- end center column --->

<?php
include 'right.inc';
?>

<?php
include 'footer.inc';
 ?>
