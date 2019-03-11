<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$backgroundImage = get_field('background_image');

$image = $backgroundImage['background_image'];
$imageOverlay = $backgroundImage['image_overlay'];
$backgroundEffect = $backgroundImage['background_effect'];
$invertColours = $backgroundImage['invert_colours'];
$location = get_field('location'); 
?>
<?php while ( have_posts() ) : the_post(); ?>
<section id="sub-header"

class="page-header page-header--page bg-effect--<?php echo $backgroundEffect ?> imagebg <?php if( $invertColours == 'yes' ): echo 'image--light'; endif; ?>"
data-overlay="7"
>

<?php

if( !empty($image) ):

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
</div>


</section>
<div class="page">
<section id="single-wrapper" class=" space--md bg--light">

	<div class="container" id="content" tabindex="-1">

          <div class="row align-items-stretch">
            <div class="col-md-6 mb-4 pt-4">
              <?php the_content(); ?>
              <p>Address: <?php echo $location['address']; ?></p>
              <?php if( get_field('phone') ): ?>
                    <p>Phone: <a class="" href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?> </a></p>
                <?php endif; ?>
                <?php if( get_field('email') ): ?>
                    <p>Email: <a class="" href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?> </a></p>
                <?php endif; ?>	
              <div class="row">
                <?php if( get_field('phone') ): ?>
                    <div class="col-4">
                        <a class="btn btn--outline d-block" href="tel:<?php the_field('phone'); ?>"><i class="fas fa-phone"></i> Call</a>
                    </div>
                <?php endif; ?>
                <?php if( get_field('email') ): ?>
                    <div class="col-4">
                        <a class="btn btn--outline d-block" href="mailto:<?php the_field('email'); ?>"><i class="fas fa-envelope"></i> Email</a>
                    </div>
                <?php endif; ?>	
                <?php if( get_field('website') ): ?>
                    <div class="col-4">
                        <a class="btn btn--outline d-block" href="mailto:<?php the_field('website'); ?>"><i class="fas fa-globe"></i> Visit</a>
                    </div>
                <?php endif; ?>	
                </div>
            </div>
            <div class="col-md-6  location-map">
            <div class="acf-map">
                <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
            </div>
            </div>
          </div>


</div><!-- Container end -->

</section><!-- Wrapper end -->



<?php endwhile; // end of the loop. ?>

<?php 
        get_template_part( 'page-templates/blocks/pre-footer-cta' );
        get_footer(); 
      ?>
