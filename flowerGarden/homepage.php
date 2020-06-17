<?php

/*
*
*
* Template Name: homepage
*
*/

?>
<?php get_header() ; ?>

<div class="main">
  <!-- <img src=" -->
  <?php // echo get_stylesheet_directory_uri() .'/img/homepage_landing_page_idea_two.png'; ?>
  <!-- " style="width: 100%; height: auto;" > -->
  <!-- <div class="centered">
      some text
  </div> -->


</div>

<!-- include the homepage content -->

<?php do_action( 'ocean_before_content_wrap' ); ?>

<div id="content-wrap" class="container clr">

  <?php do_action( 'ocean_before_primary' ); ?>

  <div id="primary" class="content-area clr">

    <?php do_action( 'ocean_before_content' ); ?>

    <div id="content" class="site-content clr">

      <?php do_action( 'ocean_before_content_inner' ); ?>

      <?php
      // Elementor `single` location
      if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) {

        // Start loop
        while ( have_posts() ) : the_post();

          get_template_part( 'partials/page/layout' );

        endwhile;

      } ?>

      <?php do_action( 'ocean_after_content_inner' ); ?>

    </div><!-- #content -->

    <?php do_action( 'ocean_after_content' ); ?>

  </div><!-- #primary -->

  <?php do_action( 'ocean_after_primary' ); ?>

  <?php do_action( 'ocean_display_sidebar' ); ?>

</div><!-- #content-wrap -->

<?php do_action( 'ocean_after_content_wrap' ); ?>


<?php get_footer() ; ?>
