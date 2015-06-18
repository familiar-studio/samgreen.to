<!doctype html>

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">



		<title>
			<?php if ( !is_front_page() ) { echo wp_title( ' ', true, 'left' ); echo ' | '; }
			echo bloginfo( 'name' ); echo ' - '; bloginfo( 'description', 'display' );  ?>
		</title>




		<!-- icons & favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favIcon_16x16.ico">

		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">



		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<script type="text/javascript" src="//use.typekit.net/fdj8nbb.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

		<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/samgreen.css">  -->

		<!-- theme options from options panel -->
		<?php get_wpbs_theme_options(); ?>

		<?php

			// check wp user level
			get_currentuserinfo();
			// store to use later
			global $user_level;

			// get list of post names to use in 'typeahead' plugin for search bar
			if(of_get_option('search_bar', '1')) { // only do this if we're showing the search bar in the nav

				global $post;
				$tmp_post = $post;
				$get_num_posts = 40; // go back and get this many post titles
				$args = array( 'numberposts' => $get_num_posts );
				$myposts = get_posts( $args );
				$post_num = 0;

				global $typeahead_data;
				$typeahead_data = "[";

				foreach( $myposts as $post ) :	setup_postdata($post);
					$typeahead_data .= '"' . get_the_title() . '",';
				endforeach;

				$typeahead_data = substr($typeahead_data, 0, strlen($typeahead_data) - 1);

				$typeahead_data .= "]";

				$post = $tmp_post;

			} // end if search bar is used

		?>

		<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/less/samgreen.less">

		<script src="<?php echo get_template_directory_uri(); ?>/library/js/less-1.3.1.min.js"></script>

	</head>

	<body <?php body_class(); ?>>

		<header role="banner">

			<div id="inner-header" class="clearfix">

				<div class="header container-fluid">
					<a href="<?php bloginfo('url'); ?>" class="homeLink">
						<div class="headerPhoto"></div>
						<h1><?php bloginfo('title'); ?></h1>
					</a>
						<h2><?php echo html_entity_decode(get_bloginfo('description')); ?></h2>
					<div class="socialIcons">
<a href="http://instagram.com/sam_b_green"><div class="instagram sprite-instagram sprite-instagram-hover"></div></a>
	<a href="https://www.facebook.com/sam.green.3154?fref=ts"><div class="facebook sprite-facebook sprite-facebook-hover"></div></a>
		<a href="https://twitter.com/sam_b_green"><div class="twitter sprite-twitter sprite-twitter-hover"></div></a>
</div>
						<div class="headerContactInfo"><p>1237 Florida Street San Francisco, CA 94110&nbsp;  | &nbsp;<a href="mailto:samgreenfilm@gmail.com">samgreenfilm@gmail.com</a></p></div>

				</div>

			</div> <!-- end #inner-header -->
			</header> <!-- end header -->


		<div class="container-fluid">
