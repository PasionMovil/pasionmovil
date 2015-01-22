<?php
// Turn a category ID to a Name
function cat_id_to_name($id) {
	foreach((array)(get_categories()) as $category) {
    	if ($id == $category->cat_ID) { return $category->cat_name; break; }
	}
}

//	Pull theme options from database
function ot_option($key) {
	global $settings;
	$option = get_option($settings);
	if(isset($option[$key])) return $option[$key];
	else return FALSE;
}

// include the theme options
include(TEMPLATEPATH."/includes/theme-options.php");

//	Include the Custom Header code
include_once(TEMPLATEPATH.'/includes/custom-header.php');

//	Load local Gravity Forms styles if the plugin is installed
if(class_exists("RGForms") && !is_admin()){
    wp_enqueue_style("local_gf_styles", get_bloginfo('template_url') . "/includes/organic_gforms.css");
    if(!get_option('rg_gforms_disable_css'))
        update_option('rg_gforms_disable_css', true);
}

if ( function_exists('register_sidebars') )
	register_sidebar(array('name'=>'Sidebar','before_widget'=>'<div id="%1$s" class="widget %2$s">','after_widget'=>'</div>','before_title'=>'<h4>','after_title'=>'</h4>'));
	register_sidebar(array('name'=>'Homepage Left','before_widget'=>'<div id="%1$s" class="widget %2$s">','after_widget'=>'</div></div>','before_title'=>'<div class="homepagebottomtitle"><h3>','after_title'=>'</h3><span class="fold"></span></div><div class="homebox">'));
	register_sidebar(array('name'=>'Homepage Middle','before_widget'=>'<div id="%1$s" class="widget %2$s">','after_widget'=>'</div></div>','before_title'=>'<div class="homepagebottomtitle"><h3>','after_title'=>'</h3></div><div class="homebox">'));
	register_sidebar(array('name'=>'Homepage Right','before_widget'=>'<div id="%1$s" class="widget %2$s">','after_widget'=>'</div></div>','before_title'=>'<div class="homepagebottomtitle"><h3>','after_title'=>'</h3><span class="fold"></span></div><div class="homebox">'));

function the_content_limit($max_char, $more_link_text = '(more...)', $stripteaser = 0, $more_file = '') {
    $content = get_the_content($more_link_text, $stripteaser, $more_file);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    $content = strip_tags($content);

   if (strlen($_GET['p']) > 0) {
      echo "<p>";
      echo $content;
      echo "&nbsp;<a href='";
      the_permalink();
      echo "'>".__("Read More", 'organicthemes')." &rarr;</a>";
      echo "</p>";
   }
   else if ((strlen($content)>$max_char) && ($espacio = strpos($content, " ", $max_char ))) {
        $content = substr($content, 0, $espacio);
        $content = $content;
        echo "<p>";
        echo $content;
        echo "...";
        echo "&nbsp;<a href='";
        the_permalink();
        echo "'>".$more_link_text."</a>";
        echo "</p>";
   }
   else {
      echo "<p>";
      echo $content;
      echo "&nbsp;<a href='";
      the_permalink();
      echo "'>".__("Read More", 'organicthemes')." &rarr;</a>";
      echo "</p>";
   }
}

//	Use a div ID, not CLASS, for wp_page_menu
add_filter('wp_page_menu', 'menu_class_to_div');
function menu_class_to_div($menu) {
	$menu = str_replace('<div class', '<div id', $menu);
	
	return $menu;
}

add_filter('wp_list_pages', 'organicthemes_list_pages');
function organicthemes_list_pages($output) {
	$include_pages = ot_option('include_pages');
	if(in_array('feed', (array)$include_pages))
		$output .= '<li class="feed"><a href="'.get_bloginfo('rss2_url').'">RSS Feed</a></li>';
	
	return $output;
}

//	Create a page checklist
function ot_page_checklist($name = '', $selected = array()) {
	global $settings;
	$pages = get_pages();

	//	home page
	if (in_array('home', (array)$selected)) $checked = 'checked'; else $checked = '';
	$checkboxes .= '<li><label class="selectit"><input type="checkbox" name="'.$name.'[]" value="home" '.$checked.' /> Home</label></li>'."\n";
	//	other pages
	foreach ($pages as $page) {
		if(in_array($page->ID, (array)$selected)) $checked = 'checked'; else $checked = '';
		$ancestors = get_post_ancestors($page); $indent = count($ancestors);
		$indent = 'style="margin-left: '.($indent * 15).'px;"';
		$checkboxes .= '<li '.$indent.'><label class="selectit"><input type="checkbox" name="'.$name.'[]" value="'.$page->ID.'" '.$checked.' /> ';
		$checkboxes .= $page->post_title."</label></li>\n";
	}
	//	feed link
	if (in_array('feed', (array)$selected)) $checked = 'checked'; else $checked = '';
	$checkboxes .= '<li><label class="selectit"><input type="checkbox" name="'.$name.'[]" value="feed" '.$checked.' /> RSS Feed</label></li>'."\n";
	
	echo $checkboxes;
}

// Add thumbnail support
add_theme_support('post-thumbnails');
add_image_size( 'featured-thumbnail', 940, 440, true ); // Homepage Featured Image
add_image_size( 'home-bottom-thumbnail', ot_option('bottom_thumb_width'), 600 ); // Homepage Bottom Image
add_image_size( 'portfolio', 313, 600, true ); // Portfolio Image
?>