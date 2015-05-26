angular.module('serverapp.controllers', []).
  controller('driversController', function($scope, APIservice) {
    $scope.nameFilter = null;
    $scope.driversList = [ ];

    APIservice.getDrivers().success(function (response) {
        //Dig into the responde to get the relevant data
        $scope.driversList = response.MRData.StandingsTable.StandingsLists[0].DriverStandings;
    });
  });
