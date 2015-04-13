<?php $search_text = "search the creative mind"; ?> 
<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/"> 

	<input type="text" value="<?php echo $search_text; ?>" name="s" id="s" onblur="if (this.value == '')  
	{this.value = '<?php echo $search_text; ?>';}"  
	onfocus="if (this.value == '<?php echo $search_text; ?>')  
	{this.value = '';}" /> 
	
	<input type="submit" id="searchsubmit" value="s" />	

	
<input type="hidden" id="searchsubmit" /> 
</form>