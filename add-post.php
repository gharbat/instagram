<?php
include_once ('include/config.php');
if (!isset($_SESSION['user'])) {
    header("location: http://localhost/instagram/login.php");
}
?>

<html>
<head>
    <title>Instagram - add post</title>
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

<section class="instagram-add-post mt-4">
   <div class="container">
       <div class="row">
           <div class="col-lg-6">
               <div class="mb-3">
                   Add new post
               </div>
               <form action="handle/add-post.php" method="post" enctype="multipart/form-data">

                   <div class="form-group">
                       <textarea name="desc" id="" cols="30" rows="10" class="form-control">

                       </textarea>
                   </div>
                   <div class="form-group">
                       <input type="file" name="image" class="form-control">
                   </div>
                   <div class="form-group">
                       <button type="submit">post to instagram</button>
                   </div>
               </form>
           </div>
           <div class="col-lg-6"></div>
       </div>
   </div>
</section>
</body>
</html>