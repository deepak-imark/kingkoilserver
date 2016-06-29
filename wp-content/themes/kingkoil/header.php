<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <?php wp_head();?>
</head>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/fav_icon.png" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Style -->
	 <link href="http://flexslider.woothemes.com/css/shCore.css" rel="stylesheet" type="text/css" />
    <link href="http://flexslider.woothemes.com/css/shThemeDefault.css" rel="stylesheet" type="text/css" />
    <!-- Demo CSS
    <link rel="stylesheet" href="css/demo.css" type="text/css" media="screen" /> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" type="text/css" media="screen" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
	
    <link rel="stylesheet" href="<?php echo  get_template_directory_uri(); ?>/css/owl.theme.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300,300italic' rel='stylesheet' type='text/css'>
    <link href="http://allfont.net/allfont.css?fonts=academy-italic" rel="stylesheet" type="text/css" />
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!----------------->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


<body>
<?php
if ( is_front_page() ) {
?>
    <header>
	<?php
}
else
{
	?>
	    <header class="innerheader">
	<?php
}
?>
        <a class="logo" href="<?php echo site_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/logo.png"></a>
        <div class="menu-bars pull-right">
            <h4 class="menu_title"><a href="javascript:void(0);" id="menu_trigger"><i class="fa fa-bars"></i> <i class="fa fa-times"></i></a></h4>
            <div id="menu">
                <ul>
                     <?php 
								$defaults = array(
								'theme_location'  => '',
								'menu'            => 'header_menu',
								'container'       => '',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '%3$s',
								'depth'           => 0,
								'walker'          => ''
								);

								wp_nav_menu( $defaults ); ?>
                </ul>
            </div>
        </div>
    </header>