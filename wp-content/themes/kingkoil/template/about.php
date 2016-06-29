<?php 
/* Template Name: about us

*/ 
get_header();
?>

<?php
	$banner=get_post_meta(14,"about_banner_img",true);
	$thumb = wp_get_attachment_image_src($banner, 'about_banner' );	
?>
<div class="banner" style="background: url(<?php echo $url = $thumb['0'];?>);">
        <div class="caption">
            <h2 class="in_ttl"><?php the_field('about_us_page_title',14);?></h2>
        </div>

    </div>
    <section class="service_hospitality">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2><?php the_field('servicing_hospitality_title',14);?></h2>
						<?php the_field('servicing_hospitality_content',14);?>
                </div>
                <div class="col-md-6">
            <?php
				$services=get_post_meta(14,"hospitality_img",true);
				$thumb = wp_get_attachment_image_src($services, 'hospitality_image' );	
			?>
							<img src="<?php echo $url = $thumb['0'];?>">
                </div>
            </div>
        </div>
    </section>
    <section class="what_we_do">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pull-right">
                    <h2><?php the_field('what_we_do_title',14);?></h2>
                    <?php the_field('what_we_do_content',14);?>
                </div>
            </div>
        </div>
    </section>
    <section class="our-testimonial">
        <div class="container">
            <h2><?php the_field('our_testimonial',14);?></h2>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div id="our_testim">
							<?php
								$args = array('post_type'      => 'Testimonial_slider',
								'posts_per_page' => 5,
								'order' => 'desc'
								);
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
							?>
                        <div class="item">
                            <div class="testim-box1">
                                <p><?php the_content();?></p>
                            </div>
                            <h4><?php the_title();?></h4>
                            <h5><?php the_field('testinonial_slider_desg',$loop->ID);?></h5>
                        </div>
							<?php 
								endwhile;
							?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
?>