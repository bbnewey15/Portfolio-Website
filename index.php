

<!doctype html>
<html class="no-js" lang="en">
<head>
  <?php require_once "header.php" ?>
</head>
<body>




<!-- For small screens -->


<!-- For Medium / Large -->
<div id="backgroundMain"
    data-parallax="scroll" data-image-src="assets/black-coffee.jpg">
  <div id="overlay">
    <?php require_once "nav.php" ?>
  <div class="row">
    <div id="introduction-overlay" class="small-12 medium-12 large-12 columns">
        <?php require_once "introduction.php" ?>
    </div>
  </div>
</div>
</div>



<div id="mainContent">
  <div class="row">
    <div class="columns"><h2> Welcome to my personal website! </h2></div>

  </div>
  <div class="row">
    <div class="columns" style="text-align:center;"><p> This website is a space for me to be able to share all of my creativity in one place. <br/><br/><br/><br/><br/>From an early age, I have always had the following two passions:  </p></div>

  </div>
  <br/>


<div class="row small-up-1 medium-up-2 large-up-2">
  <div class="columns">
    <div class="callout">
      <div class="row">
        <h3 style="text-align: center">Projects</h3>
    <p>It is important to me to stay relavant with technologies as they become popular. That is why I take personal time to work on projects using these new technologies. </p>
    </div>
    </div>
  </div>
  <div class="columns">
    <div class="callout">
      <div class="row">
        <h3 style="text-align: center">Music</h3>
    <p>One of my main passions in life is music! I enjoy everything about it: listening, dissecting, and creating. Since I first learned how to play guitar, I have spent my time recording and mixing.</p>
  </div>
  </div>
  </div>
</div>
</div>

<div id="footer" >
<?php require_once "footer.php" ?>
</div>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/parallax.js-1.5.0/parallax.js"></script>
<script src="js/angular-1.7.8/angular.js"></script>
<script src="https://unpkg.com/@uirouter/angularjs/release/angular-ui-router.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular-route.js"></script>
<script src="js/app.js"></script>

</body>
</html>
