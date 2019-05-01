<div class="project-grid">
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



  <ul class="wrapper">
    <li  ng-repeat="project in projects">
      <div class="box callout" ui-sref="single({pr: project.name})" ui-sref-active="active"  >
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
