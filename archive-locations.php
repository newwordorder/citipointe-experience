<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header('listings');

?>

<div class="listings">

<?php /* Start the Loop */ ?>
<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
<div class="input-group">
<?php if( $regions = get_terms( array(
		'taxonomy' => 'region', // to make it simple I use default categories
		'orderby' => 'name'
	) ) ) : 
		// if categories exist, display the dropdown
		echo '<select class="mb-3" name="categoryfilter"><option value="">Filter by region...</option>';
		foreach ( $regions as $region ) :
			echo '<option value="' . $region->term_id . '">' . $region->name . '</option>'; // ID of the category as an option value
		endforeach;
		echo '</select>';
	endif; ?>
	<button>Apply filter</button>
	<input type="hidden" name="action" value="myfilter">
</div>
</form>
<script>
	jQuery(function($){
	$('#filter').submit(function(){
		var filter = $('#filter');
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), // form data
			type:filter.attr('method'), // POST
			beforeSend:function(xhr){
				filter.find('button').text('Processing...'); // changing the button label
			},
			success:function(data){
				filter.find('button').text('Apply filter'); // changing the button label back
				$('#response').html(data); // insert data
			}
		});
		return false;
	});
});
	</script>
<div id="response">

	<?php while ( have_posts() ) : the_post(); ?>

	

	<?php $location = get_field('location'); ?>
	
				<div class="listing-card" data-toggle="modal" data-target="#exampleModalCenter">
					
					<h5 class="mb-1"><?php the_title(); ?></h5>
					<p class="address small mb-0"><?php echo $location['address']; ?></p>
				
				</div>
				<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
				
						<div class="modal-body">
						<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						<?php the_content();?>
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

				


	<?php endwhile; ?>

	</div>	

</div>

<div class="map">
<div class="acf-map">


                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                                <?php

                                $address = get_field('location');

                                if( !empty($address) ):
                                    ?>

                                    <div class="marker" data-lat="<?php echo $address['lat']; ?>" data-lng="<?php echo $address['lng']; ?>">
                                        <h5 class="mb-0"><?php the_title(); ?></h5>
                                        <p class="address">
                                            <?php echo $address['address']; ?>
                                        </p>
                                        <a href="<?php the_permalink() ?>">View</a>
                                    </div>

									<?php endif; ?>
                               

				<?php endwhile; ?>

			
        </div>

	</div>

<?php 
get_footer(); ?>
