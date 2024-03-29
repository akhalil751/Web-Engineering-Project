<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="stylesheet-home.css">
    <link rel="stylesheet" href="stylesheet-loginpage.css">
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.css">
</head>



<body>
    <div class="navbar">
        <div class="navbar-left">
            <a href="index.html"><img src="Images/logo.png" alt="Website Logo" style="width: 50px; height: 50px; margin-left: 20px;"></a>
        </div>
        <div class="navbar-right">
            <a class="navbar-item" href="blankpage alt.html">How it works</a>
            <a class="navbar-item" href="blankpage.html">Solutions</a>
            <a class="navbar-item" href="blankpage alt.html">Resources</a>
            <a class="btn btn-outline-primary btn-sm navbar-item" href="registerpage.html">REGISTER NOW FOR FREE</a>
        </div>
    </div>


    <div class="container">
        <h1 >Login</h1>
    <hr>
    <form action="login.php" method="post">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required value="<?php
        if(isset($_COOKIE['email'])){
          echo $_COOKIE['email'];
        }
        ?>">
    
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required value="<?php
      if(isset($_COOKIE['password'])){
        echo $_COOKIE['password'];
      }
      ?>">
    
        Remember Me &nbsp;
        <input type="checkbox" name="remember_checkbox" id="rememberme">
        <hr>
    
        <button type="submit" class="loginbtn" id="loginbtn" name="login" onclick="Validate()">login</button>
    </form>    
    </div>
    <script type = "text/javascript">
        function Validate(){
        //Email Validation
        var email_input = document.getElementById('email');
        var email_regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(email_input.value == ""){
          alert("You did not enter an email address \n" + "Please enter one now");
          email_input.focus();
          return false;
        }
        if(!email_input.value.match(email_regex)){
          alert("Please enter a valid email.");
          return false;
        }
        //Checks if two passwords are entered correctly
        var init = document.getElementById("psw"); 
        if(init.value == ""){
          alert("You did not enter a password \n" + "Please enter one now");
          init.focus();
          return false;
        }
        //Password Validation
        var pw_input = document.getElementById('psw');
        var pw_regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
        if(!pw_input.value.match(pw_regex)){
          alert("Password must be between 8 to 15 characters, which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character");
          return false;
        }
        return true;
        }
    </script>
</body>
</html>