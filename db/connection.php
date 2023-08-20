<?php
    $host = "localhost";
    $username= "root";
    $password = "";
    $dbname = "authentication";

    try {
        $mysqli = new mysqli($host, $username, $password, $dbname);
        //echo "Conectado con éxito";
    } catch (mysqli_sql_exception $e) {
        echo "Error: " . $e->getMessage();
    }
?>
