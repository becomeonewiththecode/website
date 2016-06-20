 <!--- begin header --->
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content='Use GIT to apply version control your code, softare and documents.'>
     <meta name="keywords" content="GIT, ansible, docker, terraform, consul, vagrant, config management, continous integration, continuos delivery, change managment ">
     <title>GIT</title>
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
include 'git-left.inc';
?>

<!--- begin center column Place information here--->
<div class="col-md-8">
  <div class="container-fluid">
     <!--- begin content --->
      <div class="page-header">
        <h1> GIT</h1>
      </div>

      <div class="jumbotron" class="">
        <p class="text-muted">
          <icon class="fa fa-code-fork fa-4x fa-pull-left fa-fw" ></icon>Version control system that tracks and stores changes to files within a project allowing for easy searching and retrieval.
        </p>
      </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><span class="glyphicon glyphicon-cog"></span> Get started with GIT</h3>
      </div>
      <div class="panel-body">
          <a href="use-git.php" class="list-group-item"> Using GIT </a>
          <a href="gitconfig.php" class="list-group-item"> Configuration files</a>
          <a href="gitconfig.html" class="list-group-item disabled"> Repositories</a>
          <a href="gitconfig.html" class="list-group-item disabled"> Cloning</a>
          <a href="gitconfig.html" class="list-group-item disabled"> Branch</a>
          <a href="gitconfig.html" class="list-group-item disabled"> Rollback</a>
          <a href="gitconfig.html" class="list-group-item disabled"> Commands</a>
          <a href="gitconfig.html" class="list-group-item disabled"> Bitbucket</a>
          <a href="gitconfig.html" class="list-group-item disabled"> GitHub</a>
      </div>
    </div>
    <!--- end content --->
  </div>
</div>
<!--- end center column --->

<?php
include 'git-right-column.inc';
?>

<?php
include 'footer.inc';
 ?>
