        <div class="jFlow"> 
            
            <div id="prev_btn">
                <a href="#blank"><img src="<?php bloginfo('template_url'); ?>/images/blank_btn.gif" alt="Previous Tab" class="jFlowPrev" /></a>
            </div>
            <div id="next_btn">
                <a href="#blank"><img src="<?php bloginfo('template_url'); ?>/images/blank_btn.gif" alt="Next Tab" class="jFlowNext" /></a>
            </div>
      
            <div id="slides">
            
                <?php $recent = new WP_Query("cat=" .ot_option('slider_cat'). "&showposts=" .ot_option('slider_num') ); while($recent->have_posts()) : $recent->the_post();?>
                
                <div>
                
                	<span class="jFlowControl"></span>
                    
                    <?php if(ot_option('slider_info') == 'Yes') { ?>
                    
                    <div class="slideinfo">
                    	<div class="slideinfocontent">  
                            <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="learnmore">
                            <a href="<?php the_permalink() ?>" rel="bookmark"><?php _e("Learn More", 'organicthemes'); ?></a>
                        </div>
                    </div>
                    
                    <?php } else { ?>
    				<?php } ?>
                    
                    <div class="slideimage">
                        <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'featured-thumbnail' ); ?></a>
                    </div>
                    
                </div>

                <?php endwhile; ?>
                
            </div>
            
        </div>
        </a>
