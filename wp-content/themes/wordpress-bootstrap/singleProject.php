<?php get_header(); ?>
			
<div id="content" class="clearfix row-fluid">
	<div class="projectPage">
	
		<?php include ('sidebar.php'); ?>

		<div id="main" class="span10 clearfix" role="main">
		
				
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
			

					<div class="projectImage">
						<img src="<?php the_field('image'); ?>">
						<ul>
							
							<?php if (get_field('price')) { // if expirimental feature is active ?>
							
						   		<a href="#" onclick="$('#paypal-<?php the_ID(); ?>').submit(); return false;"><li class="button">Buy Now</li></a>

									<form id="paypal-<?php the_ID(); ?>" action="https://www.paypal.com/cgi-bin/webscr" method="post">
										<input type="hidden" name="cmd" value="_cart"> 
										<input type="hidden" name="add" value="1"> 
										<input type="hidden" name="business" value="sam@duboce.net"> 
										<input type="hidden" name="item_name" value="<?php the_title(); ?>"> 
										<input type="hidden" name="amount" value="<?php the_field('price'); ?>"> 
										<input type="hidden" name="shipping" value="0"> 
										<input type="hidden" name="currency_code" value="USD"> 
										<input type="hidden" name="return"> 
										<input type="hidden" name="undefined_quantity" value="1">
									</form>
									
							<?php } ?>
								
					   		<?php if (get_field('view_film_website')) { // if expirimental feature is active ?>
						
								<a href="<?php the_field('view_film_website'); ?>"><li class="button">View Film Website</li></a>

							<?php } ?>
						
						</ul>
						
					</div>
					<div class="projectInfo">
						<div><h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>
						<div class="projectSub"><h2><?php the_field('sub_title'); ?><h2></div>
						<div class="projectSecondary"><h3><?php the_field('year'); ?> - <?php the_field('secondary_info'); ?></h3></div>
		
						<section class="post_content clearfix">
							<?php the_content( __("Read more &raquo;","bonestheme") ); ?>
						</section> <!-- end article section -->
					</div>
		
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