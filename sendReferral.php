<?php
//Get the Referral Information
$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

//Validate Referral Information
if ($firstName == null || $lastName == null || $email = null) {
    echo 'Try again - all fields are required';
} else {
    require_once('referralDatabase.php');
}

//Add Referral Information To Database

$query = 'INSERT INTO referralsSent (firstName, lastName, email) VALUES (:firstName, :lastName, :email)';
$statement = $database->prepare($query);
$statement->bindValue(':firstName', $firstName);
$statement->bindValue(':lastName', $lastName);
$statement->bindValue(':email', $email);
$statement->execute();
$statement->closeCursor();

//echo var_dump($_POST);

//Display Thank You Page
include('thankYou.php');