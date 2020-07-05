<?php use application\components\GlobalData; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= ASSETS ?>bootstrap-4.5.0/css/bootstrap.css">
    <link href="<?= ASSETS ?>fontawesome-5.13/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= ASSETS ?>css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?= ASSETS ?>css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= ASSETS ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= ASSETS ?>css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="<?= ASSETS ?>css/nouislider.min.css">
    <link rel="stylesheet" href="<?= ASSETS ?>css/ionicons.min.css">
    <link rel="stylesheet" href="<?= ASSETS ?>css/plyr.css">
    <link rel="stylesheet" href="<?= ASSETS ?>css/photoswipe.css">
    <link rel="stylesheet" href="<?= ASSETS ?>css/default-skin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link href="<?= ASSETS ?>css/datepicker.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= ASSETS ?>css/main.css">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="<?= ASSETS ?>icon/favicon-32x32.png" sizes="32x32">

    <title><?= $this->getTitle(); ?></title>
    <script src="<?= ASSETS ?>js/jquery-3.5.1.min.js"></script>
    <script src="<?= ASSETS ?>js/script.js"></script>

</head>
<body class="body">

<!-- header -->
<header class="header">
    <div class="header__wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header__content">
                        <!-- header logo -->
                        <a href="/" class="header__logo">
                            <img src="<?= ASSETS ?>img/logo.png" alt="logo">
                        </a>
                        <!-- end header logo -->

                        <!-- header nav -->
                        <ul class="header__nav">
                            <!-- dropdown -->
                            <li class="header__nav-item">
                                <a class="header__nav-link" href="/" role="button">Home</a>
                            </li>
                            <!-- end dropdown -->

                            <!-- dropdown -->
                            <li class="header__nav-item">
                                <a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Films</a>

                                <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
                                    <li><a href="/site/filmsGrid">Films Grid</a></li>
                                    <li><a href="/site/filmsList">Films List</a></li>
                                </ul>
                            </li>
                            <!-- end dropdown -->

                            <li class="header__nav-item">
                                <a href="/site/contact" class="header__nav-link">Contact</a>
                            </li>

                            <li class="header__nav-item">
                                <a href="/site/about" class="header__nav-link">About</a>
                            </li>
                        </ul>
                        <!-- end header nav -->

                        <!-- header auth -->
                        <div class="header__auth">
<!--                            <button class="header__search-btn" type="button">
                                <i class="icon ion-ios-search"></i>
                            </button>-->
                            <?php if (\application\components\Auth::checkLogged()): ?>
                                <a href="/user/profile" class="header__sign-in">
                                    <i class="icon ion-ios-contact"></i>
                                    <span><?= GlobalData::getUser()[0]['username']; ?></span>
                                </a>
                            <?php else: ?>
                                <a href="/user/signIn" class="header__sign-in">
                                    <i class="icon ion-ios-log-in"></i>
                                    <span>sign in</span>
                                </a>
                            <?php endif; ?>
                        </div>
                        <!-- end header auth -->

                        <!-- header menu btn -->
                        <button class="header__btn" type="button">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- end header menu btn -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- header search -->
<!--    <form action="#" class="header__search">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header__search-content">
                        <input type="text" placeholder="Search for a movie, TV Series that you are looking for">

                        <button type="button">search</button>
                    </div>
                </div>
            </div>
        </div>
    </form>-->
    <!-- end header search -->
</header>
<!-- end header -->

<?php if (!empty($content) && isset($content)): ?>
    <?php include_once $this->basePath . $content . ".php"; ?>
<?php endif; ?>

<!-- footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- footer list -->
            <div class="col-12 col-md-3">
                <h6 class="footer__title">Download Our App</h6>
                <ul class="footer__app">
                    <li><a href="#"><img src="<?= ASSETS ?>img/Download_on_the_App_Store_Badge.svg" alt=""></a></li>
                    <li><a href="#"><img src="<?= ASSETS ?>img/google-play-badge.png" alt=""></a></li>
                </ul>
            </div>
            <!-- end footer list -->

            <!-- footer list -->
            <div class="col-6 col-sm-4 col-md-3">
                <h6 class="footer__title">Resources</h6>
                <ul class="footer__list">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Pricing Plan</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
            </div>
            <!-- end footer list -->

            <!-- footer list -->
            <div class="col-6 col-sm-4 col-md-3">
                <h6 class="footer__title">Legal</h6>
                <ul class="footer__list">
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Security</a></li>
                </ul>
            </div>
            <!-- end footer list -->

            <!-- footer list -->
            <div class="col-12 col-sm-4 col-md-3">
                <h6 class="footer__title">Contact</h6>
                <ul class="footer__list">
                    <li><a href="tel:+18002345678">+1 (800) 234-5678</a></li>
                    <li><a href="mailto:support@moviego.com">support@cinematv.com</a></li>
                </ul>
                <ul class="footer__social">
                    <li class="facebook"><a href="https://www.facebook.com/" target="_blank"><i class="icon ion-logo-facebook"></i></a></li>
                    <li class="instagram"><a href="https://www.instagram.com/" target="_blank"><i class="icon ion-logo-instagram"></i></a></li>
                    <li class="twitter"><a href="https://twitter.com/" target="_blank"><i class="icon ion-logo-twitter"></i></a></li>
                    <li class="vk"><a href="https://vk.com/" target="_blank"><i class="icon ion-logo-vk"></i></a></li>
                </ul>
            </div>
            <!-- end footer list -->

            <!-- footer copyright -->
            <div class="col-12">
                <div class="footer__copyright">
                    <small><a target="_blank" href="#">Templates Hub</a></small>

                    <ul>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <!-- end footer copyright -->
        </div>
    </div>
</footer>
<!-- end footer -->

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="<?= ASSETS ?>js/flexible.pagination.js"></script>
<script src="<?= ASSETS ?>js/datepicker.min.js"></script>
<script src="<?= ASSETS ?>js/bootstrap.bundle.min.js"></script>
<script src="<?= ASSETS ?>js/owl.carousel.min.js"></script>
<script src="<?= ASSETS ?>js/jquery.mousewheel.min.js"></script>
<script src="<?= ASSETS ?>js/jquery.mCustomScrollbar.min.js"></script>
<script src="<?= ASSETS ?>js/wNumb.js"></script>
<script src="<?= ASSETS ?>js/nouislider.min.js"></script>
<script src="<?= ASSETS ?>js/plyr.min.js"></script>
<script src="<?= ASSETS ?>js/jquery.morelines.min.js"></script>
<script src="<?= ASSETS ?>js/photoswipe.min.js"></script>
<script src="<?= ASSETS ?>js/photoswipe-ui-default.min.js"></script>
<script src="<?= ASSETS ?>js/main.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5f01f94a760b2b560e6fc6fa/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

</body>

</html>