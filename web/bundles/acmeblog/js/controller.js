var app = angular.module("MyApp", []) .config(['$interpolateProvider', function ($interpolateProvider) {
$interpolateProvider.startSymbol('[[');
$interpolateProvider.endSymbol(']]');
}]);

app.filter('offset', function() {
return function(input, start) {
start = parseInt(start, 10);
return input.slice(start);
};
});

app.filter('htmlToPlaintext', function() {
return function(text) {
return String(text).replace(/<[^>]+>/gm, '');
};
});

app.controller("PaginationCtrl", function($scope, $http) {
$scope.itemsPerPage = 8;
$scope.currentPage = 0;

function htmlToPlaintext(text) {
return String(text).replace(/<[^>]+>/gm, '');
}

$scope.items = [];

$http.get('articles').success(function(data) {
$scope.items = data;
});

$scope.range = function() {
var rangeSize = 5;
var ret = [];
var start;
start = $scope.currentPage;
if ( start > $scope.pageCount()-rangeSize ) {
start = $scope.pageCount()-rangeSize+1;
}
for (var i=start; i<start+rangeSize; i++) {
ret.push(i);
}
return ret;
};
$scope.prevPage = function() {
if ($scope.currentPage > 0) {
$scope.currentPage--;
}
};
$scope.prevPageDisabled = function() {
return $scope.currentPage === 0 ? "disabled" : "";
};
$scope.pageCount = function() {
return Math.ceil($scope.items.length/$scope.itemsPerPage)-1;
};
$scope.nextPage = function() {
if ($scope.currentPage < $scope.pageCount()) {
$scope.currentPage++;
}
};
$scope.nextPageDisabled = function() {
return $scope.currentPage === $scope.pageCount() ? "disabled" : "";
};
$scope.setPage = function(n) {
$scope.currentPage = n;
};
});