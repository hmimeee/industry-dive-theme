<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
	<div class="container">
		<header class="site-header">
			<div class="header-inner">
				<div class="logo">
					<a href="<?php echo home_url(); ?>"><?php the_custom_logo(); ?></a>
				</div>
				<div class="menu">
					<ul>
						<?php
						wp_nav_menu(array(
							'theme_location' => 'primary-menu',
							'container' => '',
							'items_wrap' => '%3$s',
						))
						?>
						<li><a href="javascript:;"><i class="fa fa-search"></i></a></li>
					</ul>
				</div>
			</div>
		</header>

		<ul class="breadcrumb">
			<li>Insights</li>
			>
			<li>All Content</li>
		</ul>