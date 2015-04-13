<?php

$q = new WP_Query(
	array(
		'post_type' => 'projects',
		'posts_per_page' => -1 			// maybe change this for some nice asynchronous pagination...
	)
);

$i = 0;
while ( $q->have_posts() ) : $q->the_post();
	
	// requesting all of the post's relevant values
	$title = get_the_title(); // title text
	$perma = get_permalink();
	?>
		

	<article class="col-sm-6 col-xs-6 project project-tile project-tile-small <?php echo ws_derive_scope_string( get_field('project_scope_tags') ); ?>">
	
		<a href="<?php the_permalink(); ?>">
						
			<div class="project-tile-image">
				<?php if(has_post_thumbnail()): the_post_thumbnail('menu'); else: echo '<img src="' . get_bloginfo('template_directory') . '/_/img/default.png" alt="default image" />'; endif; ?>		
			</div>
	
			<div class="project-tile-info">
				<h4 class=""><?php echo ws_ifdef_show( $title ); ?></<h4>
			</div>								
			
		</a>
						
	</article>		


<?php $i++; endwhile; ?>

<?php wp_reset_query(); ?>
