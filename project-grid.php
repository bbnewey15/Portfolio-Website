
<div class="row column">
<hr>
</div>
<div class="row column">
<p class="lead">Projects</p>
</div>


<!--<div class="row small-up-1 medium-up-2 large-up-2">
  <div class="column">
  <div class="callout">
  <p>AWOL</p>
  <p><img src="https://placehold.it/400x370&text=Pegasi B" ></p>
  <p class="lead">Play AWOL - A simple game created from scratch!  </p>
  <p class="subheader">Build using Box2D engine and C++ </p>
  </div>
  </div>
  <div class="column">
  <div class="callout">
  <p>Pegasi B</p>
  <p><img src="https://placehold.it/400x370&text=Pegasi B" ></p>
  <p class="lead">Project 2</p>
  <p class="subheader">Description</p>
  </div>
  </div>


</div>-->
<html ng-app="phonecatApp">
<head>


  <script src="app.js"></script>
</head>
<body ng-controller="PhoneListController">

  <ul>
    <li ng-repeat="phone in phones">
      <span>{{phone.name}}</span>
      <p>{{phone.snippet}}</p>
    </li>
  </ul>

</body>
</html>



</div>
