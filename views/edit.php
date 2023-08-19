<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/assets/css/edit.css" />
    <script src="/js/main.js" defer></script>

    <title>Change Info</title>

</head>
<body>
    <div id="top-header">
        <img id="dev-logo" src="/assets/images/devchallenges.svg" alt="devchallenges icon">

        <nav >
            <div>
                <a id="user-menu" href="#">
                    <img src="https://picsum.photos/200" alt="foto">
                    <span>Nombre Apellido</span>
                    <img src="/assets/images/arrow_drop_down.svg" alt="icon-down">
                </a>
            </div>
            <div id="nav-menu">
                <ul>
                    <li>
                        <a href="#">
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
                        <a id="logout" href="#">
                            <img class="nav-icon"  src="/assets/images/exit_to_app.svg" alt="exit-icon"> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>


    <div id="main-container">
        <div id="header">
            <a href="views/profile.php">
                <img src="/assets/images/arrow_back.svg" alt="arrow-back-icon"> Back
            </a>
            
        </div>

        <div id="card">
            <div id="card-top" class="card-row">
                <h2>Change Info</h2>
                <p>Changes will be reflected to every services</p>
            </div>
            <form action="">
                <div id="card-photo">
                    <label for="img" id="label-img">
                        <img src="https://picsum.photos/200" alt="usuario">
                        <div>
                            <img src="/assets/images/photo_camera.svg" alt="camera-icon">
                        </div>
                    </label>
                    <input type="file" name="image" id="img" accept="image/*" hidden>
                    <p>Change Photo</p>
                </div>
                <div class="card-row">
                    <label for="name">Name</label> 
                    <input type="text" class="input-text" placeholder="Enter your name..." name="name"/>
                </div>
                <div class="card-row">
                    <label for="bio">Bio</label> 
                    <textarea id="textarea" class="input-text" placeholder="Enter your bio..." name="bio"></textarea>
                </div>
                <div class="card-row">
                    <label for="phone">Phone</label> 
                    <input type="number" class="input-text" placeholder="Enter your phone..." name="phone" />
                </div>
                <div class="card-row">
                    <label for="email">Email</label> 
                    <input type="email" class="input-text" placeholder="Enter your email..." name="email" />
                </div>
                <div class="card-row">
                    <label for="password">Password</label> 
                    <input type="password" class="input-text" placeholder="Enter your new password..." name="password"/>
                </div>
                <div class="card-row">

                    <button type="submit" class="btn-input">Save</button>
                </div>
            </form>
            

        </div>
        <footer>
            <p>created by <a href="https://linktr.ee/FrancescoGaliano">FrancescoGaliano</a></p>
            <p>devChallenges.io</p>
        </footer>
    </div>
</body>
</html>