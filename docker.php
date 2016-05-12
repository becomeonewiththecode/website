<?php
set_include_path('includes:../includes');
 ?>

 <?php
 include 'navbar.inc'
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

    <!--- being content --->
    <div class="page-header">
            <h2> Docker</h2>
          </div>

          <div class="jumbotron" class="">
            <p class="text-muted">
              Containers for applications, minimalist server
            </p>
          </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><span class="glyphicon glyphicon-cog"></span> Docker</h3>
          </div>
          <div class="panel-body">
              <a href="gitconfig.php" class="list-group-item disabled"> Dockerfile</a>
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
