<?php

/*
*
*
* Template Name: basket
* This is the template to show the basket page
* Should the theme of wordpress be changed then use the animation template for
* this page to display correctly
* **Note that this page does not include the wordpress post loop
*
*/

?>
<?php get_header(); ?>



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



	</div><!-- #content-wrap -->



	<?php do_action( 'ocean_after_content_wrap' ); ?>


<script type="text/javascript">
  let lnk = document.querySelector('.wc-backward');
  let lnkH = lnk.href;
  lnk.href = "<?php echo site_url('/flower-garden/', 'https'); ?>";
</script>


<?php get_footer(); ?>
