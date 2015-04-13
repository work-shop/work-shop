<?php get_header();?>
		
<div id="projects" class="template projects">

	<section id="projects-introduction" class="project-introduction introduction block padded bg-white">	
		<div class="blurby">
			<div class="container">
				<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<h2 class="centered">
						We design and make spaces, furniture, objects, websites, apps, and events
					</h2>
				</div>
			</div>
		</div>
		
	<div id="projects-dash" class="dash static hidden"></div>	
		
	</section>		
	
	<?php get_template_part('filters'); ?>	
	<?php get_template_part('projects'); ?>	

</div>

<?php get_footer(); ?>