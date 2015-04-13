
<section id="invitation" class="invitation block min-large padded">
	<div id="invitiation-background" class="block-background invitation-background" style="background-image: url(<?php bloginfo('template_directory'); ?>/_/img/invitation.jpg)">
	</div>
	
	<div class="block-body">
	
		<div class="container">
			<div class="row">
		
				<div class="invitation-text col-md-4 col-sm-8">
					<h2>Want to have coffee with us?</h2>
					<h3>Maybe you want to talk about a new project, tell us about your dreams, or just shoot the proverbial breeze. We're always up for a good conversation. </h3>
					<h3>Come join us at our office, in downtown Providence. </h3>
					<h3 class="m60">We keep a spot open every thursday morning, and schedule coffee at least two weeks in advance. If you can't make Thursday morning, but still want to join us, <a href="#contact" class="jump">drop us a line.</a></h3>	
					
					<a href="#" class="invitation-link invitation-toggle button centered margin">Set a date</a>
				</div>
				
				<div class="invitation-form closed col-md-4 col-sm-6 col-md-offset-4">
					<?php gravity_form( 1, $display_title=false, $display_description=false, $display_inactive=false, $field_values=null, $ajax=true, $tabindex=1000); ?>	    
				</div>				
		
			</div>
		</div>
	
	</div>

</section>