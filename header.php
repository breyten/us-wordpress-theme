<?php
/**
 * The theme header
 *
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" type="text/css" href="/css/main.css" />
    <link rel="icon" type="image/ico" href="/img/favicon.ico" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<!--wordpress head-->
	<?php wp_head(); ?>
	<!--
    <script src="/js/jquery.1.9.0.min.js" type="text/javascript"></script>
	<script src="/js/modernizr.custom.js" type="text/javascript"></script> -->
	<script src="/js/respond.js" type="text/javascript"></script>
	<script src="/js/slick.js" type="text/javascript"></script>
	<script src="/js/jquery.touchSwipe.min.js" type="text/javascript"></script>
  </head>
</html>
<body <?php body_class(); ?>>
  <!--Navigatie--><div id="nav" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
          <div class="sr-only">
            Toggle navigation
          </div>
          <div class="icon-bar"></div>
          <div class="icon-bar"></div>
          <div class="icon-bar"></div>
	</button><a class="navbar-brand" href="/"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-top.png" alt="US Volleybal Amsterdam" /></a>
      </div>
      <div class="collapse navbar-collapse">
		<?php
        // ugly hack to get bootstrap compatible menus :/
        /*
        $menu = wp_nav_menu(array(
            'echo' => true,
			'theme_location' => 'primary',
			'container' => false,
            'walker' => new wp_bootstrap_navwalker()
		));*/

        wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
/*
        echo str_ireplace(
            array(
                '<ul>',
                '<div class="menu">',
                '</ul></div>',
                'class="page_item ',
                '<ul class=\'children\'>',
                'page_item_has_children'
            ),
            array(
                '<ul class="nav navbar-nav navbar-right">',
                '',
                '</ul>',
                'class="',
                '<ul class="dropdown-menu">',
                'dropdown'
            ),
            $menu
        ); */
        ?>
		<?php dynamic_sidebar('navbar-right'); ?>
      </div>
    </div>
  </div><!--Begin content-->
  <div id="content">
