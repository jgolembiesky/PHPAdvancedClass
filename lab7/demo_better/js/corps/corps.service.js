(function() {

    'use strict';
    angular
        .module('app.corps')
        .factory('CorpsService', CorpsService);

    CorpsService.$inject = ['$http', 'REQUEST'];

    /*
     * We will do as much logic here as we can.
     */
    function CorpsService($http, REQUEST) {

        var url = REQUEST.Corps;

        var service = {
            'getAllCorps' : getAllCorps,
            'getCorps' : getCorps,
            'postCorps' : postCorps,
            'deleteCorps' : deleteCorps,
            'putCorps' : putCorps

        };
        return service;

        ////////////

        /*
         * With the http call it returns a promise.  The promise will either get data from the server, or an error.
         * 
         * The frist then function will be for our sucess call, which then we want to return the correct data for the view page.
         * 
         * the second paramter for then is for the error.  We just return back an empty data set, and optionally can also display an error
         * or handle the error in another way.
         * 
         * So we return the promise, which in turn when the promise is complete will return a response for us to use.
         */
         function getAllCorps() {
             return $http.get(url)
                        .then(handleSuccess, handleFailed);                    

                function handleSuccess (response) { 
                    return response.data.data;
                }

                function handleFailed(error) {
                    return [];
                }            
            }
         function getCorps(corps_id) {
                var _url = url + '/' + corps_id;

                return $http.get(_url)
                        .then(handleSuccess, handleFailed); 

                function handleSuccess (response) { 
                    return response.data.data;
                }

                function handleFailed(error) {
                    return {};
                }  
            }
         function postCorps(fullname, email, corpsline1, city, state, zip, birthday) {
                var model = {};
                model.fullname = fullname;
                model.email = email;
                model.corpsline1 = corpsline1;
                model.city = city;
                model.state = state;
                model.zip = zip;
                model.birthday = birthday;
                return $http.post(url, model);
            }
            function deleteCorps(corps_id) {
                var _url = url + '/' + corps_id;
                return $http.delete(_url);
            }
            function putCorps(corps_id, fullname, email, corpsline1, city, state, zip, birthday ) {  
                var _url = url + '/' + corps_id;
                var model = {};
                model.fullname = fullname;
                model.email = email;
                model.corpsline1 = corpsline1;
                model.city = city;
                model.state = state;
                model.zip = zip;
                model.birthday = birthday;
                return $http.put(_url, model);
            }
    }

})();