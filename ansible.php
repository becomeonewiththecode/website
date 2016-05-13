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
include 'left.inc';
?>

<!--- begin center column Place information here--->
<div class="col-md-8">
  <div class="container-fluid">
    <!--- begin content --->
    <div class="page-header">
            <h2> Ansible</h2>
          </div>

          <div class="jumbotron" class="">
            <p class="text-muted">
              Ansible is a provisionging and configuration management tool to automate infrastucture, app deployment and configuration updates and upgrades with ease.
            </p>
          </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><span class="glyphicon glyphicon-cog"></span> Get started with Ansible</h3>
          </div>
          <div class="panel-body">
              <a href="#" class="list-group-item disabled"> Configuration files</a>
              <a href="#" class="list-group-item disabled"> Command line</a>
              <a href="#" class="list-group-item disabled"> Playbooks</a>
              <a href="#" class="list-group-item disabled"> Roles</a>
          </div>
        </div>

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
