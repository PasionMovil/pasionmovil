<?php get_header(); ?>

<br />

<div id="contenthome">



	<div id="homepagetop">

        <?php include(TEMPLATEPATH."/includes/slider.php");?>

   </div>


    <div id="homepagemiddle">
<div id="twitter_bar">

<div class="tweet"></div>

</div><!--Twitterbar-->
            
<p></p>
    	<div class="homepagemiddle_01">			

            <div class="homebox">

                <?php $recent = new WP_Query("cat=".ot_option('hp_bottom_cat')."&showposts=1"); while($recent->have_posts()) : $recent->the_post();?>

                <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'home-bottom-thumbnail' ); ?></a>

                <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>

                <?php the_excerpt(); ?>

                <div class="learnmore">

                	<a href="<?php the_permalink() ?>" rel="bookmark"><?php _e("Leer Más", 'organicthemes'); ?></a>

                </div>

                <?php endwhile; ?>

            </div>

		</div>

        

        <div class="homepagemiddle_02">			

            <div class="homebox">

                <?php $recent = new WP_Query("cat=".ot_option('hp_bottom_cat')."&showposts=1&offset=1"); while($recent->have_posts()) : $recent->the_post();?>

                <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'home-bottom-thumbnail' ); ?></a>

                <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>

                <?php the_excerpt(); ?>

                <div class="learnmore">

                	<a href="<?php the_permalink() ?>" rel="bookmark"><?php _e("Leer Más", 'organicthemes'); ?></a>

                </div>

                <?php endwhile; ?>

            </div>

		</div>

        

        <div class="homepagemiddle_03">			

            <div class="homebox">

                <?php $recent = new WP_Query("cat=".ot_option('hp_bottom_cat')."&showposts=1&offset=2"); while($recent->have_posts()) : $recent->the_post();?>

                <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'home-bottom-thumbnail' ); ?></a>

                <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>

                <?php the_excerpt(); ?>

                <div class="learnmore">

                	<a href="<?php the_permalink() ?>" rel="bookmark"><?php _e("Leer Más", 'organicthemes'); ?></a>

                </div>

                <?php endwhile; ?>

            </div>

		</div>

        

        <div class="homepagemiddle_04">			

            <div class="homebox">

                <?php $recent = new WP_Query("cat=".ot_option('hp_bottom_cat')."&showposts=1&offset=3"); while($recent->have_posts()) : $recent->the_post();?>

                <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'home-bottom-thumbnail' ); ?></a>

                <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>

                <?php the_excerpt(); ?>

                <div class="learnmore">

                	<a href="<?php the_permalink() ?>" rel="bookmark"><?php _e("Leer Más", 'organicthemes'); ?></a>

                </div>

                <?php endwhile; ?>

            </div>

		</div>

        

    </div>



    <div id="homepagebottom">

            

    	<div class="homepagebottom_01">

        	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Homepage Left') ) : ?>

            <div class="homepagebottomtitle">

            	<h3>Widget Area</h3>

                <span class="fold"></span>

            </div>		

            <div class="homebox">

                    <p>This section is widgetized. To add widgets here, go to the <a href="<?php echo admin_url(); ?>widgets.php">Widgets</a> panel in your WordPress admin, and add the widgets you would like to <strong>Homepage Left</strong>.</p>

                    <p><small>*This message will be overwritten after widgets have been added</small></p>

             </div>

            <?php endif; ?>

            

		</div>

        

        <div class="homepagebottom_02">

            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Homepage Middle') ) : ?>

            <div class="homepagebottomtitle">

            	<h3>Widget Area</h3>

            </div>		

            <div class="homebox">

                    <p>This section is widgetized. To add widgets here, go to the <a href="<?php echo admin_url(); ?>widgets.php">Widgets</a> panel in your WordPress admin, and add the widgets you would like to <strong>Homepage Middle</strong>.</p>

                    <p><small>*This message will be overwritten after widgets have been added</small></p>

             </div>

            <?php endif; ?>

		</div>

        

        <div class="homepagebottom_03">

			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Homepage Right') ) : ?>

            <div class="homepagebottomtitle">

            	<h3>Widget Area</h3>

                <span class="fold"></span>

            </div>		

            <div class="homebox">

                    <p>This section is widgetized. To add widgets here, go to the <a href="<?php echo admin_url(); ?>widgets.php">Widgets</a> panel in your WordPress admin, and add the widgets you would like to <strong>Homepage Right</strong>.</p>

                    <p><small>*This message will be overwritten after widgets have been added</small></p>

             </div>

            <?php endif; ?>

        </div>

        

	</div>

    

</div>



<?php get_footer(); ?>