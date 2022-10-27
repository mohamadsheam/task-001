var myApp = angular
    .module("myModule", ["ngRoute"])
    .config(function ($routeProvider, $locationProvider) { //inject $locationProvider service
        $locationProvider.hashPrefix(''); // add configuration
        $routeProvider
            .when("/dashboard", {
                controller: "Home/dashboard",
            })
            .when("/services", {
                controller: "dashboardController",
            })
            .when("/technologies", {
                controller: "dashboardController",
            }).otherwise({
                redirectTo: '/home'
            });
    });
