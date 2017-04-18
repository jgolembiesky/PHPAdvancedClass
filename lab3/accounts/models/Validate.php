<?php

/**
 * Description of Validate
 *
 * @author Bear
 */
class Validate {
    //put your code here
    function isEmailValid($email){
    return ( is_string($email) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) !== false );
}   //I could have made a new function called checkForEmail in Accounts instead of using login again, but I had a function already pulling email from the database.
    //Yeah I have to pass in the password which is a little extra and unncessesary but having basically redundant functions 
    //Isn't efficient either.
    function doesEmailExist($email){
       $accounts = new Accounts();
       $results = $accounts->getEmailMatch($email);
       return (!empty($results));
    }
}
