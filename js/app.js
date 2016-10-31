
var app1 = angular.module('app1', []);

app1.controller('AppCtrl', function($scope, $http, $window) {
   $scope.data = {};
   $scope.started = true;

   $scope.submitForm = function(){
       $scope.started = false;
       var fullU = parseInt($scope.data.fullU, 10);
       var summU = parseInt($scope.data.summU, 10);
       var year1U = parseInt($scope.data.year1U, 10);
       var year2U = parseInt($scope.data.year2U, 10);
       var year3U = parseInt($scope.data.year3U, 10);
       var year4U = parseInt($scope.data.year4U, 10);
       var year5U = parseInt($scope.data.year5U, 10);
       var totalU = year1U + year2U + year3U + year4U + year5U;
       var totalTerms = fullU + summU;
       var check = $scope.data.days;

       if (totalTerms != totalU) {
           $window.alert("Please revise your Upass Data");
       } else {
           var link = 'https://hooks.zapier.com/hooks/catch/1749362/6j61v6/';

           $http.get(link, {params: $scope.data })
           .then(function (res){
               $scope.response = res.data;
           });
        //    $window.alert("Data Successfully submitted, Please reload");
        //    $window.location.reload();
       }
   };
});
