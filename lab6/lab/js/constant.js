/* 
This file is called constant.js. It is used for keeping constant values top be reused throughout the app.
 */

//This function wrapper will serve as a way to not create global 
//variables in the JavaScript code. 
(function(){
    'use strict';
    angular
            .module('app')
            .constant('REQUEST',{
                'Phones' : './data/phones.json'
            });
})();