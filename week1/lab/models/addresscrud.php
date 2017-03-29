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
    $stmt = $db->prepare("INSERT INTO address SET fullname = :fullname, email = :email, addressline1 = :addressline1, city = :city, state = :state, zip = :zip, birthday = :birthday");
    //prepare statement
    //binds
    //execute binds
    $binds = array(
        ":fullname" => $fullname,
        ":email" => $email,
        ":addressline1" => $addressline1,
        ":city" => $city,
        ":state" => $state,
        ":zip" => $zip,
        ":birthday" => $birthday
        
    );
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        return true;
    }
    
}