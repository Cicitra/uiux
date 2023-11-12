<!DOCTYPE html>
<html lang="en">
<head>
    <title>RESTO</title>
    <meta charset="UTF-8">
    <meta name="description" contents="My PHP Website">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/loc.css" type="text/css">
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
    
    <div class="container">
        <div class="col-12">
            <h1 class="display-1">Experience Real Taste
            <img align="right" src="assets/img/geti.png" width="450" height="650">
            </h1>
            <button class="button">Menu</button>
            <button class="button">Favorite</button>
            <button class="custom-button">Location</button>
            <button class="button">Profile</button>
            </div>
    </div>

    <div class="menu">
    <i class="fa-solid fa-location-dot" style="color: #c6b08c;"></i>
    <div style="text-align: center">LOCATION</div>

    <div class="text-warna-hitam">Contact Us</div>

    <div class="card">
        <div class="username">Username</div>
    </div>
    <div class="card">
        <div class="email">Your Email</div>
    </div>
    <div class="card">
        <div class="password">Password<i class="fa-regular fa-eye" style="color: #ffffff;"></i></div>
    </div>


    <div class="footer">
    <div class="container-fluid bg-dark text-light footer mt-5 pt-2 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-2">
            <div class="row g-5">
                <h1 class="display-1 text-white">CITRA RESTO</h1>
                <div class="col-lg-3 col-md-6">
                    <div class="text-light mb-4">Address</div>
                    <p class="text-light mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, Indonesia</p>
                    <p class="text-light mb-2"><i class="fa fa-phone-alt me-3"></i>+62 345 67890</p>
                    <p class="text-light mb-2"><i class="fa fa-envelope me-3"></i>citraresto@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="">General Carpentry</a>
                    <a class="btn btn-link" href="">Furniture Remodeling</a>
                    <a class="btn btn-link" href="">Wooden Floor</a>
                    <a class="btn btn-link" href="">Wooden Furniture</a>
                    <a class="btn btn-link" href="">Custom Carpentry</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p class="text-light">Subscribe to our newsletter and recieve special offers and discounts</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">Developed ProgessionStudios Citra Resto</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>