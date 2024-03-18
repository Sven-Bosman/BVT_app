<?php
@include_once '../dbh/dbh.php'; 

$submitMethod = ''; // Maak een variabele om de verzendingsmethode op te slaan

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $submitMethod = "Formulier succesvol verwerkt via POST";
    
    // Verkrijg formuliervelden
    $naam = $_POST["naam"];
    $email = $_POST["email"];
    $bericht = $_POST["bericht"];

    // Creëer een CSV-bestand of open het bestaande bestand om gegevens toe te voegen
    $bestandsnaam = "log/log.csv";

    // Als het bestand nog niet bestaat, voeg de koppen toe
    if (!file_exists($bestandsnaam)) {
        $bestand = fopen($bestandsnaam, "a");
        fputcsv($bestand, array("Naam", "E-mail", "Bericht"));
        fclose($bestand);
    }

    // Voeg gegevens toe aan het CSV-bestand
    $bestand = fopen($bestandsnaam, "a");
    fputcsv($bestand, array($naam, $email, $bericht));
    fclose($bestand);
}

?>










