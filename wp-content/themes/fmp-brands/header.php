<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
$custom_logo_id = get_theme_mod( 'custom_logo' );
$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
?>
<!doctype html>
  <html class="no-js"  <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,700i,800,800i&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/motion-ui@1.2.3/dist/motion-ui.min.css" />
		<?php wp_head(); ?>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145389082-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-145389082-1');
		</script>

		<!-- Global site tag (gtag.js) - Google Ads: 718117551 -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-718117551"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'AW-718117551');
		</script>

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-PCPCWN5');</script>
		<!-- End Google Tag Manager -->
		
		<!-- Event snippet for Sign Up Form Conversion conversion page -->
		<script>
		  gtag('event', 'conversion', {'send_to': 'AW-718117551/4MdVCNqt16cBEK-1ttYC'});
		</script>
	</head>
			
	<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PCPCWN5"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
		<div class="off-canvas-wrapper">
			
			<!-- Load off-canvas container. Feel free to remove if not using. -->			
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
			
			<div class="off-canvas-content" data-off-canvas-content>
			<?php if (is_front_page()) : ?>
				<div class="grid-container full">	
					

				<div class="nav-bar grid-x Xgrid-margin-x grid-padding-x show-for-large">
				<div class="cell small-12">

					<div class="Xnav-bar grid-x grid-margin-x grid-padding-x align-center">
						<div class="cell small-8 text-center"><a href="<?php echo home_url(); ?>"><?php echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">'; ?></a></div>
					</div>

				</div>
				</div>

				</div>
			<?php else : ?>
				<header class="header" role="banner">
							
					 <!-- This navs will be applied to the topbar, above all content 
						  To see additional nav styles, visit the /parts directory -->
					 <?php get_template_part( 'parts/nav', 'topbar' ); ?>
	 	
				</header> <!-- end .header -->
			<?php endif ?>