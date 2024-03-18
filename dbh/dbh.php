<?php

class DatabaseConnection {
    private static $conn;

    public static function connect() {
        // Verbindingsgegevens voor de database
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'BVT';

        // Maak verbinding met de database
        self::$conn = new mysqli($hostname, $username, $password, $database);

        // Controleer op fouten bij het maken van de verbinding
        if (self::$conn->connect_error) {
            die("Databaseverbinding mislukt: " . self::$conn->connect_error);
        }

        return self::$conn;
    }

    public static function closeConnection() {
        // Sluit de databaseverbinding
        if (self::$conn) {
            self::$conn->close();
        }
    }

    public static function Create(){
        $sql = "CREATE TABLE IF NOT EXISTS voorbeeld (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            naam VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            geboortedatum DATE
        )";; 

        if(self::$conn->query($sql) === true){
            return true; 
        }
        else{
            return false; 
        }
    }
    
    public static function read($table, $condition = "") {
        $sql = "SELECT * FROM $table $condition";
        $result = self::$conn->query($sql);

        if ($result) {
            $data = array();

            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }

            return $data;
        } else {
            return false;
        }
    }

    public static function update($table, $data, $condition) {
        // $data moet een associatieve array zijn van veldnamen en waarden
        $set = array();

        foreach ($data as $key => $value) {
            $set[] = "$key = '$value'";
        }

        $set = implode(", ", $set);

        $sql = "UPDATE $table SET $set WHERE $condition";

        if (self::$conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public static function delete($table, $condition) {
        $sql = "DELETE FROM $table WHERE $condition";

        if (self::$conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }











}

// Gebruik de connectie functie
DatabaseConnection::connect();

// Hier voer je de databasebewerkingen uit...

// Sluit de databaseverbinding wanneer klaar
