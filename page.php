<?php
/**
 * The template for displaying all default posts.
 *
 * @package understrap
 */

get_header();
$backgroundImage = get_field('background_image');

$image = $backgroundImage['background_image'];
$imageOverlay = $backgroundImage['image_overlay'];
$backgroundEffect = $backgroundImage['background_effect'];
$invertColours = $backgroundImage['invert_colours'];
?>
<?php while ( have_posts() ) : the_post(); ?>
<section id="sub-header"

class="page-header page-header--page bg-effect--<?php echo $backgroundEffect ?> imagebg"
data-overlay="5"
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
    <div class="col-md-8 text-center page-header__content">
    <?php if($headerText): ?>
      <h1 class="page-title"><?php echo $headerText; ?></h1>
    <? else: ?>
      <h1 class="page-title"><?php the_title(); ?></h1>
    <?php endif; ?>
    <?php if($headerSubText): ?>
      <p class="lead"><?php echo $headerSubText; ?></h1>
    <?php endif; ?>
    </div>
  </div>
</div>

</section>

<section id="single-wrapper" class="space--md bg--light">

	<div class="container" id="content" tabindex="-1">

			<main id="main">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <?php the_content(); ?>
            </div>
          </div>

      </main><!-- #main -->

</div><!-- Container end -->

</section><!-- Wrapper end -->


<?php endwhile; // end of the loop. ?>

<?php 
        get_footer(); 
      ?>
