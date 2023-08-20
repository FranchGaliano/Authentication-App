<?php
if($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["email"] !== "" && $_POST["password_input"] !== "") {
    $email = $_POST["email"];
    $password_input = $_POST["password_input"];

    require_once("connection.php");  

    try {
        $consulta = $mysqli->query("SELECT * FROM t_user WHERE user_email = '$email';");
        if ($consulta -> num_rows === 1) {    
            $data = $consulta -> fetch_assoc();
            $pass_encrypt = $data["user_password"];
            var_dump($password_input);
            var_dump($pass_encrypt);

            $verify = password_verify($password_input, $pass_encrypt);
            var_dump($verify);

            if($verify) {
                session_start();
                $_SESSION["user_data"] = $data;
                header("location: ../views/profile.php");
            } else {
                session_start();
                $_SESSION["error_message"] = "Credentials do not match.";
                header("Location: ../views/login.php");
            }            
        } else {
            session_start();
            $_SESSION["error_message"] = "Check your access credentials.";
            header("Location: ../views/login.php");
        }
                
    } catch (mysqli_sql_exception $e){
        session_start();
        $_SESSION["error_message"] = "Error: " . $e->getMessage();
        header("Location: ../views/login.php");
    }

} else {
    session_start();
    $_SESSION["error_message"] = "There are empty fields.";
    header("Location: ../views/login.php");
}

?>