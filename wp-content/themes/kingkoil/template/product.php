<?php 
/* Template Name:  product

*/ 
get_header();

?>
<?php
	$banner=get_post_meta(6,"product_banner_image",true);
	$thumb = wp_get_attachment_image_src($banner, 'product_banner' );	
?>
							
	 <div class="banner inner_banner" style="background: url(<?php echo $url = $thumb['0'];?>);">
		<div class="container here">
            <div class="our_prdcts">
                <h2><?php the_field("our_product_title",6)?></h2>
                <p><?php the_field("our_product_content",6)?></p>
            </div>
        </div>
    </div>
    <section class="product_collection">
        <div class="container">
		 
			 <div id="gold" class="gold_collection">
                <h2><?php the_field("gold_category",6)?></h2>
                <div class="row">
				   <?php
						 $posts=get_posts(array(
						'showposts' => -1,
						'post_type' => 'products',
						'tax_query' => array(
							array(
							'taxonomy' => 'products_category',
							'field' => 'name',
							'terms' => array('Gold Products collection'))
						),
						'orderby' => 'title',
						'order' => 'ASC')
						);
						foreach($posts as $post)
						{
						?>
                    <div class="col-md-4">
                        <div class="box_collection">
                              <?php echo get_the_post_thumbnail($post->ID, 'full');?>
                            <h3><?php echo $post->post_title;?></h3>
                            <p><?php echo $post->post_content;?></p>
                            <hr>
                            <a class="view_detail_btn" href="<?php the_permalink();?>">View Detail</a>
                        </div>
                    </div>
					<?php 
						}
					?>
                </div>
            </div>
			
            <div id="silver" class="silver_collection">
                <h2><?php the_field("silver_category",6)?></h2>
                <div class="row">
<?php
	 $posts=get_posts(array(
    'showposts' => -1,
    'post_type' => 'products',
    'tax_query' => array(
        array(
        'taxonomy' => 'products_category',
        'field' => 'name',
        'terms' => array('Silver Products collection'))
    ),
    'orderby' => 'title',
    'order' => 'ASC')
);
foreach($posts as $post)
{
?>
                    <div class="col-md-4">
                        <div class="box_collection">
                            <?php echo get_the_post_thumbnail($post->ID, 'full');?>
                            <h3><?php echo $post->post_title;?></h3>
                            <p><?php echo $post->post_content;?></p>
                            <hr>
                            <a class="view_detail_btn" href="<?php the_permalink();?>">View Detail</a>
                        </div>
                    </div>
                   <?php
						}
					?>

                </div>
            </div>
           <h2 id="bronze"><?php the_field("bronze_category",6)?></h2>
          <div class="bronze_collection">
              <div class="row">
<?php
	 $posts=get_posts(array(
    'showposts' => -1,
    'post_type' => 'products',
    'tax_query' => array(
        array(
        'taxonomy' => 'products_category',
        'field' => 'name',
        'terms' => array('Bronze Products collection'))
    ),
    'orderby' => 'title',
    'order' => 'ASC')
);
foreach($posts as $post)
{
?>
                    <div class="col-md-4">
                        <div class="box_collection">
                            <?php echo get_the_post_thumbnail($post->ID, 'full');?>
                            <h3><?php echo $post->post_title;?></h3>
                           <p><?php echo $post->post_content;?></p>
                            <hr>
                            <a href="<?php the_permalink(); ?>">View Detail</a>
                        </div>
                    </div>
					<?php
					}
					?>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
?>