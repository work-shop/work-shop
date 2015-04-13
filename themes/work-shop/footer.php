
	</div><!--/#content-->

	
	<?php if(!is_home()): get_template_part('signpost'); endif; ?>
	
	<?php if(is_page(8)): 
	
		 get_template_part('contact');
		 get_template_part('invitation');
	 
	 else:
	 
	 	get_template_part('invitation');	
	 	get_template_part('contact'); 
	 	
	 	endif; ?>	
  
</div><!-- /#state -->

<div id="foot" class="hidden">

	<script type="text/javascript">
		//get fonts
		WebFontConfig = { fontdeck: { id: '37770' } };
		
		(function() {
		  var wf = document.createElement('script');
		  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		  '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		  wf.type = 'text/javascript';
		  wf.async = 'true';
		  var s = document.getElementsByTagName('script')[0];
		  s.parentNode.insertBefore(wf, s);
		})();	
		
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-43897729-2', 'auto');
	  ga('send', 'pageview');
	
	
	</script> 	
	 		

	<?php 
		if ( !file_exists( dirname(__FILE__) . 'env_prod' )  ) { 
			//include('less.php');
		}
	?>

</div>

<?php wp_footer(); ?>

</body>

</html>