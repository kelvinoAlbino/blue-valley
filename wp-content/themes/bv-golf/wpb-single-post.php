<?php
/*
 * Template Name: Event Article
 * Template Post Type: post, page, product, am_event
 */
 
 get_header();

$show_default_title = get_post_meta( get_the_ID(), '_et_pb_show_title', true );

$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );

?>

<div id="main-content">
  <div class="container">
    <div id="content-area" class="clearfix">
      <div id="left-area">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php if (et_get_option('divi_integration_single_top') <> '' && et_get_option('divi_integrate_singletop_enable') == 'on') echo(et_get_option('divi_integration_single_top')); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'et_pb_post' ); ?>>
          <?php if ( ( 'off' !== $show_default_title && $is_page_builder_used ) || ! $is_page_builder_used ) { ?>
            <div class="et_post_meta_wrapper">
              <h1 class="entry-title"><?php the_title(); ?></h1>
            </div> <!-- .et_post_meta_wrapper -->
          <?php  } ?>

          <div class="entry-content">
            <?php
              the_content();
            ?>
          </div> <!-- .entry-content -->

          <div class="et_post_meta_wrapper">
          <?php
          if ( et_get_option('divi_468_enable') == 'on' ){
            echo '<div class="et-single-post-ad">';
            if ( et_get_option('divi_468_adsense') <> '' ) echo( et_get_option('divi_468_adsense') );
            else { ?>
              <a href="<?php echo esc_url(et_get_option('divi_468_url')); ?>"><img src="<?php echo esc_attr(et_get_option('divi_468_image')); ?>" alt="468" class="foursixeight" /></a>
        <?php   }
            echo '</div> <!-- .et-single-post-ad -->';
          }
        ?>

          <?php if (et_get_option('divi_integration_single_bottom') <> '' && et_get_option('divi_integrate_singlebottom_enable') == 'on') echo(et_get_option('divi_integration_single_bottom')); ?>

          <?php
            if ( ( comments_open() || get_comments_number() ) && 'on' == et_get_option( 'divi_show_postcomments', 'on' ) ) {
              comments_template( '', true );
            }
          ?>
          </div> <!-- .et_post_meta_wrapper -->
        </article> <!-- .et_pb_post -->

      <?php endwhile; ?>
      </div> <!-- #left-area -->

      <?php get_sidebar(); ?>
    </div> <!-- #content-area -->
  </div> <!-- .container -->
</div> <!-- #main-content -->

<?php get_footer(); ?>