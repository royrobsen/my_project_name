 app.controller('PaginationCtrl', function ($scope, $http) {

  
 $scope.showData = function( ){

 $scope.curPage = 0;
 $scope.pageSize = 5;

    $scope.datalists = [];
    
    $scope.formInfo = {};
    var searchit = $scope.formInfo;
        $http({
        url: '/jsonallarticles', 
        method: "GET",
        params: searchit
        }).success(function(data) {
            $scope.datalists = data;
        });
    $scope.saveData = function() {
        $http({
        url: '/jsonallarticles', 
        method: "GET",
        params: searchit
        }).success(function(data) {
            $scope.datalists = data;
        });
        $scope.curPage = 0;
       };
     $scope.numberOfPages = function() {
	return Math.ceil($scope.datalists.length / $scope.pageSize);
     };
         
};

});

