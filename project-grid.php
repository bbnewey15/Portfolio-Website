<div class="project-grid" ng-controller="ProjectListController">
<div class="row column">
<hr>
</div>
<div class="row column">
<p class="lead">Projects</p>
</div>



<head>



</head>

<!-- recently changed body to div -->


  <a class="nav-link" ui-sref="main" ui-sref-active="active">Main</a>
    <a class="nav-link" ui-sref="single" ui-sref-active="active">Single</a>


  <ul class="wrapper">
    <li  ng-repeat="project in projects">
      <div class="box callout">
        <p>{{project.name}}</p>
        <div class="box-img"><img src="https://placehold.it/400x370&text=Pegasi B" ></div>
        <div class="box-text">
          <p class="lead">{{project.headline}} </p>
          <p class="subheader">{{project.description}}</p>
        </div>
      </div>

    </li>
  </ul>
</div>
