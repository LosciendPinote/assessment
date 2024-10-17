<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package assessment
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<section class="main--header">
			<header id="masthead" class="site-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12 d-flex items-justified-space-between my-3 my-3">
							<div class="header--content header--logo">
								<h3>Your Logo</h3>
							</div>
							<nav class="header--content header-menus d-flex align-items-center">
								<?php wp_nav_menu(
									array(
										'menu' => 'header-menu',
										'theme_location' => 'Header Menu',
									)
								) ?>
							</nav>
							<div class="header--content header--cta">
								<a href="#" class="default--btn">Cta Button</a>
							</div>
						</div>
					</div>
				</div>
			</header>
		</section>

		<!-- #masthead -->