<?php

include "functions.php";

$message = "";


// -----------------------------------
// LOG OUT
// -----------------------------------

if (isset($_POST["logout"])) {

    // Remove all session variables
    $_SESSION = [];

    // Destroy the current session
    session_destroy();

    // Start a new session so the login page can display normally
    session_start();

    $message = "You have been logged out successfully.";
}


// -----------------------------------
// LOG IN
// -----------------------------------

if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["logout"])) {

    $username = cleanInput($_POST["username"] ?? "");
    $password = cleanInput($_POST["password"] ?? "");


    // Check that both fields contain information
    if (empty($username) || empty($password)) {

        $message = "Please enter both a username and password.";

    } else {

        // Store login information in the session
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $username;

        // Remember the username with a cookie
        rememberCamper($username);

        // Send the user to the preferences page
        header("Location: preferences.php");
        exit;

    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Sign Up / Login - Happy Camper</title>

    <link rel="stylesheet" href="style.css">

</head>


<body>


<header>

    <div class="header-container">

        <div class="logo">
            Happy Camper
        </div>


        <nav>

            <a href="index.php">
                Home
            </a>

            <a href="campsites.php">
                Campsites
            </a>

            <?php if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true): ?>

                <a href="login.php">
                    Account
                </a>

            <?php else: ?>

                <a href="login.php">
                    Login
                </a>

            <?php endif; ?>

            <a href="about.php">
                About
            </a>

        </nav>

    </div>

</header>


<main>


    <div class="form-container">


        <h1>
            Sign Up / Login
        </h1>


        <?php if ($message != ""): ?>

            <div class="success">

                <?php echo $message; ?>

            </div>

        <?php endif; ?>


        <?php if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true): ?>


            <!-- LOGGED-IN VIEW -->


            <p>

                You are currently logged in as
                <strong>
                    <?php echo htmlspecialchars($_SESSION["username"]); ?>
                </strong>.

            </p>


            <p>

                Your Happy Camper session allows you to move between
                the website pages and use the campsite recommendation
                system without having to log in again.

            </p>


            <p>

                When you are finished using Happy Camper, you can
                log out below. Logging out will end your current
                session and require you to log in again before
                accessing your camping preferences.

            </p>


            <a class="button" href="preferences.php">

                Go to Preferences

            </a>


            <form method="POST" action="login.php">

                <input
                    type="submit"
                    name="logout"
                    value="Logout"
                >

            </form>


        <?php else: ?>


            <!-- LOGGED-OUT VIEW -->


            <p>

                Welcome to Happy Camper! Before you begin looking
                for a campsite, enter a username and password to
                start your session. Your username will be used to
                identify you while you use the recommendation system.
                We recommend using your name or a similar variation 
                for a more personal experience.

            </p>


            <p>

                Happy Camper uses PHP sessions and cookies to
                demonstrate how a website can remember information
                about its users. Your session allows the website to
                recognize you as you move between pages, while a
                cookie can remember your username for a future visit.

            </p>


            <p>

                This login is designed for demonstration purposes
                and does not create a permanent online account.
                The website does not collect payment information
                or process real campsite reservations. Feel free
                to log out at any time or log in to a different account.
                The site will remember both log-ins and log-outs.

            </p>


            <form method="POST" action="login.php">


                <label for="username">

                    Username

                </label>


                <input
                    type="text"
                    id="username"
                    name="username"
                    required
                >


                <label for="password">

                    Password

                </label>


                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                >


                <input
                    type="submit"
                    value="Login"
                >


            </form>


        <?php endif; ?>


    </div>


</main>


<footer>

    <p>
        &copy; 2026 Happy Camper
    </p>

</footer>


</body>

</html>