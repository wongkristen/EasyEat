
(function(){



    angular.module('myApp', []).controller('namesCtrl', function($scope){
        $scope.food = {
            apple: "my apple"
        };

        $scope.apple = "apple";

        $scope.names = [
            {name:'Jani',country:'Norway'},
            {name:'Hege',country:'Sweden'},
            {name:'Kai',country:'Denmark'}
        ];
        console.log($scope.names);
    });



})();
