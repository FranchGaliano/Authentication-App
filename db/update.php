<?php
if($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["email"] !== "" && $_POST["password"] !== "") {
    var_dump($_FILES); 

    try {
        require_once("connection.php");  
        session_start();
        
        $user_id = intval($_SESSION["user_data"]["user_id"]);
        $current_email = $_SESSION["user_data"]["user_email"];

        if (isset($_FILES["image"])){
            $image = $_FILES["image"];  
            $type = $_FILES["image"]["type"];
            // typeString must be equal to "image"
            $typeString = substr($type, 0, 5);

            if($typeString !== "image") {
                $_SESSION["error_img"] = "You can only upload images.";
            }

            if($typeString === "") {
                unset($_SESSION["error_img"]);
            }

            // 10MB = 10 000 000;
            if($image["size"] > 10000000){
                $_SESSION["error_img"] = "The image must be less than 10 MB.";
            }

            if ($typeString === "image" && $image["size"] < 10000000){
                $rutaTemporal = $_FILES["image"]["tmp_name"];
                var_dump($rutaTemporal);
                $rutaAlmacenamiento = "../data/". $_FILES["image"]["name"];   
                var_dump($rutaAlmacenamiento); 
                move_uploaded_file($rutaTemporal, $rutaAlmacenamiento);          
            
                $new_Url = "/data/". $_FILES["image"]["name"];
                $mysqli->query("UPDATE t_user SET user_url_foto='$new_Url' WHERE user_id=$user_id;" );
            }           
        }
    
        if (isset($_POST["name"]) && $_POST["name"] !== "" ) {
            $name = $_POST["name"];
            $mysqli->query("UPDATE t_user SET user_fullname='$name' WHERE user_id=$user_id;" );
        }

        if (isset($_POST["bio"]) && $_POST["bio"] !== "" ) {
            $bio = $_POST["bio"];
            $mysqli->query("UPDATE t_user SET user_bio='$bio' WHERE user_id=$user_id;" );
        }
        
        if (isset($_POST["phone"]) && $_POST["phone"] !== "" ) {
            $phone = $_POST["phone"];
            $mysqli->query("UPDATE t_user SET user_phone='$phone' WHERE user_id=$user_id;" );
        }

        if (isset($_POST["email"]) && $_POST["email"] !== "" && $_POST["email"] !==  $current_email) {
            $email = $_POST["email"];            
            $mysqli->query("UPDATE t_user SET user_email='$email' WHERE user_id=$user_id;" );
        }

        if (isset($_POST["password"]) && $_POST["password"] !== "" ) {
            $password = $_POST["password"];
            // Encriptación de contraseña
            $pass_encrypt = password_hash($password, PASSWORD_DEFAULT);
            $mysqli->query("UPDATE t_user SET user_password='$pass_encrypt' WHERE user_id=$user_id;" );
        }

        $consulta = $mysqli->query("SELECT * FROM t_user WHERE user_id=$user_id;");
        if ($consulta -> num_rows === 1) {    
            $data = $consulta -> fetch_assoc();
            $_SESSION["user_data"] = $data;
            header("location: ../views/profile.php");
        }



    } catch (mysqli_sql_exception $e) {
        // echo "<br> El número del error es: " . $mysqli->errno; 
        // Error nro. 1062 - Duplicidad para un campo que debe ser unico. (Ya existe)
        if ($mysqli->errno === 1062) {
            session_start();
            $_SESSION["error_message"] = "Email already exists.";
            header("location: ../views/edit.php");
        }   else {
            session_start();
            $_SESSION["error_message"] = "Error: " . $e->getMessage();
            header("location: ../views/edit.php");
        }
    }
} else {
    session_start();
    $_SESSION["error_message"] = "New password required.";
    header("location: ../views/edit.php");
}
 
?>