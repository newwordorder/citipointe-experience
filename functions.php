<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';

/**
 * Load more button.
 */
require get_template_directory() . '/inc/loadmore.php';

/**
 * ACF options pages.
 */
require get_template_directory() . '/inc/acf-options.php';

/**
 * FAQ Shortcode
 */
require get_template_directory() . '/inc/accordian-shortcode.php';

/**
 * Featured post
 */
require get_template_directory() . '/inc/featured-post.php';


/**
 * ACF map
 */
require get_template_directory() . '/inc/acf-map.php';


add_action('wp_ajax_myfilter', 'misha_filter_function'); // wp_ajax_{ACTION HERE} 
add_action('wp_ajax_nopriv_myfilter', 'misha_filter_function');
 
function misha_filter_function(){
	$args = array(
		'orderby' => 'date', // we will sort posts by date
		'order'	=> $_POST['date'] // ASC or DESC
	);
 
	// for taxonomies / categories
	if( isset( $_POST['categoryfilter'] ) )
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'region',
				'field' => 'id',
				'terms' => $_POST['categoryfilter']
			)
		);
 
	// if you want to use multiple checkboxed, just duplicate the above 5 lines for each checkbox
 
	$query = new WP_Query( $args );
 
	if( $query->have_posts() ) :
		while( $query->have_posts() ): $query->the_post(); ?>
			<?php $location = get_field('location'); ?>
	
    <div class="modal-instance block">
    <div class="listing-card modal-trigger">
        
        <h5 class="mb-1"><?php the_title(); ?></h5>
        <p class="address small mb-0"><?php echo $location['address']; ?></p>
        
        
            <div class="modal-container">
                <div class="modal-content">
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p class="address small"><?php echo $location['address']; ?></p>

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
                        <a class="btn btn--outline d-block" href="<?php the_field('website'); ?>"><i class="fas fa-globe"></i> Visit</a>
                    </div>
                <?php endif; ?>		
                </div>
                </div>
            </div>
        </div>
    
    </div>
		 <?php endwhile;
		wp_reset_postdata();
	else :
		echo 'No posts found';
	endif;
 
	die();
}