
<section id="contact" class="contact block golden padded-more">

	<div class="block-body">
		<div class="container">
			<div class="row centered">
			
				<div class="col-sm-8 col-sm-offset-2">
					<h1 class="centered m60">We want to work with you.</h1>
				</div>	
				
				<div class="col-sm-3 col-sm-offset-3 col-xs-12 centered m30">
					<div class="contact-button-broken">
						<h2 class="centered"><a href="#contact" data-toggle="modal" data-target="#contactModal" class="button">Send us a Message</a></h2>
					</div>
				
				</div>
			
				<div class="col-sm-3 col-xs-12 centered">
					<div class="contact-button-broken">
						<h2 class="centered"><a href="#subscribe" data-toggle="modal" data-target="#subscribeModal" class="button">Get our Newsletter</a></h2>
					</div>				
				</div>										
	
			</div>
		</div>
	</div>
	
</section>

<section class="block bg-light padded-less">
	<div class="container">
		<div class="row">
		
				
				<div class="col-sm-3">
					<address>
						<h3 class="bold uppercase m30 brand">Work-Shop</h3>				
						<h4><a href="<?php bloginfo('url'); ?>/projects" target="_blank" class="dark">Projects</a></h4>	
						<h4><a href="<?php bloginfo('url'); ?>/about" target="_blank" class="dark">About</a></h4>				
						<h4 class="hidden"><a href="<?php bloginfo('url'); ?>/jobs" target="_blank" class="dark">Jobs</a></h4>				
						<h4><a href="<?php bloginfo('url'); ?>/current" target="_blank" class="dark">Current</a></h4>													
					</address>	
				</div>
		
				<div class="col-sm-3">
					<address>
						<h3 class="bold uppercase m30 brand">Contact</h3>
						
						<h4><a href="mailto:info@workshopri.com" target="_blank" class="dark">info@workshopri.com</a></h4>
						<h4>p. 440-915-2393</h4>
						<h4>f. 401-274-1913</h4>						
					</address>	
				</div>
			
				<div class="col-sm-3">
					<address>
						<h3 class="uppercase bold m30 brand">Office</h3>
											
						<h4>204 Westminster Street, Floor 3</h4>
						<h4>Providence, RI 02903</h4>						
					</address>				
				</div>	
				
				<div class="col-sm-3">
					<address>
						<h3 class="uppercase bold m30 brand">Shop</h3>
											
						<h4>610 Manton Avenue</h4>
						<h4>Providence, RI 02909</h4>						
					</address>					
				</div>			
		
		
		</div>
	</div>
</section>

<div class="modal fade" id="contactModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close icon" data-dismiss="modal" aria-hidden="true" data-icon="x"></button>
          <h3 class="modal-title centered">We'd love to hear from you.</h3>
        </div>
        <div class="modal-body">
			<?php  gravity_form( 2, $display_title=false, $display_description=false, $display_inactive=false, $field_values=null, $ajax=true,$tabindex=1000); ?>	 
		</div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  <div class="modal fade" id="subscribeModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close icon" data-dismiss="modal" aria-hidden="true" data-icon="x"></button>
          <h3 class="modal-title centered">We'll keep you up to date</h3>
        </div>
        <div class="modal-body">
			<?php  gravity_form( 3, $display_title=false, $display_description=false, $display_inactive=false, $field_values=null, $ajax=true,$tabindex=2000); ?>	        
		</div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->