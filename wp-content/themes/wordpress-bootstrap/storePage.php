<?php get_header(); ?>

<?php
/*
Template Name: Store
*/
?>
			
<div id="content" class="clearfix row-fluid">
	<div class="projectPage storePage">
		
	
		<?php include ('sidebar.php'); ?>
		

		<div id="main" class="span10 clearfix" role="main">
			
		
			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args= array('category_name' => 'Store','paged' => $paged, 'posts_per_page' => 100); query_posts($args);?>
				
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
		
			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
			

					<div class="projectImage">
						<img src="<?php the_field('store-image'); ?>">
						<ul>
						
							<!-- regular price -->
							<?php if (get_field('price')) { // if expirimental feature is active ?>
								<li class="filmPrice">$<?php the_field('price'); ?></li>
							<?php } ?>
							
						   <a href="#" onclick="$('#paypal-<?php the_ID(); ?>').submit(); return false;"><li class="button">Buy Now</li></a>
						
							<form id="paypal-<?php the_ID(); ?>" action="https://www.paypal.com/cgi-bin/webscr" method="post">
								<input type="hidden" name="cmd" value="_cart"> 
								<input type="hidden" name="add" value="1"> 
								<input type="hidden" name="business" value="samgreenfilm@gmail.com"> 
								<input type="hidden" name="item_name" value="<?php the_title(); ?>"> 
								<input type="hidden" name="amount" value="<?php the_field('price'); ?>"> 
								<input type="hidden" name="currency_code" value="USD"> 
								<input type="hidden" name="tax_rate" value="8.875"> 
								<input type="hidden" name="weight" value="<?php the_field('dvd_weight'); ?>">  
								<input type="hidden" name="weight_unit" value="lbs">
								<input type="hidden" name="return"> 
								<input type="hidden" name="no_note" value="0">

								<input type="hidden" name="undefined_quantity" value="1">
							</form>
							
							<!-- institutional price -->
							<?php if (get_field('institutional_price')) { // if expirimental feature is active ?>
								<li class="filmPrice"><span>Institutional Order</span> $<?php the_field('institutional_price'); ?></li>
								<a href="#" onclick="$('#paypal2-<?php the_ID(); ?>').submit(); return false;"><li class="button">Buy Now</li></a>
							<?php } ?>


							<form id="paypal2-<?php the_ID(); ?>" action="https://www.paypal.com/cgi-bin/webscr" method="post">
								<input type="hidden" name="cmd" value="_cart"> 
								<input type="hidden" name="add" value="1"> 
								<input type="hidden" name="business" value="samgreenfilm@gmail.com"> 
								<input type="hidden" name="item_name" value="<?php the_title(); ?> Institutional Order"> 
								<input type="hidden" name="amount" value="<?php the_field('institutional_price'); ?>"> 
								<input type="hidden" name="tax_rate" value="8.875">  
								<input type="hidden" name="currency_code" value="USD"> 
								<input type="hidden" name="return"> 
								<input type="hidden" name="weight" value="<?php the_field('inst_dvd_weight'); ?>"> 
								<input type="hidden" name="weight_unit" value="lbs">
								<input type="hidden" name="no_note" value="0">

								<input type="hidden" name="undefined_quantity" value="1">
							</form>
							


						    	<?php if (get_field('view_film_website')) { // if expirimental feature is active ?>
									<a href="<?php the_field('view_film_website'); ?>"><li class="button">View Film Website</li></a>
								<?php } ?>		
							
						
						</ul>
						
					</div>
					<div class="projectInfo">
						<div><h1 class="h2"><?php the_title(); ?></h1></div>
						<div class="projectSub"><h2><?php the_field('bi-line'); ?></h2></div>
		
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