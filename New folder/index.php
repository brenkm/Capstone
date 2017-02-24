<!DOCTYPE html>
<html lang="en">
  

  <head>

    <link rel="stylesheet" type="text/css" href="main.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>

<?php
  session_start();
?>

  


  <body class="ind">



    <!-- Welcome text -->
    <div class="welcome">
    Welcome
    </div>

    <!-- Sign in and create account buttons -->
    <div class=indbuttons>
      <button type="button" class="btn btn-secondary btn-lg " id="signInButton">Sign in</button>
      <button type="button" class="btn btn-secondary btn-lg " id="createAccountButton">Create account</button>

    </div>

    <!-- sign up input form -->
    <form action="signup.php" method="POST" class="col-xs-8 col-xs-offset-2" id="createAccountInputs">
      <input class="form-control" placeholder="Username" name="unameinputCA" id="unameinputCA" type="text"></br>
      <input class="form-control" placeholder="Password" name="pwordinputCA" id="pwordinputCA" type="password"></br>
      <input class="form-control" placeholder="Repeat Password" name="pwordinputCA2" id="pwordinputCA2" type="password"></br>
      <button type="submit" class="btn btn-info btn-m " id="completeButton" onclick="window.location='home.html'">Complete</button>
    </form>

    <!-- log in input form-->
    <form action="login.php" method="POST" class="col-xs-8 col-xs-offset-2" id="signInInputs">
      <input class="form-control" placeholder="Username" name="unameinputSI" id="unameinputSI" type="text"></br>
      <input class="form-control" placeholder="Password" name="pwordinputSI" id="pwordinputSI" type="password"></br>
      <button type="submit" class="btn btn-info btn-m " id="signInButton2">Sign In</button>
    </form>
    
    <!--
    <?php
      if (isset($_SESSION['id'])) {
        echo $_SESSION['id'];
      }
      else{
        echo "You are not logged in";
      }
    ?>

    <form action="logout.php">
      <button>LOG OUT</button>
    </form>-->




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- index scripts -->
    <script src="scripts.js"></script>
  </body>


</html>