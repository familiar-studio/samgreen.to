<?php get_header(); ?>

<?php
/*
Template Name: Media
*/
?>
			
<div id="content" class="clearfix row-fluid">
	<div class="mediaPage regularPage">
	
		<?php include ('sidebar.php'); ?>

		<div id="main" class="span10 clearfix" role="main">
		
				
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
			
				<header>
					<div class="page-header"><h2 class="page-title" itemprop="headline"><?php the_title(); ?></h2></div>
				</header>
				
				<section class="post_content clearfix"  style="clear:both;">
					<?php the_content( __("Read more &raquo;","bonestheme") ); ?>
				</section> <!-- end article section -->
			
				<ul class="kit">
						<?php

						$featured_image[]=get_post_thumbnail_id($post->ID);


						$args = array(
							'order'          => 'ASC',
							'orderby'		 => 'menu_order',
							'post_type'      => 'attachment',
							'post_parent'    => $post->ID,
							'post_mime_type' => 'image',
							'post_status'    => null,
							'numberposts'    => -1,
							'exclude'	 => $featured_image,
						);
						$attachments = get_posts($args);
						$attachments_caption = $attachments->post_excerpt;
						if ($attachments) {
							foreach ($attachments as $attachment) {
								$slide = wp_get_attachment_image_src($attachment->ID, 'thumbnail');
								$slide_link = wp_get_attachment_image_src($attachment->ID, 'full');
								$caption = $attachment->post_excerpt;
								echo '<li><a class="img_link" href="'.$slide_link[0].'"><img src="'.$slide[0].'"/><br/><p class="caption">'. $caption .'</p></a></li>';
							}
						}
						?>

				  </ul>


	
			</article> <!-- end article -->
		
			<?php endwhile; ?>	
		
			<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
			
			
			<?php } else { // if it is disabled, display regular wp prev & next links ?>
				
			<?php } ?>		
		
			<?php else : ?>
		
			<article id="post-not-found">
			    <header>
			    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
			    </header>
			    <section class="post_content">
			    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
			    </section>
			    <footer>
			    </footer>
			</article>
		
			<?php endif; ?>

		</div> <!-- end #main -->

	</div>
</div> <!-- end #content -->

<?php get_footer(); ?>