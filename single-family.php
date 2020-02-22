<?php get_header();
 global $themesbazar; ?>
			




		
		<!-- Single Page element Start-->
		<div class="single_page">
		    <?php dynamic_sidebar('single_top')?>
		    <div class="row">
		        <div class="col-md-8">
		            
		            <?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
		            

					
					<h3 class="heading-01"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>

	
					<div class="single_images">	
					 <!-- Post Image Code Start--> 
								<?php if(has_post_thumbnail()){ 
										the_post_thumbnail();}
									else{?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.gif" width="100%" />
								<?php } ?>
								<!-- Post Image Code Close-->
                           <?php 
                           $caption = get_post(get_post_thumbnail_id())->post_excerpt;
                            if ($caption): ?>
                             <div class="caption"><?php echo $caption ?> </div>
                           <?php endif; ?> 
                       </div>
                       
					   <?php dynamic_sidebar('single_middle')?>
					   
					   
					   <div class="single-ditails"> <p><?php the_content();?></p></div>

<!-- Social Media Start-->	
<?php if($themesbazar['social_share'] ==1 ): ?>
<h5 style="font-size:18px; padding-left:10px"><?php echo $themesbazar['social_title'] ?></h5>

<a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" class="simple-share ss-facebook" title="Share on Facebook" rel="nofollow"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>

<a target="_blank" href="https://twitter.com/share?text=<?php echo urlencode( get_the_title() ); ?>" class="simple-share ss-twitter" title="Tweet" rel="nofollow"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>

  <a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode(get_permalink()); ?>" class="simple-share ss-gplus" title="Share on G+" rel="nofollow"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
  
  <a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Share on LinkedIn" class="simple-share ss-facebook"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
  
  <a href="http://www.reddit.com/submit?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" title="Vote on Reddit" class="simple-share ss-facebook"><i class="fa fa-reddit-square" aria-hidden="true"></i></a>
  
  
  <a href="http://digg.com/submit?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" title="Digg this!" class="simple-share ss-facebook"><i class="fa fa-digg" aria-hidden="true"></i></a>

<a href="http://www.pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink()); ?>&media=<?php if(has_post_thumbnail()) echo wp_get_attachment_url(get_post_thumbnail_id()); ?>&description=<?php echo urlencode( get_the_title() . ' - ' . get_permalink() ); ?>" class="simple-share ss-pinterest" target="_blank" rel="nofollow"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>


<?php endif; ?> 
			 <?php if($themesbazar['social_share'] == 2 ): ?>
				   <?php endif; ?>					
	<!-- ==========================-->						   
				
				<?php endwhile;?>
                <?php endif;?>
                
					<div class="clear"></div>   
					    <?php dynamic_sidebar('single_buttom')?>  
					   	<div class="clear"></div> 
					   	</br>


		
       
		        </div> 
		        <div class="col-md-4">

	<?php dynamic_sidebar('single_sidebar_top')?>
	
	
     
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
				   	<!-- ==========================-->
				   
				   	
				   	<?php dynamic_sidebar('single_sidebar_bottom')?>
				   	
	
		            
		        </div>
		    </div>
		</div>
		<!-- Single Page element Close-->
		
		
		
	
	<?php get_footer();
			get_template_part('include/root');
			wp_footer();
			?>
		