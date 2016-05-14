<!--- begin header --->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content='Ansible enables easy config management and change control.'>
    <meta name="keywords" content="ansible, config management, continous integration, continuos delivery, change managment ">
    <title>Ansible </title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
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
    <div class=""
    <div class="page-header">
            <h1> Ansible</h1>
          </div>

          <div class="jumbotron" class="">
            <p class="text-muted">
              Ansible is a provisionging and configuration management tool to automate infrastucture, app deployment and configuration updates and upgrades with ease.
            </p>
          </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><span class="glyphicon glyphicon-cog"></span> Get started with Ansible</h3>
          </div>
          <div class="panel-body">
              <a href="#" class="list-group-item disabled"> Configuration files</a>
              <a href="#" class="list-group-item disabled"> Command line</a>
              <a href="#" class="list-group-item disabled"> Playbooks</a>
              <a href="#" class="list-group-item disabled"> Roles</a>
          </div>
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
