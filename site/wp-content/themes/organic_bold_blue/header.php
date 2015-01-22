<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="distribution" content="global" />
<meta name="robots" content="follow, all" />
<meta name="language" content="es" />

<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<link rel="Shortcut Icon" href="http://pasionmovil.com/wp-content/uploads/2011/02/favicon.ico" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_enqueue_script("jquery"); ?>


<?php wp_head(); ?>


<!-- @rbonfil Was Here! -->
<?php if(is_page( 'poderpda-aniversario-12' )): ?>
<link rel="image_src" href="http://pasionmovil.com/wp-content/uploads/2012/03/LANDING_1_aniv12-1-1.jpg" >

        <meta property="og:site_name" content="Pasion Movil" />
        <meta property="og:title" content="PoderPDA – Aniversario 12º" />
        <meta property="og:url"   content="http://pasionmovil.com/poderpda-aniversario-12/" />
         <meta property='og:site_name' content='Pasion Movil' />
        <meta property="og:image" content="http://pasionmovil.com/wp-content/uploads/2012/03/LANDING_1_aniv12-1-1.jpg" />
        <meta property="og:description" content='Estoy participando en las rifas de Gadgets del 12º Aniversario de PoderPDA, entra y regístrate, es múy fácil! ->' />
        <meta property="fb:admins" content="637160596" />
        <meta property='og:locale' content='es_ES' />
<?php else: ?>
<!-- Trabajo muy duro, como un esclavo, paguenme dinero! -->
<?php endif; ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/superfish/superfish.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/superfish/hoverIntent.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.flow.1.1.js" ></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/iepngfix_tilebg.js"></script>

<script type="text/javascript">
    var $j = jQuery.noConflict();
    $j(function() {
        $j("div#controller").jFlow({
            slides: "#slides",
            width: "940px",
            height: "440px",
            timer: <?php echo ot_option('slider_interval'); ?>,
            duration: 400
        });
    });
</script>


<script type="text/javascript"> 
    $j(document).ready(function() { 
        $j('ul.ot-menu').superfish(); 
    });
    </script>

<script type='text/javascript' src='/wp-includes/js/jquery/jquery.js?ver=1.4.2'></script> 
<script language="javascript" src="/wp-content/themes/organic_bold_blue/js/jquery.js" type="text/javascript"></script>
<script language="javascript" src="/wp-content/themes/organic_bold_blue/js/jquery.tweet.js" type="text/javascript"></script>
<script type='text/javascript'>
$usuario="poderpda";
    $(document).ready(function(){
        $(".tweet").tweet({
            username: $usuario,
            join_text: "auto",
            avatar_size: 32,
            count: 1,
            auto_join_text_default: "Dijimos ->",
            auto_join_text_ed: "Nosotros",
            auto_join_text_ing: "Estamos",
            auto_join_text_reply: "Hicimos reply a",
            auto_join_text_url: "Estamos revisando",
            loading_text: "Cargando tweets..."
        });
    });
</script>

<style type="text/css">
/* Twitter */
#twitter_bar {height:41px; background:url(wp-content/themes/organic_bold_blue/images/bg_twitter.jpg) repeat-x;}
.tweet {width:960px; height:41px; margin:0 auto; overflow:hidden;}
.tweet images {float:left; margin-right:10px;}
.tweet p {color:#fff; font:normal 12px/41px Arial, Helvetica, sans-serif; height:41px; float:left;}
.tweet a {color:#a1d9ee; font-size:12px; text-decoration:none; }
.tweet a:hover {text-decoration:underline;}
.tweet .tweet_list { width:960px; height:41px; overflow:hidden; margin-top:0.5px;}
.tweet .tweet_list li { width:960px; height:41px; line-height:41px; color:#fff; }
.tweet_avatar img { vertical-align: middle; margin-right:8px; }
</style>

<!--IE6 Fix-->
<style type="text/css">
    #jFlowSlide .slideimage img {
        behavior: none;
    }
    img, div, a, input, body, span { 
        behavior: url(<?php bloginfo('template_url'); ?>/images/iepngfix.htc);
    }
</style>

</head>
<body>


<div id="wrap">
<div id="header">
    <div id="navbar">
        <div id="nav">
            <div id="navbarcenter">
                <ul class="ot-menu">
                <li<?php if (is_home()) { echo " class=\"current_page_item\""; }?>><a href="<?php echo get_settings('home'); ?>"><?php _e("Home", 'organicthemes'); ?></a></li>
                <?php $include_pages = ot_option('include_pages'); ?>
                <?php wp_list_pages('title_li=&sort_column=menu_order&include=29,33,40,45,49'.implode(',', $include_pages)); ?>
                </ul>
</div> <br />
        </div>
    </div>
<img src="http://webinar.arsga.com/theme/czwblue/FrontSlideshow/images/wl_003.jpg" height="2px" width="960" />
<div class="headerleft">
        <p id="title"><a href="<?php echo get_option('home'); ?>/">
</a></p>
    </div>
</div>
<div style="clear:both;"></div>