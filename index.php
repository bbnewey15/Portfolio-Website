

<!doctype html>
<html class="no-js" lang="en">
<head>
  <?php require_once "header.php" ?>
</head>
<body>

<div class="title-bar" data-responsive-toggle="realEstateMenu" data-hide-for="small">
<button class="menu-icon" type="button" data-toggle></button>
<div class="title-bar-title">Menu</div>
</div>

<!-- For small screens -->


<!-- For Medium / Large -->
<div id="backgroundMain" data-interchange="[assets/black-coffee-sm.jpg, small], [assets/black-coffee.jpg, medium], [assets/black-coffee.jpg, large]">
  <div id="overlay">
    <?php require_once "nav.php" ?>
  <div class="row">
    <div id="introduction-overlay" class="large-12 columns">
        <?php require_once "introduction.php" ?>
    </div>
  </div>
</div>
</div>










<?php //require_once "project-grid.php" ?>

<div id="footer" >
<?php require_once "footer.php" ?>
</div>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>
