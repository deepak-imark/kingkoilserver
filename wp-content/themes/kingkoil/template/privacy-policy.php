<?php 
/* Template Name: privacy policy

*/ 
get_header();
?>
<div class="page-title">
        <div class="container">
            <h2>Privacy Policy</h2>
        </div>
    </div>
    <section class="content_policy">
        <div class="container">
            <?php
				$post=get_post(34);
				echo $post->post_content;
			?>
        </div>
    </section>

<?php
get_footer();
?>
