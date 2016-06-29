<?php
include('../../../../wp-config.php');
global $wpdb;

		function get_numerics ($str)
		{
		preg_match_all('/\d+/', $str, $matches);
		return $matches[0];
		}
$color = $_GET['id'];
$post_id = $_GET['post_id'];
if($color=="brown")
{
	$slug_final = "brown_color_products";
}
elseif($color=="beize")
{
	$slug_final = "beize_color_products";
}
else
{
	$slug_final = "grey_color_products";
}

?> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" type="text/css" media="screen" />
 <div id="slider" class="flexslider"> 
				   <ul class="slides">  
				<?php  $one1 = get_post_meta($post_id,$slug_final,true); ?>
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
 <!-- items mirrored twice, total of 12 -->      
 </ul>                        </div> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script defer src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script>
<script type="text/javascript">
      
      jQuery(window).ready(function () {
          jQuery('#carousel').flexslider({
               animation: "slide",
               controlNav: false,
               animationLoop: false,
               slideshow: false,
               itemWidth: 120,
               itemMargin: 15,
               asNavFor: '#slider'
           });

           jQuery('#slider').flexslider({
               animation: "slide",
               controlNav: false,
               animationLoop: false,
               slideshow: false,
               sync: "#carousel",
              
           });
       });
   </script>