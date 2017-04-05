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
        
        $test = new ErrorMessage();
        
        $test->addMessage("test1", 'Testing Error Message 1');
        $test->addMessage("test2", 'Testing Error Message 2');
        $test->addMessage("test3", 'Testing Error Message 3');
        
        $test->removeMessage("test2");
        
        var_dump('<br /', $test->getAllMessages());
        
        $test2 = new Message();
        
        $test2->addMessage("test1", 'Testing Message 1');
        $test2->addMessage("test2", 'Testing Message 2');
        $test2->addMessage("test3", 'Testing Message 3');
        var_dump('<br /', $test2->getAllMessages());
        
        $test3 = new SuccessMessage();
        $test3->addMessage("test1", 'Testing Success Message 1');
        $test3->addMessage("test2", 'Testing Success Message 2');
        $test3->addMessage("test3", 'Testing Success Message 3');
        var_dump('<br /', $test3->getAllMessages());
        ?>
    </body>
</html>
