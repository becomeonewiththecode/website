 <!--- begin header --->
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content='use git branch to create a simple way to organize code.'>
     <meta name="keywords" content="GIT, continous integration, continuos delivery, change managment ">
     <title>Git branch</title>
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
include 'header.inc';
?>

<?php
include 'left.inc';
?>

<!--- begin center column Place information here--->
<div class="col-md-8">
  <div class="container-fluid">
    <!--- begin content --->

    <h1> GIT Branch</h3>
    <pre class="pre-scrollable">
    Create a new branch
    git branch branch-name
    - git branch production
    If you are creating a new branch it will copy files from head.

    Checkout commits from a branch into a new branch you create using checkout
    First find out the commit point you want to use.
    - git-log or git log --oneline

    Author: Clarence Mills <cmills@fusion.acme.com>
    Date: Fri Nov 13 00:27:01 2015 -0500

        November 13

    commit 0a8dd73ebf26df47b836388dffe39f61dbd7eb82
    Author: Clarence Mills <cmills@fusion.acme.com>
    Date: Fri Nov 13 00:21:31 2015 -0500

        November 13

    commit f13a37d2c3acf0c23a6651cb7c7c47315eb6a00a
    Author: Clarence Mills <cmills@fusion.acme.com>
    Date: Wed Oct 21 11:37:15 2015 -0400

        Added images and stylesheets for the new index page.

    commit 654898f53c71aa4e82d633426b6a2027b0078b59
    Author: Clarence Mills <cmills@fusion.acme.com>
    Date: Sun Oct 18 22:27:24 2015 -040

    Commit
    </pre>


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
