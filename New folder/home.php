<!DOCTYPE html>
<html lang="en">
  <?php
  session_start();
  ?>

  <head>

  

  <link rel="stylesheet" type="text/css" href="main.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>

  <header>
    

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Website</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
            <p class="navbar-text">Hello, <?php echo $_SESSION['username']; ?>.</p>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Sign out</a></li>
                <li><a href="settings.php">Preferences</a></li>
                <li><a href="#">Something else here</a></li>
                
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->

      </div><!-- /.container-fluid -->
    </nav>

  </header>

  <body class="ind">

    <!-- Home text -->
    <p class="home">
    Home
    </p>

    <!-- Power on button-->
    <form class = "in" id="powerOnButton"><button type="button" class="btn btn-success btn-lg btn-block">Power On</button></form>

    <!-- Power off button-->
    <form class = "in" id="powerOffButton"><button type="button" class="btn btn-danger btn-lg btn-block">Power Off</button></form>
    
    <!-- Show users button if logged as admin -->
    <?php
    if($_SESSION['id'] == 1)
      echo "<form class = 'in' action='userinfo.php'><button id='userinfobutton' type='submit' class='btn btn-secondary btn-lg btn-block'>Users</button></form>";
    ?>
    
    <!-- Log out button-->
    <form class = "in" action="logout.php"><button type="submit" class="btn btn-secondary btn-lg btn-block">Logout</button></form>
    
    



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- home page script -->
    <script src="scripts2.js"></script>
    
  </body>


</html>