<?php

if ( has_post_thumbnail() ) { 
	the_post_thumbnail();
}else{
	echo '<img src="';
	echo bloginfo('template_directory');
	echo '/_/img/default.png"/ alt="default">' ;
}

?>
