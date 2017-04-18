<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/superhero/bootstrap.css">
    </head>
    <body>
        <?php
        // put your code here
        session_start();
        include './autoload.php';
        include './views/login.html.php';
        $util = new Util();
        $accounts = new Accounts();
        $email = filter_input(INPUT_POST,'email');
        $password = filter_input(INPUT_POST,'password');
        $validate = new Validate();
        $errors = [];
        if ($util->isPostRequest()){
            if($validate->isEmailValid($email) == false){
                $errors[] = 'Email is not valid.';
            }
            if(empty($password)){
                $errors[] = 'Password is required.';
            }
            
        if(count($errors) === 0){
            $loginInfo =  $accounts->login($email, $password);
            if ($loginInfo > 0){
                echo "You logged in!";
                $_SESSION['user_id'] = $loginInfo;
                $util->redirect("admin.php");
        }
            }
         else {
            foreach($errors as $error ){
                echo nl2br ($error . "\n");
            }
             }
             
         }
        
        ?>
    </body>
</html>
