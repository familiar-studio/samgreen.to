				<div id="sidebar2" class="fluid-sidebar sidebar span2" role="complementary">
				
					<p>Selected Films</p>
					
					<div class="selectedFilms">

						<div>
							
							<?php
								$args= array('category_name' => 'feature', 'posts_per_page' => 5); query_posts($args);?>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
								<header>
								
									<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><img src="<?php the_field('image'); ?>"></a>
						
								</header> <!-- end article header -->
					
							</article> <!-- end article -->
					
							<?php endwhile; ?>	
				
							<?php endif; ?>
						</div>

					</div>
					
					<p><a href="/films">View All</a></p>
				
				
				</div>