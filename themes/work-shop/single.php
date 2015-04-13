
<?php get_header();?>

<?php while(have_posts()): the_post() ?>

<div id="post" class="template post">	

	<?php if(has_post_thumbnail()): ?>	

		<section id="post-introduction" class="block crop introduction golden-max <?php echo ((has_post_thumbnail()) ? 'introduction-image' : '') ?> ">
			<?php the_post_thumbnail('project-slideshow'); 	?>		
		</section>	
	
	<?php endif; ?>

	
	<section id="post-body" class="post-body block bg-light <?php if(!has_post_thumbnail()): echo 'padded'; endif; ?>">
	
		<div class="container md">
		
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">				
					<h2 class="post-title centered mt m60"><?php the_title(); ?></h2>
				</div>			
			</div>	
			
			<div class="post-content padded">						
				<?php the_content(); ?>
			</div>
		
		</div>
		
		<div id="post-dash" class="dash static bottom"></div>		
		
	</section>
		
</div>	

<?php endwhile; ?>

<?php get_footer(); ?>
