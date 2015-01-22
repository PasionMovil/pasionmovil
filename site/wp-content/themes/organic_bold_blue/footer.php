<!-- begin footer -->

<div style="clear:both;"></div>

	<div id="footer">
    
    	<div class="footerleft">
			<p><?php _e("Derechos Reservados", 'organicthemes'); ?> &copy; <?php echo date('Y'); ?> &middot; <?php _e; ?> &middot; <?php bloginfo('name'); ?></p>
		</div>

    	<div class="footerright">
        	<p></a> <a href="<http://www.facebook.com/poderpda; ?>" target="_blank">Facebook</a> &middot; <a href="<http://www.twitter.com/poderpda; ?>" target="_blank">Twitter</a> &middot; <a href="<?php bloginfo('rss2_url'); ?>" target="_blank">RSS Feed</a> &middot; <?php wp_loginout(); ?></p>
        </div>

	</div>
    
</div>

<?php do_action('wp_footer'); ?>

<?php echo stripslashes(ot_option('tracking')); // tracking code ?>
</body>

</html>