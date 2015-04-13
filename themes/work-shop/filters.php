	
	<section id="projects-filters" class="filters hidden">
		<div class="container">
			<ul>
			<?php
				/*  
					Iterate over the Scope Tags:
				*/
				echo ws_render_taxonomy( 
					get_terms( 'scope_tag', array('orderby' => 'name', 'order' => 'ASC') ),
					function( $cb_term ) {
						/* this function supplies a taxonomy term object, which can be queried,
						   embedded in HTML, etc, and then returned to generate the HTML for the
						   filter bar. */
		
						return '<li><a href="#" class=" filter-link scope-tag scope-tag-'.$cb_term->slug.'">'
						     . $cb_term->name
						     . '</a></li>';
		
					}
				);
		
			?>
			</ul>
		</div>
	</section>