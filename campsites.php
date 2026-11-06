<?php
include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Campsites - Happy Camper</title>
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

    <h1>Our Campsites</h1>

    <p>
        Explore the campsites available through Happy Camper.
        Each campsite offers different activities and amenities 
        to suit a variety of camping preferences. You can compare
        locations, prices, and available features to learn more
        about what each campsite has to offer.
    </p>

    <p>
        Use this page to learn about each location before
        completing the preference form. The information provided
        can help you decide which amenities and activities are
        most important for your camping trip. Take your time
        reviewing the campsite descriptions and available features.
    </p>

    <p>
        When you are ready, use our recommendation system
        to find campsites that match your preferences.
        Select the activities and amenities you are looking 
        for to help narrow down your options. Happy Camper will 
        compare your selections with the campsite information and 
        display recommendations based on your choices.
    </p>


    <div class="campsite-grid">

        <?php foreach ($campsites as $campsite): ?>

            <div class="campsite-card">

                <h2>
                    <?php echo $campsite["name"]; ?>
                </h2>

                <img
                    src="<?php echo htmlspecialchars($campsite['image']); ?>"
                    alt="<?php echo htmlspecialchars($campsite['name']); ?>"
                    class="campsite-image"
                >

                <p>
                    <strong>Location:</strong>
                    <?php echo $campsite["location"]; ?>
                </p>

                <p>
                    <strong>Price:</strong>
                    $<?php echo $campsite["price"]; ?> per night
                </p>

                <p>
                    <?php echo $campsite["description"]; ?>
                </p>

                <p>
                    <strong>RV Parking:</strong>
                    <?php echo yesNo($campsite["rv"]); ?>
                </p>

                <p>
                    <strong>Pets:</strong>
                    <?php echo yesNo($campsite["pets"]); ?>
                </p>

                <p>
                    <strong>Fishing:</strong>
                    <?php echo yesNo($campsite["fishing"]); ?>
                </p>

                <p>
                    <strong>Hiking:</strong>
                    <?php echo yesNo($campsite["hiking"]); ?>
                </p>

                <p>
                    <strong>Showers:</strong>
                    <?php echo yesNo($campsite["showers"]); ?>
                </p>

                <p>
                    <strong>Campfire:</strong>
                    <?php echo yesNo($campsite["campfire"]); ?>
                </p>

            </div>

        <?php endforeach; ?>

    </div>

</main>

<footer>
    <p>&copy; 2026 Happy Camper</p>
</footer>

</body>
</html>