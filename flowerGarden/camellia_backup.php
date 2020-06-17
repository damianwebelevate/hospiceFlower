<?php

/*
*
*
* Template Name: camillia
* This is the template to load the videos from the server and display
* Should the theme of wordpress be changed then use the animation template for
* this page to display correctly
* **Note that this page does not include the wordpress post loop
*
*/

$hasID = isset($_GET['id']);
$hasURL = "";
$showVideo = "";
$showContent = "";
$nameOfVideo = "camellia";
$imageSrc = $poster = $thankYouImage = "";

if($hasID){
  $hasURL = $_GET['id'];
  if($hasURL == 1748){
    $showVideo = "style='display: block;'";
    $showContent = "style='display: none;'";
    $imageSrc = "<img src='".get_stylesheet_directory_uri()."/images/backgrounds/camellia.png' alt='Donate, Share and show you care image ".$nameOfVideo."' >";
    $thankYouImage = "<img src='".get_stylesheet_directory_uri()."/videos/backgrounds/thankyou_".$hasURL.".png' alt='Image of the text Thank you for your generous donation Donate, Share and show you care.' >";
    $poster = "poster=".get_stylesheet_directory_uri()."/images/backgrounds/camellia.png";
  }
}else{
  $showVideo = "style='display: none;'";
  $showContent = "style='display: block;'";
}

?>
<?php get_header() ; ?>


<!-- webkit-playsinline="true"
playsinline="true"
muted="muted"
autoplay -->
<!-- no video content -->
<div <?php echo $showContent; ?> class="contentForPage">
<!-- use oceanwp page loop and have the editor option -->
<?php do_action( 'ocean_before_content_wrap' ); ?>
<div id="content-wrap" class="container clr">
<?php do_action( 'ocean_before_primary' ); ?>
<div id="primary" class="content-area clr">
<?php do_action( 'ocean_before_content' ); ?>
<div id="content" class="site-content clr">
<?php do_action( 'ocean_before_content_inner' ); ?>
<?php echo "<div style='width: 100%; min-height: 20px; overflow: auto;'>
<button style='float: right;' id='flowerButton'>
<a href='".site_url('/flower-garden/','https')."' title='Back To Flower Garden'>Back To Flower Garden</a>
</button></div>";
?>
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

</div><!-- end no video content -->


<div class="videoContent" <?php echo $showVideo; ?> >
  <div id="screen" style="display: none;">
    <?php echo $thankYouImage; ?>
    <h3>Please choose one of the following options:</h3>
    <button class="divA" id="resume">
      <a href="#" target="_self" title="Replay Video">
        <p>Replay Video</p>
      </a>
    </button>
    <button class="divA">
      <a href="<?php echo site_url('/', 'https'); ?>" target="_self" title="Return Home">
        <p>Return To Homepage</p>
      </a>
    </button>
    <button class="divA">
      <a  href="<?php echo site_url('/flower-garden/', 'https'); ?>" target="_self" title="Choose another flower">
        <p>Choose Another Flower</p>
      </a>
    </button>
    <button class="divA" >
      <a href="<?php echo site_url('/camellia/', 'https'); ?>" target="_self" title="Donate Again">
        <p>Donate Again</p>
      </a>
    </button>
    <?php echo $imageSrc; ?>
  </div><!-- close screen -->
  <div style="clear: both;"></div>
   <video id="video"
          title="Hospice Flower Garden"
          playsinline="true"
          muted="muted"
          autoplay
          controls
          autoload
          <?php echo $poster; ?>>
          <source src="<?php echo get_stylesheet_directory_uri() .'/videos/'.$nameOfVideo.'/'.$nameOfVideo.'.ogg'; ?>" type="video/ogg; codex=theora,vorbis">
          <source src="<?php echo get_stylesheet_directory_uri() .'/videos/'.$nameOfVideo.'/'.$nameOfVideo.'.ogv'; ?>" type="video/ogg; codex=theora,vorbis">
        <source src="<?php echo get_stylesheet_directory_uri() .'/videos/'.$nameOfVideo.'/'.$nameOfVideo.'.mp4'; ?>" type="video/mp4">
        <source src="<?php echo get_stylesheet_directory_uri() .'/videos/'.$nameOfVideo.'/'.$nameOfVideo.'.webm'; ?>" type="video/webm">
        Your browser does not support the video tag.
        <object type="application/x-shockwave-flash" data="<?php echo get_stylesheet_directory_uri() .'/videos/'.$nameOfVideo.'/'.$nameOfVideo.'.mp4'; ?>">
      		<param name="movie" value="fallback.swf" />
      		<param name="flashvars" value="autostart=true&amp;file=<?php echo get_stylesheet_directory_uri() .'/videos/'.$nameOfVideo.'/'.$nameOfVideo.'.flv'; ?>" />
      	</object>
  </video>
</div><!-- end video content -->







<script type="text/javascript">

var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) {
    isMobile = true;
}


let vid = document.getElementById("video");
let drop = document.getElementById("screen");
let res = document.getElementById("resume");

if(isMobile){
  vid.setAttribute("controls", true);
}

vid.addEventListener("ended", function(evt){
  vid.style.display = "none";
  drop.style.display = "block";
});

res.addEventListener("click", function(evt){
  evt.preventDefault();
  drop.style.display = "none";
  vid.style.display = "block";
  vid.play();
});

document.querySelector('.related').style.display = "none";
document.querySelector('.owp-product-nav-wrap').style.display = "none";



</script>
<?php get_footer() ; ?>
