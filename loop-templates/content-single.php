<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

  <header class="entry-header">



    <div class="entry-meta">

      <?php //understrap_posted_on(); ?>

    </div><!-- .entry-meta -->

  </header><!-- .entry-header -->

  <?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

  <div class="entry-content movie-page-content">

    <?php the_content(); ?>
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    <div class="entry-information-wrapper">
      <span class="entry-posttime mr-2"><?php echo get_the_date( 'Y年n月j日'); ?>に公開</span>
      <span class="entry-playings mr-2"><?php if(function_exists('the_views')) { the_views(); } ?></span>
    </div>
    <div class="favorite-link">
      <?php wpfp_link() ?>
    </div>

    <?php
    // wp_link_pages(
    //   array(
    //     'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
    //     'after'  => '</div>',
    //   )
    // );
    ?>

  </div><!-- .entry-content -->

  <footer class="entry-footer">

    <?php //understrap_entry_footer(); ?>

  </footer><!-- .entry-footer -->

</article><!-- #post-## -->


