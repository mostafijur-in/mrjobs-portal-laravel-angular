/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
// require('./angular');
// import 'angular';
// import 'angular-ui-bootstrap';

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));

// const app = new Vue({
//     el: '#app'
// });

var app = angular.module('MrJobsApp', ['ngAnimate', 'ngSanitize', 'ui.bootstrap'], ['$httpProvider', function($httpProvider) {
    $httpProvider.defaults.headers.post['X-CSRF-TOKEN'] = $('meta[name=csrf-token]').attr('content');
}]);

app.controller('JobController', ['$scope', '$http', function($scope, $http) {
    /**
     * Job
     */
    $scope.jobs = [];

    $scope.totalItems = 0;
    $scope.currentPage = 1;
    $scope.numPerPage = 10;
    $scope.maxSize = 5;

    // List jobs
    $scope.loadJobs = function($pageNum) {
        $http.get('/job?page=' + $pageNum)
            .then(function success(e) {
                $scope.jobs = e.data.jobs;

                // pagination
                $scope.totalItems = e.data.jobs.total;
                $scope.currentPage = e.data.jobs.current_page;
                $scope.numPerPage = e.data.jobs.per_page;
            });
    };

    // Page change
    $scope.pageChanged = function() {
        $scope.loadJobs($scope.currentPage);
    };

    $scope.loadJobs($scope.currentPage);
}]);