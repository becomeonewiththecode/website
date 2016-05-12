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

      <div class="page-header">
        <h2> GIT</h2>
      </div>

      <div class="jumbotron" class="">
        <p class="text-muted">
          <icon class="fa fa-code-fork fa-4x fa-pull-left fa-fw" ></icon>Version control system that tracks and stores changes to files within a project allowing for easy searching and retrieval.
        </p>
      </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><span class="glyphicon glyphicon-cog"></span> Get started with GIT</h3>
      </div>
      <div class="panel-body">
          <a href="use-git.php" class="list-group-item"> Using GIT </a>
          <a href="gitconfig.php" class="list-group-item"> Configuration files</a>
          <a href="gitconfig.html" class="list-group-item disabled"> Repositories</a>
          <a href="gitconfig.html" class="list-group-item disabled"> Cloning</a>
          <a href="gitconfig.html" class="list-group-item disabled"> Branch</a>
          <a href="gitconfig.html" class="list-group-item disabled"> Rollback</a>
          <a href="gitconfig.html" class="list-group-item disabled"> Commands</a>
          <a href="gitconfig.html" class="list-group-item disabled"> Bitbucket</a>
          <a href="gitconfig.html" class="list-group-item disabled"> GitHub</a>
      </div>
    </div>

  </div>
</div>
<!--- end center column --->

<?php
include 'right.inc';
?>

<?php
include 'footer.inc';
 ?>
