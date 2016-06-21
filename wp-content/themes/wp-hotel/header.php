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
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>
	
	<?php wp_head(); ?>
	<?php if(is_home()){?>
	<script type="text/javascript" src="/wp-content/themes/wp-hotel/js/jquery.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/wp-hotel/js/jquery/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/wp-hotel/js/main.js"></script>
    <script type="text/javascript" src="/wp-content/themes/wp-hotel/js/menu-page.js"></script>
    <link type="text/css" href="/wp-content/themes/wp-hotel/css/flexslider.css" rel="stylesheet"/>
    <?php }?>
</head>

<body <?php body_class(); ?>>
		<div id = "page-wrap">				<!-- 	begin wrapper -->
		<div class = "container">		<!-- 	begin container -->
			<div class = "logo">
				<a href = "index.php" title = "home">
					<img src = "/wp-content/themes/wp-hotel/images/logo.png" title = "" />
				</a>
			</div>
			<div class="main-page">
				<div class="left main-nav">			<!-- begin main-nav -->
					<div class = "nav-menu">
						<?php 
							wp_nav_menu(array('menu'=>'page-menu','container'=>''));
						?>
					</div>
					<div class="resevation">
						<a href = "#" title = "">reservations</a>
					</div>
					<div class="contact">
						<h3>need help booking call</h3>
						<span>(+84)510 3888999</span>
					</div>
					<div class="face-tool">
						<ul>
							<li><a href = "#" title = ""><img src = "/wp-content/themes/wp-hotel/images/icon-t.png" title ="" /></a></li>
							<li><a href = "#" title = ""><img src = "/wp-content/themes/wp-hotel/images/icon-f.png" title ="" /></a></li>
							<li><a href = "#" title = ""><img src = "/wp-content/themes/wp-hotel/images/icon-g.png" title ="" /></a></li>
							<li><a href = "#" title = ""><img src = "/wp-content/themes/wp-hotel/images/icon-k.png" title ="" /></a></li>
						</ul>
					</div>					
				</div>						<!-- end main-nav -->
				<div class="right slide-content">	<!-- begin slider -->