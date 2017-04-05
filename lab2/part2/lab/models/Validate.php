<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Validate
 *
 * @author Bear
 */
class Validate {

 function isZIPValid($ZIP){
    $zipRegex = '/^[0-9]{5}$/';
    if (preg_match($zipRegex, $ZIP)){
        return true;
    }
}

function isDateValid($date){
    
    return (bool)strtotime($date);
}

function isEmailValid($email){
    return ( is_string($email) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) !== false );
}

}
