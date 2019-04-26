<?php
/**
* Template Name: Home
*
*
* @package understrap
*/

get_header();

$image = get_field('background_image');
$backgroundImage = get_field('background_image');
$image = $backgroundImage['background_image'];
$imageOverlay = $backgroundImage['image_overlay'];
$backgroundEffect = $backgroundImage['background_effect'];
$headerText = get_field('header_text');
$headerSubText = get_field('header_subtext');
?>

<section id="sub-header" class="page-header page-header--home bg-effect--<?php echo $backgroundEffect ?> imagebg" data-overlay="<?php echo $imageOverlay ?>">

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

  <a class="scroll-down inner-link" href="#main"><span></span></a>

</section>
<main id="main">
  <?php get_template_part( 'page-templates/blocks' ); ?>
</main>

<?php get_footer();
