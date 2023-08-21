<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/assets/css/index.css" />
    <script src="/js/dark.js" defer></script>
    <title>Register</title>
    
</head>
<body>

    <div id="main-container" class="" >

        <label for="chk-dark-light-mode" id="lbl-dark-light-mode"><img src="/assets/images/dark_mode.svg" alt="dark-icon"></label>
        <input type="checkbox" id="chk-dark-light-mode" />

        <form id="card" method="post" action="/db/create.php" >
            <div id="dev-logo">
                <img src="/assets/images/devchallenges.svg" alt="devchallenges icon">
            </div>
            <div id="card-title-container">
                <h2 class="card-title">
                    Join thousands of learners from around the world
                </h2>
            </div>

            <div id="card-p-subtitle">
                <p class="p-subtitle">Master web development by making real-life projects. There are multiple paths for you to choose</p>
            </div>

            <?php
                session_start();
                if(isset($_SESSION["error_message"])) {
                    ?> 
                    <span id="error"> 
                        <?php
                        echo $_SESSION["error_message"];
                        unset($_SESSION["error_message"]);
                        ?>
                    </span>
                    <?php
                }
            ?>

            <div class="input-box">
                <span class="input-icon">
                    <img src="/assets/images/mail.svg" alt="email-icon"> 
                </span>
                <input type="email" class="input-text" placeholder="Email" name="email" required >
            </div>

            <div class="input-box">
                <span class="input-icon">
                    <img src="/assets/images/lock.svg" alt="clave-icon">
                </span>
                <input type="password" class="input-text" placeholder="Password" name="password_input" required>
            </div>
            <button type="submit" class="btn-input">Start coding now</button>



            <p>or continue with these social profile</p>
            <div id="icons">
                <img src="/assets/images/Google.svg" alt="Google-icon" class="btn-icons">
                <img src="/assets/images/Facebook.svg" alt="Facebook-icon" class="btn-icons">
                <img src="/assets/images/Twitter.svg" alt="Twitter-icon" class="btn-icons">
                <img src="/assets/images/Gihub.svg" alt="GitHub-icon" class="btn-icons">
            </div>
            <p>Adready a member? <a href="/views/login.php">Login</a> </p>
        </form>
        <footer>
            <p>created by <a href="https://linktr.ee/FrancescoGaliano"><b>FrancescoGaliano</b></a></p>
            <p>devChallenges.io</p>
        </footer>
    </div>
</body>
</html>