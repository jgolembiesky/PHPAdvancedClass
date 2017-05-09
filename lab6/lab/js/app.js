//This function wrapper will serve as a way to not create global 
//variables in the JavaScript code
(function(){
    'use strict';
    angular
            .module('app', ['ngRoute'])
            .config(config);
    
    config.$inject = ['$routeProvider'];
    
    function config($routeProvider){
        $routeProvider.
                when('/', {
                    templateUrl: 'js/phone-list.template.html',
                    controller: 'PhoneListController',
                    controllerAs: 'vm'
                }).
                when('/phones/:phoneId',{
                    templateUrl: 'js/phone-detail.template.html',
                    controller: 'PhoneDetailController',
                    controllerAs: 'vm'
                }).
                otherwise({
                    redirectTo: '/'
                });
    }
  
})();
