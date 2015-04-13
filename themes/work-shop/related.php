<section class="block padded related">
	<div class="container">
		<div class="row">
		
			<div class="col-sm-2 col-xs-6">
				<h3>Related Projects</h3>
			</div>
				
				<?php

                // related posts logic.
                $tags = array_map(function( $x ) {
                    return $x->term_id;
                }, ( $a = get_the_terms( get_the_ID(), 'project_categories' )) ? $a : array() );

                $posted = array( get_the_ID() );
                $posts = 0;


                if ( !empty($tags) ) {

                    $RPQ = new WP_Query( array(
                        "post_type" => 'projects',
                        "posts_per_page" => 5,
                        "post_count" => 5,
                        "nopaging" => true,
                        "post__not_in" => $posted,
                        "tax_query" => array(
	                        	array(
	                        		'taxonomy' => 'project_categories',
	                        		'field' => 'id',
	                        		'terms' => $tags
	                        	)
                        	)
                    ) );

                    while ( $RPQ->have_posts()&&$posts<5 ) {
                        $post = $RPQ->next_post(); ?>
                        
						<div class="tile project-tile project-tile-small col-sm-3 col-md-2 col-xs-6">
							<a href="<?php the_permalink(); ?>">
								<div class="overlay"></div>
							
								<?php if(has_post_thumbnail()): the_post_thumbnail('project'); else: echo '<img src="' . get_bloginfo('template_directory') . '/_/img/default.png" alt="default image" />'; endif; ?>
								<p class="project-title centered">
									<?php the_title(); ?>
								</p>						
							</a>
						</div>
						
						<?php array_push( $posted, $post->ID );
                        $posts += 1;
                    }
                    wp_reset_query();
                }

                if ( !$a ) :

                if ( $posts<3 ) {
                    $AddQ = new WP_Query( array(
                        "post_type" => 'projects',
                        "posts_per_page" => (5-$posts),
                        "nopaging" => true,
                        "post__not_in" => $posted
                    )); 
                                        
                   while ( $AddQ->have_posts()&&$posts<5 ) {
                        $post = $AddQ->next_post(); ?>
					
						<div class="tile project-tile project-tile-small col-sm-3 col-md-2 col-xs-6">
							<a href="<?php the_permalink(); ?>">
								<div class="overlay"></div>
								<?php if(has_post_thumbnail()): the_post_thumbnail('project'); else: echo '<img src="' . get_bloginfo('template_directory') . '/_/img/default.png" alt="default image" />'; endif; ?>
								<p class="project-title centered">
									<?php the_title(); ?>
								</p>						
							</a>
						</div>                    
                                         
                     <?php $posts += 1;
                    }
                    wp_reset_query();
                }

                endif;
            ?>
			</div>
		</div>
		
		</div>	
	</section>