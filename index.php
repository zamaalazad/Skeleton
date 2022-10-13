<?php
    
    get_header();
    	
    	while(have_posts()): the_post();

        	get_template_part('content');
        	
    	endwhile;
    
    get_footer();
    
?>