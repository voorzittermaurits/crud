<?php
require 'config.php';

//zorg er voor dat de pagina wel echt van de database pakt
$query = "SELECT * FROM `Musea`";
$stmt = $conn->prepare($query);
$stmt->execute();

//haal resultaten op in een array
$resultaten = $stmt->fetchAll();

//aantal resultaten tellen
$aantalRijen = count($resultaten);

include 'index_view.php';