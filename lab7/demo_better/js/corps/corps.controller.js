(function () {
    
    'use strict';
    angular
        .module('app.corps')
        .controller('CorpsController', CorpsController);

    CorpsController.$inject = ['CorpsService'];
    /*
     * Simple controller to get information for the view.
     */
    function CorpsController(CorpsService) {
        var vm = this;

        vm.corps = [];

        activate();

        ////////////

        function activate() {
            CorpsService.getAllCorps().then(function (response) {
                vm.corps = response;
            });
        }

    }
    
})();