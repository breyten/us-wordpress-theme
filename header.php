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
        </button><a class="navbar-brand" href="/"><img class="logo" src="/img/logo-top.png" alt="US Volleybal Amsterdam" /></a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a class="active" page="/" href="/">Home</a>
          </li>
          <li class="dropdown">
            <a class="" page="/" href="/vereniging/">Vereniging</a>
            <ul class="dropdown-menu">
              <li>
                <a href="/vereniging/bestuur/">Bestuur</a>
              </li>
              <li>
                <a href="/vereniging/technischecommissie/">Technische commissie</a>
              </li>
              <li>
                <a href="/vereniging/competitiecommissie/">Competitie commissie</a>
              </li>
              <li>
                <a href="/vereniging/sponsorcommissie/">Sponsor commissie</a>
              </li>
              <li>
                <a href="/vereniging/jeugdcommissie/">Jeugd commissie</a>
              </li>
              <li>
                <a href="/vereniging/activiteitencommissie/">Activiteiten commissie</a>
              </li>
              <li>
                <a href="/vereniging/redactiecommissie/">PR/Redactie commissie</a>
              </li>
              <li>
                <a href="/vereniging/materialencommissie/">Materialen commissie</a>
              </li>
              <li>
                <a class="" page="/" href="/vereniging/sponsor-worden/">Sponsor worden</a>
              </li>
              <li>
                <a class="" page="/" href="/vereniging/vrienden-van-us/">Vrienden van US</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="" page="/" href="/competitie/">Competitie</a>
            <ul class="dropdown-menu">
              <li>
                <a class="" page="/" href="/competitie/">Schema vlag- en zaaldienst</a>
              </li>
              <li>
                <a class="" page="/" href="/competitie/vlaginstructie/">Vlaginstructie</a>
              </li>
              <li>
                <a class="" page="/" href="/competitie/zaaldienst/">Zaaldienst instructie</a>
              </li>
              <li>
                <a class="" page="/" href="/competitie/invalregelingen/">Invalregelingen</a>
              </li>
              <li>
                <a class="" page="/" href="/competitie/verzetten/">Wedstrijden verzetten</a>
              </li>
              <li>
                <a class="" page="/" href="/competitie/scheidsrechters/">Scheidsrechters leveren</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="" page="/" href="/teams/">Teams</a>
            <ul class="dropdown-menu">
              <li>
                <a class="" page="/" href="/teams/">Teamindeling</a>
              </li>
              <li>
                <a class="" page="/" href="/teams/trainingschema/">Trainingschema</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="" page="/" href="/nieuws/">Nieuws</a>
          </li>
          <li>
            <a class="" page="/" href="/contact/">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </div><!--Begin content-->
  <div id="content">

<!--
		<div class="container page-container">
			<?php do_action('before'); ?>
			<header role="banner">
				<div class="row row-with-vspace site-branding">
					<div class="col-md-6 site-title">
						<h1 class="site-title-heading">
							<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
						</h1>
						<div class="site-description">
							<small>
								<?php bloginfo('description'); ?>
							</small>
						</div>
					</div>
					<div class="col-md-6 page-header-top-right">
						<div class="sr-only">
							<a href="#content" title="<?php esc_attr_e('Skip to content', 'bootstrap-basic'); ?>"><?php _e('Skip to content', 'bootstrap-basic'); ?></a>
						</div>
						<?php if (is_active_sidebar('header-right')) { ?>
						<div class="pull-right">
							<?php dynamic_sidebar('header-right'); ?>
						</div>
						<div class="clearfix"></div>
						<?php } // endif; ?>
					</div>
				</div><!--.site-branding-->
<!--
				<div class="row main-navigation">
					<div class="col-md-12">
						<nav class="navbar navbar-default" role="navigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
									<span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="collapse navbar-collapse navbar-primary-collapse">
								<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
								<?php dynamic_sidebar('navbar-right'); ?>
							</div><!--.navbar-collapse--><!--
						</nav>
					</div>
				</div><!--.main-navigation--><!--
			</header>


			<div id="content" class="row row-with-vspace site-content"> -->
