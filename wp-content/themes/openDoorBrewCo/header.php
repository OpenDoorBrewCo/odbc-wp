<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico">
    
	<!--WordPress blank sytlesheet -->
	<!--<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">-->
    
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ODBC_Master_Styles.css">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/CSS/favicons/favicon_beer_amber.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/CSS/favicons/favicon_beer_amber.ico" type="image/x-icon"/>
	
	<?php if(is_page('Blog')){?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/Blog_Home.css">
	<?php } ?>
	
	<?php if(is_page('About')){?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/About_Us.css">
	<?php } ?>
	
	<?php if(is_page('Contact')||is_page('Thank You!')){?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/Contact_Us.css">
	<?php } ?>
	
	<?php if(is_page('Index')){?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/Landing_page.css">
	<?php } ?>
		
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php if( is_singular() && !is_page()){?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/Blog_Post.css">
	<?php } ?>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap">
        <header>
            <nav class="topNav center">
                    <a href="index.php"><img id="doorLogo" alt="Home" title="Home" src="<?php bloginfo('template_url'); ?>/css/icons/door_logo.png" /></a>
                    WWW
					<div id="headerLinks">
						<?php wp_nav_menu(array('menu' => 'Main Nav Menu')); ?>
                    </div>
					
					
            </nav>
        </header>