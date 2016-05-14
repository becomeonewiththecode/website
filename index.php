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

    <!-- begin content -->
      <div class="jumbotron">
        <div class="row">
          <div class="col-xs-2">
            <span class="fa fa-code fa-5x"></span>
          </div>
          <div class="col-xs-10">
            <h4 class="list-group-item-heading">Code:</h4>
            <p>
            The command line is where it starts and ends, use code to create change. A journey into understanding how to use code to create change whether it's a PAAS or IAAS environments using various open source software.
            </p>
          </div>
        </div>
      </div>

      <div class="list-group">
        <a href="#" class="list-group-item active">Infrastructure as CODE or Software defined network provides the following</a>
        <button type="button" class="list-group-item">Robust Systems</button>
        <button type="button" class="list-group-item">Monitoring</button>
        <button type="button" class="list-group-item">Service Discovery</button>
        <button type="button" class="list-group-item">Orchestration</button>
      </div>

      <div class="list-group">
        <a href="#" class="list-group-item active">Software defined Network</a>
        <button type="button" class="list-group-item">Codify</button>
      </div>
    <!--- end content--->

  </div>
</div>
<!--- end center column --->

<?php
include 'right.inc';
?>

<?php
include 'footer.inc';
 ?>
