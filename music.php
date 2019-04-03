

<!doctype html>
<html class="no-js" lang="en">
<head>
  <?php require_once "header.php" ?>
</head>
<body>




<!-- For small screens -->


<!-- For Medium / Large -->
<div id="backgroundPage"
    data-parallax="scroll" data-image-src="assets/black-coffee.jpg">
  <div id="pageOverlay">
    <?php require_once "nav.php" ?>
  <div class="row">
    <div id="introduction-overlay" class="large-12 columns">
        <h2>Music by Ben Newey</h2>
    </div>
  </div>
</div>
</div>


<?php  //require_once "project-grid.php" ?>
<br/>
<br/>
<br/>
<?php  require_once "music-player.php" ?>



<div id="footer" >
<?php require_once "footer.php" ?>
</div>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/parallax.js-1.5.0/parallax.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>
