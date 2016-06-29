<?php 
/* Template Name: blog

*/ 
get_header();
?>
<?php
	$banner=get_post_meta(12,"blog_banner_image",true);
	$thumb = wp_get_attachment_image_src($banner, 'blog_banner' );	
?>
    <div class="banner inner_banner" style="background: url(<?php echo $url = $thumb['0'];?>);">
        <div class="caption">
            <h2 class="in_ttl"><?php the_field("blog_banner_title",12);?></h2>
            <p><?php the_field("blog_banner_content",12);?></p>
        </div>

    </div>
    <section class="blog_sec">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="blog_innr">
                        <div class="blog_lft">
										<?php
										$i==1;
											$args = array('post_type'      => 'post',
											  'posts_per_page' => 3,
											  'order'          => 'DESC',
											  'offset'         =>  0 );
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
								?>
                            <div class="blog_bx wow fadeInUp  animated" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="blog_date">
                                    <div class="blog_date_innr">
                                        <span><?php the_time('d');?><br><?php the_time('M');?></span>
                                    </div>
                                </div>
                                <div class="blog_cntnt">
                                    <div class="blog_img">
									<?php
										if (has_post_thumbnail()) {
											the_post_thumbnail('blog_image');
										}
										else
										{
									?>
                                        <iframe width="560" height="315" src="<?php the_field('blog_video',$loop->ID);?>" frameborder="0" allowfullscreen></iframe>
									<?php
										}
									?>
                                    </div>
                                    <div class="blog_descp">
                                        <h2><?php the_title(); ?></h2>
                                        <ul>
                                            <li><a href="#" title=""><i class="fa fa-user" aria-hidden="true"></i>By <?php the_author();?></a></li>
                                            <li><a href="#" title=""><i class="fa fa-calendar" aria-hidden="true"></i><?php the_time('j F Y'); ?></a></li>
                                            <!--<li><a href="#" title=""><i class="fa fa-comments" aria-hidden="true"></i><?php //comments_number();?></a></li>-->
                                        </ul>
                                        <p><?php
										echo wp_trim_words( get_the_content(), 50, '...' );?></p>
                                        <a href="<?php the_permalink();?>" title="" class="read_more">Read More <img src="<?php echo get_template_directory_uri(); ?>/images/arrow_read_icon.png"></a>
                                    </div>
                                </div>
								
                            </div>
                            <?php
							$i++;
							endwhile;
							wp_reset_query();
							?>
							  <?php
							if($i==3){
								?>
                            <!--blog_bx end-->
							<div class="load-more">
                            <div href="#" title="" class="load_more wow fadeInUp  animated" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
							</div>
                           <input type="hidden" name="page_val" id="page_val" value="1">
                           <input class="load_more_btn" type="Submit" value="Load More" onclick="pagination();">
						   
							</div>
							<div id="loading_sec" style="display:none" align="center">
								<img src="<?php echo  get_template_directory_uri(); ?>/images/ajax-loader.gif" id="loader">
							</div>
                              <?php 
								}
										
							   ?> 
                        </div>
                        <!--blog_lft end-->
                        <div class="blog_rght">
                            <div class="blog_search_bx wow fadeInUp  animated" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <form role="search" method="get" id="searchform" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">

                                        <input type="text" class="form-control" placeholder="Search" name="s" id="s" value="<?php echo get_search_query(); ?>"><i class="fa fa-search" aria-hidden="true"></i>
                                        

                                    </form>

                            </div>
                            <div class="recent_post wow fadeInUp  animated" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <h2>Recent Posts</h2>
                                <ul>
									<?php
										$args = array('post_type' => 'post',
													  'posts_per_page' => 4,
													  'order'        => 'DESC'
											);
										$loop = new WP_Query( $args );
										while ( $loop->have_posts() ) : $loop->the_post();
									?>
                                    <li>
                                        <div class="post_sec">
                                            <div class="post_thumb">
											<?php
											if(has_post_thumbnail())
											{
											?>
												
											
                                                <a href="<?php the_permalink();?>" title=""><?php the_post_thumbnail(array(75,76));?></a>
											<?php }
											else{?>
											<a href="<?php the_permalink();?>" title=""><img src="http://i.imgur.com/C2fMPsJ.jpg" width="150" height="150"></a>
											<?php } ?>
                                            </div>
                                            <div class="post_cntnt">
                                                <h4><?php the_time('j F Y'); ?></h4>
                                                <p><a href="<?php the_permalink();?>" title=""><?php the_title();?></a></p>
                                            </div>
                                        </div>
                                    </li>
									<?php
									endwhile;
									?>
                                </ul>
                            </div>
                            <!--recent_post end-->
                            <div class="browse_tag wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <h2>Categories</h2>
                                <ul>
								<?php 
								$categories=get_categories();
								foreach($categories as $category)
								{
								?>
                                    <li><a href="<?php echo get_category_link($category->cat_ID ); ?>" title=""><?php echo $category->name;?></a></li>
                                 <?php
								}
								?>   

                                </ul>
                            </div>
                        </div>
                        <!--blog_rght end-->
                    </div>
                </div>
            </div>
        </div>
    </section>
	<script>
        jQuery(document).ready(function () {
            jQuery('#page_val').val();
        });


        function pagination() {
			//jQuery('#loading_sec').show();
            var page_val = jQuery('#page_val').val();
            var page_val1 = parseInt(page_val) + 1;
            // alert(page_val);
            // alert(page_val1);
            jQuery.ajax({
                type: "GET",
                url: "<?php bloginfo('template_url'); ?>/ajax/page.php",
                data: {
                    page_val1: page_val1,
                    format: 'raw'
                },
				 beforeSend: function() {
              jQuery("#loading_sec").show();
           },
                success: function (resp) {
                    // alert(resp);
                    if (resp != "") {

                        // jQuery('#result').empty().append(resp)
                        // alert(resp);
						jQuery("#loading_sec").hide();
                        jQuery(resp).insertAfter(jQuery('.blog_bx>div:last')).fadeIn('slow');
                        jQuery('#page_val').val(page_val1);

                    } else if (resp == "") {
						jQuery("#loading_sec").hide();
                        jQuery(".load-more").hide();
                    }
                }
            });

        }
    </script>
<?php
get_footer();
?>