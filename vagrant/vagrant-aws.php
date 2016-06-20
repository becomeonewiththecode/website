<!--- begin header --->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content='Vagrant file illustrating Amazon web service options'>
    <meta name="keywords" content="vagrant, aws, spin up a web server">
    <title>Vagrant AWS file</title>
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
include 'vagrant-left.inc';
?>

<!--- begin center column Place information here--->
<div class="col-md-8">
 <div class="container-fluid">
   <!--- begin content --->

   <div class="page-header">
     <h1>AWS vagrantfile</h1>
   </div>

   <b>Vagrant AWS File</b>
   <pre>
     Vagrant.configure(2) do |config|
       config.vm.box = "dummy"
       # Provider
       config.vm.provider :aws do | aws, override|
       aws.access_key_id = "ACCESS_KEY"
       aws.secret_access_key = "SECRET ACCESS KEY"
       aws.keypair_name = "cmills_key.pem"
       aws.region = "us-east-1"
       aws.instance_type = "t2.micro"
       aws.ami = "ami-8fcee4e5"
       #aws.security_groups = ["api_group"]
       override.ssh.username = "ubuntu"
       #override.ssh.private_key_path = "/home/oss/.ssh/id_rsa"
       end
     end
   </pre>

   Spin up the instances
     vagrant up --provider=aws
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
