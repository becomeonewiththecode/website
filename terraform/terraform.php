<!--- begin header --->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content='Journey into using code and open source tools to create change'>
    <meta name="keywords" content="GIT, ansible, docker, terraform, consul, vagrant, config management, continous integration, continuos delivery, change managment ">
    <title>Terraform</title>
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
     <h1>Terraform</h1>
   </div>

   <div class="page-header">
     <h2>Install terraform</h2>
   </div>
   - download terraform
   - mv terrafor-download to /usr/loca/bin/terraform/
   - add the path to your .profile
       export PATH=$PATH:/usr/loca/terraform
   - create a directory and that into a git repository
   - create an amazon web service user
     - IAM - users, create new user
     - download the keys,
     - click on the user - click on permission and select AmazonEC2FullAccess and attach the policy.

     apply your terraform
     Check your terraform file to see what will happen.

   <p>
     Directory State prior to  running any rerraform commands
   </p>

   <pre>
     [oss:~/repos/terraform] 31s $ ls -la
     total 16
     drwxrwxr-x  3 oss oss 4096 Jun 17 15:39 .
     drwxrwxr-x 19 oss oss 4096 May 22 12:43 ..
     -rw-rw-r--  1 oss oss  227 Jun 17 15:39 aws.tf
     drwxrwxr-x  7 oss oss 4096 Jun 17 14:54 .git
   </pre>

   <div class="page-header">
     <h2>Terraform plan</h2>
   </div>

   <p>
     Terraform plan will show what will be created without actually creating
   </p>
   <pre>
     [oss:~/repos/terraform] $ terraform plan
   Refreshing Terraform state prior to plan...


   The Terraform execution plan has been generated and is shown below.
   Resources are shown in alphabetical order for quick scanning. Green resources
   will be created (or destroyed and then created if an existing resource
   exists), yellow resources are being changed in-place, and red resources
   will be destroyed.

   Note: You didn't specify an "-out" parameter to save this plan, so when
   "apply" is called, Terraform can't guarantee this is what will execute.

     + aws_instance.webserver
         ami:                      "" => "ami-fce3c696"
         availability_zone:        "" => "<computed>"
         ebs_block_device.#:       "" => "<computed>"
         ephemeral_block_device.#: "" => "<computed>"
         instance_state:           "" => "<computed>"
         instance_type:            "" => "t2.micro"
         key_name:                 "" => "<computed>"
         placement_group:          "" => "<computed>"
         private_dns:              "" => "<computed>"
         private_ip:               "" => "<computed>"
         public_dns:               "" => "<computed>"
         public_ip:                "" => "<computed>"
         root_block_device.#:      "" => "<computed>"
         security_groups.#:        "" => "<computed>"
         source_dest_check:        "" => "true"
         subnet_id:                "" => "<computed>"
         tenancy:                  "" => "<computed>"
         vpc_security_group_ids.#: "" => "<computed>"


     Plan: 1 to add, 0 to change, 0 to destroy.

     Apply your changes:

   </pre>
   <div class="page-header">
     <h2>Terraform Apply</h2>
   </div>
   <p>
     Execute the contents of the terraform file
   </p>
   <pre>
     [oss:~/repos/terraform] 2s $ terraform apply
   aws_instance.webserver: Creating...
     ami:                      "" => "ami-fce3c696"
     availability_zone:        "" => "<computed>"
     ebs_block_device.#:       "" => "<computed>"
     ephemeral_block_device.#: "" => "<computed>"
     instance_state:           "" => "<computed>"
     instance_type:            "" => "t2.micro"
     key_name:                 "" => "<computed>"
     placement_group:          "" => "<computed>"
     private_dns:              "" => "<computed>"
     private_ip:               "" => "<computed>"
     public_dns:               "" => "<computed>"
     public_ip:                "" => "<computed>"
     root_block_device.#:      "" => "<computed>"
     security_groups.#:        "" => "<computed>"
     source_dest_check:        "" => "true"
     subnet_id:                "" => "<computed>"
     tenancy:                  "" => "<computed>"
     vpc_security_group_ids.#: "" => "<computed>"

   aws_instance.webserver: Still creating... (10s elapsed)
   aws_instance.webserver: Creation complete

   Apply complete! Resources: 1 added, 0 changed, 0 destroyed.

   The state of your infrastructure has been saved to the path
   below. This state is required to modify and destroy your
   infrastructure, so keep it safe. To inspect the complete state
   use the `terraform show` command.

   State path: terraform.tfstate
   </pre>

   <div class="page-header">
     <h2>Terraform TFSTATE</h2>
   </div>

      State of terraform creation.

   <pre>
     [oss:~/repos/terraform] 17s $ ls -la
     total 24
     drwxrwxr-x  3 oss oss 4096 Jun 17 15:44 .
     drwxrwxr-x 19 oss oss 4096 May 22 12:43 ..
     -rw-rw-r--  1 oss oss  227 Jun 17 15:39 aws.tf
     drwxrwxr-x  7 oss oss 4096 Jun 17 14:54 .git
     -rw-rw-r--  1 oss oss 2269 Jun 17 15:44 terraform.tfstate
     -rw-rw-r--  1 oss oss  197 Jun 17 15:44 terraform.tfstate.backup
   </pre>

   <div class="page-header">
     <h2>Destroy your AWS instance</h2>
   </div>
   <p>
      Terraform destroy to destroy what was previously created using the terraform apply command.
   </p>

   <pre>
     [oss:~/repos/terraform] 1 $ terraform destroy
     Do you really want to destroy?
       Terraform will delete all your managed infrastructure.
       There is no undo. Only 'yes' will be accepted to confirm.

       Enter a value: yes

     aws_instance.webserver: Refreshing state... (ID: i-ca411e50)
     aws_instance.webserver: Destroying...
     aws_instance.webserver: Still destroying... (10s elapsed)
     aws_instance.webserver: Still destroying... (20s elapsed)
     aws_instance.webserver: Still destroying... (30s elapsed)
     aws_instance.webserver: Destruction complete

     Apply complete! Resources: 0 added, 0 changed, 1 destroyed.
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
