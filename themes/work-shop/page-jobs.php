
<?php get_header();?>

<?php while(have_posts()): the_post() ?>

<div id="page" class="template page">	

	<?php if(has_post_thumbnail()): ?>	

		<section id="page-introduction" class="block crop introduction golden-max <?php echo ((has_post_thumbnail()) ? 'introduction-image' : '') ?> ">		
			<?php the_post_thumbnail('project-slideshow'); 	?>					
		</section>	
	
	<?php endif; ?>

	
	<section id="page-body" class="page-body block bg-light <?php if(!has_post_thumbnail()): echo 'padded'; endif; ?>">
	
		<div class="container">
		
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">				
					<h2 class="page-title centered mt <?php if(!has_post_thumbnail()): echo 'm90'; else: echo 'm60'; endif; ?>">Work With Us</h2>
				</div>			
			</div>	
			
			<div class="row jobs-intro">
				
				<?php 
				$parent = get_the_id();
				$children_query = new WP_Query();
				$children = $children_query->query(array('post_type' => 'page','post_parent' => $parent));
			
				if($children_query->have_posts() || have_rows('student_jobs')): ?>
				
					<div class="col-sm-5 col-sm-offset-1">
					
						<h2><?php the_field('jobs_intro'); ?></h2>
					
					</div>
					
					<div class="col-sm-5 col-sm-offset-1 col-md-4">	
					
					
					
					
						<?php if($children_query->have_posts()): ?> 				
				
							<h4 class="uppercase bold m">Open Positions:</h4>
							<ul class="jobs-positions m60">
		
							<?php  while ($children_query->have_posts()) : $children_query->the_post(); ?>
								<li class="job"><a class="h3 bold display-block" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile; wp_reset_query(); ?>								
	
							</ul>
						
						<?php endif; ?>
						
						
						
						
						<?php if(have_rows('student_jobs')): ?>	
						
							<h4 class="uppercase bold m">Students and Recent Grads:</h4>
							<ul class="jobs-positions">
																							
								<?php while(have_rows('student_jobs')) : the_row(); ?> 
									<li class="job"><a class="h3 bold display-block" href="<?php the_sub_field('student_job_link'); ?>"><?php the_sub_field('student_job_title'); ?></a></li>
								<?php endwhile; ?>
								
							</ul>
							
							<?php endif; ?>
							
							
							
							
							
					</div>
													
						<?php else: ?>
						
						<div class="col-sm-8 col-sm-offset-2">
					
							<?php the_field('jobs_none'); ?>
							
						</div>
					
				<?php endif; ?>
				
			</div>			
				
			<div class="page-content jobs-content padded">							
				
			
			</div>
		
		</div>
		
		<div id="page-dash" class="dash static bottom"></div>		
		
	</section>
	
			
</div>	

<?php endwhile; ?>

<?php get_footer(); ?>
