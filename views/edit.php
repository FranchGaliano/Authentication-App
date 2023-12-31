<?php
    session_start();
    if(!isset($_SESSION["user_data"])) {
        $_SESSION["error_message"] = "You are not logged in.";
        header("Location: ../views/login.php");
    } else {
        $data = $_SESSION["user_data"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/assets/css/edit.css" />
    <script src="/js/main.js" defer></script>
    <script src="/js/darkEdit.js" defer></script>

    <title>Change Info</title>

</head>
<body>
    <div id="top-header" class="">
        <div id="dev-logo">
            <img src="/assets/images/devchallenges.svg" alt="devchallenges icon">
        </div>

        <nav >
            <div>
                <a id="user-menu" href="#">
                    <img src="<?= $data["user_url_foto"] ? $data["user_url_foto"] : 'https://picsum.photos/200'; ?>" alt="foto">
                    <span><?= $data["user_fullname"]; ?></span>
                    <img id="flecha-down" src="/assets/images/arrow_drop_down.svg" alt="icon-down">
                    <img id="flecha-up" class="ocultar" src="/assets/images/arrow_drop_up.svg" alt="icon-up">
                </a>
            </div>
            <div id="nav-menu" class="">
                <ul>
                    <li>
                        <a href="/views/profile.php">
                        <img class="nav-icon" src="/assets/images/account-circle.svg" alt="profile-icon"> My Profile
                        </a>
                    </li>
                    <li> 
                        <a href="#">
                            <img class="nav-icon"  src="/assets/images/people_icon.svg" alt="group-icon"> Group Chat
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a id="logout" href="../db/logout.php">
                            <img class="nav-icon"  src="/assets/images/exit_to_app.svg" alt="exit-icon"> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>

    <div id="main-container" class="">

        <label for="chk-dark-light-mode" id="lbl-dark-light-mode"><img src="/assets/images/dark_mode.svg" alt="dark-icon"></label>
        <input type="checkbox" id="chk-dark-light-mode" />


        <div id="header">
            <a href="/views/profile.php">
                <img src="/assets/images/arrow_back.svg" alt="arrow-back-icon"> Back
            </a>            
        </div>

        <div id="card" class="">
            <div id="card-top" class="card-row">
                <h2>Change Info</h2>
                <p>Changes will be reflected to every services</p>
            </div>

            <form method="post" action="../db/update.php" enctype="multipart/form-data" >
                <div id="card-photo">
                    <label for="img" id="label-img">
                        <img src="<?= $data["user_url_foto"] ? $data["user_url_foto"] : 'https://picsum.photos/200'; ?>" alt="foto">
                        <div>
                            <img src="/assets/images/photo_camera.svg" alt="camera-icon">
                        </div>
                    </label>
                    <input type="file" name="image" id="img" accept="image/*" hidden >
                    <p>Change Photo</p>
                </div>
                <div class="card-row">
                    <label for="name">Name</label> 
                    <input type="text" class="input-text" placeholder="Enter your name..." name="name"
                        value="<?= $data['user_fullname'] ? $data['user_fullname'] : ''; ?>"  />
                </div>
                <div class="card-row">
                    <label for="bio">Bio</label> 
                    <textarea id="textarea" class="input-text" placeholder="Enter your bio..." name="bio" ><?= $data['user_bio'] ? $data['user_bio'] : ''; ?></textarea>
                </div>
                <div class="card-row">
                    <label for="phone">Phone</label> 
                    <input type="number" class="input-text" placeholder="Enter your phone..." name="phone" 
                        value="<?= $data['user_phone'] ? $data['user_phone'] : ''; ?>"  />
                </div>
                <div class="card-row">
                    <label for="email">Email</label> 
                    <input type="email" class="input-text" placeholder="Enter your email..." name="email" 
                        value="<?= $data['user_email'] ? $data['user_email'] : ''; ?>" required />
                </div>
                <div class="card-row">
                    <label for="password_input">Password</label> 
                    <input type="password" class="input-text" placeholder="Enter your new password..." name="password_input" required />
                </div>
                <?php
                    if(isset($_SESSION["error_message"])) {
                        ?> 
                        <span class="error"> 
                            <?php
                            echo $_SESSION["error_message"];
                            unset($_SESSION["error_message"]);
                            ?>
                        </span>
                        <?php
                    }
                ?>
                <div class="card-row">
                    <button type="submit" class="btn-input">Save</button>
                </div>
            </form>
            
        </div>
        <footer>
            <p>created by <a href="https://linktr.ee/FrancescoGaliano"><b>FrancescoGaliano</b></a></p>
            <p>devChallenges.io</p>
        </footer>
    </div>
</body>
</html>