 <!--- begin header --->
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content='System administration using code to create change'>
     <meta name="keywords" content="GIT, ansible, docker, terraform, consul, vagrant, config management, continous integration, continuos delivery, change managment ">
     <title>About</title>
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet">
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet">
     <link href="css/custom.css" rel="stylesheet">
 </head>
 <body>

<?php
set_include_path('includes:../includes');
?>

 <?php
 include 'navbar.inc'
?>

<?php
include 'left.inc';
?>

<!--- begin center column Place information here--->
<div class="col-md-8">
  <div class="container-fluid">

    <!--- begin content --->
    <div class="page-header">
      <h1> About</h1>
    </div>

    <div class="jumbotron">
      <p>
        System administration has changed to the point where visting a datacenter or physically logging into a system via a console to correct a problem is no longer needed. It's at a point where code can be used to fix, mitigate errors and problems without requiring physical intervention.
      </p>

      <p>
        Code can now build, deploy, automate, discover, monitor and recover services. System administration is now about using code to provide highly available, robust, resilent platforms and applications that can be deployed and maintained with greater ease.

        This site will shine light on how code can accomplish those goals.
      </p>
    </div>
    <!--- end content --->

  </div>
</div>
<!--- end center column --->

<?php
include 'right.inc';
?>

<?php
include 'footer.inc';
 ?>
