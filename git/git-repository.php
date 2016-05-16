<!--- begin header --->
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content='Git repository'>
   <meta name="keywords" content="GIT, ansible, docker, terraform, consul, vagrant, config management, continous integration, continuos delivery, change managment ">
   <title>Git Repository</title>
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
    <!-- begin content --->

    <h1>GIT Repository</h1>
    <div class="header"></div>

    <h3>Add repositories</h3>
    <pre>git remote add origin (whatever name points to the repositories) ssh://git.acme.com:1001/home/cmils/work_dir/acme.com</pre>

    <i>If you have moved the location of the repository on the master GIT server, you will need to execute the following command before doing another push or pull:</i>

    <pre>git push --set-upstream origin dev</pre>
    <p>The above command tells  GIT to start tracking changes to the new remoete "origin"</p>

    <h3>List remote repositories</h3>
    <pre>
    git remote -v
    cmills@testsrv acme.com]$ git remote -v
    origin  ssh://srv2.acme.com:1001/home/cmills/work_dir/acme.com (fetch)
    origin  ssh://srv2.acme.com:1001/home/cmills/work_dir/acme.com (push)
    </pre>

    <h3>Remove remote repository</h3>
    <pre>
    git remote remove origin
    </pre>

    <h3>removing files from the repository</h3>
    <pre>
    git rm *

    [cmills@fusion acme.com]$ git rm *
    rm 'checkrbl.sh'
    rm 'create_pflogreport.sh'
    rm 'create_postgreyport.sh'
    rm 'display_cert.sh'
    rm 'display_pkcs12cert.sh'
    rm 'dnspropogationcheck.sh'
    rm 'dnsreport.sh'
    rm 'domain_reports.sh'
    rm 'get_ip_info.sh'
    rm 'ipreport.sh'
    rm 'mailcert_check.sh'
    rm 'nettools.sh'
    rm 'rblcheck.pl'
    rm 'rblcheck_list.pl'
    rm 'ssl-cert-check'
    rm 'webreport.sh'
    </pre>
    <p>Adding --cache will remove the files from the repository but keep the files in the local directory, git removes it from tracking.</p>

    <h3>Cloning repositories locally </h3>

    <pre>
    git clone -l local-repository clone-location
    git clone -l /var/ww/html/acme.com test
    Git clone from remote server using ssh, 1001 is the port to connect on.

    [cmills@testsrv workdir]$ git clone ssh://cmills@srv2.acme.com:1001/home/cmills/web_dir/acme.com
    Cloning into 'acme.com'...
    cmills@srv2.acme.com's password:
    remote: Counting objects: 201, done.
    remote: Compressing objects: 100% (199/199), done.
    remote: Total 201 (delta 46), reused 0 (delta 0)
    Receiving objects: 100% (201/201), 906.00 KiB | 487.00 KiB/s, done.
    Resolving deltas: 100% (46/46), done.
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
