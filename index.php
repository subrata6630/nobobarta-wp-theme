<?php get_header();
 global $themesbazar; ?>


	
		<!----------------------------------------------section_1 option******************--->
		
				<!----section one open---->
		<?php if($themesbazar['section-one'] ==1 ): ?>
				<!---leadnews option******************--->

				<div class="row">
	
				<!-- ***************(cetagory-one)**************************-->
				
					<div class="col-md-5">
					<?php
					$category_name = get_the_category_by_id($themesbazar['cat-one']);
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 1,
						'offset' => 0,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						<div class="leadnews">
							<?php if(has_post_thumbnail()){ 
							the_post_thumbnail();}
							else{?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
							<?php } ?>
							<h2 class="heading_01"> <a href="<?php the_permalink()?>"><?php the_title() ?></a></h2>	
						</div>
						<?php endwhile?>
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
					</div>
					
					
					<div class="col-md-3">
		
						
					<!-- Facebook Start -->

					<?php if($themesbazar['facebook'] ==1 ): ?>
					<div class="facebook_title"><a href="#"><?php echo $themesbazar['facebook-title']?></a></div>
					<div class="fb-root">
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div class="fb-page" data-href="<?php echo $themesbazar['facebook-link']['face-url']; ?>" data-tabs="timeline" data-width="<?php echo $themesbazar['facebook-width']?>" data-height="<?php echo $themesbazar['facebook-height']?>" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
								   <?php endif; ?>
				   
				   <?php if($themesbazar['facebook'] == 2 ): ?>
				   <?php endif; ?>
				   </div>
				   	<!-- Facebook Close -->
				   	
				   	<?php dynamic_sidebar('sidebar_top')?>
										
					</div>
				</div>

				<?php endif; ?>   
		<?php if($themesbazar['section-one'] == 2 ): ?>
				<?php endif; ?>
					
		<!----section two open---->	
	
		<?php if($themesbazar['section-two'] ==1 ): ?>
			<div class="row">
				<div class="col-md-9">
				
				<!-- ***************(cetagory-two)**************************-->
<!-- G&R_728x90 -->
<script id="GNR10490">
    (function (i,g,b,d,c) {
        i[g]=i[g]||function(){(i[g].q=i[g].q||[]).push(arguments)};
        var s=d.createElement(b);s.async=true;s.src=c;
        var x=d.getElementsByTagName(b)[0];
        x.parentNode.insertBefore(s, x);
    })(window,'gandrad','script',document,'//content.green-red.com/lib/display.js');
    gandrad({siteid:3927,slot:10490});
