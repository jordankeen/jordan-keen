<?php 
/**
 * Template Name: Projects Page
 *
 */

get_header();  

?>
	<div class="projects-page page-style">
		<div class="container">
			<h2 class="page-title">recent projects</h2>
			<div class="projects-wrapper">

				<?php 
				$projects_Args = array(
					'post_type' => 'project',
					'posts_per_page' => 8,
					'meta_key' => 'order_number',
					'orderby' => 'meta_value_num',
					'order' => 'DESC'
					);
				$project_Query = new WP_Query($projects_Args);
				if( $project_Query->have_posts() ) {
					while( $project_Query->have_posts() ) {
	
						$project_Query->the_post();
						?>

						<article class="portfolio-item-container" data-aos="fade-up">

							<div class="portfolio-content">
								<h3><?php the_title() ?></h3>
								<p><?php the_field('long_description'); ?></p>

								<ul>
									<?php
										while(has_sub_field('skills_used')) {
										?>
										<li><?php the_sub_field('skill_name')?></li>
										<?php
										}
									?>
								</ul>

								<a class="view-live hvr-sweep-to-right" target="_blank" href="<?php the_field('project_link'); ?>">View Live</a>
								
							</div>

							<div class="portfolio-image">
								<a href="<?php the_field('project_link'); ?>" target="_blank">
									<?php $image = get_field('image'); ?>
									<img src="<?php echo $image['url']?>">
								</a>
							</div>

						</article>
						<?php
					}
				}
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
	

<?php get_footer(); ?>