<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>
	<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-8695481-5"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-8695481-5');
	</script>
	<!-- end ggoogle analitycs -->

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<title>
		<?php wp_title(''); ?><?php if (!(is_404()) && (is_single()) || (is_page()) || (is_archive())) { ?> &raquo; <?php } ?><?php bloginfo('name'); ?>
	</title>
	<?php wp_head(); ?>
	
	<!-- Hotjar Tracking Code for https://www.magdachudzik.pl/ -->
	<script>
		(function(h,o,t,j,a,r){
			h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
			h._hjSettings={hjid:1141369,hjsv:6};
			a=o.getElementsByTagName('head')[0];
			r=o.createElement('script');r.async=1;
			r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
			a.appendChild(r);
		})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
	</script>
	<!-- end HOTJAR -->		
	</head>

<body class="fullheight">
<header>
	<a class="navbar-brand" href="<?php echo get_home_url(); ?>">Magda Chudzik</a> 

	<!-- hamburger menu icon -->
	<button class="hamburger">
		<span></span>
		<span></span>
		<span></span>
	</button>

	<?php
	wp_nav_menu( array(
		'theme_location'    => 'primary',
		'depth'             => 2,
		'container'         => 'nav',
	) );
	?>
</header>