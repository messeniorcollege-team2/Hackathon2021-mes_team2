var app = angular.module("athapp" , []);
app.controller("cntrl", ['$scope' , function($scope) {
    $scope.search = function () {
        $scope.students.push({
            name: $scope.newstud.name,
            age: $scope.newage.age,
        });

        $scope.newstud.name = "";
        $scope.newage.age = "";
    };
}])