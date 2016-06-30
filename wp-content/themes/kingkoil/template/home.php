<?php 
/* Template Name:  home

*/ 
get_header();

?>
<div id="home-banner" class="carousel slide " data-ride="carousel"><div class="caption">
        <h2><?php the_field('banner_heading',4);?></h2>
		<p><?php the_field('banner_heading_subtitle',4);?></p>
	<div class="here">
		<a class="here_btn hvr-grow-shadow" href="<?php the_field('banner_button_link',4);?>">
		<?php the_field('banner_button_text',4);?></a>        
	</div>        
	</div>              
	<!-- Wrapper for slides -->        
	<div class="carousel-inner" role="listbox">		
		<?php		
			$args = array('post_type' => 'banner_slider');				
			$loop = new WP_Query( $args );				
			$i=0;				
			while ( $loop->have_posts() ) : $loop->the_post();					
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($loop->ID), 'banner_slide' );					$url =$thumb['0'];					
			if($i==0)					
			{		
		?>            
			<div class="item active" style="background-image:url(<?php echo $url; ?>); background-size:cover;"></div>		<?php	
				}				
				else
				{	
			?>			           
			<div class="item" style="background-image:url(<?php echo $url;?>); background-size:cover;"></div>            <?php	
			}				
			$i++;	
			endwhile;			
			?>       
			</div>  
			<!-- Indicators -->   
			<ol class="carousel-indicators">	
			<?php	
				$args = array('post_type' => 'banner_slider');
				$loop = new WP_Query( $args );	
				$i=0;	
				while ( $loop->have_posts() ) : $loop->the_post();
				if($i==0)	
					{		
			?> 
				<li data-target="#home-banner" data-slide-to="<?php echo $i;?>" class="active"></li>
				<?php	
				}				
					else
				{	
				?>            
			<li data-target="#home-banner" data-slide-to="<?php echo $i;?>"></li>
            <?php	
			}	
			$i++;	
			endwhile;	
			?>  
			</ol>  
	</div>
    <section class="welcome">
        <div class="container">
            <h2><?php the_field('welcome_title',4);?></h2>
            <p><?php the_field('welcome_content',4);?></p>
        </div>
    </section>
    <section class="welcome_video">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="wlcm_txt">
                        <hr>
                        <h2><?php the_field('welcome_video_title',4);?></h2>
                        <p><?php the_field('welcome_video_content',4);?></p>
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="video">
                       <a class="html5lightbox" data-height="400" data-width="800" href="<?php the_field('welcome_video',4);?>"><img src="<?php echo get_template_directory_uri(); ?>/images/video_screenshot.jpg"/></a>
					</div>
                </div>
                <div class="col-md-3">
                    <div class="about_txt">
                        <hr>
                        <h2><?php the_field('about_king_koil_title',4);?></h2>
                        <?php the_field('about_kingkoil_content',4);?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our_product">
        <div class="left-section">
            <?php
				$product=get_post_meta(4,"our_product_image",true);
				$thumb = wp_get_attachment_image_src($product, 'product_image' );	
			?>
							<img src="<?php echo $url = $thumb['0'];?>">
            <div class="product_info">
                <h2><?php the_field('our_products_title',4);?></h2>
                <p><?php the_field('our_products_content',4);?></p>
                <a class="point_out hvr-buzz-out" href="<?php echo site_url();?>/product"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_icon.png"></a>
            </div>
        </div>
        <div class="right-section">
            <div class="left_part">
			      <a class="bottom" href="<?php echo site_url();?>/product/#gold">
					<?php
						$product=get_post_meta(4,"gold_category_image",true);
						$thumb = wp_get_attachment_image_src($product, 'gold_image' );	
					?>
					<img src="<?php echo $url = $thumb['0'];?>">
                    <div class="heading3">
                        <h2><?php the_field('gold_category_heading',4);?></h2>
                        <p><?php the_field('gold_category_text',4);?></p>
                    </div>
                </a>
                <a class="top" href="<?php echo site_url();?>/product/#bronze">
                <?php
					$product=get_post_meta(4,"bronze_category_image",true);
					$thumb = wp_get_attachment_image_src($product, 'bronze_image' );	
				?>
					<img src="<?php echo $url = $thumb['0'];?>">
                    <div class="heading">
                        <h2><?php the_field('bronze_category_heading',4);?></h2>
                        <p><?php the_field('bronze_category_text',4);?></p>
                    </div>
                </a>
               
            </div>
            <div class="right_part">
                <a class="top" href="<?php echo site_url();?>/product/#silver">
                <?php
					$product=get_post_meta(4,"silver_category_image",true);
					$thumb = wp_get_attachment_image_src($product, 'silver_image' );	
				?>
					<img src="<?php echo $url = $thumb['0'];?>">
                    <div class="heading2">
                        <h2><?php the_field('silver_category_heading',4);?></h2>
                        <p><?php the_field('silver_category_text',4);?></p>
                    </div>
                </a>
                <a class="bottom" href="<?php echo site_url();?>/product">
                <?php
					$product=get_post_meta(4,"all_category_image",true);
					$thumb = wp_get_attachment_image_src($product, 'all_image' );	
				?>
					<img src="<?php echo $url = $thumb['0'];?>">
                    <div class="heading4">
                        <h2><?php the_field('all_category_heading',4);?></h2>
                        <p><?php the_field('all_category_text',4);?></p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="our_Services">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pull-right">
                    <div class="service">
                        <h2><?php the_field('our_services_heading',4);?></h2>
                        <p class="tg"><?php the_field('our_services_content',4);?></p>
                        <a class="service_block" href="javascript:void(0)">
                            <div class="icon"></div>
                            <div class="info">
                                <h3><?php the_field('product_design_title',4);?></h3>
                                <p><?php the_field('product_design_content',4);?></p>

                            </div>
                        </a>
                    </div>

                    <a class="service_block" href="javascript:void(0)">
                        <div class="icon2"></div>
                        <div class="info">
                            <h3><?php the_field('delivery_&_installation_title',4);?></h3>
                            <p><?php the_field('delivery_&_installation_content',4);?></p>

                        </div>
                    </a>


                    <a class="service_block" href="javascript:void(0)">
                        <div class="icon3"></div>
                        <div class="info">
                            <h3><?php the_field('after_sales_title',4);?></h3>
                            <p><?php the_field('after_sales_content',4);?></p>

                        </div>
                    </a>

                </div>
            </div>
    </section>
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2><?php the_field('testimonial_heading',4);?></h2>
                     <?php the_field('testimonial_content',4);?>
                    <div class="testim">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="testim_video">
                                    <iframe width="420" height="315" src="<?php the_field('home_testimonial_video',4)?>" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="testimonial">
								<?php
								$args = array('post_type'      => 'Testimonial_slider',
								'posts_per_page' => 5,
								'order' => 'desc'
								);
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
								?>
                                    <div class="item">
                                        <div class="testim-box">
                                            <?php the_content();?>
                                            <?php the_title();?>
										</div>
                                        <h4><?php the_field('testinonial_slider_desg',$loop->ID);?></h4>
                                    </div>
									<?php
									endwhile;
									?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trip">        <div class="container">            <div id="trip_Ad">							<?php								$args = array('post_type'      => 'tripadvisor_slider',								'posts_per_page' => 10,								'order' => 'desc'								);								$loop = new WP_Query( $args );								while ( $loop->have_posts() ) : $loop->the_post();							?>                <div class="item">                    <h2><?php the_title();?></h2>                    <?php the_content();?>                </div>                <?php				endwhile;				?>            </div>            <div class="trip_logo">                <img src="<?php echo get_template_directory_uri(); ?>/images/trip_advisor_logo.png">            </div>        </div>    </section>
    <section class="browse_blogs">
        <div class="container">
            <h2><?php the_field('browse_blog_heading',4);?></h2>
            <div class="row">
						<?php
							  $args = array('post_type'=> 'post',
							  'posts_per_page' => 3,
							  'order'          => 'DESC');
							  $loop = new WP_Query( $args );
							  while ( $loop->have_posts() ) : $loop->the_post();
						?>
                <div class="col-md-4">
                    <div class="blog_box">
					<?php
											if(has_post_thumbnail())
											{
											?>
                        <a href="<?php the_permalink();?>"><?php the_post_thumbnail(array(305,186));?></a>
						<?php }
						else{?>
						<a href="<?php the_permalink();?>" title=""><img src="<?php the_field('default_blog_img',12);?>" width="660" height="306"></a>
						<?php } ?>
                        <a href="<?php the_permalink();?>"><?php the_title();?></a>
                        <p><?php the_content();?></p>
                    </div>
                </div>
				<?php
				endwhile;
				?>
            </div>
            <a class="see_more_btn hvr-float-shadow" href="<?php echo site_url();?>/blog">See More</a>
        </div>
    </section>

<?php
get_footer();
?>
