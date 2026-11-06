<?php

// Start the session if one has not already been started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


// Campsite information
$campsites = [

    [
        "name" => "Blue Ridge Campground",
        "location" => "North Georgia",
        "price" => 25,
        "rv" => true,
        "pets" => true,
        "fishing" => true,
        "hiking" => true,
        "showers" => true,
        "campfire" => true,
        "description" => "Blue Ridge Campground is a peaceful campground in North Georgia's 
        beautiful mountain ranges. This campsite features something for everyone with an 
        extensive range of ammenities for a reasonable price. Visitors can enjoy outdoor 
        activities such as hiking and fishing while taking in the surrounding natural scenery. 
        With RV parking, pet-friendly accommodations, showers, and campfire areas, it 
        offers a comfortable setting for a relaxing camping trip.",
        "image" => "images/blueridge.jpg",
    ],

    [
        "name" => "Lakeview Retreat",
        "location" => "Central Georgia",
        "price" => 20,
        "rv" => false,
        "pets" => true,
        "fishing" => true,
        "hiking" => true,
        "showers" => true,
        "campfire" => true,
        "description" => "Lakeview Retreat offers a relaxing campsite near the lake with plenty 
        of outdoor activities. This site offers many ammenities, short of rv parking, but makes 
        up for it with a great price. Lakeview also allows for small boats and canoes on the property 
        for a small extra fee of $10. There is also a popular campground concession stand 
        where the facilities are located.
        ",
        "image" => "images/lakeview.jpg",
    ],

    [
        "name" => "Pine Creek Campground",
        "location" => "South Georgia",
        "price" => 35,
        "rv" => false,
        "pets" => false,
        "fishing" => true,
        "hiking" => true,
        "showers" => false,
        "campfire" => true,
        "description" => "Pine Creek Campground is a rustic campsite for campers looking for a quieter 
        outdoor experience. This site has moderate ammenities but is in short driving distance of local
        shops, gas stations, and grocery. Unless registered service animals, pets are not allowed on
        the campground. The hiking trails and campsites are highly regarded for their cleanliness 
        and great views.",
        "image" => "images/pinecreek.jpg",
    ]

];


// Clean user input
function cleanInput($data) {

    return htmlspecialchars(trim($data));

}


// Check whether a campsite has a selected preference
function hasPreference($campsite, $preference) {

    if ($preference == "rv") {
        return $campsite["rv"];
    }

    if ($preference == "pets") {
        return $campsite["pets"];
    }

    if ($preference == "fishing") {
        return $campsite["fishing"];
    }

    if ($preference == "hiking") {
        return $campsite["hiking"];
    }

    if ($preference == "showers") {
        return $campsite["showers"];
    }

    if ($preference == "campfire") {
        return $campsite["campfire"];
    }

    return false;

}


// Convert true/false values into Yes/No
function yesNo($value) {

    return $value ? "Yes" : "No";

}


// Remember the user's name with a cookie
function rememberCamper($name) {

    setcookie(
        "camper_name",
        $name,
        time() + (86400 * 30),
        "/"
    );

}

?>