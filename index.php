<?php
include_once ('include/config.php');
include_once ('include/functions.php');
if (!isset($_SESSION['user'])) {
    header("location: http://localhost/instagram/login.php");
}


$query = "SELECT * FROM posts";
$execute = $mysql->query($query);
$posts = $execute->fetch_all();

$user_id =$_SESSION['user'];
$check_number = "SELECT * FROM likes WHERE post_id = 3 AND user_id = '$user_id'";
$execute = $mysql->query($check_number);
$number = $execute->num_rows;//1
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
                <div class="icons">
                    <i class="far fa-bell"></i>
                </div>
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

                    <img id="image" ondblclick="likeAdder('<?php echo $post[0] ?>', '<?php echo $post[4] ?>')" src="handle/<?php echo $post[5] ?> " class="img-fluid" alt="...">

                    <div class="card-body">
                        <div class="options">
                            <div class="love" onclick="likeAdder('<?php echo $post[0] ?>','<?php echo $post[4] ?>')" id="love-<?php echo $post[0] ?>">
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


    var number =" <?php echo $number ?> ";// 1

    // var likes= document.getElementById("likes-counter");
    // console.log(number);
    //
    // if (number == 0){
    //     love.style.color = "black";
    //     love.innerHTML= "<i class=\"far fa-heart\"></i>";
    // } else{
    //     love.style.color = "red";
    //     love.innerHTML = "<i class=\"fas fa-heart\"></i>";
    // }
    // var image = document.getElementById("image");
    //
    // image.ondblclick =function () {
    //     alert("double click");
    // };



    function likeAdder(postID /*1*/,author) {
        var love= document.getElementById("love-"+postID );

        axios.get("handle/increment.php?id="+postID + "&author="+author)
            .then(function (message) {
                var x = message.data;
                console.log(x);
                x =x.split("\n")[1];

                if (x == "insert"){
                    love.style.color = "red";
                    love.innerHTML = "<i class=\"fas fa-heart\"></i>";

                } else{
                    love.style.color = "black";
                    love.innerHTML= "<i class=\"far fa-heart\"></i>";
                }
            });

    }

</script>
</html>