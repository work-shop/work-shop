	
	<nav id="menu" class="off">
		<!-- MENU 2 -->
		<div class="container">
	
			<div class="row mt">
				<div class="col-sm-4 col-sm-offset-1 menu-about m30 menu-mobile-nav visible-xs">
					<ul class="">
						<li><a href="<?php bloginfo('url'); ?>/about" class=" h2 bold">About</a></li>
						<li><a href="<?php bloginfo('url'); ?>/about#contact" class=" h2 bold">Contact</a></li>
						<li class="hidden"><a href="<?php bloginfo('url'); ?>/jobs" class=" h2 bold">Jobs</a></li>
						<li><a href="<?php bloginfo('url'); ?>/projects" class=" h2 bold">Projects</a></li>
						<li class="hidden"><a href="<?php bloginfo('url'); ?>/apprenticeship" class="h2 bold">Summer Apprenticeship Program</a></li>
					</ul>
				</div>
			
			
				<div class="col-sm-5 col-sm-offset-1 menu-projects mt">
					<h2 class=" m30 hidden-xs"><a href="<?php bloginfo('url'); ?>/projects" class="h2 bold">Projects</a></h2>
					<div class="row">
						<?php get_template_part('projects','menu'); ?>		
					</div>		
				</div>
				
				
				<div class="col-sm-4 col-sm-offset-1 menu-about hidden-xs">
					<h2 class="m30">We're an interdisciplinary design studio comprised of designers, makers, thinkers, and creative technologists. </h2>

					<ul class="">
						<li><a href="<?php bloginfo('url'); ?>/about" class=" h2 bold">About</a></li>
						<li><a href="<?php bloginfo('url'); ?>/about#contact" class=" h2 bold">Contact</a></li>
						<li class="hidden"><a href="<?php bloginfo('url'); ?>/jobs" class=" h2 bold">Jobs</a></li>
						<li class="hidden"><a href="<?php bloginfo('url'); ?>/apprenticeship" class="h2 bold">Summer Apprenticeship Program</a></li>
					</ul>
					<address>	
						<h4>204 Westminster Street, Floor 3</h4>
						<h4>Providence, RI 02903</h4>						
						<h4><a href="mailto:info@workshopri.com" target="_blank">info@workshopri.com</a></h4>
						<h4>p. 440-915-2393</h4>
						<h4>f. 401-274-1913</h4>						
					</address>	
				</div>
				
			</div>			
					
		</div>
		
	</nav>