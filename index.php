<?php
require './_app/Config.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="https://schema.org/Article">
    <head>
        <meta charset="UTF-8">
        <title><?= $pg_title; ?></title>
        <meta name="description" content="<?= $pg_desc; ?>"/>
        <meta name="robots" content="index, follow"/>
        <meta name="format-detection" content="telephone=no">

        <link rel="author" href="https://plus.google.com/<?= $pg_google_author; ?>/posts"/>
        <link rel="publisher" href="https://plus.google.com/<?= $pg_google_publisher; ?>"/>
        <link rel="canonical" href="<?= $pg_url; ?>">

        <meta itemprop="name" content="<?= $pg_site; ?>"/>
        <meta itemprop="description" content="<?= $pg_desc; ?>"/>
        <meta itemprop="image" content="<?= $pg_image; ?>"/>
        <meta itemprop="url" content="<?= $pg_url; ?>"/>

        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?= $pg_title; ?>" />
        <meta property="og:description" content="<?= $pg_desc; ?>" />
        <meta property="og:image" content="<?= $pg_image; ?>" />
        <meta property="og:url" content="<?= $pg_url; ?>" />
        <meta property="og:site_name" content="<?= $pg_site; ?>" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:app_id" content="<?= $pg_fb_app; ?>" />
        <meta property="article:author" content="https://www.facebook.com/<?= $pg_fb_author; ?>" />
        <meta property="article:publisher" content="https://www.facebook.com/<?= $pg_fb_page; ?>" />

        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:site" content="<?= $pg_twitter; ?>" />
        <meta property="twitter:domain" content="<?= $pg_domain; ?>" />
        <meta property="twitter:title" content="<?= $pg_title; ?>" />
        <meta property="twitter:description" content="<?= $pg_desc; ?>" />
        <meta property="twitter:image:src" content="<?= $pg_image; ?>" />
        <meta property="twitter:url" content="<?= $pg_url; ?>" />  

        <link rel="icon" href="<?= INCLUDE_PATH; ?>/img/favicon.ico">
        <link rel="shortcut icon" href="<?= INCLUDE_PATH; ?>/img/favicon.png">
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/stuck.css">
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/owl.carousel.css">
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/form.css">
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/touchTouch.css">
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/camera.css">
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/style.css">
        <script src="<?= HOME; ?>/_cdn/jquery.js"></script>
        <script src="<?= HOME; ?>/_cdn/jquery-migrate-1.1.1.js"></script>
        <script src="<?= HOME; ?>/_cdn/script.js"></script>
        <script src="<?= HOME; ?>/_cdn/superfish.js"></script>
        <script src="<?= HOME; ?>/_cdn/jquery.equalheights.js"></script>
        <script src="<?= HOME; ?>/_cdn/jquery.mobilemenu.js"></script>
        <script src="<?= HOME; ?>/_cdn/jquery.easing.1.3.js"></script>
        <script src="<?= HOME; ?>/_cdn/tmStickUp.js"></script>
        <script src="<?= HOME; ?>/_cdn/jquery.ui.totop.js"></script>
        <script src="<?= HOME; ?>/_cdn/touchTouch.jquery.js"></script>
        <script src="<?= HOME; ?>/_cdn/owl.carousel.js"></script>
        <script src="<?= HOME; ?>/_cdn/sForm.js"></script>
        <script src="<?= HOME; ?>/_cdn/camera.js"></script>
        <!--[if (gt IE 9)|!(IE)]><!-->
        <script src="<?= HOME; ?>/_cdn/jquery.mobile.customized.min.js"></script>
        <!--<![endif]-->
        <script>
            $(document).ready(function() {
                jQuery('#camera_wrap').camera({
                    loader: false,
                    pagination: false,
                    minHeight: '200',
                    thumbnails: false,
                    height: '39,0625%',
                    caption: true,
                    navigation: true,
                    fx: 'mosaic'
                });
                var owl = $("#owl");
                owl.owlCarousel({
                    items: 7, //10 items above 1000px browser width
                    itemsDesktop: [995, 5], //5 items between 1000px and 901px
                    itemsDesktopSmall: [767, 3], // betweem 900px and 601px
                    itemsTablet: [700, 3], //2 items between 600 and 0
                    itemsMobile: [479, 2], // itemsMobile disabled - inherit from itemsTablet option
                    navigation: true,
                });
                $().UItoTop({easingType: 'easeOutQuart'});
                $('#stuck_container').tmStickUp({});
                $('.gallery a.gal_item').touchTouch();
            });
        </script>
        <!--[if lt IE 8]>
        <div style=' clear: both; text-align:center; position: relative;'>
                <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
                        <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
                </a>
        </div>
        <![endif]-->
        <!--[if lt IE 9]>
        <script src="_cdn/html5shiv.js"></script>
        <link rel="stylesheet" media="screen" href="themes/padrao/css/ie.css">
        <![endif]-->
    </head>
    <body class="page1" id="top">
        <!--==============================header=================================-->
        <header>
            <div id="stuck_container">
                <div class="container">
                    <div class="row">
                        <div class="grid_12">
                            <h1>
                                <a title="Home" href="<?= HOME; ?>">
                                    <img src="<?= INCLUDE_PATH; ?>/img/logo.png" alt=" <?= $pg_title; ?>">
                                </a>
                            </h1>
                            <div class="menu_block">
                                <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                                    <ul class="sf-menu">
                                        <h1 style="display: none;"><?= $setUrl;?></h1>
                                        <?php require REQUIRE_PATH . '/inc/main_nav.php'; ?>
                                    </ul>
                                </nav>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!--CONTEUDO-->
        <?php
        $Url[1] = (empty($Url[1]) ? null : $Url[1]);

        if (file_exists(REQUIRE_PATH . '/' . $Url[0] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '.php';
        elseif (file_exists(REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php';
        else:
            require REQUIRE_PATH . '/404.php';
        endif;
        ?>
        <!--CONTEUDO-->
        <!--==============================footer=================================-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <div class="footer_socials">
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-google-plus"></a>
                        </div>
                        <div class="copy">
                            <span class="brand"> Reppy Day | Direitos Reservados</span> &copy; <span id="copyright-year">  </span> | <a id="fokus" href="http://www.fokusf5.com.br" target="_blank" title="FokusF5 Desenvolvimento Web">Developer by </a>
                            <div class="sub_copy">
                                <img class="fokus" src="<?= INCLUDE_PATH; ?>/img/copy.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>