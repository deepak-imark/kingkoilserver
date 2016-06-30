<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
    <?php
	$banner=get_post_meta(12,"blog_banner_image",true);
	$thumb = wp_get_attachment_image_src($banner, 'blog_banner' );	
?>
        <div class="banner inner_banner" style="background: url(<?php echo $url = $thumb['0'];?>);">
            <div class="caption">
                <h2 class="in_ttl"><?php the_field("blog_banner_title",12);?></h2>
                <p>
                    <?php the_field("blog_banner_content",12);?>
                </p>
            </div>

        </div>


        <?php if ( have_posts() ) : ?>

            <div class="container">
                <h1 class="page-title srch_ttl1"><?php printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
            </div>
            <!-- .page-header -->
            <section class="blog_sec srch_blog">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="blog_innr">
                                <?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				 ?>

                                    <div class="blog_cntnt">
                                        <div class="blog_img">
                                            <?php
										if (has_post_thumbnail()) {
									?>
                                                <a href="<?php the_permalink();?>" title="">
                                                    <?php the_post_thumbnail();?>
                                                </a>
                                                <?php
										}
										else
										{
									?>
                                                    <iframe width="691" height="330" src="<?php the_field('blog_video',$loop->ID);?>" frameborder="0" allowfullscreen></iframe>
                                                    <?php
										}
									?>
                                        </div>
                                        <div class="blog_descp">
                                            <h2><?php the_title(); ?></h2>
                                            <ul>
                                                <li><a href="javascript:void(0)" title=""><i class="fa fa-user" aria-hidden="true"></i>By <?php the_author();?></a></li>
                                                <li><a href="javascript:void(0)" title=""><i class="fa fa-calendar" aria-hidden="true"></i><?php the_time('j F Y'); ?></a></li>
                                                <!--<li><a href="javascript:void(0)" title=""><i class="fa fa-comments" aria-hidden="true"></i>2 Comments</a></li>-->
                                            </ul>
                                            <p>
                                                <?php
										echo wp_trim_words( get_the_content(), 50, '...' );?>
                                            </p>
                                            <a href="<?php the_permalink();?>" title="" class="read_more">Read More <img src="<?php echo get_template_directory_uri(); ?>/images/arrow_read_icon.png"></a>
                                        </div>
                                    </div>
                                    <?php
			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );
			?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>



                <?php //get_sidebar(); ?>
                    <?php get_footer(); ?>