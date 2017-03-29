<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function readAllAddress(){
    
    $db = dbconnect();
    $stmt = $db->prepare("SELECT * FROM address");
    
    $results = array();
    if ($stmt->execute() && $stmt->rowCount() > 0) {
       $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    return $results;
    
}
/**
 * A method to add address data to the database
 * 
 * @param String $fullname Name of person
 * 
 * @return boolean
 * 
 */
/**
 * 
 * @param string $fullname
 * @param string $email
 * @param string $addressline1
 * @param string $city
 * @param string $state
 * @param string $zip
 * @param string $birthday
 */
function createAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday){
    $db = dbconnect();
    //prepare statement
    //binds
    //execute binds
    
    $stmt = $db->prepare("INSERT INTO phone SET phone = :phone, phonetype = :phonetype, logged = now(), lastupdated = now()");
    $binds = array(
        ":phone" => $phone,
        ":phonetype" => $phoneType,
    );
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        return true;
    }
    
}