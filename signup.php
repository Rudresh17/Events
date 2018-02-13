<?php

      require("dbconfig.php");
      if(isset($_POST['submit']))
      {
        $user=$_POST['user'];
        $pass=$_POST['password'];

        $query="select * from user_info WHERE username='$user'";
        $qrun=mysqli_query($con,"$query");

        if(mysqli_num_rows($qrun)>0)
        {
          echo '<script type="text/javascript"> alert("yser there,,give new name")</script>';
        }
        else
        {
          $query="insert into user_info values('$user','$pass')";
          $qrun=mysqli_query($con,"$query");

          if($qrun)
          {
            echo '<script type="text/javascript"> alert("done,go to login page")</script>';
            header("location:login.php");
          }
        }
      }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css" />
    <meta name="viewport" content="width=device-width" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Nanum+Myeongjo|Rammetto+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Acme|Open+Sans+Condensed:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>
    <header>
    <div class="container">
      <div id="branding">
        <img src="images/Logo (png).png" />
      </div>
      <div class="nav">
        <ul>
          <li>
            <a href="index.html" class="button">Home</a>
          </li>
          <li>
            <a href="login.html" class="button">Log In</a>
          </li>
          <li>
            <a href="" class="button">Sign Up</a>
          </li>
          <li>
            <a href="contactus.html" class="button">Reach To Us</a>
          </li>
          <li>
            <a href="aboutus.html" class="button">About Us</a>
          </li>
        </ul>
      </div>
    </div>
    </header>
    <br />

        <div class="form">
          <form action="signup.php" method="post">
            <h4>Sign Up Securely</h4>
            Username/Email:
            <br />
            <input type="text" placeholder="enter username/email" name="user" />
          </br>
            Password:
          </br>
          <input type="password" placeholder="enter password" name="password" />
        </br>
      </br>
          <button type="submit" class="button" name="submit">Sign  Up</button>
          </form>
        </div>
  </body>
</html>
