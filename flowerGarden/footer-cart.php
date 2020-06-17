<?php
/**
 * The template for displaying the footer.
 *
 * @package OceanWP WordPress theme
 */ ?>

</div><!-- close inner-after-header -->

<div class="footer-one">
    <div class="fifty">
      <div class="inner-fifty-margin">
        <h3>Raheny</h3>
        <p class="yellow">Phone:</p>
        <p>(01) 8327535</p>
        <p class="yellow">Fax:</p>
        <p>(01) 8327635</p>
        <p class="yellow">Email:</p>
        <p>info&#64;sfh.ie</p>
      </div>
    </div>

    <div class="fifty">
      <div class="inner-fifty-margin">
        <h3>Blanchardstown</h3>
        <p class="yellow">Phone:</p>
        <p>(01) 8294000</p>
        <p class="yellow">Fax:</p>
        <p>(01) 8294099</p>
        <p class="yellow">Email:</p>
        <p>info&#64;sfh.ie</p>
      </div>
    </div>
</div>

<?php wp_footer(); ?>
<script type="text/javascript">

jQuery.fx.speeds.xslow = 3000;
(function($) {

  $(window).on("load", function() {
    $('html,body').animate({
        scrollTop: $(".inner-after-content").offset().top},
        'xslow');
  });

})( jQuery );
</script>

        </main><!-- #main -->

        <?php do_action( 'ocean_after_main' ); ?>

        <?php do_action( 'ocean_before_footer' ); ?>

        <?php
        // Elementor `footer` location
        if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) { ?>

            <?php do_action( 'ocean_footer' ); ?>

        <?php } ?>

        <?php do_action( 'ocean_after_footer' ); ?>

    </div><!-- #wrap -->

    <?php do_action( 'ocean_after_wrap' ); ?>

</div><!-- #outer-wrap -->

<?php do_action( 'ocean_after_outer_wrap' ); ?>

<?php
// If is not sticky footer
if ( ! class_exists( 'Ocean_Sticky_Footer' ) ) {
    get_template_part( 'partials/scroll-top' );
} ?>

<?php
// Search overlay style
if ( 'overlay' == oceanwp_menu_search_style() ) {
    get_template_part( 'partials/header/search-overlay' );
} ?>

<?php
// If sidebar mobile menu style
if ( 'sidebar' == oceanwp_mobile_menu_style() ) {

    // Mobile panel close button
    if ( get_theme_mod( 'ocean_mobile_menu_close_btn', true ) ) {
        get_template_part( 'partials/mobile/mobile-sidr-close' );
    } ?>

    <?php
    // Mobile Menu (if defined)
    get_template_part( 'partials/mobile/mobile-nav' ); ?>

    <?php
    // Mobile search form
    if ( get_theme_mod( 'ocean_mobile_menu_search', true ) ) {
        get_template_part( 'partials/mobile/mobile-search' );
    }

} ?>

<?php
// If full screen mobile menu style
if ( 'fullscreen' == oceanwp_mobile_menu_style() ) {
    get_template_part( 'partials/mobile/mobile-fullscreen' );
} ?>

<script type="text/javascript">
jQuery(document).ready(function($) {
  let some = $('#product-1748 > input#donation_amount_field').val();
  console.log(some);
  // change the text on the buttons
  // sunflower
  $("[data-product_id=48]").html('SUNFLOWER');
  // $("[value='48']").html('SUNFLOWER');
  // camillia
  $("[data-product_id=1748]").html('CAMILLIA');
  // $("[value='1748']").html('CAMILLIA');
  // daisy
  $("[data-product_id=1955]").html('DAISY');
  // $("[value='1955']").html('DAISY');
  // Gardenia
  $("[data-product_id=1963]").html('GARDENIA');
  // $("[value='1963']").html('GARDENIA');
  // Red rose
  $("[data-product_id=1970]").html('RED ROSE');
  // $("[value='1970']").html('RED ROSE');
  // Tulip
  $("[data-product_id=1975]").html('TULIP');
  // $("[value='1975']").html('TULIP');
  // Lilly
  $("[data-product_id=1981]").html('LILLY');
  // $("[value='1981']").html('LILLY');


  // generic function to set all text fields to blank
  $('#donation_amount_field').val('');
  $('[name="add-to-cart"]').on('click', function(evt) {
    let oldValue = $('#donation_amount_field').val();
    let newVal = 1;
    if((oldValue <= 0) || (oldValue <= 0.00) || (oldValue == "") ){
      evt.preventDefault();
      alert("Please enter a value greater than zero");
      $('#donation_amount_field').focus();
      $('#donation_amount_field').val(newVal +'.00');
    }
  });

  $("[name=donation_amount]").val('');
  $('[name="add-to-cart"]').on('click', function(evt) {
    let oldValue = $('[name=donation_amount]').val();
    let newVal = 1;
    if((oldValue <= 0) || (oldValue <= 0.00) || (oldValue == "") ){
      evt.preventDefault();
      alert("Please enter a value greater than zero");
      $('[name=donation_amount]').focus();
      $('[name=donation_amount]').val(newVal +'.00');
    }
  });

});

</script>

</body>
</html>
