describe("age", function() {
    var $scope;
    var control;

    beforeEach(function() {

        module("age");

        inject(function(_$rootScope_, $controller) {

            $scope = _$rootScope_.$new();
            control = $controller("myctrl", {$scope: $scope});

        });

    });

    it("Your age is", function() {
    	$scope.dob = '';
        expect($scope.calculateAge()).toBe("undefined");
    });

});
