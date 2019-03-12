<?php // PRE-FOOTER CTA BLOCK

$text = get_field('text_box','options');
$backgroundImage = get_field('background_image','options');
?>

<section id="pre-footer" class="footer-cta space--none">
  <div class="" style="position:relative;overflow:hidden;max-width: 1120px;margin: 0 auto;">

  <?php

  if( !empty($backgroundImage) ):

  	// vars
  	$url = $backgroundImage['url'];
  	$alt = $backgroundImage['alt'];

   ?>
  		<img class="footer-cta__image" src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
  <?php endif; ?>


<?php if ( have_rows('hovering_icons','options') ) : $count = 0 ?>

  <?php while( have_rows('hovering_icons','options') ) : the_row(); $count += 1 ?>

  <?php
    $image = get_sub_field('image');
    $top = get_sub_field('top');
    $left = get_sub_field('left');
    $iconSize = get_sub_field('size');

    if( !empty($image) ):

      // vars
      $url = $image['url'];
      $alt = $image['alt'];

      $size = 'thumbnail';
      $thumb = $image['sizes'][ $size ];
      $width = $image['sizes'][ $size . '-width' ];
      $height = $image['sizes'][ $size . '-height' ];

      ?>
      <div  data-aos="fade-up" data-aos-delay="300" class="footer-cta__icon footer-cta__icon--<?php echo $iconSize; ?>"  style="top:<?php echo $top; ?>%;left:<?php echo $left; ?>%;animation-delay: <?php echo $count; ?>00ms">
        <div class="background-image-holder" >
          <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"/>
        </div>
      </div>
        <?php endif; ?>


    

  <?php endwhile; ?>

<?php endif; ?>
    </div>


  <div class="container footer-cta__content">

      <div class="row align-items-center justify-content-center">

            <div class="col-md-8 col-lg-6 text-center">
                <?php echo $text ?>

            <?php if( get_field('include_buttons','options') == 'yes' ): ?>

              <?php if( have_rows('buttons','options') ): ?>
              <div class="buttons">
                <?php while( have_rows('buttons','options') ): the_row();
                  $buttonText = get_sub_field('button_text','options');
                  $linkType = get_sub_field('link_type','options');
                  $url = get_sub_field('url','options');
                  $pageUrl = get_sub_field('page_url','options');
                  $buttonStyle = get_sub_field('button_style','options');
                  ?>

                  <a href="<?php if($linkType == "page"): echo $pageUrl; endif; ?><?php if($linkType == "url"):  echo $url; endif; ?>" class="btn btn--<?php echo $buttonStyle ?>"><?php if($buttonStyle == "outline"): echo '<span>'; endif; ?><?php echo $buttonText ?><?php if($buttonStyle == "outline"): echo '</span>'; endif; ?> </a>

                <?php endwhile; ?>
              </div>
              <?php endif; ?>
            <?php endif; ?>
            </div>


      </div>
    </div>

</section>