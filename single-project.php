<div class="single-project" ng-controller="SingleProjectController">
<div class="row column">
<hr>
</div>
<div class="row column">
<p class="lead">Projects</p>
</div>

<p><a class="nav-link" ui-sref="main" ui-sref-active="active">Main</a></p>



<div class="box callout">
<div class="work-feature-block row">
  <div class="columns medium-5">
    <div class="box-img"><img src="https://placehold.it/400x370&text=Pegasi B" ></div>
  </div>
  <div class="singleText columns medium-7">
    <h2 class="work-feature-block-header">{{single.name}}</h2>
    <p>{{single.headline}}</p>
    <h2>Project Details</h2>
    <p>{{single.description}}</p>
    <span><p>Date:&nbsp;&nbsp;&nbsp;{{single.date}}</p></span>
    <span><p>Technologies&nbsp;Used:&nbsp;&nbsp;&nbsp;{{single.tech}}</p></span>
  </div>
</div>
</div>



</div>
