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

    <!-- Begin Content -->
    <div class="page-header">
      <h2>GIT Configuration file</h2>
      <p>
        Git configuration file is used for creating aliases and information about the user and the project. The configration file below shows Alias and options that
        can be used.
      </p>
      <ul class="pager">
        <li class="previous"><a href="use-git.php">Using GIT</a></li>
        <li class="next disabled"><a href="gitconfig.php">Next</a></li>
      </ul>
    </div>

    <pre>
    [user]
      email = user@domainname.com
      name = Your Name
    </pre>

    <pre>
    [push]
      default = simple
    </pre>

    <pre>
    [core]
    editor = vi
    </pre>

    <pre>
      [alias]
        # Show short summary,branch,untracked files and changed content within the files.
        st = status -sbu -v
    </pre>

    <pre>
      # Show branch name
      brname = !git branch | grep "^*" | awk '{print $2 }'
    </pre>

    <pre>
      # Show all branches
      br = branch -av
    </pre>

    <pre>
      # delete branch
      brdel = branch -D
    </pre>

    <pre>
      # Show remote repositories
      repo = remote -v
    </pre>

    <pre>
      standup = !git log --reverse --branches --since=$(if [[ "Mon" == "$(date +%a)" ]]; then echo "last friday"; else echo "yesterday"; fi) --author=$(git config --get user.email) --format=format:'%C(cyan) %ad %C(yellow)%h %Creset %s %Cgreen%d' --date=local"
    </pre>

    <pre>
      # Show the current branch name (usefull for shell prompts)
      brname = !git branch | grep "^*" | awk '{ print $2 }
    </pre>
    <pre>
      # Show the root of the repository
      top = rev-parse --show-toplevel
    </pre>

    <pre>
      churn = !git log --all -M -C --name-only --format='format:' "$@" | sort | grep -v '^$' | uniq -c | sort | awk 'BEGIN {print "count,file"} {print $1 "," $2}'
    </pre>

    <pre>

       # remove a remote repository
       rmrepo = remote remove
    </pre>

    <ul class="pager">
      <li class="previous"><a href="use-git.php">Using GIT</a></li>
      <li class="next disabled"><a href="gitconfig.php">Next</a></li>
    </ul>

    <!-- End Content -->

  </div>
</div>
<!--- end center column --->

<?php
include 'git-right-column.inc';
?>

<?php
include 'footer.inc';
 ?>
