<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "includes/head.php"; ?>
    <link rel="stylesheet" href="css/article.css">
</head>

<body>
    <?php require  "includes/nav.php"; ?>
    
        <!-- Header Start -->
        <div class="
            jumbotron jumbotron-fluid mb-5" style="
            background-image: url('img/home1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        ">
            <div class="container text-center py-5">
                <h1 class="text-white display-3">About</h1>
                <div class="d-inline-flex align-items-center text-white">
                    <p class="m-0"><a class="text-white" href="index">Home</a></p>
                    <i class="fa fa-circle px-3 blink_dot"></i>
                    <p class="m-0">About</p>
                </div>
            </div>
        </div>
    <!-- Header End -->


    <!-- start of the article content -->
    <div class="cover_article">
        <div class="container-fluid">
            <div class="col-sm-12">
                <div class="row">
                    <?php
                        require "controller/article_display-one.php";
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end of the content -->

    <!-- start of the article content -->
    <div class="cover_article">
        <div class="container-fluid">
            <div class="col-sm-12">
                <div class="row">
                    <?php
                        require "controller/article_display-two.php";
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end of the content -->

    <!-- start of the article content -->
    <div class="cover_article">
        <div class="container-fluid">
            <div class="col-sm-12">
                <div class="row">
                    <?php
                        require "controller/article_display-three.php";
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end of the content -->

    <!-- start of the article content -->
    <div class="cover_article">
        <div class="container-fluid">
            <div class="col-sm-12">
                <div class="row">
                    <?php
                        require "controller/article_display-four.php";
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end of the content -->
    




    <!-- Footer Start -->
    <?php
        require "includes/foot.php";
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>