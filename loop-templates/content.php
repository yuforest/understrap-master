<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}
?>
<div class="col-md-4 col-xl-3 col-sm-6">
  <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <header class="entry-header">

    </header><!-- .entry-header -->



    <div class="entry-content movie-list-content">

      <?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
      <div class="image-playtime-wrapper">
        <a href="<?php echo esc_url( get_permalink() ); ?>" class="movie-image-link">
          <img class="thumbnail-image img-fluid" src="<?php echo the_post_thumbnail_url( 'medium' ); ?>" alt="">
          <span class="playtime-tip"><?php echo post_custom('再生時間'); ?></span>
          <i class="fa fa-play-circle-o fa-5x play-icon" aria-hidden="true"></i>
        </a>
      </div>
      <?php
      the_title(
        sprintf( '<p class="entry-title mb-1"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
        '</a></p>'
      );
      ?>
      <p class="gray-text">
        <span class="mr-2"><?php if(function_exists('the_views')) { the_views(); } ?></span>
        <span><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . '前'; ?></span>
      </p>


      <?php //the_excerpt(); ?>

      <?php
      // wp_link_pages(
      //  array(
      //    'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
      //    'after'  => '</div>',
      //  )
      // );
      ?>

    </div><!-- .entry-content -->

    <footer class="entry-footer">

      <?php //understrap_entry_footer(); ?>

    </footer><!-- .entry-footer -->

  </article><!-- #post-## -->
</div>
