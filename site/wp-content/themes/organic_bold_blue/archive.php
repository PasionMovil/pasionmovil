<?php get_header(); ?>

<div id="content">

	<div id="contentleft">

		<div class="postarea">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>

                <div class="postauthor">
            		<p><?php _e("Posted by", 'organicthemes'); ?> <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?> &middot; <a href="<?php the_permalink(); ?>#comments"><?php comments_number('Leave a Comment', '1 Comment', '% Comments'); ?></a>&nbsp;<?php edit_post_link('(Edit)', '', ''); ?></p>      
                </div>

            <?php the_excerpt(); ?><div style="clear:both;"></div>   

			<div class="meta">
				<p><?php _e("Filed under", 'organicthemes'); ?> <?php the_category(', ') ?> &middot; <?php _e("Tagged with", 'organicthemes'); ?> <?php the_tags('') ?></p>
			</div>

			<?php endwhile; else: ?>         
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
            
            <div id="prevLink"><p><?php previous_posts_link(); ?></p></div>
			<div id="nextLink"><p><?php next_posts_link(); ?></p></div>

        </div>

	</div>

	<?php include(TEMPLATEPATH."/sidebar.php");?>

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>