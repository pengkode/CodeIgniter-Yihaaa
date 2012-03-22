
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bootstrap, from Twitter</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="<?php echo $themes ?>css/bootstrap.css" rel="stylesheet">
        <style>
            body {
                padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
            }
        </style>
        <link href="<?php echo $themes ?>css/bootstrap-responsive.css" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="<?php echo $themes ?>ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $themes ?>ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $themes ?>ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo $themes ?>ico/apple-touch-icon-57-precomposed.png">
    </head>

    <body>

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="<?php echo site_url('backends/dashboard') ?>">Backends</a>

                    <?php if ( !isset($is_login) ): ?>
                        <div class="nav-collapse">
                            <ul class="nav">
                                <li><a href="<?php echo site_url('backends/topic') ?>">Topic</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                            <ul class="nav pull-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog icon-white"></i> Setting<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#"></a></li>
                                        <li class="divider"></li>
                                        <li><a href="<?php echo site_url() ?>" target="_blank"><i class="icon-home"></i> view site</a></li>
                                        <li><a href="<?php echo site_url('backends/logout') ?>"><i class="icon-off"></i> Logout</a></li>
                                    </ul>
                                </li>
                                <li class="divider-vertical"></li>
                            </ul>
                        </div><!--/.nav-collapse-->
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="container">

            <?php echo $content; ?>

        </div> <!-- /container -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo $themes ?>js/jquery.js"></script>
        <script src="<?php echo $themes ?>js/bootstrap-transition.js"></script>
        <script src="<?php echo $themes ?>js/bootstrap-alert.js"></script>
        <script src="<?php echo $themes ?>js/bootstrap-modal.js"></script>
        <script src="<?php echo $themes ?>js/bootstrap-dropdown.js"></script>
        <script src="<?php echo $themes ?>js/bootstrap-scrollspy.js"></script>
        <script src="<?php echo $themes ?>js/bootstrap-tab.js"></script>
        <script src="<?php echo $themes ?>js/bootstrap-tooltip.js"></script>
        <script src="<?php echo $themes ?>js/bootstrap-popover.js"></script>
        <script src="<?php echo $themes ?>js/bootstrap-button.js"></script>
        <script src="<?php echo $themes ?>js/bootstrap-collapse.js"></script>
        <script src="<?php echo $themes ?>js/bootstrap-carousel.js"></script>
        <script src="<?php echo $themes ?>js/bootstrap-typeahead.js"></script>
        <script src="<?php echo $themes ?>js/backends.js"></script>

    </body>
</html>
