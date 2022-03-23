<!doctype html>
<html ng-app="DreamJobsApp">

<head>
    

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    
</head>

<body>

    <div ng-controller="PaginationDemoCtrl">
        <h4>Default</h4>
        <ul uib-pagination total-items="totalItems" ng-model="currentPage" ng-change="pageChanged()"></ul>
        <ul uib-pagination boundary-links="true" total-items="totalItems" ng-model="currentPage" class="pagination-sm" previous-text="&lsaquo;" next-text="&rsaquo;" first-text="&laquo;" last-text="&raquo;"></ul>
        <ul uib-pagination direction-links="false" boundary-links="true" total-items="totalItems" ng-model="currentPage"></ul>
        <ul uib-pagination direction-links="false" total-items="totalItems" ng-model="currentPage" num-pages="smallnumPages"></ul>
        <pre>The selected page no: @{{currentPage}}</pre>
        <button type="button" class="btn btn-info" ng-click="setPage(3)">Set current page to: 3</button>

        <hr />
        <h4>Limit the maximum visible buttons</h4>
        <h6><code>rotate</code> defaulted to <code>true</code>:</h6>
        <ul uib-pagination total-items="bigTotalItems" ng-model="bigCurrentPage" max-size="maxSize" class="pagination-sm" boundary-links="true" num-pages="numPages"></ul>
        <h6><code>rotate</code> defaulted to <code>true</code> and <code>force-ellipses</code> set to <code>true</code>:</h6>
        <ul uib-pagination total-items="bigTotalItems" ng-model="bigCurrentPage" max-size="maxSize" class="pagination-sm" boundary-links="true" force-ellipses="true"></ul>
        <h6><code>rotate</code> set to <code>false</code>:</h6>
        <ul uib-pagination total-items="bigTotalItems" ng-model="bigCurrentPage" max-size="maxSize" class="pagination-sm" boundary-links="true" rotate="false"></ul>
        <h6><code>boundary-link-numbers</code> set to <code>true</code> and <code>rotate</code> defaulted to <code>true</code>:</h6>
        <ul uib-pagination total-items="bigTotalItems" ng-model="bigCurrentPage" max-size="maxSize" class="pagination-sm" boundary-link-numbers="true"></ul>
        <h6><code>boundary-link-numbers</code> set to <code>true</code> and <code>rotate</code> set to <code>false</code>:</h6>
        <ul uib-pagination total-items="bigTotalItems" ng-model="bigCurrentPage" max-size="maxSize" class="pagination-sm" boundary-link-numbers="true" rotate="false"></ul>
        <pre>Page: @{{bigCurrentPage}} / @{{numPages}}</pre>

    </div>
{{-- 
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-animate.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-sanitize.js"></script>
    <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-2.5.0.js"></script> --}}

    {{-- <script>
        var app = angular.module('DreamJobsApp', [], ['$httpProvider', function($httpProvider) {
            $httpProvider.defaults.headers.post['X-CSRF-TOKEN'] = $('meta[name=csrf-token]').attr('content');
        }]);
        angular.module('DreamJobsApp', ['ngAnimate', 'ngSanitize', 'ui.bootstrap']);
        angular.module('DreamJobsApp').controller('PaginationDemoCtrl', function ($scope, $log) {
        $scope.totalItems = 64;
        $scope.currentPage = 4;

        $scope.setPage = function (pageNo) {
            $scope.currentPage = pageNo;
        };

        $scope.pageChanged = function() {
            $log.log('Page changed to: ' + $scope.currentPage);
        };

        $scope.maxSize = 5;
        $scope.bigTotalItems = 175;
        $scope.bigCurrentPage = 1;
        });
    </script> --}}
</body>

</html>