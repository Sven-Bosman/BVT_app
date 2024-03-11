<?php
@include_once '../dbh/dbh.php'; 
// Verbindingsgegevens voor de database
// Maak verbinding met de database


// Query om alle gegevens uit de database op te halen
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gegevens opvragen uit Database</title>
</head>
<body>

<h1>Gegevens opvragen uit Database</h1>

<?php
// Controleer of er resultaten zijn
if ($result->num_rows > 0) {
    // Toon de gegevens in een tabel
    echo "<table border='1'>
            <tr>
                <th>Naam</th>
                <th>E-mail</th>
                <th>Bericht</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["naam"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["bericht"] . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "Geen gegevens gevonden in de database.";
}

// Sluit de databaseverbinding
$conn->close();
?>

</body>
</html>