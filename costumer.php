<!DOCTYPE html>
<html lang="en">
<head>
    <title>RESTO</title>
    <meta charset="UTF-8">
    <meta name="description" contents="My PHP Website">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
        <nav id="navigation">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="favorite.php">Favorite</a></li>
                <li><a href="location.php">Location</a></li>
                <li><a href="profile.php">Profile</a></li>
            </ul>
        </nav>
    <div id="contents">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'home':
                    include "home.php";
                    break;
                case 'about':
                    include "menu.php";
                    break;
                case 'favorite':
                    include "favorite.php";
                    break;
                case 'location':
                    include "location.php";
                    break;
                case 'profile':
                    include "profile.php";
                    break;
            }
        }
        ?>
    </div>
    <div class="container-fluid p-0 pb-5">
        <div class="container">
            <div class="row justify-content">
                <div class="col-12 col-lg-8">
                    <h1 style="color: #FFFF;">Welcome To <br> Citra Resto
                        <img align="left" src="assets/img/geti.png" width="550" height="750"></h1>
                </div>
            </div>
        </div>
</div>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>