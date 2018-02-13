<?php
      session_start();
      require "dbconfig.php";
      if (isset($_POST['submit']))
      {
        $username=$_POST['user'];
        $password=$_POST['password'];
        $query="select  *from user_info WHERE username='$username' AND password='$password'";
        $query_run=mysqli_query($con,$query);
        if(mysqli_num_rows($query_run)>0)
        {
          $_SESSION['user']=$username;
          header("location:dashboard.php");
        }
        else {
        echo '<script type="text/javascript"> alert("Wrong Data..try again bitch")</script>';
        }
      }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon-96.png">
    <link rel="stylesheet" href="login.css" />
    <meta name="viewport" content="width=device-width" />
      <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Nanum+Myeongjo|Rammetto+One" rel="stylesheet">
  </head>
  <body>
    <header>
    <div class="container">
      <div id="branding">
        <h1><span id="tag">Events</span>  Informer</h1>
      </div>
      <div class="nav">
        <ul>
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>
            <a href="#">Log In</a>
          </li>
          <li>
            <a href="">Sign Up</a>
          </li>
          <li>
            <a href="contactus.html">Reach To Us</a>
          </li>
          <li>
            <a href="aboutus.html">About Us</a>
          </li>
        </ul>
      </div>
    </div>
    </header>

    <div class="info">
      <h2>Benefits Of Signing Up !!</h2>
      <ul>
        <li>
          Be Updated 24/7.
        </li>
        <li>
          Notifications of Events sent to your mail.
        </li>
        <li>
          All info in one place.
        </li>
        <li>
          Events updated through 1000 colleges.
        </li>
        <li>
          Info from all over India.
        </li>
      </ul>
    </div>

    <div class="form">
      <form action="login.php" method="post">
        <h4>Login Securely</h4>
        Username/Email:
        <br />
        <input type="text" placeholder="enter username/email" name="user" />
      </br>
        Password:
      </br>
      <input type="password" placeholder="enter password" name="password" />
    </br>
  </br>
      <button type="submit" class="button" name="submit">Log In</button>
      </form>
    </div>

<div class="points">
  <h5>Points To Remember</h5>
  <ul>
  <li>
    Your data is completely safe with us.
  </li>
  <li>
    All Data is Encrypted .
  </li>
  <li>
    Your email is not shared with any third party sites.
  </li>
  <li>
    We Won't spam you like others.
  </li>
  </ul>
</div>
<footer>
  <p>
    Desgined and developed with &hearts; by Rudy
  </p>
</footer>
  </body>
</html>
