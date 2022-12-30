<?php
session_start();
if(empty($_SESSION['email'])){
    header('Location: loginpage.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="icon" type="image/x-icon" href="/Images/logo.png">
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="profile-stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&family=Satisfy&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/50c951c3e7.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="navbar">
        <div class="navbar-left">
            <a href="index.html"><img src="Images/logo.png" alt="Website Logo" style="width: 50px; height: 50px; margin-left: 20px;"></a>
            <div class="search-box">
                <input type="text" class="search-txt" name="" placeholder="Search for people">
                <a href="#" class="search-btn">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
            </div>
        </div>
        <div class="navbar-right">
            <a class="navbar-item peoplebtn" href="blankpage alt.html" onmouseover="togglePeopleMenu()">People <i class='bx bx-chevron-down people-arrow'></i></a>
            <ul class="people-sub-menu sub-menu" id="peoplesubmenu" onmouseleave="togglePeopleMenu()">
                <li><a href="#">Teams</a></li>
                <li><a href="#">Coworkers</a></li>
                <li><a href="#">Customers</a></li>
                <li><a href="#">Candidates</a></li>
            </ul>
            <a class="navbar-item toolsbtn" href="blankpage.html" onmouseover="toggletoolsMenu()">Tools <i class='bx bx-chevron-down tools-arrow'></i></a>
            <ul class="tools-sub-menu sub-menu" id="tools-submenu" onmouseleave="toggletoolsMenu()">
                <li><a href="#">Chrome Extension</a></li>
                <li><a href="#">Quick Tips</a></li>
                <li><a href="#">Writing Assistant</a></li>
            </ul>
        </div>
    </div>
    <div class="container-fluid pinfo">
        <br><br>
        <div class="row header_row">
            <div class="col-2 pinfo_left">
                <img src="https://www.crystalknows.com/static/share/images/profile-placeholder.svg" alt="Profile Icon" class="profile_pic">
                <br><br>
                <h1 class="profile_name">Profile Name</h1>
                <br>
            </div>
            <div class="col-10">
                <div class="pinfo_right">
                    <p>Get started by taking our personality assessment test,</p>
                    <div class="assess_text">and let us work our<span class="magic">&nbsp;Magic!!</span></div>
                </div>
            </div>
        </div>
        <div class="row footer_row">
            <form action="logout.php" method="post">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="logout">Logout</button>
            </form>
            <a href="test.html" class="button">TAKE TEST</a>
        </div>
    </div>
    <div class="container-fluid">

    </div>
    </div>
    <script type = "text/javascript">
        var peopleMenu = document.getElementById("peoplesubmenu");
        var toolsMenu = document.getElementById("tools-submenu");
        function togglePeopleMenu(){
            peopleMenu.classList.toggle("open-menu");
        }
        function toggletoolsMenu(){
            toolsMenu.classList.toggle("open-menu");
        }
    </script>
</body>
</html>