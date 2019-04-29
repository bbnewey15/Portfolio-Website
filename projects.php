

<!doctype html>
<html class="no-js" lang="en">
<head>
  <?php require_once "header.php" ?>
</head>

<body ng-app="projectGrid">




<!-- For small screens -->


<!-- For Medium / Large -->
<div id="backgroundPage"
    data-parallax="scroll" data-image-src="assets/black-coffee.jpg">
  <div id="pageOverlay">
    <?php require_once "nav.php" ?>
  <div class="row">
    <div id="introduction-overlay" class="large-12 columns">
        <h2>Projects by Ben Newey</h2>
    </div>
  </div>
</div>
</div>

<div class="row">
  <ui-view>
    <?php  require_once "project-grid.php" ?>
  </ui-view>
</div>
<br/>
<br/>
<br/>


<div id="footer" >
<?php require_once "footer.php" ?>
</div>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/parallax.js-1.5.0/parallax.js"></script>
<script src="js/angular-1.7.8/angular.js"></script>
<script src="https://unpkg.com/@uirouter/angularjs/release/angular-ui-router.js"></script>
<script src="js/app.js"></script>
<script src="js/project-grid.js"></script>

</body>
</html>
