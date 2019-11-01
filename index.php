<?php include_once ('include/config.php')?>

<html>
<head>
    <title>Instagram</title>
    <link rel="stylesheet" href="theme/css/bootstrap.css">
    <link rel="stylesheet" href="theme/css/style.css">
</head>
<body>
<section class="instagram-navbar bg-white border-bottom">
    <nav class="navbar navbar-expand-lg navbar-light  container">
        <div class="container pl-0">
            <div class="col-lg-4 pl-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand" href="#">
                    <img src="theme/img/instagram-logo.png" class="img-fluid insta-logo" alt="">
                    <img src="theme/img/text-logo.png" class="ml-2" alt="">
                </a>

            </div>
            <div class="col-lg-4 text-center">
                <input type="text" placeholder="search" class="w-100 input-instagram">
            </div>
            <div class="col-lg-4 text-right">
                icons
            </div>
        </div>
    </nav>
</section>
<section class="instagram-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card mt-5">
                    <div class="icons bg-white px-3 py-2 d-flex flex-row justify-content-between align-items-center">
                        <div class="post-info d-flex flex-row align-items-center">
                            <div class="user-image">
                                <img src="theme/img/profile.png" class="profile-image mr-3" alt="">
                            </div>
                            <div class="user-name">Folan Folani</div>
                        </div>
                        <div class="dots">
                            ...
                        </div>
                    </div>

                    <img src="theme/img/bg.jpg" class="img-fluid" alt="...">

                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">group of cards</div>
        </div>
    </div>
</section>
</body>

<script src="theme/js/bootstrap.js"></script>
</html>