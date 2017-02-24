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


  <body class="ind">

    <!-- Home text -->
    <p class="home">
    Settings
    </p>

    <!-- Twitter info -->
    <form class = "in"><button id="twitterButton" type="button" class="btn btn-secondary btn-lg btn-block">Twitter</button></form>
    <p><form action="" method="POST" class="col-xs-8 col-xs-offset-2 in" id="twitterInputs">
      <input class="form-control" placeholder="Username" name="unameinputSI" id="unameinputTwitter" type="text"></br>
      <input class="form-control" placeholder="Password" name="pwordinputSI" id="pwordinputTwitter" type="password"></br>
      <button type="submit" class="btn btn-info btn-m " id="signInButton2">Save</button></br>
    </form></p>

    <!-- Facebook info -->
    <form class = "in"><button id="facebookButton" type="button" class="btn btn-secondary btn-lg btn-block">Facebook</button></form>
    <p><form action="" method="POST" class="col-xs-8 col-xs-offset-2 in" id="facebookInputs">
      <input class="form-control" placeholder="Username" name="unameinputSI" id="unameinputSI" type="text"></br>
      <input class="form-control" placeholder="Password" name="pwordinputSI" id="pwordinputSI" type="password"></br>
      <button type="submit" class="btn btn-info btn-m " id="signInButton2">Save</button></br>
    </form></p>

    <!-- Change username -->
    <form class = "in"><button type="button" id="changeUsernameButton" class="btn btn-secondary btn-lg btn-block">Change Username</button></form>
    <p><form action="changeUsername.php" method="POST" class="col-xs-8 col-xs-offset-2 in" id="changeUnameInputs">
      <input class="form-control" placeholder="New username" name="unameinputCU" id="unameinputCU" type="text"></br>
      <button type="submit" class="btn btn-info btn-m " id="signInButton2">Save</button></br>
    </form></p>

    <!-- Change password -->
    <form class = "in"><button id="changePasswordButton" type="button" class="btn btn-secondary btn-lg btn-block">Change Password</button></form>
    <p><form action="changePassword.php" method="POST" class="col-xs-8 col-xs-offset-2 in" id="changePasswordInputs">
      <input class="form-control" placeholder="Current Password" name="oldpwordinput" id="pwordinputSI" type="password"></br>
      <input class="form-control" placeholder="New Password" name="newpwordinput" id="unameinputSI" type="password"></br>
      <input class="form-control" placeholder="Repeat New Password" name="newpwordinput2" id="pwordinputSI" type="password"></br>
      <button type="submit" class="btn btn-info btn-m " id="signInButton2">Save</button></br>
    </form></p>

    <div class="checkbox">
      <label><input type="checkbox" value="">Twitter</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Facebook</label>
    </div>
    
    



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- home page script -->
    <script src="scripts3.js"></script>
    
  </body>


</html>