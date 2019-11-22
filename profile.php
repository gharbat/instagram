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
        <img src="theme/img/profile.png" alt="">
        <div class="name"><?php echo getUserName($_GET['id']) ?></div>
        
        <div class="posts">
            <?php foreach ($posts as $post) { ?>

            <img src="handle/<?php echo $post[5]?>" alt="">
            
            <?php } ?>
        </div>
    </div>
</section>
</body>
</html>