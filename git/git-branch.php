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
include 'navbar.inc'
?>

<?php
include 'git-left.inc';
?>

<!--- begin center column Place information here--->
<div class="col-md-8">
  <div class="container-fluid">
    <!--- begin content --->

    <h1> GIT Branch</h3>
    <div class="page-header"></div>
      <p>
        Branching, controls code modification, merging and keeping the master branch clean. Creating and using different branch's allows you to work on patch's to fix's safely without modifying or corrupting the main branch.
      </p>

    <h4>Create a new branch</h4>
    <p>git branch branch-name</p>
    <pre>
      [oss:~/repos/web/becomeonewiththecode.com] dev(+8/-22)* ± git branch somo
    </pre>
    <p>
      The output is displayed below.
    </p>
    <pre>
      [oss:~/becomeonewiththecode.com] dev(+8/-22)* ± git branch
      master                47ad3dd Reverted addition to right column
      <b>somo                  f128c45 Updated files to include contributor.txt,</b>
    </pre>
    <h4>Creating a new branch will duplicate HEAD into the new branch.</h4>

    <div class="page-header"></div>
    <h4>Create a new branch using git checkout</h4>
    Creating a new branch can be done by using checkout -b branchname.
    Example: you have modify some files and want to checkout the files to a new branch but without modifying the current branch.
    <Pre>
      oss:~/becomeonewiththecode.com] dev(+8/-22)* ± git checkout -b new-branch
      M	git/git-branch.php
      M	git/use-git.php
    </Pre>
    the result will create and checkout the branch "new-branch" duplicating the branch you are in with the modified files and all existing files.
    <pre>
      [oss:~/becomeonewiththecode.com] new-branch(+38/-25)* ± git st
      ## new-branch
      M git/git-branch.php
      M git/use-git.php
    </pre>

    <h4>Create a new branch from a commit log</h4>
    First find out the commit point using the following command.
    <pre>
      git log
    </pre>

    <p>
      This will display your commit log.
    </p>
    <pre class="pre-scrollable">
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
include 'git-right-column.inc';
?>

<?php
include 'footer.inc';
 ?>
