<!DOCTYPE HTML>
<!--
  84 69 68 120 89 111 117 116 104 64 84 101 104 114 97 110
-->
<html>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--[if lte IE 8]>
    <script src="<?php bloginfo('template_directory'); ?>/js/ie/html5shiv.js"></script><![endif]-->
    <!-- Favicons -->

    <link rel="apple-touch-icon" sizes="144x144"
          href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114"
          href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72"
          href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="57x57"
          href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-57x57.png">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicons/favicon.png"
          type="image/png">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css"/>

    <?php if (is_home()) { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/hover-min.css"/>
    <?php } ?>

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/custom.css"/>

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie8.css"/><![endif]-->
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie9.css"/><![endif]-->

    <!-- Scripts -->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>

    <?php wp_head(); ?>

</head>

<body>
<!-- Header -->
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="#" class="logo" data-scroll><img alt="logo" height="50" id="logo"
                                                          src="<?php bloginfo('template_directory'); ?>/images/logo.png"></a>
                <nav class="nav-collapse">
                    <?php if (is_home()) { ?>
                        <ul>
                            <li class="menu-item"><a href="#intro" data-scroll>Home</a></li>
                            <li class="menu-item"><a href="#about" data-scroll>About</a></li>
                            <li class="menu-item"><a href="#getInvolved" data-scroll>Get Involved</a></li>
                            <li class="menu-item"><a href="#talks" data-scroll>Talks</a></li>
                            <li class="menu-item"><a href="#sketch-sec" data-scroll>Wall</a></li>
                        </ul>
                    <?php } else { ?>
                        <ul>
                            <li class="menu-item">
                                <a href="<?php get_site_url(); ?>" data-scroll>Home</a>
                            </li>
                            <li class="menu-item <?php if (is_page_template('page-about.php')) echo "active"; ?>">
                                <a href="<?php echo  site_url('about-us'); ?>" data-scroll>About</a>
                            </li>
                            <li class="menu-item <?php if (is_page_template('page-nominate.php')) echo "active"; ?>">
                                <a href="<?php echo  site_url('nominate'); ?>" data-scroll>Nominate</a>
                            </li>
                            <li class="menu-item <?php if (is_page_template('page-volunteer.php')) echo "active"; ?>">
                                <a href="<?php echo site_url('volunteer'); ?>" data-scroll>Volunteer</a>
                            </li>
                            <li class="menu-item"><a href="#" data-scroll>Talks</a></li>
                            <li class="menu-item"><a href="<?php echo  site_url('#sketch-sec'); ?>" data-scroll>Wall</a></li>
                        </ul>
                    <?php } ?>

                </nav>
            </div>
        </div>
    </div>
</header>