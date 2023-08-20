<?php
if($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["email"] !== "" && $_POST["password_input"] !== "") {
    $email = $_POST["email"];
    $password_input = $_POST["password_input"];



    require_once("connection.php");  

    try {
        // Encriptación de contraseña
        $pass_encrypt = password_hash($password_input, PASSWORD_DEFAULT);


        // Crear nuevo usuario con correo electrónico y contraseña encriptada
        $result = $mysqli->query("INSERT INTO t_user (user_email, user_password) 
                                        VALUES ('$email', '$pass_encrypt');");

        //Consulta y guarda en variable global datos del usuario.
        if($result){
            $consulta = $mysqli->query("SELECT * FROM t_user WHERE user_email = '$email'");

            if ($consulta -> num_rows === 1) {    
                $data = $consulta -> fetch_assoc();
                session_start();
                $_SESSION["user_data"] = $data;
                header("location: ../views/profile.php");
            }
        }
                
    } catch (mysqli_sql_exception $e){
        // echo "<br> El número del error es: " . $mysqli->errno; 
        // Error nro. 1062 - Duplicidad para un campo que debe ser unico. (Ya existe)
        if ($mysqli->errno === 1062) {
            session_start();
            $_SESSION["error_message"] = "Email already exists.";
            header("location: ../index.php");
        }   else {
            session_start();
            $_SESSION["error_message"] = "Error: " . $e->getMessage();
            header("location: ../index.php");
        }
    }

} else {
    session_start();
    $_SESSION["error_message"] = "There are empty fields.";
    header("location: ../index.php");
}

?>