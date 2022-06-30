<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Prof Osinubi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="css/gallery.css">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+2348023034954</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>info@profosinubi.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="https:www.facebook.com/maxCellgevityinNigeria/?_rdc=2&_rdr">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="https://twitter.com/osinubi_abraham">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="https:www.linkedin.com/in/kolawole-osinubi-8084764">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="https://www.instagram.com/abrahamosinubi">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="www.youtube.com/results?search_query=prof+abraham+osinubi">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index" class="navbar-brand ml-lg-3">
                <h1 class="m-0 display-5 text-uppercase text-primary"><i class="fa fa-book" aria-hidden="true"></i>Prof Osinubi</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="index" class="nav-item nav-link active">Home</a>
                    <a href="about" class="nav-item nav-link">About</a>
                    <a href="service" class="nav-item nav-link">Service</a>
                    <a href="gallery" class="nav-item nav-link">Gallery</a>
                    <a href="article" class="nav-item nav-link">Article</a>
                    <!--<a href="article" class="dropdown-item">Products</a>-->
                    <a href="contact" class="nav-item nav-link">Contact</a>
                </div>
                <a href="https://www.researchgate.net/profile/Abraham-Osinubi-2" target="_blank" class="btn btn-primary py-2 px-4 d-none d-lg-block" title="click to experience financial freedom">Publications</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- start of body -->

    <div class="containe">
        <?php
            require "controller/gallery-display-one.php";
        ?>
    </div>

    <!-- end of body content -->


     <!-- start of body -->

     <div class="containe">
        <?php
            require "controller/gallery-display-two.php";
        ?>
    </div>

    <!-- end of body content -->

     <!-- start of body -->

     <div class="containe">
        <?php
            require "controller/gallery-display-three.php";
        ?>
    </div>

    <!-- end of body content -->

    <!-- start of body -->

     <div class="containe">
        <?php
            require "controller/gallery-display-four.php";
        ?>
    </div>

    <!-- end of body content -->




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
    <script src="js/gallery.js"></script>
</body>

</html>