</script>
<!-- End of G&R_728x90 -->	
					<div class="row">
					<?php
					$category_name = get_the_category_by_id($themesbazar['cat-two']);
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 3,
						'offset' => 0,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						<div class="col-md-4">
							<div class="leadnews_1">
								<?php if(has_post_thumbnail()){ 
										the_post_thumbnail();}
									else{?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
								<?php } ?>
								<h4 class="heading_02"><a href="<?php the_permalink()?>"><?php the_title() ?>	</a> </h4>	
							</div>
						</div>
					<?php endwhile?>
						
						
					</div>
					<div class="row">
					<?php
					$category_name = get_the_category_by_id($themesbazar['cat-two']);
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 3,
						'offset' => 3,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						<div class="col-md-4">
							<div class="leadnews_1">
								<?php if(has_post_thumbnail()){ 
										the_post_thumbnail();}
									else{?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
								<?php } ?>
								<h4 class="heading_02"><a href="<?php the_permalink()?>"><?php the_title() ?>	</a> </h4>	
							</div>
						</div>
					<?php endwhile?>
						
						
					</div>
					<div class="row">
					<?php
					$category_name = get_the_category_by_id($themesbazar['cat-two']);
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 3,
						'offset' => 6,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						<div class="col-md-4">
							<div class="leadnews_1">
								<?php if(has_post_thumbnail()){ 
										the_post_thumbnail();}
									else{?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
								<?php } ?>
								<h4 class="heading_02"><a href="<?php the_permalink()?>"><?php the_title() ?>	</a> </h4>	
							</div>
						</div>
					<?php endwhile?>
					</div>
					<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>	
				</div>
				
				<!-- ***************(cetagory-three)**************************-->
				
				<div class="col-md-3">
					<?php
				$category_name = get_the_category_by_id($themesbazar['cat-three']);
				$category_name_link = get_category_link($themesbazar['cat-three']);
					?>
				<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
					<?php
					$how_cat= $themesbazar['how_post_three'];
					$total_how_cat=$how_cat-0;
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => $total_how_cat,
						'offset' => 0,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
					<div class="images_title_01">
						<?php if(has_post_thumbnail()){ 
						the_post_thumbnail();}
						else{?>
						<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
						<?php } ?>
						<h4 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>  
					</div>
					<?php endwhile?>					
					<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
					<div class="clear"></div>
					
					<?php dynamic_sidebar('sidebar_middole')?>
				</div>
			</div>			
			<?php endif; ?>   
		<?php if($themesbazar['section-two'] == 2 ): ?>
			<?php endif; ?>
			<div class="row">
					<div class="col-md-12">
						<div class="add">
						<?php dynamic_sidebar('widget_area_01')?>
						</div>
					</div>
				</div>
				
	<!---****************section-three******************--->
	
		<?php if($themesbazar['section-three'] ==1 ): ?>
		<div class="row">
		
		<!-- ***************(cetagory-four)**************************-->
		
			<div class="col-md-9">
					<?php
				$category_name = get_the_category_by_id($themesbazar['cat-four']);
				$category_name_link = get_category_link($themesbazar['cat-four']);
					?>
				<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
			
				<div class="row">
					<div class="col-md-7">
					<?php
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 1,
						'offset' => 0,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						<div class="leadnews">
							<?php if(has_post_thumbnail()){ 
							the_post_thumbnail();}
							else{?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
							<?php } ?>
							<h4 class="heading_01"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
						</div>
					<?php endwhile?>		
					</div>
					<div class="col-md-5">
					<?php
					$how_cat= $themesbazar['how_post_four'];
					$total_how_cat=$how_cat-1;
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => $total_how_cat,
						'offset' => 1,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						<div class="images_title">
							<?php if(has_post_thumbnail()){ 
							the_post_thumbnail();}
							else{?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
							<?php } ?>
							<h4 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
						</div>
					<?php endwhile?>
					
						<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
					</div>
				</div>
			</div>
			<!-- ***************(cetagory-five)**************************-->
			<div class="col-md-3">
					<?php
				$category_name = get_the_category_by_id($themesbazar['cat-five']);
				$category_name_link = get_category_link($themesbazar['cat-five']);
					?>
					<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
					<?php
					$how_cat= $themesbazar['how_post_five'];
					$total_how_cat=$how_cat-0;
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => $total_how_cat,
						'offset' => 0,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
					<div class="images_title_01">
						<?php if(has_post_thumbnail()){ 
							the_post_thumbnail();}
							else{?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
							<?php } ?>
							<h4 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>  
					</div>
					<?php endwhile?>
				<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
			</div>
		</div>	
		
			<?php endif; ?>   
		<?php if($themesbazar['section-three'] == 2 ): ?>
			<?php endif; ?>	
			
		<!---****************section-four******************--->
		<?php if($themesbazar['section-four'] ==1 ): ?>
		<div class="row">
		<!-- ***************(cetagory-six)**************************-->
			<div class="col-md-7">
					<?php
				$category_name = get_the_category_by_id($themesbazar['cat-six']);
				$category_name_link = get_category_link($themesbazar['cat-six']);
					?>
				<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
				<div class="row">
					<div class="col-md-7">
					<?php
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 1,
						'offset' => 0,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						<div class="leadnews">
							<?php if(has_post_thumbnail()){ 
							the_post_thumbnail();}
							else{?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
							<?php } ?>
							<h4 class="heading_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
						</div>
						<?php endwhile?>
					</div>
					<div class="col-md-5">
					<?php
					$how_cat= $themesbazar['how_post_six'];
					$total_how_cat=$how_cat-1;
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => $total_how_cat,
						'offset' => 1,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						<div class="images_title_01">
							<?php if(has_post_thumbnail()){ 
							the_post_thumbnail();}
							else{?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
							<?php } ?>
							<h4 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
						</div>
					<?php endwhile?>
						<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
					</div>
				</div>
			</div>
			<!-- ***************(cetagory-seven)**************************-->
			<div class="col-md-5">
			<?php
			$category_name = get_the_category_by_id($themesbazar['cat-seven']);
			$category_name_link = get_category_link($themesbazar['cat-seven']);
				?>
			<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
				<div class="photo-gellary">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<?php
							$themes_bazar = new WP_Query(array(
								'post_type' => 'post',
								'posts_per_page' => 1,
								'offset' => 0,
								'category_name' => $category_name,

							));
							while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
							<div class="item active">
								<?php if(has_post_thumbnail()){ 
									the_post_thumbnail();}
									else{?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
									<?php } ?>
									<h4 class="Photo_Caption"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
							</div>
							<?php endwhile?>
							<?php
							$how_cat= $themesbazar['how_post_seven'];
							$total_how_cat=$how_cat-1;
							$themes_bazar = new WP_Query(array(
								'post_type' => 'post',
								'posts_per_page' => $total_how_cat,
								'offset' => 1,
								'category_name' => $category_name,

							));
							while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
							<div class="item">
								<?php if(has_post_thumbnail()){ 
									the_post_thumbnail();}
									else{?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
									<?php } ?>
									<h4 class="Photo_Caption"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
							</div>
							<?php endwhile?>
							
							
							
						</div>
						<!-- Left and right controls -->
									 <a class="left carousel-control" href="#myCarousel" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
										<span class="sr-only">Previous</span>
									 </a>
									  <a class="right carousel-control" href="#myCarousel" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
										<span class="sr-only">Next</span>
									 </a>
					</div>
				</div>
			</div>
		</div>	

			<?php endif; ?>   
		<?php if($themesbazar['section-four'] == 2 ): ?>
			<?php endif; ?>
			<div class="row">
				<div class="col-md-6">
					<div class="add">
						<?php dynamic_sidebar('widget_area_02')?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="add">
						<?php dynamic_sidebar('widget_area_03')?>
					</div>
				</div>
			</div>
		<!---****************section-five******************--->
		<?php if($themesbazar['section-five'] ==1 ): ?>
		<div class="row">
		
		<!-- ***************(cetagory-eight)**************************-->
		
			<div class="col-md-9">
					<?php
				$category_name = get_the_category_by_id($themesbazar['cat-eight']);
				$category_name_link = get_category_link($themesbazar['cat-eight']);
					?>
				<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
			
				<div class="row">
					<div class="col-md-7">
					<?php
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 1,
						'offset' => 0,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						<div class="leadnews">
							<?php if(has_post_thumbnail()){ 
							the_post_thumbnail();}
							else{?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
							<?php } ?>
							<h4 class="heading_01"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
						</div>
					<?php endwhile?>		
					</div>
					<div class="col-md-5">
					<?php
					$how_cat= $themesbazar['how_post_eight'];
					$total_how_cat=$how_cat-1;
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => $total_how_cat,
						'offset' => 1,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						<div class="images_title">
							<?php if(has_post_thumbnail()){ 
							the_post_thumbnail();}
							else{?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
							<?php } ?>
							<h4 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
						</div>
					<?php endwhile?>
					
						<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
					</div>
				</div>
			</div>
			<!-- ***************(cetagory-nine)**************************-->
			<div class="col-md-3">
					<?php
				$category_name = get_the_category_by_id($themesbazar['cat-nine']);
				$category_name_link = get_category_link($themesbazar['cat-nine']);
					?>
					<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
					<?php
					$how_cat= $themesbazar['how_post_nine'];
					$total_how_cat=$how_cat-0;
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => $total_how_cat,
						'offset' => 0,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
					<div class="images_title_01">
						<?php if(has_post_thumbnail()){ 
							the_post_thumbnail();}
							else{?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
							<?php } ?>
							<h4 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>  
					</div>
					<?php endwhile?>
				<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
			</div>
		</div>	
			<?php endif; ?>   
		<?php if($themesbazar['section-five'] == 2 ): ?>
			<?php endif; ?>
			<div class="row">
					<div class="col-md-12">
						<div class="add">
						<?php dynamic_sidebar('widget_area_04')?>
						</div>
					</div>
				</div>
		<!---****************section-six******************--->
		<?php if($themesbazar['section-six'] ==1 ): ?>
		<div class="row">
			<div class="col-md-9">
				<div class="row">
					<!-- ***************(cetagory-ten)**************************-->
					<div class="col-md-4">
						<?php
					$category_name = get_the_category_by_id($themesbazar['cat-ten']);
					$category_name_link = get_category_link($themesbazar['cat-ten']);
						?>
					<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
						<?php
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 1,
						'offset' => 0,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						<div class="leadnews_1">
							<?php if(has_post_thumbnail()){ 
							the_post_thumbnail();}
							else{?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
							<?php } ?>
							<h4 class="heading_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>								
						</div>
						<?php endwhile?>
						<?php
						$how_cat= $themesbazar['how_post_ten'];
						$total_how_cat=$how_cat-1;
						$themes_bazar = new WP_Query(array(
							'post_type' => 'post',
							'posts_per_page' => $total_how_cat,
							'offset' => 1,
							'category_name' => $category_name,

						));
						while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
							<div class="images_title_01">
								<?php if(has_post_thumbnail()){ 
								the_post_thumbnail();}
								else{?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
								<?php } ?>
								<h4 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>  
							</div>
							<?php endwhile?>
						<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
					</div>
					
					<!-- ***************(cetagory-eleven)**************************-->
					
					<div class="col-md-4">
						<?php
					$category_name = get_the_category_by_id($themesbazar['cat-eleven']);
					$category_name_link = get_category_link($themesbazar['cat-eleven']);
						?>
					<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
						<?php
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 1,
						'offset' => 0,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						<div class="leadnews_1">
							<?php if(has_post_thumbnail()){ 
							the_post_thumbnail();}
							else{?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
							<?php } ?>
							<h4 class="heading_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>								
						</div>
						<?php endwhile?>
						<?php
						$how_cat= $themesbazar['how_post_eleven'];
						$total_how_cat=$how_cat-1;
						$themes_bazar = new WP_Query(array(
							'post_type' => 'post',
							'posts_per_page' => $total_how_cat,
							'offset' => 1,
							'category_name' => $category_name,

						));
						while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
							<div class="images_title_01">
								<?php if(has_post_thumbnail()){ 
								the_post_thumbnail();}
								else{?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
								<?php } ?>
								<h4 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>  
							</div>
							<?php endwhile?>
						<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
					</div>
					
					<!-- ***************(cetagory-twelve)**************************-->
					
					<div class="col-md-4">
						<?php
					$category_name = get_the_category_by_id($themesbazar['cat-twelve']);
					$category_name_link = get_category_link($themesbazar['cat-twelve']);
						?>
					<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
						<?php
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 1,
						'offset' => 0,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						<div class="leadnews_1">
							<?php if(has_post_thumbnail()){ 
							the_post_thumbnail();}
							else{?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
							<?php } ?>
							<h4 class="heading_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>								
						</div>
						<?php endwhile?>
						<?php
						$how_cat= $themesbazar['how_post_twelve'];
						$total_how_cat=$how_cat-1;
						$themes_bazar = new WP_Query(array(
							'post_type' => 'post',
							'posts_per_page' => $total_how_cat,
							'offset' => 1,
							'category_name' => $category_name,

						));
						while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
							<div class="images_title_01">
								<?php if(has_post_thumbnail()){ 
								the_post_thumbnail();}
								else{?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
								<?php } ?>
								<h4 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>  
							</div>
							<?php endwhile?>
						<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
					</div>
				</div>
			</div>
			<!---add plugin option******************--->
			
			
			<div class="col-md-3">
				<div class="add">
					<?php dynamic_sidebar('sidebar_bottom')?>
				</div>
			</div>
		</div>
		
			<?php endif; ?>   
		<?php if($themesbazar['section-six'] == 2 ): ?>
			<?php endif; ?>
			
		<!---****************section-nine******************--->
		
		<?php if($themesbazar['section-seven'] ==1 ): ?>
		<div class="row">
			<div class="col-md-3">
			
			<!-- ***************(cetagory-thirteen)**************************-->
					<?php
				$category_name = get_the_category_by_id($themesbazar['cat-thirteen']);
				$category_name_link = get_category_link($themesbazar['cat-thirteen']);
					?>
				<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
				<?php
				$themes_bazar = new WP_Query(array(
					'post_type' => 'post',
					'posts_per_page' => 2,
					'offset' => 0,
					'category_name' => $category_name,

				));
				while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
				<div class="leadnews_1">
					<?php if(has_post_thumbnail()){ 
					the_post_thumbnail();}
					else{?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
					<?php } ?>
					<h4 class="heading_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 								
				</div>
				<?php endwhile?>
				<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
			</div>
			
			<!-- ***************(cetagory-fourteen)**************************-->
			
			<div class="col-md-6">
				<?php
			$category_name = get_the_category_by_id($themesbazar['cat-fourteen']);
			$category_name_link = get_category_link($themesbazar['cat-fourteen']);
				?>
			<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
				<?php
				$themes_bazar = new WP_Query(array(
					'post_type' => 'post',
					'posts_per_page' => 1,
					'offset' => 0,
					'category_name' => $category_name,

				));
				while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
				<div class="leadnews_3">
					<?php if(has_post_thumbnail()){ 
					the_post_thumbnail();}
					else{?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
					<?php } ?>
					<h4 class="heading_01"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>	
				</div>
				<?php endwhile?>
				<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
			</div>
			<!-- ***************(cetagory-fifteen)**************************-->
			<div class="col-md-3">
					<?php
				$category_name = get_the_category_by_id($themesbazar['cat-fifteen']);
				$category_name_link = get_category_link($themesbazar['cat-fifteen']);
					?>
				<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
				<?php
				$themes_bazar = new WP_Query(array(
					'post_type' => 'post',
					'posts_per_page' => 2,
					'offset' => 0,
					'category_name' => $category_name,

				));
				while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
				<div class="leadnews_1">
					<?php if(has_post_thumbnail()){ 
					the_post_thumbnail();}
					else{?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
					<?php } ?>
					<h4 class="heading_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 								
				</div>
				<?php endwhile?>
				<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
			</div>
		</div>
			<?php endif; ?>   
		<?php if($themesbazar['section-seven'] == 2 ): ?>
			<?php endif; ?>
			<div class="row">
					<div class="col-md-6">
						<div class="add">
						<?php dynamic_sidebar('widget_area_05')?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="add">
						<?php dynamic_sidebar('widget_area_06')?>
						</div>
					</div>
				</div>
		<!---****************section-eight******************--->
		<?php if($themesbazar['section-eight'] ==1 ): ?>
		
		<div class="row">
				<div class="col-md-9">
				<!-- ***************(cetagory-sixteen)**************************-->
				<?php
				$category_name = get_the_category_by_id($themesbazar['cat-sixteen']);
				$category_name_link = get_category_link($themesbazar['cat-sixteen']);
					?>
				<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
				
					<div class="row">
					<?php
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 3,
						'offset' => 0,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>	
						<div class="col-md-4">
							<div class="leadnews_1">
								<?php if(has_post_thumbnail()){ 
								the_post_thumbnail();}
								else{?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
								<?php } ?>
								<h4 class="heading_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
							</div>
						</div>
					<?php endwhile?>
					</div>
					<div class="row">
					<?php
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 3,
						'offset' => 3,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>	
						<div class="col-md-4">
							<div class="leadnews_1">
								<?php if(has_post_thumbnail()){ 
								the_post_thumbnail();}
								else{?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
								<?php } ?>
								<h4 class="heading_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
							</div>
						</div>
					<?php endwhile?>
					</div>
					
					<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
				</div>
				<!-- ***************(cetagory-seventeen)**************************-->
				<div class="col-md-3">
				<?php
				$category_name = get_the_category_by_id($themesbazar['cat-seventeen']);
				$category_name_link = get_category_link($themesbazar['cat-seventeen']);
					?>
				<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
				<?php
					$how_cat= $themesbazar['how_post_seventeen'];
					$total_how_cat=$how_cat-0;
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => $total_how_cat,
						'offset' => 0,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
					<div class="images_title_01">
						<?php if(has_post_thumbnail()){ 
						the_post_thumbnail();}
						else{?>
						<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
						<?php } ?>
						<h4 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
					</div>
					<?php endwhile?>		
					<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
				</div>
			</div>
			<?php endif; ?>   
		<?php if($themesbazar['section-eight'] == 2 ): ?>
			<?php endif; ?>
			<div class="row">
					<div class="col-md-12">
						<div class="add">
						<?php dynamic_sidebar('widget_area_07')?>
						</div>
					</div>
				</div>
		<!---****************section-five******************--->
		<?php if($themesbazar['section-nine'] ==1 ): ?>
		<div class="row">
		<!-- ***************(cetagory-eighteen)**************************-->
		
			<div class="col-md-9">
					<?php
				$category_name = get_the_category_by_id($themesbazar['cat-eighteen']);
				$category_name_link = get_category_link($themesbazar['cat-eighteen']);
					?>
				<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
			
				<div class="row">
					<div class="col-md-7">
					<?php
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 1,
						'offset' => 0,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						<div class="leadnews">
							<?php if(has_post_thumbnail()){ 
							the_post_thumbnail();}
							else{?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
							<?php } ?>
							<h4 class="heading_01"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 
						</div>
					<?php endwhile?>		
					</div>
					<div class="col-md-5">
					<?php
					$how_cat= $themesbazar['how_post_eighteen'];
					$total_how_cat=$how_cat-1;
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => $total_how_cat,
						'offset' => 1,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						<div class="images_title">
							<?php if(has_post_thumbnail()){ 
							the_post_thumbnail();}
							else{?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
							<?php } ?>
							<h4 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
						</div>
					<?php endwhile?>
					
						<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
					</div>
				</div>
			</div>
			<!-- ***************(cetagory-ninteen)**************************-->
			<div class="col-md-3">
					<?php
				$category_name = get_the_category_by_id($themesbazar['cat-ninteen']);
				$category_name_link = get_category_link($themesbazar['cat-ninteen']);
					?>
					<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
					<?php
					$how_cat= $themesbazar['how_post_ninteen'];
					$total_how_cat=$how_cat-0;
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => $total_how_cat,
						'offset' => 0,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
					<div class="images_title_01">
						<?php if(has_post_thumbnail()){ 
							the_post_thumbnail();}
							else{?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
							<?php } ?>
							<h4 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>  
					</div>
					<?php endwhile?>
				<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
			</div>
		</div>	
			<?php endif; ?>   
		<?php if($themesbazar['section-nine'] == 2 ): ?>
			<?php endif; ?>
			<div class="row">
					<div class="col-md-6">
						<div class="add">
						<?php dynamic_sidebar('widget_area_08')?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="add">
						<?php dynamic_sidebar('widget_area_09')?>
						</div>
					</div>
				</div>
		<!---****************section-ten******************--->
		
		<?php if($themesbazar['section-ten'] ==1 ): ?>
		<div class="row">
			<div class="col-md-3">
			
			<!-- ***************(cetagory-twenty)**************************-->
					<?php
				$category_name = get_the_category_by_id($themesbazar['cat-twenty']);
				$category_name_link = get_category_link($themesbazar['cat-twenty']);
					?>
				<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
				<?php
				$themes_bazar = new WP_Query(array(
					'post_type' => 'post',
					'posts_per_page' => 2,
					'offset' => 0,
					'category_name' => $category_name,

				));
				while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
				<div class="leadnews_1">
					<?php if(has_post_thumbnail()){ 
					the_post_thumbnail();}
					else{?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
					<?php } ?>
					<h4 class="heading_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 								
				</div>
				<?php endwhile?>
				<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
			</div>
			
			<!-- ***************(cetagory-twentyone)**************************-->
			
			<div class="col-md-6">
				<?php
			$category_name = get_the_category_by_id($themesbazar['cat-twentyone']);
			$category_name_link = get_category_link($themesbazar['cat-twentyone']);
				?>
			<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
				<?php
				$themes_bazar = new WP_Query(array(
					'post_type' => 'post',
					'posts_per_page' => 1,
					'offset' => 0,
					'category_name' => $category_name,

				));
				while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
				<div class="leadnews_3">
					<?php if(has_post_thumbnail()){ 
					the_post_thumbnail();}
					else{?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
					<?php } ?>
					<h4 class="heading_01"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>	
				</div>
				<?php endwhile?>
				<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
			</div>
			<!-- ***************(cetagory-twentytwo)**************************-->
			<div class="col-md-3">
					<?php
				$category_name = get_the_category_by_id($themesbazar['cat-twentytwo']);
				$category_name_link = get_category_link($themesbazar['cat-twentytwo']);
					?>
				<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
				<?php
				$themes_bazar = new WP_Query(array(
					'post_type' => 'post',
					'posts_per_page' => 2,
					'offset' => 0,
					'category_name' => $category_name,

				));
				while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
				<div class="leadnews_1">
					<?php if(has_post_thumbnail()){ 
					the_post_thumbnail();}
					else{?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
					<?php } ?>
					<h4 class="heading_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4> 								
				</div>
				<?php endwhile?>
				<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
			</div>
		</div>
			<?php endif; ?>   
		<?php if($themesbazar['section-ten'] == 2 ): ?>
			<?php endif; ?>
		
		<!---****************gellary-section******************--->
		<?php if($themesbazar['gellary-section'] ==1 ): ?>
		<div class="row">
			<div class="col-md-6">
			<h4 class="catagory_title"> <span><i class="fa fa-camera" aria-hidden="true"></i>
					<?php echo $themesbazar['photo']?> </span></h4>
					<div class="photo-gellary">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						 <!-- Indicators -->
						  <!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<?php 
							$gallary_active = new WP_Query(array(
								'post_type' => 'news-photo',
								'posts_per_page' => 1,
								'offset'     =>0,
							));
							while($gallary_active->have_posts()) : $gallary_active->the_post(); ?>	
							<div class="item active">
								<?php if(has_post_thumbnail()){ 
								the_post_thumbnail();}
								else{?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
								<?php } ?>
								<h4 class="Photo_Caption"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
							</div>
							<?php endwhile ?>
							<?php 
							$gallary_active = new WP_Query(array(
								'post_type' => 'news-photo',
								'posts_per_page' => 10,
								'offset'     =>1,
							));
							while($gallary_active->have_posts()) : $gallary_active->the_post(); ?>
							<div class="item">
								<?php if(has_post_thumbnail()){ 
								the_post_thumbnail();}
								else{?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
								<?php } ?>
								<h4 class="Photo_Caption"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
								
							</div>
							<?php endwhile ?>
																						
						</div>
						 <!-- Controls -->
						 <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						 </a>
						 <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a>
						</div>
						</div>
					</div>
					
					<!---****************gellary-video******************--->
					
					<div class="col-md-6">
					<h4 class="catagory_title"> <span><i class="fa fa-video-camera" aria-hidden="true"></i>
					<?php echo $themesbazar['video']?> </span></h4>
						<div class="row">
							<?php 
							$blocks = new WP_Query(array(
								'post_type' => 'news-video',
								'posts_per_page' =>2,
								'offset'     =>0,
							));
							while($blocks->have_posts()) : $blocks->the_post(); ?>
							<div class="col-md-6">
								<div class="video" style="margin-bottom:20px;">
									<div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
									<?php the_content(); ?>
									</div>	
											
								</div>							
							</div>
						<?php endwhile; ?>	
						</div></br>
						<div class="row">
							<?php 
							$blocks = new WP_Query(array(
								'post_type' => 'news-video',
								'posts_per_page' =>2,
								'offset'     =>2,
							));
							while($blocks->have_posts()) : $blocks->the_post(); ?>
							<div class="col-md-6">
								<div class="video" style="margin-bottom:5px;">
									<div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
									<?php the_content(); ?>
									</div>	
											
								</div>							
							</div>
						<?php endwhile; ?>	
						</div>
					</div>
				</div>
				
				<?php endif; ?>   
		<?php if($themesbazar['gellary-section'] == 2 ): ?>
				<?php endif; ?>
			
			<!---****************section-eleven******************--->
			<?php if($themesbazar['section-eleven'] ==1 ): ?>
				<div class="row">
					<!-- ***************(cetagory-twentythree)**************************-->
					<div class="col-md-3">
						<?php
					$category_name = get_the_category_by_id($themesbazar['cat-twentythree']);
					$category_name_link = get_category_link($themesbazar['cat-twentythree']);
						?>
					<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
					<?php
					$how_cat= $themesbazar['how_post_twentythree'];
					$total_how_cat=$how_cat-0;
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => $total_how_cat,
						'offset' => 0,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						<div class="images_title_01">
							<?php if(has_post_thumbnail()){ 
							the_post_thumbnail();}
							else{?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
							<?php } ?>
							<h4 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
						</div>
						<?php endwhile; ?>				
						<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>						
					</div>
					
					<!-- ***************(cetagory-twentyfour)**************************-->
					
					<div class="col-md-6">
					<?php
					$category_name = get_the_category_by_id($themesbazar['cat-twentyfour']);
					$category_name_link = get_category_link($themesbazar['cat-twentyfour']);
						?>
					<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
						<div class="row">
						<?php
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 2,
						'offset' => 0,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>	
							<div class="col-md-6">
								<div class="leadnews_1">
									<?php if(has_post_thumbnail()){ 
									the_post_thumbnail();}
									else{?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
									<?php } ?>
									<h4 class="heading_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
								</div>
							</div>
						<?php endwhile; ?>		
						</div>
						<div class="row">
						<?php
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 2,
						'offset' => 2,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>	
							<div class="col-md-6">
								<div class="leadnews_1">
									<?php if(has_post_thumbnail()){ 
									the_post_thumbnail();}
									else{?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
									<?php } ?>
									<h4 class="heading_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
								</div>
							</div>
						<?php endwhile; ?>		
						</div>
						<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
					</div>
					<!-- ***************(cetagory-twentyfive)**************************-->
					<div class="col-md-3">
						<?php
					$category_name = get_the_category_by_id($themesbazar['cat-twentyfive']);
					$category_name_link = get_category_link($themesbazar['cat-twentyfive']);
						?>
					<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
					<?php
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 1,
						'offset' => 0,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>	
						<div class="leadnews">
							<?php if(has_post_thumbnail()){ 
							the_post_thumbnail();}
							else{?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
							<?php } ?>
							<h4 class="heading_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>								
						</div>
						<?php endwhile; ?>	
						<?php
					$how_cat= $themesbazar['how_post_twentyfive'];
					$total_how_cat=$how_cat-1;
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => $total_how_cat,
						'offset' => 1,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						<div class="images_title_01">
							<?php if(has_post_thumbnail()){ 
							the_post_thumbnail();}
							else{?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
							<?php } ?>
							<h4 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
						</div>
						<?php endwhile; ?>	
						<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
					</div>
				</div>
				<?php endif; ?>   
		<?php if($themesbazar['section-eleven'] == 2 ): ?>
				<?php endif; ?>	
				
			<!---****************section-tweleve******************--->
			<?php if($themesbazar['section-twelve'] ==1 ): ?>
				<div class="row">
				<!-- ***************(cetagory-twentysix)**************************-->
					<div class="col-md-3">
					<?php
					$category_name = get_the_category_by_id($themesbazar['cat-twentysix']);
					$category_name_link = get_category_link($themesbazar['cat-twentysix']);
						?>
					<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
					<?php
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 1,
						'offset' => 0,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>	
						<div class="leadnews">
							<?php if(has_post_thumbnail()){ 
							the_post_thumbnail();}
							else{?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
							<?php } ?>
							<h4 class="heading_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
						</div>
						<?php endwhile; ?>
						<?php
					$how_cat= $themesbazar['how_post_twentysix'];
					$total_how_cat=$how_cat-1;
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => $total_how_cat,
						'offset' => 1,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						<h4 class="heading_03 border-bottom"><a href="<?php the_permalink()?>"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> <?php the_title() ?></a></h4>
					<?php endwhile; ?>
						
						<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
					</div>
					<!-- ***************(cetagory-twentyseven)**************************-->
					<div class="col-md-3">
					<?php
					$category_name = get_the_category_by_id($themesbazar['cat-twentyseven']);
					$category_name_link = get_category_link($themesbazar['cat-twentyseven']);
						?>
					<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
					<?php
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 1,
						'offset' => 0,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>	
						<div class="leadnews">
							<?php if(has_post_thumbnail()){ 
							the_post_thumbnail();}
							else{?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
							<?php } ?>
							<h4 class="heading_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
						</div>
						<?php endwhile; ?>
						<?php
					$how_cat= $themesbazar['how_post_twentyseven'];
					$total_how_cat=$how_cat-1;
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => $total_how_cat,
						'offset' => 1,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						<h4 class="heading_03 border-bottom"><a href="<?php the_permalink()?>"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> <?php the_title() ?></a></h4>
					<?php endwhile; ?>
						
						<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
					</div>
					<!-- ***************(cetagory-twentyeight)**************************-->
					<div class="col-md-3">
					<?php
					$category_name = get_the_category_by_id($themesbazar['cat-twentyeight']);
					$category_name_link = get_category_link($themesbazar['cat-twentyeight']);
						?>
					<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
					<?php
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 1,
						'offset' => 0,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>	
						<div class="leadnews">
							<?php if(has_post_thumbnail()){ 
							the_post_thumbnail();}
							else{?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
							<?php } ?>
							<h4 class="heading_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
						</div>
						<?php endwhile; ?>
						<?php
					$how_cat= $themesbazar['how_post_twentyeight'];
					$total_how_cat=$how_cat-1;
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => $total_how_cat,
						'offset' => 1,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						<h4 class="heading_03 border-bottom"><a href="<?php the_permalink()?>"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> <?php the_title() ?></a></h4>
					<?php endwhile; ?>
						
						<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
					</div>
					<!-- ***************(cetagory-twentynine)**************************-->
					<div class="col-md-3">
					<?php
					$category_name = get_the_category_by_id($themesbazar['cat-twentynine']);
					$category_name_link = get_category_link($themesbazar['cat-twentynine']);
						?>
					<h3 class="catagory_title"><a href="<?php echo esc_url($category_name_link);?>"><i class="fa fa-newspaper-o"></i> <?php echo $category_name;?></a></h3>
					<?php
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 1,
						'offset' => 0,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>	
						<div class="leadnews">
							<?php if(has_post_thumbnail()){ 
							the_post_thumbnail();}
							else{?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
							<?php } ?>
							<h4 class="heading_02"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
						</div>
						<?php endwhile; ?>
						<?php
					$how_cat= $themesbazar['how_post_twentynine'];
					$total_how_cat=$how_cat-1;
					$themes_bazar = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => $total_how_cat,
						'offset' => 1,
						'category_name' => $category_name,

					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						<h4 class="heading_03 border-bottom"><a href="<?php the_permalink()?>"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> <?php the_title() ?></a></h4>
					<?php endwhile; ?>
						
						<h4 class="hadding_4"><a href="<?php echo esc_url($category_name_link);?>"> <?php echo $themesbazar['more_news']?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a></h4>
					</div>
				</div>
				<?php endif; ?>   
		<?php if($themesbazar['section-twelve'] == 2 ): ?>
				<?php endif; ?>	
				<div class="row">
					<div class="col-md-12">
						<div class="add">
						<?php dynamic_sidebar('widget_area_10')?>
						</div>
					</div>
				</div>
		<!---footer option******************--->
		<?php get_footer();
			get_template_part('include/root');
			wp_footer();
			?>
			</div>		
		</section>
		
		<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
</button> 
			 
			 <script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>


	</body>
</html>