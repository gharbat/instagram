<?php
include_once "include/config.php";
include_once ('include/functions.php');

if (!isset($_GET['id'])){
    header("location: http://localhost/instagram");
}



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
                    <div class="username"><?php echo getUserName($_GET['id'])?></div>
                    <button class="btn follow-button border " id="follow"> follow</button>
                    <div class="more-option">...</div>
                </div>
                <div class="mt-2 analytics d-flex flex-row justify-content-between">
                    <div><?php echo getNumPosts($_GET['id']) ?>  post </div>
                    <div><?php echo getUserFollowers($_GET['id']) ?> followers</div>
                    <div><?php echo getUserFollowing($_GET['id'])?>  following</div>
                </div>
                <div class="full-name mt-3 font-weight-bold">
                   <?php echo getUserFullName($_GET['id'])?>
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
                    <?php foreach ($posts as $post){ ?>
                        <div class="col-lg-4 my-4">
                        <img class="img-fluid" src="handle/<?php echo $post[5] ?>" alt="">
                    </div>
                    <?php } ?>
                </div>
            </div>

            </div>
        </div>
    </div>
</section>
</body>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    var f = document.getElementById("follow");

    f.onclick = function () {
        axios.get("handle/make-follow.php?id="+ "<?php echo $_GET['id']?>")
            .then(function (m) {
                m=m.data;
                m= m.split("\n");

                if (m[1] == "insert"){
                    f.innerText ="following";
                } else{
                    f.innerText ="follow";
                }
            })
    }
</script>
</html>