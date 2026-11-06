<?php
include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About - Happy Camper</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>

    <div class="header-container">

        <div class="logo">
            Happy Camper
        </div>

        <nav>
            <a href="index.php">Home</a>
            <a href="campsites.php">Campsites</a>
            <a href="login.php">Login</a>
            <a href="about.php">About</a>
        </nav>

    </div>

</header>


<main>

    <h1>About Happy Camper</h1>

    <p>
        Happy Camper is a camping recommendation website created to help 
        users find campsites based on the features that matter most to them. 
        This website provides information about several camping locations 
        and allows users to compare their available amenities. Rather than 
        requiring users to search through every campsite individually, Happy 
        Camper uses the user's preferences to narrow down their choices. 
        The goal is to create a simple and straightforward camping recommendation 
        experience.
    </p>

    <p>
        Our website is designed with families, groups of friends, and 
        people who may be new to camping in mind. Instead of spending 
        hours trying to narrow down a suitable campsite, users can 
        focus on finding the activities and amenities that are important 
        to them. Camping is an experience that should be enjoyed to the 
        fullest, whether someone is exploring hiking trails, fishing 
        by a lake, or spending time outdoors with family and friends. 
        We aim to make the planning process easier so users can spend 
        less time searching and more time looking forward to their 
        camping trips. Happy Camper hopes to make finding a suitable 
        campsite a more enjoyable experience for everyone.
    </p>

    <p>
        Happy Camper is a student project for a PHP Programming 1
        course and is created to demonstrate PHP programming 
        concepts including forms, arrays, loops, functions, cookies, 
        sessions, and input validation. The campsite information 
        used by the website is provided through PHP arrays rather 
        than a live reservation system. Users can select their 
        preferences and receive recommendations based on the 
        amenities available at each campsite. This project 
        demonstrates how PHP can be used to create an interactive 
        website that collects user input and displays useful information.
        
    </p>

    <div class="about-image-container">
    <img
        src="images/about-camping.jpg"
        alt="A peaceful campsite surrounded by trees and mountains"
        class="about-image"
    >
</div>

</main>


<footer>
    <p>&copy; 2026 Happy Camper</p>
</footer>

</body>
</html>