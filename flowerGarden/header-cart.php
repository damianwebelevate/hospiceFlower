<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?><?php oceanwp_schema_markup( 'html' ); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php do_action( 'ocean_before_outer_wrap' ); ?>

	<div id="outer-wrap" class="site clr">

		<?php do_action( 'ocean_before_wrap' ); ?>

		<div id="wrap" class="clr">
			<!-- new insert here -->
			<!-- <div style="width: 100%; height: 80px; background: #ffca00;">

					<div class="container">

						<div class="fifty">
							<h1 class="main-title">Hospice Virtual Flower Garden</h1>
						</div>
						<div class="fifty">
						<ul class="top-bar-menu">
						 	<li style="margin-right: 20px;">
								<h1 class="top-bar-heading">Shopping Cart</h1>
							</li>
							 	<li><a class="wcmenucart" href="https://hospicevirtualflowergarden.com/basket/">
									<img class="top-bar-icon" src="https://hospicevirtualflowergarden.com/wp-content/uploads/2018/06/icon-cart-action.png">
							</a></li>
						</ul>
						</div>

					</div> -->

			</div>

			<div class="background">
			<?php do_action( 'ocean_top_bar' ); ?>

			<?php do_action( 'ocean_header' ); ?>

			<?php do_action( 'ocean_before_main' ); ?>

			<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?>>

				<?php do_action( 'ocean_page_header' ); ?>


<!-- header to appear on all pages -->
<div class="inner-after-header">
<div class="fifty">
	<h1 class="main-title">St. Francis Hospice Dublin</h1>
	<h2 class="sfh-title">Donate, Share and Show you Care</h2>
</div>
<div class="fifty">
<!-- empty -->
</div>
<div style="clear: both;"></div>
<!-- social media -->
<div class="fifty">
	<!-- empty -->
</div>
<div class="fifty">

		<ul class="sfh-social">
			<li>
				<a style="color: white;" href="https://twitter.com/intent/tweet?text=Hospice%20Virtual%20Flower%20Garden.%20Donate,%20Share%20and%20Show%20You%20Care!%20%40SFHDublin&amp;url=https://hospicevirtualflowergarden.com/&amp;hashtags=SFHDublin,DonateShareAndShowYouCare" rel="noreferrer">
					<img style="width: 40px; height: auto;" src="https://hospicevirtualflowergarden.com/wp-content/uploads/2019/01/twitter-4-48.ico">
				</a>
				</li>
				<li >
					<a href="https://www.facebook.com/sfhdublin" target="_blank">
						<img style="width: 40px; height: auto;" src="https://hospicevirtualflowergarden.com/wp-content/uploads/2019/01/facebook-4-48.ico"></a>
					</li>
					<li>
						<a href="https://www.youtube.com/channel/UCdXUlk3tlBCjlbgMwZhWFQQ" target="_blank">
							<img style="width: 40px; height: auto;" src="https://hospicevirtualflowergarden.com/wp-content/uploads/2019/01/youtube-4-48.ico">
						</a>
					</li>
			</ul>

</div>
<!-- // social media -->
</div><!-- inner after header -->
</div><!-- background -->
<div style="clear: both;"></div>
<!-- close this before footer -->
<div class="inner-after-content">
