<?php
    //session starts here
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Linking of CSS and Meta data is defined here -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./styles/index.css" />
        <link rel="stylesheet" type="text/css" href="./styles/book.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
        <link rel="stylesheet" href="./styles/login.css">
        <link rel="stylesheet" href="./styles/profile.css">
        <link rel="stylesheet" href="./styles/table.css">
        <title>LifeStream</title>
    </head>
    <body>
        <!-- Navigation Section -->
        <nav>           
            <div class="header-container">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.pngitem.com%2Fpimgs%2Fm%2F49-492638_blood-vector-blood-drop-hd-png-download.png&f=1&nofb=1"
                 alt="blood-drop" srcset=""
                 height="30px"
                 width="40px">
                <h1>Life <span>Stream</span></h1>
            </div>
    
            <div class="nav-content-container">
                <div class="drp-btn" id="drp-btn-id">
                    <i class="fas fa-bars menu-btn"></i>
                    <div class="menu-content-container" id="menu-content-id">
                        <div class="second-enclosure">
                            <div class="menu-close-btn" id="close-btn">
                                <i class="fas fa-times close-btn" ></i>
                            </div>
                            <ul class="menu-content" id="menu-list">
                                <li><a href="./index.php">Home</a></li>
                                <?php 
                                    //Checking whether the session variable is set
                                    if (isset($_SESSION['logged-in'])) {
                                        echo "<li><a href='./profile.php'>Profile</a></li>";
                                        echo "<li><a href='./book.php'>Book</a></li>";
                                        echo "<li><a href='./includes/logout.php'>Logout</a></li>";
                                    } else {
                                        echo "<li><a href='./login.php'>Login</a></li>";
                                    }
                                ?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>  
        </nav>

        <main>