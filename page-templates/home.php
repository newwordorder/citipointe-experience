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
$backgroundEffect = $backgroundImage['background_effect'];

$headerText = get_field('header_text');
$headerSubText = get_field('header_subtext');
?>
<section id="sub-header"

class="page-header page-header--home bg-effect--<?php echo $backgroundEffect ?> imagebg"
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

<?php if( have_rows('home_buttons') ): ?>
  <div class="container">
    <div class="row justify-content-center">
      <?php while( have_rows('home_buttons') ): the_row();
        $text = get_sub_field('text');
        $icon = get_sub_field('icon');
        $link = get_sub_field('link');
        ?>
        <div class="col-lg-3 col-md-6">
          <a class="home-button" href="<?php echo $link ?>">
          <?php if( !empty($icon) ):

          // vars
          $url = $icon['url'];
          $alt = $icon['alt'];

          ?>
            <img class="home-button__icon" src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
          <?php endif; ?>
          <span><?php echo $text ?></span></a>
        </div>
      <?php endwhile; ?>
      </div>
  </div>  
<?php endif; ?>

</section>
<?php get_template_part( 'page-templates/blocks' ); 
      get_template_part( 'page-templates/blocks/pre-footer-cta' );
?>

<?php get_footer();
