<!--- begin header --->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content='Journey into using code and open source tools to create change'>
    <meta name="keywords" content="GIT, ansible, docker, terraform, consul, vagrant, config management, continous integration, continuos delivery, change managment ">
    <title>AWS Terraform file</title>
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
include 'terraform-left.inc';
?>

<!--- begin center column Place information here--->
<div class="col-md-8">
 <div class="container-fluid">
   <!--- begin content --->

   <div class="page-header">
     <h1>AWS Terraform File</h1>
   </div>

   <p>
     Files that end in .tf files are files that when you execute terraform commands will be read and executed.
     Example terraform file named aws.tf.
   </p>

   <p>
     When using Cloud platforms and using their API for example AWS, it's a good idea not to include your credentials within your terraform file. In the case of AWS terraform is configured to read variables from ~/.aws/credentials file if it exist, if not you can create a file with the current directory with your credential described within.
   </p>

   <pre>
     # Terraform is configured to read variables
     # from ~/.aws/credentials file if it exist, if not you can create.
     # a file with the current directory with your credential described within.

     # these are your credentials for connecting to AWS.
     provider "aws" {
       region = "${var.region}"
             profile = "${var.profile}"
     }

     resource "aws_instance" "webserver" {
       ami = "ami-fce3c696"
       instance_type = "t2.micro"
     }
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
