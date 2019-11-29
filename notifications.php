<?php
include_once ("include/config.php");
include_once ("include/functions.php");

markNotification($_SESSION['user']);

?>


<html>
<head>
    <title>Instagram</title>
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
            <div class="col-lg-4 text-right d-flex flex-row justify-content-between">
                <div class="username">
                    <?php echo getUserName($_SESSION['user']) ?>
                </div>
                <div class="icons">
                    <?php if (checkNotification($_SESSION['user'])) { ?>
                        <div class="circle"></div>
                    <?php } ?>
                    <i class="far fa-bell"></i>
                </div>
            </div>
        </div>
    </nav>
</section>

</body>
</html>