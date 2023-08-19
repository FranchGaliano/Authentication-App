<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/assets/css/profile.css" />
    <script src="/js/main.js" defer></script>
    
    <title>Profile</title>

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
            <h1>Personal info</h1>
            <p>Basic info, like your name and photo</p>
        </div>

        <div id="card">

            <div id="card-top" class="card-row">
                <div id="card-top-left">
                    <h2>
                        Profile
                    </h2>
                    <p>Some info may be visible to other people</p>
                </div>
                <div id="card-top-right">
                    <button>Edit</button>
                </div>
            </div>

            <div id="card-photo">
                <div class="card-left">
                    <p>Photo</p>
                </div>
                <div class="card-right">
                    <img src="https://picsum.photos/200" alt="usuario">
                </div>
            </div>
            <div class="card-row">
                <div class="card-left">
                    <p>Name</p>
                </div>
                <div class="card-right">
                    <p>Nombre Apellido</p>
                </div>
            </div>
            <div class="card-row">
                <div class="card-left">
                    <p>Bio</p>
                </div>
                <div class="card-right">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit..</p>
                </div>
            </div>
            <div class="card-row">
                <div class="card-left">
                    <p>Phone</p>
                </div>
                <div class="card-right">
                    <p>908249274292</p>
                </div>
            </div>
            <div class="card-row">
                <div class="card-left">
                    <p>Email</p>
                </div>
                <div class="card-right">
                    <p>galiano@outlook.com</p>
                </div>
            </div>
            <div class="card-row">
                <div class="card-left">
                    <p>Password</p>
                </div>
                <div class="card-right">
                    <p>**************</p>
                </div>
            </div>

        </div>
        <footer>
            <p>created by <a href="https://linktr.ee/FrancescoGaliano">FrancescoGaliano</a></p>
            <p>devChallenges.io</p>
        </footer>
    </div>
</body>
</html>