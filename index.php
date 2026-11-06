<?php
include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Happy Camper</title>
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

    <section class="hero">

        <h1>Find Your Perfect Campsite</h1>

        <div class="hero-text">

        <p>
            Happy Camper helps you find a campsite that matches
            your camping style and preferences. We pride ourselves
            on our ability to deliver a personalized experience to
            every user. Tired of slogging through each and every 
            website just to figure out if it suits you?
        </p>

        <p>
            Whether you are looking for hiking trails, fishing,
            pet-friendly sites, RV parking, or other amenities,
            we can help you find a campsite that fits your needs.
            You're just one click away from finding the spot
            of your dreams! Click the 'Get Started' button to
            sign up and customize your preferences!
        </p>

        <p>
            After filling out your preferences, Happy Camper will
            show you your options as well as how much they align
            with your choices. From there, you can read the provided
            info on each option to get a better idea of the 
            campsites. Get started now and happy camping!

        </div>
        <img
            src="images/homepage.jpg"
            alt="A campsite surrounded by mountains and trees"
            class="hero-image"
        >

        <a class="button" href="preferences.php">
            Get Started
        </a>

    </section>


    <section class="features">

        <div class="feature-box">
            <h3>Choose Your Preferences</h3>
            <p>
                Tell us what amenities and activities
                you want during your camping trip.
            </p>
        </div>

        <div class="feature-box">
            <h3>Explore Campsites</h3>
            <p>
                Browse information about the campsites
                available through Happy Camper.
            </p>
        </div>

        <div class="feature-box">
            <h3>Get Recommendations</h3>
            <p>
                Receive campsite suggestions based on
                the preferences you selected.
            </p>
        </div>

    </section>

</main>


<footer>
    <p>&copy; 2026 Happy Camper</p>
</footer>

</body>
</html>