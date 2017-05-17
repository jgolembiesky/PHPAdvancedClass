/* 
 This uses the angular provided service called $http.  
 It's used to make AJAX calls with a built-in promise and other built-in features.
  Also this is injecting the REQUEST constant to know the location of the data to call.
 */
//This function wrapper will serve as a way to not create global 
//variables in the JavaScript code. 
(function() {
 
    'use strict';
    angular
            .module('app')
            .factory('PhonesService',PhonesService);
    PhonesService.$inject = ['$http', 'REQUEST'];
  
    function PhonesService($http, REQUEST){
        var url = REQUEST.Phones;
          //references to the functions
        var service = {
          'getPhones': getPhones,
          'findPhone': findPhone
        };
        return service;
    
    function getPhones(){
        return $http.get(url)
                .then(getPhonesComplete, getPhonesFailed);
        
        function getPhonesComplete(response){
            return response.data;
        }
        function getPhonesFailed(error){
            return [];
        }
          }
    
    function findPhone(id){
        return getPhones()
                .then(function(data){
                    return findPhoneComplete(data);;
        });
    function findPhoneComplete(data){
        var results = {};
        angular.forEach(data, function(value, key){
            if (!results.length){
                if(value.hasOwnProperty('id') && value.id === id){
                    results = angular.copy(value);
                }
            }
        }, results);
        return results;
        }
    }
  
    }
    
    
    
   
    
})();
