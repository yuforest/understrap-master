<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
  jQuery( function( $ ) {
    $( '.drawer' ).drawer();
  });

  </script>
</head>

<body <?php body_class(['drawer', 'drawer--left']); ?>>

<div class="site" id="page">

  <!-- ******************* The Navbar Area ******************* -->
  <div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

    <a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

    <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">


    <?php if ( 'container' == $container ) : ?>
      <div class="container">
    <?php endif; ?>

      <!-- ナビゲーションの中身 -->
      <nav class="drawer-nav" role="navigation">
        <!-- メニューの読み込み -->
        <?php wp_nav_menu( array( 'theme_location' => 'my-drawer', 'menu_class' => 'drawer-menu', 'container' => false, 'depth' => 1 ) ); ?>
      </nav>



          <!-- Your site title as branding in the menu -->


            <?//php if ( is_front_page() && is_home() ) : ?>
              <div>
                <div>
                  <button type="button" class="drawer-toggle drawer-hamburger"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></button>
                </div>
                <?php if ( ! has_custom_logo() ) { ?>
                  <?php if ( is_front_page() && is_home() ) : ?>
                    <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
                  <?php else : ?>
                    <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
                  <?php endif; ?>
                 <?php } else {
                    the_custom_logo();
                  } ?><!-- end custom logo -->
              </div>







        <div class="search-form mx-auto mx-sm-0">
          <?php get_search_form(); ?>
        </div>



        <!-- The WordPress Menu goes here -->
        <?php wp_nav_menu(
          array(
            'theme_location'  => 'primary',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'navbarNavDropdown',
            'menu_class'      => 'navbar-nav ml-auto d-md-none',
            'fallback_cb'     => '',
            'menu_id'         => 'main-menu',
            'depth'           => 2,
            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
          )
        ); ?>


      <?php if ( 'container' == $container ) : ?>
      </div><!-- .container -->
      <?php endif; ?>

    </nav><!-- .site-navigation -->

  </div><!-- #wrapper-navbar end -->



