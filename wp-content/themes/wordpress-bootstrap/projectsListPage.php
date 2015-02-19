<?php get_header(); ?>

<?php
/*
Template Name: Projects List
*/
?>
			
			<div id="content" class="clearfix row-fluid">
				<div class="projectListPage">
				
					<?php include ('sidebar.php'); ?>
			
					<div id="main" class="span10 clearfix" role="main">
						
						<div><h2>Features</h2></div>
						
						<div> <!-- FEATURES -->
							
							<?php $args= array('category_name' => 'feature', 'posts_per_page' => 100); query_posts($args);?>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
								<header>
								
									<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><img src="<?php the_field('image'); ?>"></a>
								
									<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>
							
									<div class="page-header"><h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>
						
								</header> <!-- end article header -->
					
							</article> <!-- end article -->
					
							<?php endwhile; ?>	
					
							<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
								<?php page_navi(); // use the page navi function ?>
						
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
						</div>
						
						<div style="clear:both;"><h2>Shorts</h2></div>
						
						<div style="clear:both;"> <!-- SHORTS -->
							
							<?php $args= array('category_name' => 'shorts', 'posts_per_page' => 100); query_posts($args);?>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
								<header>
								
									<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><img src="<?php the_field('image'); ?>"></a>
								
									<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>
							
									<div class="page-header"><h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>
						
								</header> <!-- end article header -->
					
							</article> <!-- end article -->
					
							<?php endwhile; ?>	
					
							<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
								<?php page_navi(); // use the page navi function ?>
						
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
						</div>
			
					</div> <!-- end #main -->
    
				</div>
			</div> <!-- end #content -->

<?php get_footer(); ?>