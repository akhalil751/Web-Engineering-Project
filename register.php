<?php
include('database_connection.php');

if(!isset($_POST['email'], $_POST['psw'])){
    exit('Empty Field(s)');
}

if(empty($_POST['email']) || empty($_POST['psw'])){
    exit("Values empty");
}
if($stmt = $con->prepare('SELECT email, password FROM users WHERE email = ?')){ 
    $stmt->bind_param('s', $_POST['email']);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows>0){
        echo '<script>
        alert("Account already exists. Forget password?");
        document.location = "registerpage.html";
        </script>';
    }
    else
    {
        if($stmt = $con->prepare('INSERT INTO users (email, password) VALUES (?,?)')){
            $stmt->bind_param('ss', $_POST['email'], $_POST['psw']);
            $stmt->execute();
            echo '<script>
            alert("Successfully Registered");
            document.location = "loginpage.php";
            </script>';
        }
        else{
            echo '<script>alert("Error occured!")</script>';
        }
    }
    $stmt->close();
}
else{
    echo '<script>alert("Error occured!")</script>';
}
$con->close();
?>