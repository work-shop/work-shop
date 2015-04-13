	
	<nav id="menu" class="off">
	
		<div class="container">
	
			<div class="row mt">
				
				<div class="col-sm-6 col-sm-offset-3 menu-about-2">
					<h2 class="m30 hidden">We're an interdisciplinary group of designers, makers, thinkers, and questioners. </h2>

					<ul class="centered">
						<li><a href="<?php bloginfo('url') ;?>/about" class=" h3 uppercase bold">About</a></li>
						<li><a href="<?php bloginfo('url') ;?>/about#contact" class=" h3 uppercase bold">Contact</a></li>
						<li><a href="<?php bloginfo('url') ;?>/jobs" class=" h3 uppercase bold">Jobs</a></li>
						<li><a href="#" class=" h2 uppercase bold hidden">Summer Apprenticeship Program</a></li>
					</ul>
				</div>
					
				<div class="col-sm-6 col-sm-offset-3 menu-projects mt">
					
					<h3 class="uppercase centered m60"><a href="<?php bloginfo('url'); ?>/projects" class="h3 bold">Projects</a></h3>
			
					<div class="row mt">
						<?php get_template_part('projects','menu'); ?>	
					</div>
			
				</div>
			
			</div>
			
		</div>					
							
	</nav>