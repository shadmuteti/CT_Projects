
var app=angular.module('Age', []);
app.controller('myctrl', function($scope) {
    $scope.calculateAge=function(){
    	if(!$scope.dob || $scope.dob >new Date())
    	return "undefined";
    	if($scope.dob<1890)
    	return "You are too old";
    	var dnow=new Date();
    	var yr=dnow.getUTCFullYear();
    	return Math.abs(yr-$scope.dob);

    	
    };
  
});
