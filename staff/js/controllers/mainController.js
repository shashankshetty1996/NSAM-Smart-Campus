angular.module('myApp').controller('mainController', function($scope, $http, LoginFactory) {
    $scope.message = LoginFactory.getID;
    $scope.init = function() {
        $scope.message = "ID working now checking init"
        $http.get("pages/php/staff.php",{'sid':$scope.message}).success(function(data) {
            if(data == ""){
                // dummie data set
                $scope.staffDetails = [{
                    "name":"teacher1",
                    "email":"me@i.com",
                    "phone":"4165415615",
                    "sid":"st001"
                },
                {
                    "name":"teacher2",
                    "email":"me2@i.com",
                    "phone":"41845615",
                    "sid":"st002"
                }];
            } else {
                $scope.staffDetails = data;
            }
        });
    }
    // calling ng-init function
    $scope.init();
});