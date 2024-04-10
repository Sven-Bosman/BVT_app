<?php
@include_once '../dbh/dbh.php'; 

$submitMethod = ''; // Maak een variabele om de verzendingsmethode op te slaan

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $submitMethod = "Formulier succesvol verwerkt via POST";
    
    // Verkrijg formuliervelden
    $naam = $_POST["naam"];
    $email = $_POST["email"];
    $bericht = $_POST["bericht"];
    $checked = $_POST["check"]; 
     
    // Creëer een CSV-bestand of open het bestaande bestand om gegevens toe te voegen
    $bestandsnaam = "log/log.csv";

    // Als het bestand nog niet bestaat, voeg de koppen toe
    if (!file_exists($bestandsnaam) && $checked == true) {
        $bestand = fopen($bestandsnaam, "a");
        fputcsv($bestand, array(" Naam ", " E-mail ", " Bericht ", " Datum ", "check", "week", "vraag", "antwoord", "batterij-1", "batterij-2", "baterrij-3"));
        $waarde = " Waar ";

        fclose($bestand);
    }

    elseif(!file_exists($bestandsnaam) && $checked == false){
        echo"vergeten in te checken."; 
        $bestand = fopen($bestandsnaam, "a");
        fputcsv($bestand, array(" Naam ", " E-mail ", " Bericht ", " Datum ", "check", "week", "vraag", "antwoord", "batterij-1", "batterij-2", "baterrij-3"));
        $waarde = " False "; 
        fclose($bestand);
    }

    elseif(file_exists($bestandsnaam) && $checked == true){
        $bestand = fopen($bestandsnaam, "a");
        $waarde = " Waar ";
        fclose($bestand);
    }

    elseif(file_exists($bestandsnaam) and $checked == false){
        echo"vergeten in te checken."; 
        $bestand = fopen($bestandsnaam, "a");
        $waarde = " False "; 
        fclose($bestand);
    }
        
    

    // Voeg gegevens toe aan het CSV-bestand
    $bestand = fopen($bestandsnaam, "a");
    fputcsv($bestand, array($naam, $email, $bericht, date('Y:m:d'), $waarde, date("W")));
    fclose($bestand);
}

?>








<!--
Ga jij met fiets of de auto/OV naar je werk of stage? Heb je een keuze?

Wat heb jij nodig om fit te blijven in je werk/stage?

Dilemma: Altijd staand werken of altijd zittend werken?

Wat doe jij het liefst tijdens een pauze van je werk/stage? Geeft dat je energie?

Eet en drink jij genoeg tijdens een werk/stage dag?

Vraag jij je collega’s weleens om samen een rondje te lopen in de pauze van je werk/stage?

Met wie praat jij op het werk of stage als jouw mentale batterij in het rood staat? 

Wat vind jij het gezelligste moment van een werk of stageweek?

Praat je met vrienden of familie wel eens over wat je meemaakt tijdens je werk/stage?

Denk jij zo over je werk/stage?; “Ik beweeg meer dan genoeg op een werk/stage dag, sport hoeft dan niet meer.”

Krijg jij van een gezonde lunch tijdens een werk/stage dag meer energie van dan een vette hap?

-->