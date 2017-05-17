//This function wrapper will serve as a way to not create global 
//variables in the JavaScript code. 

//This code gets the routing to work with a home page.
(function(){
    'use strict';
    angular
            .module('app', ['ngRoute'])
            .config(config);
    
    config.$inject = ['$routeProvider'];
    
    function config($routeProvider){
        $routeProvider.
                //when there is no phone selected, show all the phones
                when('/', {
                    templateUrl: 'js/phone-list.template.html',
                    controller: 'PhoneListController',
                    controllerAs: 'vm'
                }).
                        //when a phone is selected, show data for that phone
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
