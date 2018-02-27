var dashboardApp = angular.module('dashboardApp', []);

//Controllers
dashboardApp.controller('DashboardCtrl', ["$scope", DashboardCtrl]);
dashboardApp.controller('UserProfileCtrl', ["$scope", UserProfileCtrl]);
dashboardApp.controller('ProjectsCtrl', ["$scope", ProjectsCtrl]);

