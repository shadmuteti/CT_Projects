angular.module('serverapp.services', []).
  factory('APIservice', function($http) {

    var API = {};

    API.getDrivers = function() {
      return $http({
        method: 'JSONP', 
        
        
        url: 'http://ergast.com/api/f1/2013/driverStandings.json?callback=JSON_CALLBACK'
      });
    };

    return API;
  });
