<?php

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
    //TODO: Email Regex
}

