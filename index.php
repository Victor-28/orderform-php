<?php
//this line makes PHP behave in a more strict way
declare(strict_types=1);

//we are going to use session variables so we need to enable sessions
session_start();
$_SESSION['name'] = 'Victor';

//$cityAlert = $emailAlert = $streetAlert = $numberAlert = $zipAlert = $alert = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["email"]))
        $emailAlert = "email Required ";
    $errormsg = 'failed';
} else {
    $emailAlert = "";
    $mail = $_POST['email'];
    $_SESSION["email"] = $_POST['email'];
    $errormsg = 'success';
}


if (empty($_POST["street"])) {
    $streetAlert = "Street Required ";
} else {
    $streetAlert = "";
    $street = $_POST['street'];
    $_SESSION["street"] = $_POST['street'];
}


if (empty($_POST["streetnumber"])) {
    $numberAlert = "Street number Required ";
} else {
    $numberAlert = "";
    $number = $_POST['street'];
    $_SESSION["streetnumber"] = $_POST['streetnumber'];
}

if (empty($_POST["city"])) {
    $cityAlert = "city Required ";
} else {
    $cityAlert = "";
    $city = $_POST['city'];
    $_SESSION["city"] = $_POST['city'];
}


if (empty($_POST["zipcode"])) {
    $zipAlert = "zipcode Required ";
} else {
    $_SESSION["zipcode"] = $_POST['zipcode'];
    if (!is_numeric($_POST["zipcode"])) {
        $zipAlert = "Please only numbers";
    }

    /*if ($emailAlert==$streetAlert && $streetAlert==$numberAlert && $numberAlert==$cityAlert && $cityAlert==$zipAlert && $zipAlert==""){
        $alert = "alert";
    }*/
}


// the last code was the if else statement to work on zip code only with numbers not letters.


echo $emailAlert;
echo $streetAlert;
echo $numberAlert;
echo $cityAlert;
echo $zipAlert;

$jakki = "";

if ($emailAlert == "" && $streetAlert == "" && $numberAlert == "" && $cityAlert == "" && $zipAlert == "") {

    $jakki = "<strong>Well done!</strong> Your order has been sent.";
}else{
    $jakki = "<strong>Transaction failed</strong> Please check the fields ";
}


function whatIsHappening()
{
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