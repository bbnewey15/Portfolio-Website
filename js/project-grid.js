

var projectGrid = angular.module('projectGrid', ['ui.router','ngRoute']);



// Define the `ProjectListController` controller on the `projectGrid` module
projectGrid.controller('ProjectListController', function ProjectListController($scope, $location) {
  $scope.projects = [
    {
      name: 'AWOL',
      headline: 'Simple top down shooter',
      description: 'This game was built using Box2D engine and C++ for a final project in my Advanced Game Programming class. This is my first big project and I learned the most about coding during this time.',
      date: '2014',
      tech: 'C++, Box2D, DirectX, XML'
    }, {
      name: 'Portfolio Website',
      headline: 'Details of the website your currently on!',
      description: 'Build using Box2D engine and C++ ',
      date: '2019',
      tech: 'Php, AngularJS, Foundation, JQuery, HTML, CSS'
    }, {
      name: 'Project 3',
      headline: 'Project 3 headline here',
      description: 'Build using Box2D engine and C++ ',
      date: '2014',
      tech: 'C++, Box2D, DirectX, XML'
    }
  ];



});

//SingleProjectController is nested within ProjectListController (Shares scope)
projectGrid.controller('SingleProjectController', function SingleProjectController($scope, $location) {
  // Get Params from URL and set single project variable
  $scope.single = {};
  var params = $location.url();
  var projects = $scope.projects;
  var single = $scope.single;
    if(params != undefined){
      projects.forEach(function(item){
          if (item.hasOwnProperty('name')) {
            if( params.replace('%20',' ') == ('/single/' + (item.name) )){
                single = item;
            }
          }
      });

      $scope.single = single;
  }


  console.log($scope.single);
});




projectGrid.config(function ($stateProvider,$urlRouterProvider) {

    var mainState = {
        name: 'main',
        url: '/',
      templateUrl: 'project-grid.php',
      controller: 'ProjectListController'
    }

    var singleState = {
        name: 'single',
        url: '/single/{pr}',
        templateUrl: 'single-project.php',
        controller: 'SingleProjectController'
    }

    $stateProvider.state(mainState);
    $stateProvider.state(singleState);
    $urlRouterProvider.otherwise('/');


});
