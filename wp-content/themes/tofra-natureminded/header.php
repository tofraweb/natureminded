<?php 


?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html dir="rtl" lang="en"> <!--<![endif]-->
<head>
    <title>טבע בראש - על צמחים וציפורים</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>


    <!-- Google Tracking Code -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107710897-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-107710897-1');
    </script>
    <!-- Google Tracking Code end -->
    <?php wp_head(); ?>
</head>

<body>

<div class="wrapper">
    <!--=== Header ===-->
    <div class="header">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="<?php bloginfo( 'url' ); ?>">
                <img src="<?php echo get_template_directory_uri();?>/img/tevabarosh_logo_small.png" alt="Logo">
            </a>
            <!-- End Logo -->

            <!-- Topbar -->
            <div class="topbar">
                <ul class="loginbar pull-right" style="padding-top: 15px;">
                    <form method="get" action="http://localhost/tofraweb/natureminded/">
                          <div class="search-open">
                              <div class="input-group animated fadeInDown">
                                  <input type="text" class="form-control" name="s" id="s" placeholder="חיפוש באתר">
                                  <span class="input-group-btn">
                                      <button class="btn-u" type="button">חפש</button>
                                  </span>
                              </div>
                          </div>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- End Topbar -->

            <!-- Toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <!-- End Toggle -->
        </div><!--/end container-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
            <div class="container">
                <ul class="nav navbar-nav" style="font-size:20px">
                <?php 
                    wp_nav_menu( array(
                        'menu'              => 'header-menu',
                        // 'theme_location'    => 'primary',
                        'depth'             => 3,
                        // 'container'         => 'div',
                        // 'container_class'   => 'collapse navbar-collapse',
                        // 'container_id'      => 'navbarsExampleDefault',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker())
                    );
                ?>
                    <!-- Home -->
<!--                     <li class="active">
                        <a href="<?php bloginfo( 'url' ); ?>">
                            בית
                        </a>
                    </li> -->
                    <!-- End Home -->

                    <!-- Plants -->
<!--                     <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            קטלוג צמחים
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Service Pages -->
     <!--                        <li>
                                <a href="#">פרחי שדה</a>
                            </li>
                            <li>
                                <a href="#">עצים ושיחים</a>
                            </li>
                             <li>
                                <a href="#">קקטוסים וסוקולנטים</a>
                            </li>
                            <li>
                                <a href="#">כל הצמחים</a>
                            </li>
                            <!-- End Sub Level Menu -->
    <!--                     </ul>
                    </li>   -->
                    <!-- End Plants -->

                    <!-- Birds -->
<!--                     <li>
                        <a href="<?php bloginfo( 'url' ); ?>/birds-catalog/">
                            קטלוג ציפורים
                        </a>
                    </li> -->
                    <!-- End Birds -->


                    <!-- Blog -->
<!--                     <li>
                        <a href="<?php bloginfo( 'url' ); ?>/בלוג">
                            בלוג
                        </a>
                    </li> -->
                    <!-- End Blog -->


                    <!-- About -->
<!--                     <li>
                        <a href="#">
                            אודות   
                        </a>
                    </li> -->
                    <!-- End About -->

                    <!-- Personal -->
<!--                     <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            שלום טומי
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Service Pages -->
      <!--                       <li>
                                <a href="#">הפרופיל שלי</a>
                            </li>
                            <li>
                                <a href="#">הגן שלי</a>
                            </li> -->
                            <!-- End Sub Level Menu -->
<!--                         </ul>
                    </li>  -->
                    <!-- End Personal -->

                    <!-- Search Block -->
<!--                     <li style="float: left;">
                        <i class="search fa fa-search search-btn"></i>
                        <form method="get" action="http://localhost/tofraweb/natureminded/">
                          <div class="search-open">
                              <div class="input-group animated fadeInDown">
                                  <input type="text" class="form-control" name="s" id="s" placeholder="חיפוש באתר">
                                  <span class="input-group-btn">
                                      <button class="btn-u" type="button">חפש</button>
                                  </span>
                              </div>
                          </div>
                        </form>
                    </li> -->
                    <!-- End Search Block -->
                </ul>
            </div><!--/end container-->
        </div><!--/navbar-collapse-->
    </div>
    <!--=== End Header ===-->
