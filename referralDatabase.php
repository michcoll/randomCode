<?php
/***CODE USED TO CREATE DATABASE IN MYSQL WORKBENCH***
CREATE TABLE referralsSent (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstName VARCHAR(30) NOT NULL,
lastName VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
);
 */
$dataSourceName = 'mysql:host=localhost;dbname=referral';
$username = 'admin';
$password = '123456789';

try {
    $database = new PDO($dataSourceName,$username,$password);
} catch (PDOException $e) {
    $errorMessage = $e ->getMessage();
    include('databaseErrorPage.php');
    exit();
}
