<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
global $post;
get_header(); ?>
<div class="banner inner_banner" style="background: url(<?php echo  get_template_directory_uri(); ?>/images/blog_description_banner.jpg);">
        <div class="caption">
            <h2 class="in_ttl">BLOG OVERVIEW</h2>
            <p>“ Personal touch, hotel like tone of voice – welcoming, friendly, comfortable and promising a great experience We know you, we understand guests – we are here to take the pain away ”</p>
        </div>

    </div>
<section class="blog_sec">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="blog_innr">
						<div class="blog_lft blog_lft_desc">
						<?php while (have_posts()) : the_post();?>
                            <div class="blog_bx blog_bx_desc wow fadeInUp  animated" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="blog_cntnt blog_cntnt_desc">
                                    <div class="blog_img">
									<?php
										if (has_post_thumbnail()) {
											the_post_thumbnail();
										}
										else
										{
									?>
                                       <iframe width="691" height="330" src="<?php the_field('blog_video',$post->ID);?>" frameborder="0" allowfullscreen></iframe>
									<?php
										}
									?>
                                    </div>
                                    <div class="blog_descp">
                                        <h2><?php the_title();?></h2>
                                        <ul>
                                            <li><a href="#" title=""><i class="fa fa-user" aria-hidden="true"></i>By <?php the_author();?></a></li>
                                            <li><a href="#" title=""><i class="fa fa-calendar" aria-hidden="true"></i><?php the_time('j F Y'); ?></a></li>
                                            <!--<li><a href="#" title=""><i class="fa fa-comments" aria-hidden="true"></i>2 Comments</a></li>-->
                                        </ul>
                                        <?php the_content();?>
                                       <!-- <ul class="btm_social">
                                            <li><a href="#" title="">Like <i class="fa fa-thumbs-up" aria-hidden="true"></i></a></li>
                                            <li><a href="#" title=""> Comments <i class="fa fa-comments" aria-hidden="true"></i></a></li>
                                            <li><a href="#" title="">Share <i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                        </ul>-->
                                    </div>
                                </div>
                            </div>

						<?php
			// If comments are open or we have at least one comment, load up the comment template.
			//if ( comments_open() || get_comments_number() ) {
				//comments_template();
			//}

			

			// End of the loop.
		endwhile;
		?>

                            <!--blog_bx end-->

                        </div>
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
											  $args = array('post_type'      => 'post',
											  'posts_per_page' => 4,
											  'order'          => 'DESC'
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
												<?php 											
												}											
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
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();?>