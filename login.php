<?php
session_start();
include('database_connection.php');

if(isset($_POST['login'])){
    $email_unsafe = $_POST['email'];
    $password_unsafe = $_POST['psw'];

    $email = mysqli_real_escape_string($con, $email_unsafe);
    $password = mysqli_real_escape_string($con, $password_unsafe);

    $query = mysqli_query($con, "SELECT * FROM users WHERE email = '$email' AND password = '$password'") or die(mysqli_error($con));

    $row = mysqli_fetch_array($query);

    $emaill = $row['email'];
    $passwordd = $row['password'];
    $counter = mysqli_num_rows($query);

    
    if($counter == 0){
        echo "<script type = 'text/javascript'>
        alert('Invalid Email or Password!');
        document.location = 'loginpage.php';
        </script>"; 
    }
    else{
        $_SESSION['email'] = $emaill;
        echo "<script type = 'text/javascript'>
        document.location = 'profile.php';
        </script>";
        if(!empty($_POST['remember_checkbox'])){
            $remember_checkbox = $_POST['remember_checkbox'];
            //set cookie
            setcookie('email', $emaill, time()+86400);
            setcookie('password', $passwordd, time()+86400);
        }
        else{
            setcookie('email', $emaill, time()-30);
            setcookie('password', $passwordd, time()-30);
        }
    }
}
?>