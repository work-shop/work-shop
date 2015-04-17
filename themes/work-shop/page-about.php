
<?php get_header();?>

<div id="about" class="template about">	


	<section id="about-introduction" class="about-introduction introduction block bg-brand sixty crop padded">	
		
		<div class="container">
			<div class="row">			
				<div class="col-sm-10 col-sm-offset-2">

				<h1 class=" about-tagline white">Work-Shop is an interdisciplinary <br/>design studio comprised of designers, makers, thinkers, and creative technologists. </h1>	

				</div>
			</div>
		</div>

	</section>

		
	<section id="about-mission" class="about-1 block padded bg-light three-quarter hidden">	

		<?php $mission = get_field('info_page_mission_callout', 'option'); ?>

		<div class="container">
			<div class="row">
			
				<div class="col-sm-9 col-sm-offset-2">

					<h2 class="bold h1">

					We don’t fit well into a single category or discipline. And we see that as a strength.

					</h2>

					<hr />

					<h2 class="text">

					<span class="brand">Work-Shop</span> specializes in developing creative strategies to solve problems for individuals, businesses, institutions, and organizations. 

					Problems don't often come packaged up under a single discipline's umbrella, so we don't limit our scope of work to a single discipline.

					This allows us to approach our clients' projects holistically – with fresh eyes and no preconceptions. 

					</h2>
				</div>
				
			</div>
		</div>

	</section>
	
	
	<section id="about-process" class="about-2 block padded crop min">	

		<div class="block-background mask-light hidden-xs" style="background-image: url('<?php bloginfo('template_directory'); ?>/_/img/sketching.jpg')">	
			<!--
<video autoplay="autoplay" loop>
			  <source src="<?php bloginfo('template_directory'); ?>/_/img/office.mp4" type="video/mp4">
			</video>	
-->		
		</div>		
		
		<div class="container">
			<div class="row">
		
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="bold m60 ">Our process is at the core of our work.</h2>
				</div>
				
			</div>					
					

			<div class="row">
		
				<div class="col-sm-6 col-sm-offset-2">

					<h4 class="uppercase m0 bold">Strategy</h4>
					<h3 class="m2">We investigate each problem and research solutions, <br /> foundational ideas, and concepts with our clients. 
</h3>
	
					<h4 class="uppercase m0 bold">Design</h4>
					<h3 class="m2">From that research, we create holistic designs that are functional, meaningful, and solve the core problems of the project. 
</h3>
					
					<h4 class="uppercase m0 bold">Making</h4>					
					<h3 class="m2">We design everything we make, and make everything we design. Blending design and making builds a leaner and more cohesive process. 
</h3>
					
					<h4 class="uppercase m0 bold">Evolution</h4>
					<h3 class="m2">Successful projects need continued consideration and care. We stay involved to make sure the project blossoms and stays healthy.
