<?php
/**
 *
 * Template Name: Weekly Results, Table
 *
 * A template for displaying a page with an event table.
 *
 * @package WordPress
 * @subpackage bv-golf
 */
get_header();

?> 

<div id="primary" class="site-content">
    <div id="content" role="main">
        <?php 
  while ( have_posts() ) : the_post();
        ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-content">
                    <?php the_content() ?>
                    <div class="container">
                        <?php include "table.php" ?>
                    </div>
                </div><!-- .entry-content -->
                <footer class="entry-meta">
                    <?php edit_post_link( __( 'Edit', '' ), '<span class="edit-link">', '</span>' ); ?>
                </footer><!-- .entry-meta -->
            </article><!-- #post -->
            
            <?php comments_template( '', true ); ?>
            
        <?php endwhile; // end of the loop. ?>
    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>