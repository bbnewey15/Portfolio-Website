

var projectGrid = angular.module('projectGrid', ['ui.router']);

// Define the `ProjectListController` controller on the `projectGrid` module
projectGrid.controller('ProjectListController', function ProjectListController($scope) {
  $scope.projects = [
    {
      name: 'AWOL',
      headline: 'Build using Box2D engine and C++ ',
      description: 'Build using Box2D engine and C++ '
    }, {
      name: 'Project 2',
      headline: 'Project 2 headline',
      description: 'Build using Box2D engine and C++ '
    }, {
      name: 'Project 3',
      headline: 'Project 3 headline here',
      description: 'Build using Box2D engine and C++ '
    }
  ];
});

projectGrid.config(function ($stateProvider,$urlRouterProvider) {

    var mainState = {
        name: 'main',
        url: '/',
      templateUrl: 'project-grid.php'
    }

    var singleState = {
        name: 'single',
        url: '/single',
        templateUrl: 'single-project.php'
    }




        $stateProvider.state(mainState);
        $stateProvider.state(singleState);
        $urlRouterProvider.otherwise('/');

});
