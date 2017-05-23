(function() {
    
    'use strict';
    angular
        .module('app.corps')
        .config(config);
  
    config.$inject = ['$routeProvider'];

    /*
     * We set out custom feature with a starting page and pages
     * that go from there.  then the URL matches the route, we update
     * that view and process the controller
     */
    function config($routeProvider) {
       $routeProvider.
            when('/corps', {
                templateUrl: 'js/corps/corps.template.html',
                controller: 'CorpsController',
                controllerAs: 'vm'
            }).
            when('/corps/:corpsId', {
                templateUrl: 'js/corps/corps-detail.template.html',
                controller: 'CorpsDetailController',
                controllerAs: 'vm'
            })
           
    }

})();