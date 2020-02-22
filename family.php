<?php /* Template Name: Famaily */ ?>
<?php get_header() ?>
        <?php global $themesbazar ?>
			
<!---news option******************--->
			<div class="row">
			    <?php 
							$family = new WP_Query(array(
								'post_type' => 'family',
								'posts_per_page' => 500,
								'offset'     =>0,
								'order'     => 'ASC',
							));
							while($family->have_posts()) : $family->the_post(); ?>	
							
				<div class="col-md-3">
					<div class="profile_news">
						<a href="<?php the_permalink()?>"><?php the_post_thumbnail(); ?>
						<h4 class="family"><?php the_title() ?></a></h4>
					</div>
				</div>
				
				<?php endwhile ?>
					</div>
				
	
			
	<?php get_footer();
			get_template_part('include/root');
			wp_footer();
			?>