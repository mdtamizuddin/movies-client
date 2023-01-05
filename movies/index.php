<?php
$id = $_GET["id"];
$url = "https://movies-server-nine.vercel.app/api/movies/" . $id . "";
$responsoe = file_get_contents($url);
$movie = json_decode($responsoe);


?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Zmovo - Online Movie Video And TV Show HTML Bootstrap 4 Template">
    <meta name="keywords" content="Zmovo - Online Movie Video And TV Show HTML Bootstrap 4 Template">
    <meta name="author" content="Themepul">
    <title><?php echo ($movie->title) ?></title>
    <link href="image/favicon.png" rel="icon" />
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-4.2.1/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-select.min.css">
    <!-- END BOOTSTRAP CSS -->

    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" type="text/css" href="../assets/owlcarousel/owl.carousel.css">
    <!-- END OWL CAROUSEL -->

    <!-- FONT CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/icofont.min.css">

    <link rel="stylesheet" type="text/css" href="../assets/owlcarousel/animated.css">
    <link rel="stylesheet" type="text/css" href="../assets/video/video.popup.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END STYLE CSS -->

    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
    <!-- END RESPONSIVE CSS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CPoppins:200,300,400,500,600,700,800,900" rel="stylesheet">
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

</head>

<body>
    <div class="zmovo-main dark-bg">

        <!-- Preloader -->
        <div class="zmovo-preloader">
            <div class="boxes">
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
        <header class="zmovo-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 zmovo-logos">
                        <div class="zmovo-logo">
                            <a href=""><img src="../image/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-8 zmovo-menus">
                        <div class="main-menu">
                            <div class="navigation">
                                <div class="menu-container">
                                    <div id="navigation">
                                        <ul>
                                            <li class="active has-sub">
                                                <a href="/">Home</a>
                                            </li>
                                            <!-- <li><a href="about.html">About</a></li> -->
                                            <li class="has-sub">
                                                <span class="submenu-button">
                                                </span>
                                                <a>Movies</a>
                                                <ul>
                                                    <li class="">
                                                        <a href="/category/hollywood">Hollywood Movies</a>
                                                    </li>

                                                    <li class="">
                                                        <a href="/category/bollywood">Bollywood Movies</a>
                                                    </li>
                                                    <li>
                                                        <a href="/category/bangla">
                                                            Bangla
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-sub">
                                                <span class="submenu-button">
                                                </span>
                                                <a>Genres</a>
                                                <ul>
                                                    <li class="">
                                                        <a href="/category/anime">Anime</a>
                                                    </li>

                                                    <li class="">
                                                        <a href="/category/action">Action</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="/category/adventure">Adventure</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="/category/biography">Biography</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="/category/horror">Horror</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="/category/si-fi">SI - FI</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="/category/comedy">Comedy</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="/category/drama">Drama</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="/category/romance">Romance</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="/category/crime">Crime</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="/category/thriller">Thriller</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- <li><a href="trailor.html">Trailor</a></li> -->

                                            <li class="has-sub">
                                                <span class="submenu-button">
                                                </span>
                                                <a>Quality</a>
                                                <ul>
                                                    <li class="">
                                                        <a href="/category/480p-movie">480P</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="/category/720p-movie">720P</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="/category/1080p-movie">1080P</a>
                                                    </li>
                                                    <li>
                                                        <a href="/category/4k-movie">4K</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input class="d-md-none search-feild" type="search" placeholder="Enter the movie Name">
                    <div class="col-lg-2 zmovo-t-right">
                        <div class="zmovo-header-right">

                            <div class="zmovo-top-search">
                                <div class="zmovo-ser-icon" id="clickserch"><span class="fa fa-search"></span></div>
                                <div class="zmovo-hidden-search" id="opensearch">
                                    <input type="search" placeholder="Enter the movie Name">
                                </div>
                            </div>
                            <div class="zmovo-login">
                                <a href="login.html" class="btn login-btn"><span class="fa fa-user"></span> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <!-- breadcroumb-area -->

        <!-- End breadcroumb-area -->
        <div class="zmoto-inner-page ">
            <div class="zmovo-blog-details pt-50">
                <div class="container">
                    <div class="zmovo-blog-contents">
                        <div class="row">
                            <div class="col-12">
                                <div class="zmovo-product-with-sedbar">
                                    <div class="row">
                                        <!-- Left -->
                                        <div class="col-lg-9">
                                            <div class="zmovo-blog-dec-contents">
                                                <div class="zmovo-blog-dec-content pt-30">
                                                    <h2>Movie Details</h2>
                                                    <div class="thumb-nile" style="background-image: url(<?php echo ($movie->thumb) ?>);">
                                                        <a href="<?php echo ($movie->trailer)  ?>" target="_blank" class="overlay">
                                                            <h3>Click To Watch Trailer</h3>
                                                        </a>
                                                    </div>

                                                    <button class="mybuttonM">Download</button>

                                                    <div class="item">
                                                        <div class="zmovo-slider-contents">

                                                            <div class="zmovo-slide-content mt-5">
                                                                <div class="container">
                                                                    <div class="zmovo-slider-contetn">
                                                                        <h2 class="h4">
                                                                            <?php echo ($movie->title) ?>
                                                                        </h2>
                                                                        <div class="zmovo-slide-cat">
                                                                            <div class="zmovo-trailor-meta-info">
                                                                                <div class="dec-review-dec">
                                                                                    <div class="dec-review-meta">
                                                                                        <ul>
                                                                                            <li><span>Category <label>:</label></span>
                                                                                                <?php echo ($movie->categorys) ?>
                                                                                            </li>
                                                                                            <li>
                                                                                                <span>Actor <label>:</label></span>
                                                                                                <?php echo ($movie->actor) ?>
                                                                                            </li>
                                                                                            <li><span>Genre <label>:</label></span>
                                                                                                <?php echo ($movie->genre) ?>
                                                                                            </li>
                                                                                            <li><span>releace <label>:</label></span>
                                                                                                <?php echo ($movie->release) ?>
                                                                                            </li>
                                                                                            <li><span>languasge <label>:</label></span>
                                                                                                <?php echo ($movie->language) ?>
                                                                                            </li>
                                                                                            <li><span>Format <label>:</label></span>
                                                                                                <?php echo ($movie->format) ?>
                                                                                            </li>
                                                                                            <li><span>Resulation <label>:</label></span>
                                                                                                <?php echo ($movie->resulation) ?>
                                                                                            </li>
                                                                                            <li>
                                                                                                <span>Story <label>:</label></span>
                                                                                            </li>
                                                                                            <li>
                                                                                                <?php echo ($movie->story) ?>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                    <button class="mybuttonM">Download</button>
                                                                                    <div class="mt-2">
                                                                                        <h4>Download</h4>
                                                                                        <?php
                                                                                        foreach ($movie->downloadLinks as $link) {
                                                                                            echo ('
                                                                                        <div class="download-section mt-5">
                                                                                            <h3 class="text-center">' . $link->title . '</h3>
                                                                                            <a target="_blank" class="primary-btn" href="https://mdtamiz.xyz/' . $movie->_id . '">Download</a>
                                                                                        </div>
                                                                                        ');
                                                                                        }
                                                                                        ?>
                                                                                    </div>

                                                                                    <div class="social-links">
                                                                                        <strong>Share :</strong>
                                                                                        <a href="" class="socila-fb"><span class="fa fa-facebook"></span></a>
                                                                                        <a href="" class="socila-tw"><span class="fa fa-twitter"></span></a>
                                                                                        <a href="" class="socila-sk"><span class="fa fa-skype"></span></a>
                                                                                        <a href="" class="socila-pin"><span class="fa fa-pinterest"></span></a>
                                                                                        <a href="" class="socila-ins"><span class="fa fa-instagram"></span></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                        <!-- End Left -->


                                        <div class="col-lg-3">

                                            <!-- WIDGET -->

                                            <!-- END WIDGET -->
                                            <div class="zmovo-widget">
                                                <div class="zmovo-video-list-inner">
                                                    <h2 class="widget-title mb-30 mt-30">
                                                        <span>Top Visited</span>
                                                    </h2>
                                                    <div class="zmovo-video-list-items">
                                                        <div class="zmovo-v-list-items mt-30">
                                                            <?php
                                                            $response = file_get_contents("https://movies-server-nine.vercel.app/api/movies/popular/2023/now");
                                                            $movies = json_decode($response);

                                                            foreach ($movies as $post) {
                                                                echo ('
                                                                <div class="zmovo-v-list-item mb-30">
                                                                <div class="zmovo-v-list-i-img">
                                                                <img width="60" src="' . $post->thumb . '" alt="' . $post->name . '">
                                                                </div>
                                                                <div class="zmovo-v-list-content">
                                                                    <a href="">' . $post->name . '</a>
                                                                    <div class="movie-time"><i class="fa fa-clock-o c1"></i><span>' . $post->duration . '</span></div>
                                                                </div>
                                                            </div>
                                                                ');
                                                            }
                                                            ?>



                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Right -->

                                        <!-- End Right -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <footer class="zmovo-footer-area pt-50">
            <div class="zmovo-footer">
                <div class="container">

                    <div class="zmovo-footer-center pt-50">
                        <div class="zmovo-ft-widgets">
                            <div class="row">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="zmovo-ft-widget">
                                        <div class="zmovo-ft-widget-titles">
                                            <h2 class="zmovo-ft-widget-title">Movies Category</h2>
                                        </div>
                                        <div class="zmoto-ft-widget-contetn">
                                            <ul>
                                                <li><a href="">Movies</a></li>
                                                <li><a href="">Videos</a></li>
                                                <li><a href="">English Movies</a></li>
                                                <li><a href="">China Movies</a></li>
                                                <li><a href="">Tailor</a></li>
                                                <li><a href="">Upcoming Movies</a></li>
                                                <li><a href="">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="zmovo-ft-widget">
                                        <div class="zmovo-ft-widget-titles no-text">
                                            <h2 class="zmovo-ft-widget-title">information</h2>
                                        </div>
                                        <div class="zmoto-ft-widget-contetn">
                                            <ul>
                                                <li><a href="">About Us</a></li>
                                                <li><a href="">Song</a></li>
                                                <li><a href="">Forums</a></li>
                                                <li><a href="">Place</a></li>
                                                <li><a href="">Hot Collection</a></li>
                                                <li><a href="">Upcoming Events</a></li>
                                                <li><a href="">All Movies</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="zmovo-ft-widget">
                                        <div class="zmovo-ft-widget-titles no-text">
                                            <h2 class="zmovo-ft-widget-title">Locations</h2>
                                        </div>
                                        <div class="zmoto-ft-widget-contetn">
                                            <ul>
                                                <li><a href="">South Korea</a></li>
                                                <li><a href="">Germany</a></li>
                                                <li><a href="">United States</a></li>
                                                <li><a href="">France</a></li>
                                                <li><a href="">India</a></li>
                                                <li><a href="">New Movies</a></li>
                                                <li><a href="">United Kingdom</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="zmovo-ft-widget">
                                        <div class="zmovo-ft-widget-titles">
                                            <h2 class="zmovo-ft-widget-title">Newsletter</h2>
                                        </div>
                                        <div class="zmoto-ft-widget-contetn">
                                            <div class="zmovo-ft-newsletter">
                                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anytg embarrassing hidden.</p>
                                                <div class="zmovo-ft-newsletter-area pt-30">
                                                    <div class="zmovo-ft-newsletter">
                                                        <input type="text" class="form-control" placeholder="Enter Address">
                                                        <button type="submit"><span class="fa fa-paper-plane"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="zmovo-ft-social-widget pt-50">
                                                <ul>
                                                    <li><a href=""><span class="fa fa-facebook"></span></a></li>
                                                    <li><a href=""><span class="fa fa-twitter"></span></a></li>
                                                    <li><a href=""><span class="fa fa-linkedin"></span></a></li>
                                                    <li><a href=""><span class="fa fa-youtube"></span></a></li>
                                                    <li><a href=""><span class="fa fa-instagram"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="zmovo-footer-buttom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-lg-6">
                            <div class="zmovo-ft-menu">
                                <ul>
                                    <li><a href="">Terms</a></li>
                                    <li><a href="">Privacy</a></li>
                                    <li><a href="">About</a></li>
                                    <li><a href="">Our Ads</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-7 col-lg-6">
                            <div class="zmovo-ft-copyright">
                                <p>CopyRight 2019 Develop by <a href="" class="c1">Themepul</a> . All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER -->
        <div class="to-top" id="back-top">
            <i class="fa fa-angle-up"></i>
        </div>
    </div>
    <script src="../assets/vendor/modernizr-3.5.0.js"></script>
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/bootstrap-4.2.1/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap-select.js"></script>
    <script src="../assets/js/jquery-ui.min.js"></script>
    <script src="../assets/video/video.popup.js"></script>
    <script src="../assets/owlcarousel/owl.carousel.min.js"></script>
    <script src="../assets/menu/menumaker.js"></script>
    <script src="../assets/slick/swiper.min.js"></script>
    <script src="../assets/js/main.js"></script>

    <script>
        var href = window.location.href;
        var link = 'http://tnpads.xyz/autolink/?uid=tomiz20221216123257&adtype=button&href=' + href;
        var mybuttonM = document.querySelectorAll('.mybuttonM');
        
        mybuttonM.forEach(mybutton => {
            mybutton.style.cssText = "border:none;border-radius:3px;padding:7px 12px;margin:6px;font-size:15px;background-color:#007979;color:#ffffff;cursor:pointer;font-family:arial;box-shadow:0 0 15px 1px grey;";
            mybutton.addEventListener('mouseover', function() {
                mybutton.style.opacity = "0.7";
            });
            mybutton.addEventListener('mouseout', function() {
                mybutton.style.opacity = "1";
            });
            mybutton.addEventListener('click', function() {
                window.open(link)
            });
        });
    </script>

</body>

</html>