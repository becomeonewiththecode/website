<!--- begin header --->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content='use git branch to create a simple way to organize code.'>
    <meta name="keywords" content="GIT, continous integration, continuos delivery, change managment ">
    <title>Git commit</title>
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

      <h1> GIT Commit</h1>
    <div class="page-header"></div>
    <h4>
      Commiting files to the git repository is done right after you have added the file(s) into what is called the holding area.
    </h4>
    <pre>
      [oss:~/repos/web/becomeonewiththecode.com] dev(+71/-65)* ± git add git/git-publish.php
    </pre>
    <h4>
      The common method for committing a file or files is the <code>git commit</code> command. Once you have entered typed and entered the command. Your systems default editor will open allowing you to enter any commments.
    </h4>
    <pre>

      # Please enter the commit message for your changes. Lines starting
      # with '#' will be ignored, and an empty message aborts the commit.
      # On branch dev
      # Changes to be committed:
      #       modified:   git/git-branch.php
      #
      # Changes not staged for commit:
      #       modified:   git/git-commit.php
      #       modified:   git/git-config.php
      #       modified:   git/git-left.inc
      #       modified:   git/git-right-column.inc
      #       modified:   git/use-git.php
      #

    </pre>
    <h4>
      Alternative method is using <code>git commit -m</code> option which allows you to enter your comments directly from the command line enclosed in quotes.
    </h4>

    <pre>
      [oss:~/repos/web/becomeonewiththecode.com] dev(+71/-65) ± git commit -m "New file git-publish.php"
      [dev 96f1b3c] New file git-publish.php
      1 file changed, 64 insertions(+)
      create mode 100644 git/git-publish.php
      [oss:~/repos/web/becomeonewiththecode.com] dev(+71/-65) ±
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
