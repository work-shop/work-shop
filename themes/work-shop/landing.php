<div class="landing" style="width: 100%; height: 100%; position: fixed; z-index: 9999; background: white;">


	<style>
	
	#loader{
		width:20px;
		height:6px;
		overflow:hidden;
		position: absolute;
		top: 45%;
		left: 50%;
		margin-top: -3px;
		margin-left: -10px;
		background-color:#F6871F;
	}
	
	#loader-bar{
		background-color:#eee;
		
		-moz-animation-name:move_loader;
		-moz-animation-duration:1.5s;
		-moz-animation-iteration-count:infinite;
		-moz-animation-timing-function:linear;
		-webkit-animation-name:move_loader;
		-webkit-animation-duration:1.5s;
		-webkit-animation-iteration-count:infinite;
		-webkit-animation-timing-function:linear;
		-ms-animation-name:move_loader;
		-ms-animation-duration:1.5s;
		-ms-animation-iteration-count:infinite;
		-ms-animation-timing-function:linear;
		-o-animation-name:move_loader;
		-o-animation-duration:1.5s;
		-o-animation-iteration-count:infinite;
		-o-animation-timing-function:linear;
		animation-name:move_loader;
		animation-duration:1.5s;
		animation-iteration-count:infinite;
		animation-timing-function:linear;
		width:40px;
		height:16px;
	}
	
	
	@-webkit-keyframes move_loader{
	
		0%{
			background-color: #F6871F;
		}
		50%{
			 background-color: #eee; 
		}	
		100%{
			background-color: #F6871F;
		}	
		
	}
	
	@-moz-keyframes move_loader{
		0%{
			background-color: #F6871F;
		}
		50%{
			 background-color: #eee; 
		}	
		100%{
			background-color: #F6871F;
		}
	}
	
	
	@-ms-keyframes move_loader{
		0%{
			background-color: #F6871F;
		}
		50%{
			 background-color: #eee; 
		}	
		100%{
			background-color: #F6871F;
		}
	
	}
	
	@-o-keyframes move_loader{
		0%{
			background-color: #F6871F;
		}
		50%{
			 background-color: #eee; 
		}	
		100%{
			background-color: #F6871F;
		}
	
	}
	
	@keyframes move_loader{
		0%{
			background-color: #F6871F;
		}
		50%{
			 background-color: #eee; 
		}	
		100%{
			background-color: #F6871F;
		}
	
	}
	
	</style>
	
	<div id="loader">
		<div id="loader-bar" class="loader"></div>
	</div>
						
</div>