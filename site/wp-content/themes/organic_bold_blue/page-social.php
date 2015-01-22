<?php
/*
Template Name: page Full Width + social
*/
?>

<?php get_header(); ?>

<?php if(function_exists('kc_add_social_share')) kc_add_social_share(); ?>

<div id="content">

	<div id="contentwide">
    
        <div class="postarea">
    
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   
            <?php the_content(__('Read More'));?><div style="clear:both;"></div><?php edit_post_link('(Edit)', '', ''); ?>
            
            <?php endwhile; else: ?>
            
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
            
        </div>
		
	</div>
			
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>