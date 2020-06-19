<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */
 ?>

 <?php
$imageSrc = '';

if(is_front_page()){
	$imageSrc = "style='background-image: url(".get_stylesheet_directory_uri()."/images/backgrounds/sunflower.png" .")'";
}
if(is_page('flower-garden')){
	$imageSrc = "style='background-image: url(".get_stylesheet_directory_uri()."/images/backgrounds/sunflower.png" .")'";
}
if(is_page('camellia')){
	$imageSrc = "style='background-image: url(".get_stylesheet_directory_uri()."/images/backgrounds/camellia.png" .")'";
}
if(is_page('daisy')){
	$imageSrc = "style='background-image: url(".get_stylesheet_directory_uri()."/images/backgrounds/daisy.png" .")'";
}
if(is_page('gardenia')){
	$imageSrc = "style='background-image: url(".get_stylesheet_directory_uri()."/images/backgrounds/gardenia.png" .")'";
}
if(is_page('lily')){
	$imageSrc = "style='background-image: url(".get_stylesheet_directory_uri()."/images/backgrounds/lily.png" .")'";
}
if(is_page('red-rose')){
	$imageSrc = "style='background-image: url(".get_stylesheet_directory_uri()."/images/backgrounds/red-rose.png" .")'";
}
if(is_page('sunflower')){
	$imageSrc = "style='background-image: url(".get_stylesheet_directory_uri()."/images/backgrounds/sunflower.png" .")'";
}
if(is_page('tulip')){
	$imageSrc = "style='background-image: url(".get_stylesheet_directory_uri()."/images/backgrounds/tulip.png" .")'";
}
if(is_page('contact')){
	$imageSrc = "style='background-image: url(".get_stylesheet_directory_uri()."/images/backgrounds/sunflower.png" .")'";
}
if(is_page('checkout') || is_page('basket')){

global $woocommerce;
$items = $woocommerce->cart->get_cart();

$ident = 'sunflower';

foreach($items as $item => $values) {
    $_product =  wc_get_product( $values['data']->get_id());
    // echo "<b>".$_product->get_title().'</b>  <br> Quantity: '.$values['quantity'].'<br>';
    // $price = get_post_meta($values['product_id'] , '_price', true);
    // echo "  Price: ".$price."<br>";
		$ident = strtolower(str_replace(" ", "", $_product->get_title()));
}
  if($ident == 'redrose'){
    $ident = 'red-rose';
  }
	$imageSrc = "style='background-image: url(".get_stylesheet_directory_uri()."/images/backgrounds/".$ident.".png" .")'";
}

if(is_page('view-email-in-browser')){
  $productId = isset($_GET['productId']) ? $_GET['productId'] : '';
  if(!($productId)){
    $imageSrc = "style='background-image: url(".get_stylesheet_directory_uri()."/images/backgrounds/sunflower.png" .")'";
  }else{
    $ident = $_GET['productId'];
    $val = '';
    switch ($ident) {
      case 48:
  		// sunflower
  			$val = 'sunflower';
  			break;
  		case 1748:
  		// camellia
  			$val = 'camellia';
  			break;
  		case 1955:
  		// daisy
  			$val = 'daisy';
  		break;
  		case 1963:
  		// gardenia
  			$val = 'gardenia';
  		break;
  		case 1970:
  		// Red Rose
  			$val = 'red-rose';
  		break;
  		case 1975:
  		// tulip
  			$val = 'tulip';
  		break;
  		case 1981:
  		// Lily
  			$val = 'lily';
  		break;
  		default:
  			// code...
  			break;
    }
    $imageSrc = "style='background-image: url(".get_stylesheet_directory_uri()."/images/backgrounds/".$val.".png" .")'";
  }
}

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?><?php oceanwp_schema_markup( 'html' ); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@SFHDublin">
<meta name="twitter:creator" content="@SFHDublin">
<meta name="twitter:title" content="Donate, Share and Show you Care">
<meta name="twitter:description" content="St. Francis Hospice is proud to announce the creation of the Hospice Virtual Flower Garden. Go to https://hospicevirtualflowergarden.com for more details.">
<meta name="twitter:image" content="https://hospicevirtualflowergarden.com/wp-content/uploads/2020/04/email_share.png">





<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_stylesheet_directory_uri() .'/icons/apple-touch-icon-57x57.png'; ?>" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() .'/icons/apple-touch-icon-114x114.png'; ?>" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() .'/icons/apple-touch-icon-72x72.png'; ?>" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() .'/icons/apple-touch-icon-144x144.png'; ?>" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_stylesheet_directory_uri() .'/icons/apple-touch-icon-60x60.png'; ?>" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_stylesheet_directory_uri() .'/icons/apple-touch-icon-120x120.png'; ?>" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_stylesheet_directory_uri() .'/icons/apple-touch-icon-76x76.png'; ?>" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_stylesheet_directory_uri() .'/icons/apple-touch-icon-152x152.png'; ?>" />
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() .'/icons/favicon-196x196.png" sizes="196x196'; ?>" />
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() .'/icons/favicon-96x96.png" sizes="96x96'; ?>" />
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() .'/icons/favicon-32x32.png" sizes="32x32'; ?>" />
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() .'/icons/favicon-16x16.png" sizes="16x16'; ?>" />
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() .'/icons/favicon-128.png" sizes="128x128'; ?>" />
<meta name="application-name" content="&nbsp;"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri() .'/icons/mstile-144x144.png'; ?>" />
<meta name="msapplication-square70x70logo" content="<?php echo get_stylesheet_directory_uri() .'/icons/mstile-70x70.png'; ?>" />
<meta name="msapplication-square150x150logo" content="<?php echo get_stylesheet_directory_uri() .'/icons/mstile-150x150.png'; ?>" />
<meta name="msapplication-wide310x150logo" content="<?php echo get_stylesheet_directory_uri() .'/icons/mstile-310x150.png'; ?>" />
<meta name="msapplication-square310x310logo" content="<?php echo get_stylesheet_directory_uri() .'/icons/mstile-310x310.png'; ?>" />


	<?php wp_head(); ?>
	<meta name="google-site-verification" content="WIBC8yu0AWaPYnQGkOFsw5Sq8JWp8F4MqlCxM6cieCI" />
</head>

<body <?php body_class(); ?>>

	<?php do_action( 'ocean_before_outer_wrap' ); ?>

	<div id="outer-wrap" class="site clr">

		<?php do_action( 'ocean_before_wrap' ); ?>

		<div id="wrap" class="clr">

			</div>

			<div <?php echo $imageSrc; ?> class="background">
			<?php do_action( 'ocean_top_bar' ); ?>

			<?php do_action( 'ocean_header' ); ?>

			<?php do_action( 'ocean_before_main' ); ?>

			<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?>>

				<?php do_action( 'ocean_page_header' ); ?>


<!-- header to appear on all pages -->

<div class="inner-after-header">
<div class="fifty">
<h1 class="main-title">St. Francis Hospice Dublin</h1>
<h2 class="sfh-title">Donate, Share and Show you Care.</h2>
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
