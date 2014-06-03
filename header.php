<!doctype html>
<html>
	<head>
		<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link id="favicon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" rel="icon" type="image/x-icon" />
		<?php wp_get_archives('type=monthly&format=link'); ?>
		<?php wp_head(); ?>
	</head>
	<body>
		<header>
			<hgroup>
				<h1><a href = "<?php bloginfo("url")?>"><?php bloginfo('name'); ?></a>
				</h1>
				<?php bloginfo("description")?>
			</hgroup>
			<?php wp_nav_menu( array( 'theme_location' => 'header_menu' )); ?>
		</header>