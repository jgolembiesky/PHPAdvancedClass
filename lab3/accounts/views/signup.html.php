
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
        <li><a href="login.php">Log in <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="signup.php">Sign up</a></li>
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
<!--      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
      </ul>-->
    </div>
  </div>
</nav>

<form class="form-horizontal" action="#" method="post">
    <legend>Signup</legend>
    <div class="form-group">
    <label class="col-lg-2 control-label">Email:</label>
    <div class="col-lg-10">
     <input name="email" type="text" value="" />
    <br />
    </div>
    </div>
    <div class="form-group">
    <label class="col-lg-2 control-label">Password:</label>
    <div class="col-lg-10">
    <input  name="password" type="password" value="" />
    <br />
    </div>
    </div>
    <div class="col-lg-2">
    <input class="btn btn-primary"  type="submit" value="Submit" />
    </div>
</form>