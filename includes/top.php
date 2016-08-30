<?php include ("config.php");?>

<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset= "utf-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700|Indie+Flower' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/lightbox.css" type="text/css" />
    <link rel="stylesheet" href="css/maclaren.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery-ui.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery-ui.theme.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery-ui.structure.css" type="text/css" />
</head> 

<body>
    
                
 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand emphasis" href="index.php">MacLaren &amp; Co.</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Clothing</a></li>
                <li><a href="shoes.php">Shoes</a></li>
                <li><a href="#">Hats</a></li>
                <li><a href="#">Apothecary</a></li>
                <li role="separator" class="divider"></li>
              </ul>
          </li>
        <li><a href="contact.php">Contact Us &amp; FAQ</a></li>
        <li><a href="about.php">About Us</a></li>

      </ul>
      <form id="log" class="navbar-form navbar-left">
        <button type="button"  class="btn btn btn-primary btn-sm"><span class="glyphicon glyphicon-user"></span>Login</button>
      </form>
      
      <form id="tog" class="navbar-form navbar-right">
        <button type="button"  class="btn btn btn-primary btn-sm"><span class="glyphicon glyphicon-user"></span>Create!</button>
      </form>
       
        <form id="disNone">
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                    <button type="submit" id="sub" class="btn btn-primary">Login</button>
                    <span id="suprise">Hey! fill this out or create account!</span>
            </form>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
                