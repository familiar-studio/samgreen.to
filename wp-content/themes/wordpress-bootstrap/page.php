<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
			
				<div class="regularPage">
					
					<?php include ('sidebar.php'); ?>
			
					<div id="main" class="span8 offset1 clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
							<header>
							
								<div class="page-header"><h2 class="page-title" itemprop="headline"><?php the_title(); ?></h2></div>
						
							</header> <!-- end article header -->
					
							<section class="post_content clearfix" itemprop="articleBody">
								<?php the_content(); ?>
					
							</section> <!-- end article section -->
						
							<footer>
			
								<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ', ', '</p>'); ?>
							
							</footer> <!-- end article footer -->
					
						</article> <!-- end article -->

					
						<?php endwhile; ?>		
					
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