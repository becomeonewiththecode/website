<!--- begin header --->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content='Use git to archive or publish your repository, code or project.'>
    <meta name="keywords" content="GIT, change managment, git publish, git archive ">
    <title>Git archive</title>
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
   <h1>GIT archive or publish your repository.</h1>
   <div class="well">
     <p>GIT provides a method that allow you to publish your the contents of you repository. The method and command is <code>git archive</code> </p>
   </div>

   <h3>Publish current checked out branch</h3>
   <pre>
   sudo git archive --format=tar --output /tmp/office.tar HEAD
   </pre>

   <h4>git archive, options listed below.</h4>
   <pre>
   sudo git archive --format=zip -o /home/cmills/acme.zip HEAD
   sudo git archive --format=tar -o /home/cmills/acme.tar HEAD
   sudo git archive --format=tgz -o /home/cmills/acme.tgz HEAD
   </pre>
   <h4>This will create a zipped archive file called either acme.zip,acme.tar,acme.tgz within the directory <code>/home/cmills/ </code></h4>

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
