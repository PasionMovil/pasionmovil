<?php
/*
Template Name: Archive
*/
?>


<?php get_header(); ?>

<div id="content">

	<div id="contentleft">

        <div class="postarea">

				<h1><?php _e("The Archives", 'organicthemes'); ?></h1>		

				<div class="archive">

					<h2><?php _e("By Page:", 'organicthemes'); ?></h2>

						<ul>

							<?php wp_list_pages('title_li='); ?>

						</ul>

					<h2><?php _e("By Month:", 'organicthemes'); ?></h2>

						<ul>

							<?php wp_get_archives('type=monthly'); ?>

						</ul>	

					<h2><?php _e("By Category:", 'organicthemes'); ?></h2>

						<ul>

							<?php wp_list_categories('sort_column=name&title_li='); ?>

						</ul>	

				</div>		

				<div class="archive">				

					<h2><?php _e("By Post:", 'organicthemes'); ?></h2>

						<ul>

							<?php wp_get_archives('type=postbypost&limit=100'); ?> 

						</ul>

				</div>		            

        </div>

	</div>

<?php include(TEMPLATEPATH."/sidebar.php");?>

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>