<?php get_header() ?>
        <?php global $themesbazar ?>
			

	
			
	<!-- Section 06 (top two div) #################################--> 	
	
		

		<!--gellary open--->	
		<div class="row">
		
			<div class="col-md-8">
				
      <div align="center">
       <h2>Ooops... Error 404 </h2>
       <h3>Sorry, but the page you are looking for doesn't exist. </h3>
       <h4>You can go to the <a href="<?php bloginfo('url'); ?>"><button>Homepage</button> </a></h4>
   </div>  
                
                
                
                
                 
               
                
			</div>	
		

			<div class="col-md-4">
				<div class="tab-header">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-justified" role="tablist">
							<li role="presentation" class="active"><a href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="false"><?php echo $themesbazar['last'] ?></a></li>
							<li role="presentation" ><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab" aria-expanded="true"><?php echo $themesbazar['popular'] ?></a></li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane in active" id="tab21">	
								<div class="news-title">
									<?php
									$x=1;							 
									$lastnews = new WP_Query(array(
									'post_type' => 'post',
									'posts_per_page' => $themesbazar['lastpost'],
									'offset' =>0,
									));
									while($lastnews->have_posts()) : $lastnews->the_post();?>
									<?php $xx=$x++ ?>
									<div class="images_title">
										<span><?php echo bn_number($xx); ?></span>									
										<?php if(has_post_thumbnail()){ 
										the_post_thumbnail();}
										else{?>
										<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
										<?php } ?>
										<h4 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?> </a></h4>					
									</div>
								<?php endwhile ?>		
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab22">	
								<div class="news-title">
									<?php
									$x=1;	
									query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC');
									if (have_posts()) : while (have_posts()) : the_post();
									?>	
									<?php $xx=$x++ ?>									
									<div class="images_title">
									<span><?php echo bn_number($xx); ?></span>	
										<?php if(has_post_thumbnail()){ 
										the_post_thumbnail();}
										else{?>
										<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
										<?php } ?>
										<h4 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?> </a></h4>
									</div>	
									<?php
									endwhile; endif;
									wp_reset_query();
									?>										
								</div>											
							</div>
						</div>
					</div>	
			
			<!--********add here*******-->
		    <div class="col-md-12"><?php dynamic_sidebar('single_widget')?></div>
			
                
			</div>
	
			
		</div>			
	
	
					
	<?php get_footer();
			get_template_part('include/root');
			wp_footer();
			?>