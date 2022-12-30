<?php
session_start();
include('database_connection.php');

if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    echo "<script type = 'text/javascript'>
        document.location = 'loginpage.php';
        </script>";
}
?>