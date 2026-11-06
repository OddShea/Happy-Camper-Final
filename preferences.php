<?php

session_start();
include "functions.php";

$error = "";

// Make sure the user is logged in
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {

    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $preferences = $_POST["preferences"] ?? [];

    if (empty($preferences)) {

        $error = "Please select at least one camping preference.";

    } else {

        // Store the preferences in the session
        $_SESSION["preferences"] = $preferences;

        // Send user to recommendations
        header("Location: results.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Camping Preferences - Happy Camper</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <div class="header-container">

        <div class="logo">Happy Camper</div>

        <nav>
            <a href="index.php">Home</a>
            <a href="campsites.php">Campsites</a>
            <a href="login.php">Login</a>
            <a href="about.php">About</a>
        </nav>

    </div>
</header>


<main>

    <div class="form-container">

        <h1>
            Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!
        </h1>

        <p>
            Now that you are logged in, you can tell Happy Camper what
            you are looking for in a campsite. Your username has already
            been saved, so you do not need to enter your personal
            information again. The only information needed on this page
            is your camping preferences.
        </p>

        <p>
            Think about the features that would make your camping trip
            more enjoyable before making your selections. You can choose
            options such as RV parking, pet-friendly locations, fishing,
            hiking trails, showers, and campfires. Selecting preferences
            that are important to you will help Happy Camper find a better match.
        </p>

        <p>
            After you submit this form, your selections will be compared
            with the amenities available at each campsite. Happy Camper
            will use those matches to create your recommendations on the
            next page. You must select at least one preference before
            continuing so the website has information to use.
        </p>


        <?php if ($error != ""): ?>

            <div class="error">
                <?php echo $error; ?>
            </div>

        <?php endif; ?>


        <form method="POST" action="preferences.php">

            <h2>What are you looking for?</h2>

            <div class="checkbox-group">

                <label>
                    <input
                        type="checkbox"
                        name="preferences[]"
                        value="rv"
                    >
                    RV Parking
                </label>

                <label>
                    <input
                        type="checkbox"
                        name="preferences[]"
                        value="pets"
                    >
                    Pets Allowed
                </label>

                <label>
                    <input
                        type="checkbox"
                        name="preferences[]"
                        value="fishing"
                    >
                    Fishing
                </label>

                <label>
                    <input
                        type="checkbox"
                        name="preferences[]"
                        value="hiking"
                    >
                    Hiking Trails
                </label>

                <label>
                    <input
                        type="checkbox"
                        name="preferences[]"
                        value="showers"
                    >
                    Showers
                </label>

                <label>
                    <input
                        type="checkbox"
                        name="preferences[]"
                        value="campfire"
                    >
                    Campfires
                </label>

            </div>


            <input
                type="submit"
                value="Find My Campsites"
            >

        </form>

    </div>

</main>


<footer>
    <p>&copy; 2026 Happy Camper</p>
</footer>

</body>
</html>