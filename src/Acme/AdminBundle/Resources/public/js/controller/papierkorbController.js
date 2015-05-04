 app.controller('PaginationCtrl', function ($scope, $http) {

  
 $scope.showData = function( ){

 $scope.curPage = 0;
 $scope.pageSize = 20;
 v
    $http.get('/admin/jsonalldumpedarticles').success(function(data) {
         $scope.datalists = data;
    });  
    
     $scope.numberOfPages = function() {
				return Math.ceil($scope.datalists.length / $scope.pageSize);
			};
         
};

});