</h3>															
				</div>
				
			</div>
		</div>

	</section>	
	

	<section id="about-services" class="about-5 block padded min bg-light">	

		<div class="container">
			
			<div class="row m60">
				<div class="col-sm-10 col-sm-offset-2">
					<h2 class="bold">Here's a non-exclusive list of what we offer:</h2>
				</div>
			</div>

			<div class="row">
				
				<div class="col-sm-3 col-sm-offset-2">
					<h3 class="uppercase bold m30">Strategy</h3>
					<ul>
						<li><a href="#"><h3>Creative Direction</h3></a></li>
						<li><a href="#"><h3>Strategic Consulting</h3></a></li>
						<li><a href="#"><h3>Content Strategy</h3></a></li>
						<li><a href="#"><h3>Conceptual Design</h3></a></li>
						<li><a href="#"><h3>Design Engineering</h3></a></li>						
					</ul>
				</div>

				<div class="col-sm-3">
					<h3 class="uppercase bold m30">Design</h3>
					<ul>
						<li><a href="#"><h3>Identity/Brand Design</h3></a></li>
						<li><a href="#"><h3>Web Design</h3></a></li>
						<li><a href="#"><h3>User Experience Design</h3></a></li>
						<li><a href="#"><h3>Software Architecture</h3></a></li>
						<li><a href="#"><h3>Product Design</h3></a></li>
						<li><a href="#"><h3>Interior Architectural Design</h3></a></li>
						<li><a href="#"><h3>Furniture Design</h3></a></li>	
						<li><a href="#"><h3>Installation Design</h3></a></li>					
					</ul>
				</div>

				<div class="col-sm-3">
					<h3 class="uppercase bold m30">Making</h3>
					<ul>
						<li><a href="#"><h3>Web Development</h3></a></li>	
						<li><a href="#"><h3>iOS Development</h3></a></li>						
						<li><a href="#"><h3>Software Engineering</h3></a></li>	
						<li><a href="#"><h3>Furniture Fabrication</h3></a></li>					
						<li><a href="#"><h3>Digital Fabrication</h3></a></li>
						<li><a href="#"><h3>Installation Construction</h3></a></li>
					</ul>
				</div>
				
			</div>
			
		</div>

	</section>		
	

	<section id="about-people" class="about-4 people block bg-white padded">	

	
		<?php 
		$prepeople = get_field('info_page_pre_people_blurby', 'option');
		$people = get_field('info_page_people', 'option');
		$postpeople = get_field('info_page_post_people_blurby', 'option'); ?>


		<div class="container">
			
			<div class="row">
				<div class="col-sm-9 col-sm-offset-2 m60">
					<h3 class=" m30 hidden">

					Greg and Nic met in 2012 and worked together on the two projects that would lay the foundation for Work-Shop, the

					<a href="<?php echo get_the_permalink(106); ?>"><?php echo get_the_title(106); ?></a> and the <a href="<?php echo get_the_permalink(30); ?>"><?php echo get_the_title(30); ?></a>.

					Work-Shop was established in the fall of 2013, as a way of formalizing their working relationship and continuing their explorations

					into new ways of making and working.

					</h3>

					<h2 class=" m30">

					We're a group of individuals dedicated to the practice of creative strategy, incisive design, and thoughtful making.

					</h2>

					
				</div>
			</div>


			<div class="row m90">

			<?php
		
			$total_current = count( array_filter( $people, function( $person ) { return $person['person_active']; }) );
			$total_former = count( $people ) - $total_current;

			$current = '<div class="current">';
			$former = '<div class="former">';
		
			$current_i = 0;
			$former_i = 0;

			$row_separator_open = '<div class="row m3">';
			$row_separator_close = '</div>';
		
			foreach ( $people as $i => $person ) {
				if ( $person['person_active'] ) {

					if ( $current_i % 2 == 0 ) $current .= $row_separator_open;

					$current .= '<div class="'.ws_parity( $current_i, 'left-side', 'right-side')
							 .  (($current_i % 2 == 0) ? " col-sm-offset-2 " : " col-sm-offset-1")
							 .  ' col-sm-4 person">'
							 .  ws_ifdef_concat('<a href="',ws_decide_link_type($person['person_link']),'" target="_blank">')
						     .  '<img class="m1" src="'.$person['person_image']['sizes']['square'].'">'
						     .  ws_ifdef_concat( '<h3 class="bold brand m1">',$person['person_name'],', ' )
						     .  ws_ifdef_concat( '',$person['person_role'],'</h3>' )
						     .  ws_ifdef_concat( '<h4>',$person['person_phone_number'],'</h4>' )
						     .  ws_ifdef_concat( '<h4>',$person['person_email'],'</h4>' )
						     .  ws_ifdef_concat( '<p>',$person['people_bio'],'</p>')
						     .  ws_ifdef_do($person['person_link'], '</a>')
						     .  '</div>';

					if ( $current_i % 2 == 1 || $current_i == $total_current - 1 ) $current .= $row_separator_close;
		
					$current_i++;

				} else {
					
					if ( $former_i % 2 == 0 ) $former .= $row_separator_open;
				
					$former .= '<div class="'.ws_parity( $former_i, 'left', 'right').'">'
							 .  ws_ifdef_concat('<a href="',ws_decide_link_type( $person['person_link'] ),'" >')
						     .  '<img src="'.$person['person_image']['sizes']['full'].'">'
						     .  ws_ifdef_concat( '<h3>',$person['person_name'],', ' )
						     .  ws_ifdef_concat( '',$person['person_role'],'</h3>' )
						     .  ws_ifdef_concat( '<h4>',$person['person_phone_number'],'</h4>' )
						     .  ws_ifdef_concat( '<h4>',$person['person_email'],'</h4>' )
						     .  ws_ifdef_concat( '<p>',$person['people_bio'],'</p>')
						     .  ws_ifdef_do($person['person_link'], '</a>')
						     .  '</div>';
		
					$former_i++;

					if ( $former_i % 2 == 1 || $former_i == $total_former - 1 ) $former .= $row_separator_close;
		
				}
			}
		
			echo $current . '</div>';
			echo $former . '</div>';
		
			echo ws_ifdef_concat('<div>',$postpeople,'</div>');
		
			?>

		</div>
		
			
		<div class="row hidden">
			<div class="col-sm-9 col-sm-offset-2">
				<h3 class=""><a href="<?php bloginfo('url'); ?>/jobs" class="bold h3">We're hiring! Check out our open positions.</a></h3>
			</div>
		</div>


		</div>
	</section>


	<section id="about-place" class="about-6 block min padded hidden">	
	
		<div class="block-background">
		</div>

		<?php 

			$office_image = get_field('footer_office_image', 'option');
			$office_description = get_field('footer_office_information', 'option');

			$shop_image = get_field('footer_shop_image', 'option');
			$shop_description = get_field('footer_shop_information', 'option');

		?>
	
		<div class="block-background mask-light-light" style="background-image: url('<?php echo $office_image['sizes']['slideshow']; ?>')">	
		</div>
		
		<div class="container">
			<div class="row">
			
				<div class="col-sm-4 col-sm-offset-2 office-description">
					<?php echo ws_ifdef_do( $office_description, '<div>'.$office_description.'</div>'); ?>
				</div>
			
				<div class="col-sm-4 shop-description">
					<?php echo ws_ifdef_do( $shop_description, '<div>'.$shop_description.'</div>'); ?>
				</div>
		
			</div>
		</div>


	</section>	


	<section id="about-values" class="about-3 about-process block padded bg-light">	

		<div class="container">

			<div class="row m90 ">
				<div class="col-sm-4 col-sm-offset-2"><h2>Make the world a slightly better place, through our work.</h2></div>
				<div class="col-sm-4 col-sm-offset-1"><h2>Work for clients, and work with people – who we truly believe in.</h2></div>
			</div>
			<div class="row m90">
				<div class="col-sm-4 col-sm-offset-2"><h2>Make things that are built for a constantly changing, evolving world.</h2></div>			
				<div class="col-sm-4 col-sm-offset-1"><h2>Be open to The New, but don't go hunting for it.</h2></div>
			</div>
			<div class="row m90">			
				<div class="col-sm-5 col-sm-offset-2"><h2>Draw from a diverse set of backgrounds and experiences to find new ways to approach problems.</h2></div>
				<div class="col-sm-4 col-sm-offset-0"><h2>Collaborate with clients to understand the core problems on each project.</h2></div>			
			</div>		
				
		</div>

	</section>		
	
	
	<div class="container" id="about-nav-container">
		<div class="row">
			<div class="col-sm-3">	

				<div id="about-nav" class="spy falloff">
					<ul>
						<li><a href="#about-introduction" class="jump">About</a></li>					
						<li><a href="#about-process" class="jump">Process</a></li>
						<li><a href="#about-services" class="jump">Services</a></li>						
						<li><a href="#about-people" class="jump">People</a></li>
						<li><a href="#about-values" class="jump">Values</a></li>
						<li><a href="#contact" class="jump">Contact</a></li>				
						<li><a href="#invitation" class="jump hidden falloff-link"></a></li>
										
					</ul>
				</div>
				
			</div>
		</div>
	</div>
	
	
</div>	

<?php get_footer(); ?>
