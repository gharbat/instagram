<?php
include_once ('include/config.php');
include_once ('include/functions.php');
if (!isset($_SESSION['user'])) {
    header("location: http://localhost/instagram/login.php");
}


$query = "SELECT * FROM posts";
$execute = $mysql->query($query);
$posts = $execute->fetch_all();

print_r($posts);
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
                <?php foreach ($posts as $post){ ?>
                     <div class="card mt-5">
                    <div class="icons bg-white px-3 py-2 d-flex flex-row justify-content-between align-items-center">
                        <div class="post-info d-flex flex-row align-items-center">
                            <div class="user-image">
                                <img  src="theme/img/profile.png" class="profile-image mr-3" alt="">
                            </div>
                            <div class="user-name"><?php echo getUserName($post[4]) ?></div>
                        </div>
                        <div class="dots">
                            ...
                        </div>
                    </div>

                    <img id="image" src="handle/<?php echo $post[5] ?> " class="img-fluid" alt="...">

                    <div class="card-body">
                        <div class="options">
                            <div class="love" id="love">
                                <i class="far fa-heart"></i>
                            </div>
                            <div class="comment">
                                <i class="far fa-comment-alt"></i>
                            </div>

                        </div>

                        <div class="information mt-3">
                           <span id="likes-counter"> <?php echo $post[2]?></span> likes
                        </div>
                        <p class="card-text mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="col-lg-4">group of cards</div>
        </div>
    </div>
</section>
</body>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>


    var image = document.getElementById("image");

    image.ondblclick =function () {
        alert("double click");
    };


    var love= document.getElementById("love");
    var likes= document.getElementById("likes-counter");

    love.onclick = function () {

        axios.get("handle/increment.php?id=3")
            .then(function () {
                love.innerHTML ="<i class=\"fas fa-heart\"></i>";
                love.style.color="red";
                likes.innerText =parseInt(likes.innerText)  + 1;
            })
            .catch(function () {
                console.log("bad ");
            })





        // axios.get('/user?ID=12345')
        //     .then(function (response) {
        //         // handle success
        //         console.log(response);
        //     })
        //     .catch(function (error) {
        //         // handle error
        //         console.log(error);
        //     })
        //     .finally(function () {
        //         // always executed
        //     });
    }
</script>
</html>