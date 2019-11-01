<html>
<head>
    <title>Instagram - register</title>
    <link rel="stylesheet" href="theme/css/bootstrap.css">
    <link rel="stylesheet" href="theme/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<body>
<section class="register-body">
    <div class="container">
            <div class="row">
            <div class="col-lg-6">
                <div class="slider">
                    <img id="slider-img" src="https://www.instagram.com/static/images/homepage/screenshot3.jpg/f0c687aa6ec2.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-card border text-center p-4">
                    <form action="handle/register.php" method="post">
                        <div class="form-group">
                            <div class="logo">
                                <img src="theme/img/insta-logo.png"  alt="">
                            </div>
                        </div>
                        <div class="form-group">
                            <h3 class="slogan">
                                Sign up to see photos and videos from your friends.
                            </h3>
                        </div>
                        <div class="form-group">
                            <button class="custom-button btn"><i class="fab fa-facebook-square"></i> &nbsp; Login with Facebook</button>
                        </div>
                        <div class="form-group">
                            <div class="custom-line">
                                <div class="insta-line"></div>
                                <div class="word">or</div>
                                <div class="insta-line"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control custom-input"   placeholder="Mobile Number or Email">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control custom-input"   placeholder="Full name">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control custom-input"   placeholder="username">
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control custom-input"   placeholder="password">
                        </div>

                        <div class="form-group">
                            <button class="custom-button btn ">Sign up</button>
                        </div>

                        <div class="form-group">
                            <p class="warn-p">
                                By signing up, you agree to <a href="/terms">Our Terms</a> , Data Policy and Cookies Policy .
                            </p>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
</body>

<!--<script src="theme/js/bootstrap.js"></script>-->
<script src="theme/js/app.js"></script>
<script>
    var element = document.getElementById("slider-img");
    var images = ['img1.jpg','img2.jpg','img3.jpg'];
    var counter= 0;
    setInterval(function () {
        if (counter >= images.length) counter =0;
        element.src = "theme/img/slides/" + images[counter];
        counter++;
    },2000);
</script>
</html>