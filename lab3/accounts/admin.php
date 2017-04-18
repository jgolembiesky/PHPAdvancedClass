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
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/superhero/bootstrap.css">
    </head>
    <body>
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Advanced PHP @ NEIT</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="login.php?$loggedIn=0">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
        <h1>Admin Page</h1>
        <?php
        include './autoload.php';
        include './views/session-access.html.php';
        $accounts = new Accounts();
        $userID = $_SESSION['user_id'];
        $data = $accounts->getDataMatch($userID);
        
        ?> 
        <table class="table table-striped table-hover">
    <?php foreach( $data as $row ) : ?>
    <tr>
    <td><?php echo $row['user_id']; ?> </td>
    <td><?php echo $row['email']; ?> </td>
    <td><?php 
    $originalDate = $row['created'];
    $newDate = date("d-m-Y", strtotime($originalDate));
    echo $newDate; ?> </td>
    </tr>
    <?php endforeach; ?>
        </table>
    </body>
</html>
