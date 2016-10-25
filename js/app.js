
var app1 = angular.module('app1', []);

app1.controller('AppCtrl', function($scope, $http, $window) {
   $scope.data = {};

   $scope.submitForm = function(){
       var link = 'https://hooks.zapier.com/hooks/catch/1749362/6xyvdn/';

       $http.get(link, {params: $scope.data })
       .then(function (res){
           $scope.response = res.data;
       });
       $window.location.reload();
   };
});
