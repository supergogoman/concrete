<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Concrete
 */
?>

<?php
	$site_logo = get_field('site_logo', 'option');
	$add_header_margin = get_field('add_header_margin');
 ?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'concrete' ); ?></a>

	<header>
		<div class="container">
			<a href="/" id="site-logo">
				<?php if ($site_logo): ?>
					<img src="<?php echo $site_logo['url'] ?>" alt="<?php echo $site_logo['alt'] ?>">
				<?php endif; ?>
			</a>
			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav>
		</div>
	</header>

	<?php if ($add_header_margin): ?>
		<div id="header-buffer"></div>
	<?php endif; ?>
