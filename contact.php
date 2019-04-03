

<!doctype html>
<html class="no-js" lang="en">
<head>
  <?php require_once "header.php" ?>
</head>
<body>



<!-- IMAGE / INTRODUCTION SECTION -->
<!-- For small screens -->


<!-- For Medium / Large -->
<div id="backgroundMain"
    data-parallax="scroll" data-image-src="assets/black-coffee.jpg">
  <div id="overlay">
    <?php require_once "nav.php" ?>
  <div class="row">
    <div id="introduction-overlay" class="large-12 columns">
        <?php require_once "introduction.php" ?>
    </div>
  </div>
</div>
</div>
<!-- END OF IMAGE INTRO SECTION -->


<br/>
<br/>
<br/>


<!-- CONTENT SECTION -- >

<?php //require_once "project-grid.php" ?>

<!-- END OF CONTENT SECTION -->


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
