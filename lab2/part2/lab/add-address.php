<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once './autoload.php';
        $util = new Utilities();
        $fullname = filter_input(INPUT_POST, 'fullname');
        $email = filter_input(INPUT_POST, 'email');
        $addressline1 = filter_input(INPUT_POST, 'addressline1');
        $city = filter_input(INPUT_POST, 'city');
        $state = filter_input(INPUT_POST, 'state');
        $zip = filter_input(INPUT_POST, 'zip');
        $birthday = filter_input(INPUT_POST, 'birthday');
        
        $errors = [];
        $states = $util->getStates();
        $validate = new Validate();
        if($util->isPostRequest()){
            
            if(empty($fullname)){
                $errors[] = 'Full Name is required.';
            }
            if($validate->isEmailValid($email) == false){
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
            if(!$validate->isDateValid($birthday))
            {
            $errors[] = 'Date is invalid';
            }
            if(!$validate->isZIPValid($zip))
            {
               $errors[] = 'Zip is invalid';
            }
                
            
            $crud = new CRUD();
            
            if(count($errors) === 0){
                
               if($crud->createAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday))
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

