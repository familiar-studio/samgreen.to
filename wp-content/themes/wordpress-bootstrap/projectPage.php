<?php get_header(); ?>

<?php
/*
Template Name: Projects
*/
?>
			
			<div id="content" class="clearfix row-fluid">
				<div class="projectPage">
				
					<?php include ('sidebar.php'); ?>
			
					<div id="main" class="span8 clearfix" role="main">
						
						<?php
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$args= array('category_name' => 'Project','paged' => $paged, 'posts_per_page' => 100); query_posts($args);?>
							
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
							<header>
						
								<p class="meta"><time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time></p>
						
								<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>
							
								<div class="page-header"><h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>
						
							</header> <!-- end article header -->
					
							<section class="post_content clearfix">
								<?php the_content( __("Read more &raquo;","bonestheme") ); ?>
							</section> <!-- end article section -->
					
						</article> <!-- end article -->
					
						<?php endwhile; ?>	
					
						<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
							<?php page_navi(); // use the page navi function ?>
						
						<?php } else { // if it is disabled, display regular wp prev & next links ?>
							<nav class="wp-prev-next">
								<ul class="clearfix">
									<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
									<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
								</ul>
							</nav>
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
    
					<?php include ('sidebar-sidebar2.php'); ?>
    
				</div>
			</div> <!-- end #content -->

<?php get_footer(); ?>