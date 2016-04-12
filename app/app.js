

// Declare app level module which depends on views, and components
var Search=angular.module('Search',[]);

Search.controller("LoginController",function($scope,$http){
  var $this=this;
  $http({
    method: 'GET',
    url: 'http://localhost:8000/content/students.php'
  }).then(function successCallback(response) {

    $http.students=response.data;
  }, function errorCallback(response) {
    // called asynchronously if an error occurs
    // or server returns response with an error status.
  });

  console.log($http.students);
});
