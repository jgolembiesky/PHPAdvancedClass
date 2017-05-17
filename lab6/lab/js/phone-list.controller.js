//This function wrapper will serve as a way to not create global 
//variables in the JavaScript code. 

//The controller calls and gets the data for the view page. The service makes the ajax call,
//And returns the the data in the form of a promise.
//Then it sets the variable phones to that data. Angular will auto-update the view.
(function(){
    'use strict';
    angular
            .module('app')
            .controller('PhoneListController', PhoneListController);
    
    PhoneListController.$inject = ['PhonesService'];
    
    function PhoneListController(PhonesService){
        var vm = this;
        vm.phones = [];
        
        activate();
        
        function activate(){
            PhonesService.getPhones().then(function(response){
                vm.phones = response;
            });
        }
        
    }
    
    
    
})();