<br />
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
          <li><a href="../lab/index.php">View<span class="sr-only">(current)</span></a></li>
          <li class="active"><a href="../lab/add-address.php">Link</a></li>
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
        <li><a href="#">About</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <h1>Add Address</h1>
    <form action="#" method="post">   
       Full Name:<br /> <input name="fullname" value="<?php echo $fullname; ?>" /> <br />
       Email:<br /> <input name="email" value="<?php echo $email; ?>" /> <br />
       Address Line 1:<br /> <input name="addressline1" value="<?php echo $addressline1; ?>" /> <br />
       City:<br /> <input name="city" value="<?php echo $city; ?>" /> <br />
       State:<br /><select name ="state">
           <?php foreach ($states as $key => $value): ?>
            <option value="<?php echo $key ?>" <?php if ( $state == $key): ?> selected="selected" <?php endif; ?>><?php echo $value; ?></option>
            <?php endforeach; ?>
       </select> <br/>
       Zip:<br /> <input name="zip" value="<?php echo $zip; ?>" /> <br />
       Birthday:<br /> <input type="date" name="birthday" value="<?php echo $birthday; ?>" /> <br />
       <input type="submit" value="submit" class="btn btn-primary" />
<!--       <input type="button" value="address book" href="../lab/index.php" class="btn btn-primary"></button>-->
    </form>
</div>
