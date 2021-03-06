<!--- begin header --->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content='Use GIT to apply version control your code, softare and documents.'>
    <meta name="keywords" content="GIT, ansible, docker, terraform, consul, vagrant, config management, continous integration, continuos delivery, change managment ">
    <title>Use GIT</title>
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
include 'git-header.inc';
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

    <!-- Begin Content -->
    <div class="page-header">
      <h1>Using GIT</h1>
    </div>

  <div>

      <h3>GIT  Setup</h3>

    Set username
    <pre>
    git config --global user.name “Clarence Mills”
  </pre>

    Set your email address
    <pre>
      git config --global user.email “cmills@acme.com”
    </pre>

    Change your commit editor
    <pre>
      git config --global core.editor “vi”
    </pre>

    Check your config settings
    <pre>
      git config --list
    </pre>
  </div>

    <h3>Rollback</h3>

    In order to roll back to another commit time frame, you need to find the commit time period.

    <code>git log --online </code>(git version 2.5.0 )

    <pre class="pre-scrollable">
    oss@cmills-Kudu-Pro:~/repos/scripts$ git log --oneline
    14da1c5 add - checkout master branch after creating archive
    a2f88ac Added - clean destination directory and fixed logic
    3118eb8 Updated logic
    85db346 rewote logic for distinguishinhg between base onad top directory
    7364ec1 Updated create option
    2ef4c59 Updated
    b493fb6 Added another option <create> archive
    421efdb Corrected second option pass to the script
    c688dda Add option to designate the repository source
    ab2f516 Merged changes
    20a790e Created new script to check web directory if files have changed
    c31ce79 Add case statement and options to check md5 has not changed
    fb4196b Corrected awk spelling error
    0f490c6 aad option to md5sum
    559fa59 Add new script for checking if directory change
    94c8ff3 Updated publish.sh
    a7677f0 Aded basename to usage
    77a1bcd Added exit option after usage statement
    43fcae6 Changed usage option
    d835135 Corrected server variable
    eae7d20 Changed name to user variable
    29099a0 Added the option to change anem and server
    75d5ca3 Add name and license information
    c549f4e Added ssh option to list remote
    227d9e0 Added another option to usage
    2beb1cc Add third option - listing remote backup directory
    289598f Added case statement to both scripts to accept different options
    39851a2 New script to Backup to rsync.net using rsync
    675b1ef Tract publish.html - used to archive repositories which can then update web site directory
    </pre>

    use the git reset command and rollback to the commit e.g. (a2f88c)
    <pre>
    oss@cmills-Kudu-Pro:~/repos/scripts$ git reset --hard a2f88ac
    HEAD is now at a2f88ac Added - clean destination directory and fixed logic
    </pre>


    <h3>Clone from a remote location</h3>
    <pre>
    git clone ssh://srv2.acme.com:1001/home/cmills/work_dir/acme.com .
    The above command will fetch the entire repository to your current location.
    </pre>

    <h3>Show an ascii diagram of how branch’s are connected</h3>
    <pre>
    git log --all --graph --decorate --oneline --simplify-by-decoration
    </pre>

    <h3>Ignoring files</h3>
    <pre>
    Use the .gitignore file, If files are currently being tracked you will need to do the following.
    </pre>

    <ul>
    <li>Remove files from being tracked.
    <li>Create .gitignore file if you have already done so.
    <li>Add the directory of files that you don’t want tracked.
    <li>Commit the changes.
    </ul>

    <pre>
    eg: removing directory .project from tracking.
    git rm --cache filename or directory
    oss@cmills-Kudu-Pro:~/work/office.acme.com$ git rm --cache .project
    rm '.project'
    </pre>

    <h3>results after files been deleted</h3>
    <pre>
    oss@cmills-Kudu-Pro:~/work/office.acme.com$ git status
    On branch dev
    Your branch is up-to-date with 'origin/dev'.
    Changes to be committed:
      (use "git reset HEAD <file>..." to unstage)

      deleted:    .project
    </pre>


    <h3>example .gitignore file</h3>
    <pre>
    oss@cmills-Kudu-Pro:~/work/office.acme.com$ cat .gitignore
    \.buildpath
    \.project
    \.settings
    *.gitignore
    </pre>

    <b>commit your changes, this will update your repository, going forward the contents within the .gitignore file will not be tracked</b>
    <pre>
    oss@cmills-Kudu-Pro:~/work/office.acme.com$ git commit -a -m "Removed eclipse .project file from tracking"
    [dev c50370f] Removed eclipse .project file from tracking
     1 file changed, 28 deletions(-)
     delete mode 100644 .project
    </pre>

    Push up to your master branch, The .gitignore file is only being used locally and will not be pushed up to the master branch (origin) because it’s not being tracked.

    <h3>Overwrite remote (master branch)</h3>

    If you try to push remotely and receive the following error

    <pre class="pre-scrollable">
    oss@cmills-Kudu-Pro:~/repos/ansible$ git commit -am "Add ansible howto doc and updated hosts file"
    [dev 461c80c] Add ansible howto doc and updated hosts file
     1 file changed, 2 insertions(+)
    oss@cmills-Kudu-Pro:~/repos/ansible$ git push origin dev
    Counting objects: 6, done.
    Delta compression using up to 8 threads.
    Compressing objects: 100% (6/6), done.
    Writing objects: 100% (6/6), 753 bytes | 0 bytes/s, done.
    Total 6 (delta 1), reused 0 (delta 0)
    remote: error: refusing to update checked out branch: refs/heads/dev
    remote: error: By default, updating the current branch in a non-bare repository
    remote: error: is denied, because it will make the index and work tree inconsistent
    remote: error: with what you pushed, and will require 'git reset --hard' to match
    remote: error: the work tree to HEAD.
    remote: error:
    remote: error: You can set 'receive.denyCurrentBranch' configuration variable to
    remote: error: 'ignore' or 'warn' in the remote repository to allow pushing into
    remote: error: its current branch; however, this is not recommended unless you
    remote: error: arranged to update its work tree to-=l what you pushed in some
    remote: error: other way.
    remoteerror:
    remote: error: To squelch this message and still keep the default behaviour, set
    remote: error: 'receive.denyCurrentBranch' configuration variable to 'refuse'.
    To ssh://cmills@srv1.acme.com:1001/opt/git/ansible/
     ! [remote rejected] dev -> dev (branch is currently checked out)
    error: failed to push some refs to 'ssh://cmills@srv1.acme.com:1001/opt/git/ansible/'
    </pre>

    <code>
    The reason for the push failure, is that you have the same brach checked out on the master branch. To get around this if you are certain you won't overwrite any changes you have done on
    The remote side is

    git config receive.denyCurrentBranch warn
    </code>

    Check to see if the command is set

    <pre>
    git config receive.denyCurrentBranch

    [cmills@testsrv office.acme.com]$ git config receive.denyCurrentBranch
    warn
    </pre>

    <h3>Show what's changed</h3>

    <p>
    <code>git ls-files -dmo --exclude-standard</code>
    </p>

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
