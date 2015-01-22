<!-- begin sidebar -->

<div id="sidebar">

	<?php if(ot_option('side_feedburner') == 'Yes') { ?>

    <div class="subscribe">
        <h4><?php _e("Subscribe", 'organicthemes'); ?></h4>
        <p><?php _e("Receive news and updates from us.", 'organicthemes'); ?></p><form id="subscribe" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo ot_option('feedburner'); ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><input type="text" value="Enter your email address..." id="subbox" onfocus="if (this.value == 'Enter your email address...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter your email address...';}" name="email"/><input type="hidden" value="<?php echo ot_option('feedburner'); ?>" name="uri"/><input type="hidden" name="loc" value="en_US"/><input type="submit" value="Submit" id="subbutton" /><input type="hidden" value="eNews Subscribe" name="title"/></form>
    </div>
    
    <?php } else { ?>
    <?php } ?>

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>

		<div class="widget">
            <h4>Widget Area</h4>
            <p>This section is widgetized. To add widgets here, go to the <a href="<?php echo admin_url(); ?>widgets.php">Widgets</a> panel in your WordPress admin, and add the widgets you would like to <strong>Sidebar</strong>.</p>
            <p><small>*This message will be overwritten after widgets have been added</small></p>
        </div>

	<?php endif; ?>	

</div>

<!-- end sidebar -->