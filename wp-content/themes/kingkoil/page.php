<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="page-title">
        <div class="container">
		 <h2>Privacy Policy</h2>
        </div>
		
    </div>
    <section class="content_policy">
        <div class="container">
			

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );
		endwhile;
		?>

	 </div>
    </section>
<?php get_footer(); ?>
