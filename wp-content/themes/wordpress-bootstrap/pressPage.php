<?php get_header(); ?>

<?php
/*
Template Name: Press
*/
?>
			
<div id="content" class="clearfix row-fluid">
	<div class="pressPage">
	
		<?php include ('sidebar.php'); ?>

		<div id="main" class="span10 clearfix" role="main">
			
			<div class="pageTitle"><h2><?php the_title(); ?></h2></div>
			
			<section class="post_content clearfix"  style="clear:both;">
				<?php while (have_posts()) : the_post();/* Start loop */ ?>
				        <?php the_content(); ?>
				<?php endwhile; /* End loop */ ?>
			</section> <!-- end article section -->
		
			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args= array('category_name' => 'Press','paged' => $paged, 'posts_per_page' => 100); query_posts($args);?>
				
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
			
			
			<?php if (get_field('press_link')) { // if expirimental feature is active ?>
		
				<h3><a href="<?php the_field('press_link'); ?>"><?php the_field('publication'); ?></a>, “<?php the_field('link_title'); ?>” <?php the_field('date_of_publication'); ?>, <?php the_field('author'); ?>.</h3>

			<?php } ?>
			
			<?php if (get_field('pdf_download')) { // if expirimental feature is active ?>
		
				<h3><a href="<?php the_field('pdf_download'); ?>"><?php the_field('publication'); ?></a>, “<?php the_field('link_title'); ?>” <?php the_field('date_of_publication'); ?>, <?php the_field('author'); ?>.</h3>

			<?php } ?>



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