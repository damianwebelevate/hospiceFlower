<?php

function sfhVideoEmbedShortcode($atts = array()){
  $string = $poster = $ogg = $ogv = $mp4 = $webm = $obj = $imgSrc = $thankYouImage = $showVideo = $linkToGo = '';
  extract(shortcode_atts(array(
    'video' => 'sunflower',
    'id' => '48'
  ), $atts));
  $linkToGo = site_url();
  $linkToGo .= "/$video/";
  $imageSrc = "<img src='".get_stylesheet_directory_uri()."/images/backgrounds/$video.png' alt='Donate, Share and show you care image ".$video."' >";
  $thankYouImage = "<img src='".get_stylesheet_directory_uri()."/videos/backgrounds/thankyou_".$id.".png' alt='Image of the text Thank you for your generous donation Donate, Share and show you care.' >";
  $poster = "poster='".get_stylesheet_directory_uri()."/images/backgrounds/$video.png'>";
  $ogg = "<source src='".get_stylesheet_directory_uri() . "/videos/$video/$video.ogg'" . "type='video/ogg; codex=theora,vorbis'>";
  $ogv = "<source src='".get_stylesheet_directory_uri() . "/videos/$video/$video.ogv'" . "type='video/ogg; codex=theora,vorbis'>";
  $mp4 = "<source src='".get_stylesheet_directory_uri() . "/videos/$video/$video.mp4'" . "type='video/mp4'>";
  $webm = "<source src='".get_stylesheet_directory_uri() . "/videos/$video/$video.webm'" . "type='video/webm'>";
  $obj = "<object type='application/x-shockwave-flash' data='".get_stylesheet_directory_uri() ."'/videos/$video/$video.mp4'>
            <param name='movie' value='fallback.swf' />
            <param name='flashvars' value='autostart=true&amp;file='".get_stylesheet_directory_uri() ."'/videos/$video/$video.flv' />
          </object>";

  $string = "<div id='screen' style='display: none;'>
      $thankYouImage
      <h3>Please choose one of the following options:</h3>
      <button class='divA' id='resume'>
        <a href='#' target='_self' title='Replay Video'>
          <p>Replay Video</p>
        </a>
      </button>
      <button class='divA'>
        <a href='".site_url('/', 'https')."' target='_self' title='Return Home'>
          <p>Return To Homepage</p>
        </a>
      </button>
      <button class='divA'>
        <a  href='".site_url('/flower-garden/', 'https')."' target='_self' title='Choose another flower'>
          <p>Choose Another Flower</p>
        </a>
      </button>
      <button class='divA' >
        <a href='$linkToGo' target='_self' title='Donate Again'>
          <p>Donate Again</p>
        </a>
      </button>
      $imageSrc
    </div><!-- close screen -->
    <div style='clear: both;'></div>";

  $string .= "<video id='video'
         title='Hospice Flower Garden'
         playsinline='true'
         muted='muted'
         autoplay
         controls
         autoload
         $poster $ogg $mp4 $ogv $webm
         Your browser does not support the video tag.
         $obj;
         </video>";
  return $string;
}


function sfhVideoOnlyEmbed($atts = array()){
  $string = $poster = $ogg = $ogv = $mp4 = $webm = $obj = '';
  extract(shortcode_atts(array(
    'link' => 'sunflower'
  ), $atts));
  $poster = "poster='".get_stylesheet_directory_uri()."/images/backgrounds/$link.png'>";
  $ogg = "<source src='".get_stylesheet_directory_uri() . "/videos/$link/$link.ogg'" . "type='video/ogg; codex=theora,vorbis'>";
  $ogv = "<source src='".get_stylesheet_directory_uri() . "/videos/$link/$link.ogv'" . "type='video/ogg; codex=theora,vorbis'>";
  $mp4 = "<source src='".get_stylesheet_directory_uri() . "/videos/$link/$link.mp4'" . "type='video/mp4'>";
  $webm = "<source src='".get_stylesheet_directory_uri() . "/videos/$link/$link.webm'" . "type='video/webm'>";
  $obj = "<object type='application/x-shockwave-flash' data='".get_stylesheet_directory_uri() ."'/videos/$link/$link.mp4'>
            <param name='movie' value='fallback.swf' />
            <param name='flashvars' value='autostart=true&amp;file='".get_stylesheet_directory_uri() ."'/videos/$link/$link.flv' />
          </object>";
  $string = "<h1 style='text-transform: capitalize;'>$link</h1><video id='video'
         title='Hospice Flower Garden'
         playsinline='true'
         muted='muted'
         autoplay
         controls
         autoload
         $poster $ogg $mp4 $ogv $webm
         Your browser does not support the video tag.
         $obj;
         </video>";
  return $string;
}

?>
