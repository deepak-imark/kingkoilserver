<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); 
		function get_numerics ($str)
		{
		preg_match_all('/\d+/', $str, $matches);
		return $matches[0];
		}
global $post;
$post_id = get_the_ID();
?>
    <section class="product_view">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   <div class="product_diffr_view">
				   <div id="slider" class="flexslider"> 
				   <ul class="slides">  
				<?php  $one1 = get_post_meta(get_the_ID(),'brown_color_products',true); ?>
				<?php
					$arr1=get_numerics($one1);
					foreach($arr1 as $val1)
					{
					$val1;
					 $small_image_url1 = wp_get_attachment_image_src($val1, 'full');
					?>				   
				   <li>
				  <a href="<?php echo $small_image_url1[0]; ?>" class="html5lightbox"> <img src="<?php echo $small_image_url1[0]; ?>" /></a>
				   </li>  
					 <?php } ?><!-- items mirrored twice, total of 12 --> 
				   </ul> 
				   </div> 
 <div id="carousel" class="flexslider">                            <ul class="slides">     
<?php
					$arr1=get_numerics($one1);
					foreach($arr1 as $val1)
					{
					$val1;
					 $small_image_url1 = wp_get_attachment_image_src($val1, 'full');
					?>				   
				   <li>
				   <img src="<?php echo $small_image_url1[0]; ?>" />
				   </li>  
					 <?php } ?><!-- items mirrored twice, total of 12 --> 
 <!-- items mirrored twice, total of 12 -->                            </ul>                        </div>  				   
				   </div>	
				   </div>
                <div class="col-md-6">
                    <div class="color_option_div">
					<?php while (have_posts()) : the_post();?>
                        <h2><?php the_title();?></h2>
						<?php
							endwhile;
						?>
                        <?php the_field('description',$post->ID)?>
                        <div>
							<input type="button" value="select Colour">
						</div>
						<div class="Button_sec">
							<button id="brown" class="active btn" >Brown</button>
							<button id="beize" class="btn">Beige</button>
							<button id="grey" class="btn">Grey</button>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product_specification">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2><?php the_field('product_benefit',$post->ID)?></h2>
                    <p><?php the_field('product_benefit_content',$post->ID)?></p>
                    <div class="table-responsive">
                        <?php the_field('description',$post->ID)?>
                    </div>
                </div>
                <div class="col-md-7">
                <?php
					$product=get_post_meta($post->ID,"product_description_image",true);
					$thumb = wp_get_attachment_image_src($product, 'product_desc' );	
				?>
					<img src="<?php echo $url = $thumb['0'];?>">
                </div>
            </div>
        </div>
    </section>
    <section class="tab_section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="tab_box">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Additional Information</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Delivery and Returns</a></li>
                            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Reviews</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <h2>King Koil Club</h2>
                                <?php the_field('bottom_description',$post->ID);?>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <h2>Additional Information</h2>
                                <p>Classic Mahogany French sleigh bed with high foot board and double scrolled arms having slatted base, this is one of our newest ranges of solid mahogany bedroom furniture - elegant and serene. Add some charm and elegance to your bedroom in true traditional style with this solid mahogany sleigh bed. </p>
                                <p>Classic Mahogany French sleigh bed with high foot board and double scrolled arms having slatted base, this is one of our newest ranges of solid mahogany bedroom furniture - elegant and serene. Add some charm and elegance to your bedroom in true traditional style with this solid mahogany sleigh bed.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages">
                                <h2>Delivery and Returns</h2>
                                <p>Classic Mahogany French sleigh bed with high foot board and double scrolled arms having slatted base, this is one of our newest ranges of solid mahogany bedroom furniture - elegant and serene. Add some charm and elegance to your bedroom in true traditional style with this solid mahogany sleigh bed. </p>
                                <p>Classic Mahogany French sleigh bed with high foot board and double scrolled arms having slatted base, this is one of our newest ranges of solid mahogany bedroom furniture - elegant and serene. Add some charm and elegance to your bedroom in true traditional style with this solid mahogany sleigh bed.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="settings">
                                <h2>Reviews</h2>
                                <p>Classic Mahogany French sleigh bed with high foot board and double scrolled arms having slatted base, this is one of our newest ranges of solid mahogany bedroom furniture - elegant and serene. Add some charm and elegance to your bedroom in true traditional style with this solid mahogany sleigh bed. </p>
                                <p>Classic Mahogany French sleigh bed with high foot board and double scrolled arms having slatted base, this is one of our newest ranges of solid mahogany bedroom furniture - elegant and serene. Add some charm and elegance to your bedroom in true traditional style with this solid mahogany sleigh bed.</p>
                            </div>
                        </div>


                    </div>
                    <div class="newsletter">
                        <div class="signup_info">
                            <div class="mail_icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <div class="sign_info">
                                <h4>Sign up for our latest deals and offers</h4>
                                <p>To subscribe just enter your email address and press sign up.</p>
                            </div>
                        </div>
                        <div class="email_Section">
                            <input type="text" value="" placeholder="Your email address">
                            <button>sign up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<script>
	jQuery(document).ready(function(){
		jQuery(".Button_sec>button").each(function(){
			jQuery(this).click(function(){
			var id = jQuery(this).attr("id");
			var post_id = "<?php echo $post_id; ?>";
			jQuery.ajax({
			type: "GET",
			url:"<?php echo site_url(); ?>/wp-content/themes/kingkoil/ajax/change_cooor.php",
			data:{post_id:post_id,id:id,format:'raw'},
			success:function(resp){
			
				jQuery(".product_diffr_view").empty().append(resp);
			

			}
			});
			});
		});
	});
	</script>
	<script>
		jQuery(document).ready(function(){
			jQuery(".Button_sec>button").each(function(){
			jQuery(this).click(function(){ 
			var id=jQuery(this).attr('id');
			jQuery(".Button_sec >.active").removeClass("active");
			jQuery("#"+id).addClass("active");
		});
		});
		});
	</script>
	
	
<?php get_footer(); ?>
