var app = angular.module('crudApp', ['datatables'], function($interpolateProvider){
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
    app.controller('crudController', function($scope){

      $scope.name="Nitesh";
    });
    });
