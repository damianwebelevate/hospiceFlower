<?php

/*
*
* Template Name: View Email In Browser
*
*/



get_header();

$productId = isset($_GET['productId']) ? $_GET['productId'] : '';
$fName = isset($_GET['fName']) ? $_GET['fName'] : '';


echo '  <div id="content-wrap" class="container clr">


            <div id="primary" style="width: 100%; class="site-content clr">


              <div id="content" class="clr site-content">

                <div style="width: 100%; min-height: 80px; overflow: auto;"></div>

                     <article class="entry clr">


                        <div class="error404-content clr">';


if(!($productId) || !($fName)){
  echo '

													<h2 class="error-title">This page could not be found!</h2>
													<p class="error-text">Oops it appears the page you are looking for is not available.<br>Perhaps you can try a new search.</p>

<form role="search" method="get" class="searchform" action="https://hospicevirtualflowergarden.com/">
	<label for="ocean-search-form-2">
		<span class="screen-reader-text">Search for:</span>
		<input type="search" id="ocean-search-form-2" class="field" autocomplete="off" placeholder="Search" name="s">
			</label>
	</form>													<a class="error-btn button" href="https://hospicevirtualflowergarden.com/">Back To Homepage</a>

												';
}else{

$productId = $_GET['productId'];
$fName = $_GET['fName'];

$headImage = '<img style="display: block; margin: 30px auto; width: 200px;" src="https://hospicevirtualflowergarden.com/wp-content/uploads/2020/04/logo.png" />';
$headTitle = '<div style="position: relative; display: block; min-height:40px"><h3 style="font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:24px;font-weight:300;line-height:150%;margin:0;text-align:center;color:#000;">Hospice Virtual Flower Garden</h3></div>';
$gap = '<div style="position: relative; padding-left: 20px; display: block; height: 20px; line-height: 20px; font-size: 20px; text-align: left;"></div>';
$image = '<div style="position: relative; padding: 48px 48px 32px;"><img style="max-width: 100%; height: auto;" src="https://hospicevirtualflowergarden.com/wp-content/themes/flowerGarden/viewInBrowser/viewInBrowserGenImage.php/?productId='.$productId.'&fName='.$fName.'" alt="Email Share Image, Donate Share and Show You Care"></div>';
$date = '<div style="position: relative; display: block; min-height: 10px;"><p style="font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:12px;font-weight:300;line-height:150%;margin:0;text-align:center;color:#000;">Copyright <sup>&copy;</sup> '.Date('Y').' <strong> St. Francis Hospice</strong></p>';

echo'<div style="display: block; max-width: 600px; min-height: 200px; margin: 0 auto; margin-bottom: 80px; border: 1px solid lightgrey; overflow: auto;">';

echo $headImage;
echo $headTitle;
echo $gap;
echo $image;
echo $gap;
echo $gap;
echo $gap;
echo $date;
echo $gap;
echo '</div>';


}

echo '</div><!-- .error404-content -->


</article><!-- .entry -->


</div><!-- #content -->


</div><!-- #primary -->


</div><!--#content-wrap -->



</div>';

?>

<?php

get_footer();

?>
