<?php
$servername = "localhost";      //
$username = "db088086";
$password = "o6pMUtU_4w";
$dbname = "088086_program2";

//laat een error report zien, schools error report staat uit dus wij moeten dit zelf toevoegen.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, $options);
    //echo "Connected successfully";
} catch (PDOException $e) {
    echo "connection failed: " . $e->getMessage();
}
