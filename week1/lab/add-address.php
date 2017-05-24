<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/superhero/bootstrap.css">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'navbar.html';
        require_once './models/dbconnect.php';
        require_once './models/addresscrud.php';
        require_once './models/util.php';
        require_once './models/validation.php';
        $fullname = filter_input(INPUT_POST, 'fullname');
        $email = filter_input(INPUT_POST, 'email');
        $addressline1 = filter_input(INPUT_POST, 'addressline1');
        $city = filter_input(INPUT_POST, 'city');
        $state = filter_input(INPUT_POST, 'state');
        $zip = filter_input(INPUT_POST, 'zip');
        $birthday = filter_input(INPUT_POST, 'birthday');
        
        $errors = [];
        $states = getStates();
        if(isPostRequest()){
            if(empty($fullname)){
                $errors[] = 'Full Name is required.';
            }
            if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
                $errors[] = 'Email is not valid.';
            }
        
            if(empty($addressline1)){
                $errors[] = 'Address line 1 is required.';
            }
            if(empty($city)){
                $errors[] = 'City is required.';
            }
            if(empty($state)){
                $errors[] = 'State is required.';
            }
            if(!isDateValid($birthday))
            {
            $errors[] = 'Date is invalid';
            }
            if(!isZIPValid($zip))
            {
               $errors[] = 'Zip is invalid';
            }
                
            
            
            
            if(count($errors) === 0){
                
               if(createAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday))
               {
                   $message = 'Address Added';
                   $fullname = '';
                   $email = '';
                   $addressline1 = '';
                   $city = '';
                   $state = '';
                   $zip = '';
                   $birthday = '';
               }
            }
        }
        include './templates/add-address.html.php';
        include './templates/errors.html.php';
        include './templates/messages.html.php';
        ?>
    </body>
</html>
<br />

