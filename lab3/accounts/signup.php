<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/superhero/bootstrap.css">
    </head>
    <body>
        <?php
        include './autoload.php';
        $util = new Util();
        $accounts = new Accounts();
        $email = filter_input(INPUT_POST,'email');
        $password = filter_input(INPUT_POST,'password');
        $validate = new Validate();
        $errors = [];
        if ($util->isPostRequest()){
            if(!$validate->isEmailValid($email)){
                $errors[] = "Email is not Valid.";
            }
            if($validate->doesEmailExist($email) == true){
                $errors[] = 'Email already exists.';
            }
            if(empty($password)){
                $errors[] = 'Password is required.';
            }
            if(count($errors) === 0){
            if($accounts->signup($email, $password)) {
                echo "Success! Redirectiong to login...";
                $util->redirect("login.php", array("email"=>$email));
            }
            }
            else {
                echo nl2br("Sorry! Check the errors and try again. \n");
                foreach($errors as $error){
                    echo nl2br ($error . "\n");
                }
                
            }
        
        }
        
        include './views/signup.html.php';
        ?>
    </body>
</html>
