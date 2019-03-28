

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



<div id="backgroundMain" class="show-for-large, show-for-medium">
  <div id="overlay">
    <?php require_once "nav.php" ?>
  <div class="row">
    <div id="introduction-overlay" class="large-12 columns">
        <?php require_once "introduction.php" ?>
    </div>
  </div>
</div>
</div>





<br>


<?php require_once "project-grid.php" ?>

<?php require_once "footer.php" ?>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>
