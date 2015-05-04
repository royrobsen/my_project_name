 app.controller('PaginationCtrl', function ($scope, $http) {

  
 $scope.showData = function( ){

 $scope.curPage = 0;
 $scope.pageSize = 20;

    $scope.datalists = [];

    $http.get('/admin/jsonallarticles').success(function(data) {
         $scope.datalists = data;
    });  
    
     $scope.numberOfPages = function() {
	return Math.ceil($scope.datalists.length / $scope.pageSize);
     };
         
};

});

