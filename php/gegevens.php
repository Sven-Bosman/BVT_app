<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/gegevens.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Gegevens</title>
</head>
<body>
<header>
        <nav>
            <ul>
                <li class="h-list"><button>Form</button></li>
                <li class="h-list"><a href="../Index.php">Home</a></li>
            </ul>
        </nav>
    </header>

<main>
    
    <?php
    // Functie om CSV-bestand naar een PHP-array te converteren
    function csvToPhpArray($csvFile) {
        $csvData = [];

        // Open het CSV-bestand om te lezen
        if (($handle = fopen($csvFile, "r")) !== FALSE) {
            // Loop door elke rij in het CSV-bestand
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                // Voeg de rij toe aan de array
                $csvData[] = $data;
            }
            fclose($handle);
        }

        return $csvData;
    }

    // CSV-bestandspad
    $csvFile = "../log/log.csv";

    // Gebruik de functie om CSV naar PHP-array te converteren
    $csvData = csvToPhpArray($csvFile);

    // HTML tabel weergave
    echo "<table border='1'>";
    foreach ($csvData as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    // Optioneel: Opslaan van de PHP-code in een bestand
    // file_put_contents("output.php", $phpCode);
    ?>

</main>
</body>
</html>
