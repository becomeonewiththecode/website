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

    <!--- begin content --->
    <div class="page-header">
      <h2> About</h2>
    </div>

    <div class="jumbotron">
      <p>
        System administration has changed to the point where visting a datacenter or physically logging into a system via a console to correct a problem is no longer needed. It's at a point where code can be used to fix, mitigate errors and problems without requiring physical intervention.
      </p>

      <p>
        Code can now build, deploy, automate, discover, monitor and recover services. System administration is now about using code to provide highly available, robust, resilent platforms and applications that can be deployed and maintained with greater ease.

        This site will shine light on how code can accomplish those goals.
      </p>
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
