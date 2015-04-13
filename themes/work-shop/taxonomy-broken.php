<?php get_header();?>

<div id="category" class="template category">	

	<section id="taxonomy-introduction" class="project-introduction introduction block padded bg-white">	
		<div class="blurby">
			<div class="container">
				<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<h2 class="centered">
						<?php if(category_description()): echo category_description(); else: single_cat_title(); endif; ?>
					</h2>
				</div>
			</div>
		</div>
		
		<div id="projects-dash" class="dash static"></div>	
		
	</section>	

	<?php get_template_part('filters'); ?>		
	<?php get_template_part('projects'); ?>	

</div>	

<?php get_footer(); ?>