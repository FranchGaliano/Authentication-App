<?php
    $host = "localhost";
    $username= "root";
    $password_server = "";
    $dbname = "authentication";

    try {
        $mysqli = new mysqli($host, $username, $password_server, $dbname);
        //echo "Conectado con éxito";
    } catch (mysqli_sql_exception $e) {
        echo "Error: " . $e->getMessage();
    }
?>
