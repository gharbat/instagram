<?php
include_once "include/config.php";
include_once ('include/functions.php');


$posts = getUserPosts($_GET['id']);
?>
<html>
<head>
    <title>instagram - user page</title>
    <link rel="stylesheet" href="theme/css/bootstrap.css">
    <link rel="stylesheet" href="theme/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

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
<section class="user-profile">
    <div class="container">
        <div class="row mt-5 justify-content-center align-items-center">
            <div class="col-lg-3 text-left">
                <img src="theme/img/profile.png" width="125" class="img-fluid" alt="">
            </div>
            <div class="col-lg-4">
                <div class="username-and-data align-items-center d-flex flex-row justify-content-between">
                    <div class="username">Mohammad Gharbat</div>
                    <button class="btn follow-button border ">follow</button>
                    <div class="more-option">...</div>
                </div>
                <div class="mt-2 analytics d-flex flex-row justify-content-between">
                    <div>23 post </div>
                    <div>399 followers</div>
                    <div>392 following</div>
                </div>
                <div class="full-name mt-3 font-weight-bold">
                    Mohammad Sameeh Gharbat
                </div>

                <div class="bio">
                    some cool stuff goes here
                </div>
            </div>
        </div>
    </div>
</section>

<section class="user-posts mt-5 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-4 my-4">
                        <img class="img-fluid" src="handle/uploads/image.jpg" alt="">
                    </div>
                    <div class="col-lg-4 my-4">
                        <img class="img-fluid" src="handle/uploads/image.jpg" alt="">
                    </div>
                    <div class="col-lg-4 my-4">
                        <img class="img-fluid" src="handle/uploads/image.jpg" alt="">
                    </div>
                    <div class="col-lg-4 my-4">
                        <img class="img-fluid" src="handle/uploads/image.jpg" alt="">
                    </div>
                    <div class="col-lg-4 my-4">
                        <img class="img-fluid" src="handle/uploads/image.jpg" alt="">
                    </div>
                    <div class="col-lg-4 my-4">
                        <img class="img-fluid" src="handle/uploads/image.jpg" alt="">
                    </div>
                    <div class="col-lg-4 my-4">
                        <img class="img-fluid" src="handle/uploads/image.jpg" alt="">
                    </div>
                    <div class="col-lg-4 my-4">
                        <img class="img-fluid" src="handle/uploads/image.jpg" alt="">
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>
</section>
</body>
</html>