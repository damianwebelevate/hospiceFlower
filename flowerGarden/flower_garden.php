<?php

/*
*
*
* Template Name: Flower Garden
* This is the template to load the videos from the server and display
* Should the theme of wordpress be changed then use the animation template for
* this page to display correctly
* **Note that this page does not include the wordpress post loop
*
*/

?>
<?php get_header(); ?>
<?php echo "<div style='width: 100%; min-height: 80px; overflow: auto;'><!-- spacer --></div>";
?>


<div id="pageContainer">
  <h1>Flower Garden</h1>
  <p>Please choose one of the following seven flowers.</p>
  <ul id="flowergardenlist">
    <li>
      <div class="flowerGardenFiftyWrap">
        <div class="first">
          <a href="<?php $url = site_url('/camellia/', 'https'); echo $url; ?>" title="Donate, share and show you care - Camellia" >
          <img src="<?php echo get_stylesheet_directory_uri().'/images/camellia.png'; ?>" alt="Donate, share and show you care - Camellia">
          </a>
        </div><!-- first -->
        <div class="second">
          <div class="flowerGardenQuote">
            <h1>Camellia</h1>
            <blockquote class="flowerGarden" cite="<?php $url = site_url('/camellia/', 'https'); echo $url; ?>">
              <p class="flowerP">The Camellia symbolizes love, affection, and admiration. It can also represent long lasting love and devotion.</p>
            </blockquote>
          </div><!-- flowerGardenQuote -->
        </div><!-- second -->
      </div><!-- flexbox container -->
      <button id="flowerButton"><a href="<?php $url = site_url('/camellia/', 'https'); echo $url; ?>" title="Donate, share and show you care - Camellia">Camellia</a></button>
    </li>
    <li>
      <div class="flowerGardenFiftyWrap">
        <div class="first">
          <a href="<?php $url = site_url('/daisy/', 'https'); echo $url; ?>" title="Donate, share and show you care - Daisy" >
            <img src="<?php echo get_stylesheet_directory_uri().'/images/daisy.png';?>" alt="Donate, share and show you care - Daisy">
          </a>
        </div><!-- first-->
        <div class="second">
          <div class="flowerGardenQuote">
            <h1>Daisy</h1>
            <blockquote class="flowerGarden" cite="<?php $url = site_url('/daisy/', 'https'); echo $url; ?>" title="Donate, share and show you care - Daisy">
              <p class="flowerP">The Daisy symbolizes purity and innocence, one that swears a loyalty to love and a commitment. It is also symbolic of childbirth, motherhood, and new beginnings.</p>
            </blockquote>
          </div><!-- flowerGardenQuote -->
        </div><!-- second -->
      </div><!-- flexbox container -->
      <button id="flowerButton"><a href="<?php $url = site_url('/daisy/', 'https'); echo $url; ?>" title="Donate, share and show you care - Daisy">Daisy</a></button>
    </li>
    <li>
      <div class="flowerGardenFiftyWrap">
        <div class="first">
          <a href="<?php $url = site_url('/gardenia/', 'https'); echo $url; ?>" title="Donate, share and show you care - Gardenia" >
            <img src="<?php echo get_stylesheet_directory_uri().'/images/gardenia.png';?>" alt="Donate, share and show you care - Gardenia">
          </a>
        </div><!-- first -->
        <div class="second">
          <div class="flowerGardenQuote">
            <h1>Gardenia</h1>
            <blockquote class="flowerGarden" cite="<?php $url = site_url('/gardenia/', 'https'); echo $url; ?>" title="Donate, share and show you care - Daisy">
              <p class="flowerP">The Gardenia is symbolic of rooting ourselves in friendship or of new and promising friendships.</p>
            </blockquote>
          </div><!-- qoute -->
        </div><!-- second -->
      </div><!-- flexbox container -->
      <button id="flowerButton"><a href="<?php $url = site_url('/gardenia/', 'https'); echo $url; ?>" title="Donate, share and show you care - Gardenia">Gardenia</a></button>
    </li>
    <li>
      <div class="flowerGardenFiftyWrap">
        <div class="first">
          <a href="<?php $url = site_url('/lily/', 'https'); echo $url; ?>" title="Donate, share and show you care - Lily" >
            <img src="<?php echo get_stylesheet_directory_uri().'/images/lily.png';?>" alt="Donate, share and show you care - Lily">
          </a>
        </div><!-- first-->
        <div class="second">
          <div class="flowerGardenQuote">
            <h1>Lily</h1>
            <blockquote class="flowerGarden" cite"<?php $url = site_url('/lily/', 'https'); echo $url; ?>">
              <p class="flowerP">
                The Lily symbolizes grace, purity and heaven, majesty and honour.
              </p>
            </blockquote>
          </div><!-- qoute -->
        </div><!-- second -->
      </div><!-- flexbox container -->
      <button id="flowerButton"><a href="<?php $url = site_url('/lily/', 'https'); echo $url; ?>" title="Donate, share and show you care - Lily">Lily</a></button>
    </li>
    <li>
      <div class="flowerGardenFiftyWrap">
        <div class="first">
          <a href="<?php $url = site_url('/red-rose/', 'https'); echo $url; ?>" title="Donate, share and show you care - Red Rose" >
            <img src="<?php echo get_stylesheet_directory_uri().'/images/redrose.png';?>" alt="Donate, share and show you care - Red Rose">
          </a>
        </div><!-- first-->
        <div class="second">
          <div class="flowerGardenQuote">
              <h1>Red Rose</h1>
              <blockquote class="flowerGarden" cite="<?php $url = site_url('/red-rose/', 'https'); echo $url; ?>">
                <p class="flowerP">The Red Rose symbolizes the expression of romantic love.</p>
              </blockquote>
            </div><!-- qoute -->
          </div><!-- second -->
        </div><!-- flexbox container -->
      <button id="flowerButton"><a href="<?php $url = site_url('/red-rose/', 'https'); echo $url; ?>" title="Donate, share and show you care - Red Rose">Red Rose</a></button>
    </li>
    <li>
      <div class="flowerGardenFiftyWrap">
        <div class="first">
          <a href="<?php $url = site_url('/sunflower/', 'https'); echo $url; ?>" title="Donate, share and show you care - Sunflower" >
            <img src="<?php echo get_stylesheet_directory_uri().'/images/sunflower.png';?>" alt="Donate, share and show you care - Sunflower">
          </a>
        </div><!-- first-->
        <div class="second">
          <div class="flowerGardenQuote">
            <h1>Sunflower</h1>
            <blockquote class="flowerGarden" cite="<?php $url = site_url('/sunflower/', 'https'); echo $url; ?>">
              <p class="flowerP">The Sunflower symbolizes happiness, joy, strength and positivity.</p>
            </blockquote>
          </div><!-- qoute -->
        </div><!-- second -->
      </div><!-- flexbox container -->
    <button id="flowerButton"><a href="<?php $url = site_url('/sunflower/', 'https'); echo $url; ?>" title="Donate, share and show you care - Sunflower">Sunflower</a></button>
    </li>
    <li>
      <div class="flowerGardenFiftyWrap">
        <div class="first">
          <a href="<?php $url = site_url('/tulip/', 'https'); echo $url; ?>" title="Donate, share and show you care - Tulip" >
            <img src="<?php echo get_stylesheet_directory_uri().'/images/tulip.png';?>"alt="Donate, share and show you care - Tulip">
          </a>
        </div><!-- first-->
        <div class="second">
          <div class="flowerGardenQuote">
            <h1>Tulip</h1>
            <blockquote class="flowerGarden" cite="<?php $url = site_url('/tulip/', 'https'); echo $url; ?>">
              <p class="flowerP">The Tulip symbolizes a perfect and deep love. As it is one of the first flowers of spring it can also symbolize rebirth.</p>
            </blockquote>
          </div><!-- qoute -->
        </div><!-- second -->
      </div><!-- flexbox container -->
    <button id="flowerButton"><a href="<?php $url = site_url('/tulip/', 'https'); echo $url; ?>" title="Donate, share and show you care - Tulip">Tulip</a></button>
    </li>
  </ul>
</div>



<?php get_footer(); ?>
