var myApp = angular.module('myApp', ["ui.router"])

myApp.config(function($stateProvider, $urlRouterProvider) {
	
	$urlRouterProvider.otherwise("/state1");

	$stateProvider
		.state('state1', {
			url: "/state1",
			templateUrl: __uri("./partials/state1.html")
		})
		.state('state2', {
			url: "/state2",
			templateUrl: __uri("./partials/state2.html")
		})
});