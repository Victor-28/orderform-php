<?php
//this line makes PHP behave in a more strict way
declare(strict_types=1);

//we are going to use session variables so we need to enable sessions
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $emailAlert = "email Required </br>";
    } else {
        $emailAlert = "";
        $mail = $_POST['email'];
        $_SESSION["email"] = $_POST['email'];
    }


    if (empty($_POST["street"])) {
        $streetAlert = "Street Required </br>";
    } else {
        $streetAlert = "";
        $street = $_POST['street'];
        $_SESSION["street"] = $_POST['street'];
    }


    if (empty($_POST["street number"])) {
        $numbertAlert = "Street number Required </br>";
    } else {
        $numberAlert = "";
        $number = $_POST['street'];
        $_SESSION["street number"] = $_POST['street number'];
    }

    if (empty($_POST["city"])) {
        $cityAlert = "city Required </br>";
    } else {
        $cityAlert = "";
        $city = $_POST['city'];
        $_SESSION["city"] = $_POST['city'];
    }


    if (empty($_POST["zipcode"])) {
        $zipAlert = "zipcode Required </br>";
    } else {
        $zipAlert = "";
        $zip = $_POST['zipcode'];
        $_SESSION["zipcode"] = $_POST['zipcode'];
    }


    if (is_numeric($_POST["zipcode"])) {
        $gaf = $_POST['zipcode'];
        $_SESSION["zipcode"] = $_POST['zipcode'];
    } else {
        $gafAlert = "no number";

    }


function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

//your products with their price.
$products = [
    ['name' => 'Club Ham', 'price' => 3.20],
    ['name' => 'Club Cheese', 'price' => 3],
    ['name' => 'Club Cheese & Ham', 'price' => 4],
    ['name' => 'Club Chicken', 'price' => 4],
    ['name' => 'Club Salmon', 'price' => 5]
];

$products = [
    ['name' => 'Cola', 'price' => 2],
    ['name' => 'Fanta', 'price' => 2],
    ['name' => 'Sprite', 'price' => 2],
    ['name' => 'Ice-tea', 'price' => 3],
];

$totalValue = 0;

require 'form-view.php';