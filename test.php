                                    <?php
									$featured = new WP_Query('post_type=post&posts_per_page=1&cat=4,11');
									if ($featured->have_posts()) :
										while ($featured->have_posts()) : $featured->the_post();
										?>
										<div class="col-12">
											<?php get_template_part('template-parts/content', 'featured'); ?>
										</div>
										<?php
										endwhile;
										wp_reset_postdata();
									endif;				
									?>