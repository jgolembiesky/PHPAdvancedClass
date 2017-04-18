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
<!--        <li class="active"><a href="login.php">Log in <span class="sr-only">(current)</span></a></li>
        <li ><a href="signup.php">Sign up</a></li>-->
<!--        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>-->
      </ul>
<!--      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      <ul class="nav navbar-nav navbar-right">
          <li><a href="login.php">Logout</a></li>
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
