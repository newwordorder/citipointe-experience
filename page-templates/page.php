<?php
/**
* Template Name: Page
*
*
* @package understrap
*/

get_header();

$headerType = get_field('image_or_video');

$image = get_field('background_image');
$imageOverlay = get_field('image_overlay');

$backgroundImage = get_field('background_image');

$image = $backgroundImage['background_image'];
$imageOverlay = $backgroundImage['image_overlay'];

$imageOverlay = $backgroundImage['image_overlay'];
$backgroundEffect = $backgroundImage['background_effect'];
$headerText = get_field('header_text');


?>

<section id="sub-header"

class="page-header page-header--page bg-effect--<?php echo $backgroundEffect ?> imagebg"
data-overlay="<?php echo $imageOverlay ?>"
>


  <?php if( !empty($image) ):

    // vars
    $url = $image['url'];
    $alt = $image['alt'];

  ?>
    <div class="background-image-holder">
      <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
    </div>
  <?php endif; ?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10 page-header__content">
    <?php if($headerText): ?>
      <?php echo $headerText; ?>
    <? else: ?>
      <h1 class="page-title"><em><?php the_title(); ?></em></h1>
    <?php endif; ?>
    </div>
  </div>
</div>

</section>
  
<main id="main">
  <?php get_template_part( 'page-templates/blocks' );?>
</main>
<?php get_footer();
