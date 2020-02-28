<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package byn
 */

$page = get_post( get_the_ID() );
$page_slug = $page->post_name;
$thumb = get_the_post_thumbnail_url( get_the_ID(), 'full'); 
if ( is_front_page() ) :
	$namespace = 'has-thumb';
else :
	$namespace = ($thumb)? 'has-thumb' : 'has-no-thumb';
endif;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">

	<?php if ( is_single()): ?>
	<?php if ($post->post_excerpt){ ?>
	<meta name="description" content="<? echo $post->post_excerpt; ?>" />
	<?php } else {
			$summary = strip_tags($post->post_content);
			$summary = str_replace("\n", "", $summary);
			$summary = mb_substr($summary, 0, 120). "…"; ?>
	<meta name="description" content="<?php echo $summary; ?>" />
	<?php } ?>
	<?php elseif ( is_home() || is_front_page() ): ?>
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<?php elseif ( is_category() ): ?>
	<meta name="description" content="<?php echo category_description(); ?>" />
	<?php elseif ( is_tag() ): ?>
	<meta name="description" content="<?php echo tag_description(); ?>" />
	<?php else: ?>
	<meta name="description" content="<?php the_excerpt();?>" />
	<?php endif; ?>

	<?php wp_head(); ?>
</head>

<body>

<div class="loading" style="position:fixed;top:0;left:0;width:100%;height:100vh;background-color:rgba(255,255,255,1);z-index:9999;">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="" style="position:absolute;width:100px;height:100px;top:50%;left:50%;transform:translate(-50%,-50%);">
</div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'byn' ); ?></a>

	<header class="header">
		<div class="header__inner">
			<div class="header__logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<svg version="1.1" id="logo" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve"><style>.st1{display:inline;stroke:#fff;stroke-miterlimit:10}.st2{display:none}.st2,.st5{fill:none;stroke:#000;stroke-width:20;stroke-miterlimit:10}</style><path class="st2" d="M171 40.6l116 200.8M369.4 45l107.4 186.1M295 245h173M154 41.6L38 242.4"/><path class="st5" d="M171.1 82.8l126.6 184.7h11.1L171.6 64.4 34.3 267.5h10z"/><path class="st5" d="M292.3 258.5l5.2 9.3h180.7L341 64.8l-5.5 9.3L462 258.5z"/><path d="M20.9 389.8h18v6.6c5.5-7 12-8.1 17.3-8.1 4.9 0 11.3.9 16 5.6 5.3 5.3 5.6 11.9 5.6 16.4v35.3h-18V417c0-3.6-.1-8.3-3-11.1-1.4-1.4-3.6-2.5-6.9-2.5-3.8 0-6.1 1.5-7.5 3-3 3-3.5 7-3.5 10.6v28.6h-18v-55.8zM158.6 438.5c-5 5-13.5 9-24.4 9s-19.4-4-24.4-9c-5.6-5.6-8.4-13.6-8.4-20.8 0-7.2 2.8-15.1 8.4-20.8 5-5 13.5-9 24.4-9s19.4 4 24.4 9c5.6 5.6 8.4 13.6 8.4 20.8 0 7.3-2.7 15.1-8.4 20.8zm-34.5-31.2c-2.6 2.6-4.1 6-4.1 10.5 0 5.1 2 8.4 4.1 10.5 2.3 2.3 5.5 4 10.3 4 4 0 7.4-1.4 10-4 2.6-2.6 4.1-6 4.1-10.5s-1.5-7.9-4.1-10.5c-2.6-2.6-6-4-10.1-4s-7.5 1.4-10.2 4zM191.3 354.5h18v42c2.3-2.8 4.6-4.6 6.8-5.8 3.8-2 6.9-2.4 10.9-2.4 4.4 0 10.9.6 15.8 5.6 5.1 5.1 5.5 12 5.5 16.3v35.4h-18V417c0-3.9-.1-8.4-3-11.1-1.6-1.6-4.4-2.5-7-2.5-3.9 0-6.1 1.8-7.1 2.8-3.6 3.5-3.8 8.9-3.8 11.6v27.9h-18l-.1-91.2zM317.5 389.8h18v55.8h-18v-6.8c-4.9 7.5-11.9 8.6-16.5 8.6-8 0-14.8-2-20.9-8.5-5.9-6.3-8.1-13.5-8.1-20.9 0-9.4 3.5-17.4 8.6-22.5 4.9-4.9 11.6-7.6 19.4-7.6 4.8 0 12.4 1.1 17.5 8.1v-6.2zm-23 17.7c-1.9 1.9-4.1 5.1-4.1 10.1s2.1 8.3 3.8 10c2.5 2.6 6.4 4.4 10.6 4.4 3.6 0 7-1.5 9.4-3.9 2.4-2.3 4.4-5.8 4.4-10.5 0-4-1.5-7.8-4.1-10.3-2.8-2.6-6.8-3.9-10-3.9-4 .1-7.5 1.8-10 4.1zM403.8 407.5c-4.4-3.6-8.9-4.3-11.8-4.3-5.6 0-9 2.8-10.3 4-2.4 2.4-4.1 6-4.1 10.5 0 4.1 1.5 7.6 3.8 10 2.8 3 6.9 4.5 10.9 4.5 3.1 0 7.4-.9 11.5-4.4v16.3c-4.8 2.6-9.3 3.4-14.3 3.4-9.4 0-16.5-3.4-21.6-8.4-4.3-4.1-8.8-11.1-8.8-21.3 0-9.5 4-17 9.3-22 6.3-5.9 13.6-7.9 21.3-7.9 4.9 0 9.4.9 14.1 3.1v16.5zM482.7 438.5c-5 5-13.5 9-24.4 9-10.9 0-19.4-4-24.4-9-5.6-5.6-8.4-13.6-8.4-20.8 0-7.2 2.8-15.1 8.4-20.8 5-5 13.5-9 24.4-9 10.9 0 19.4 4 24.4 9 5.6 5.6 8.4 13.6 8.4 20.8-.1 7.3-2.8 15.1-8.4 20.8zm-34.5-31.2c-2.6 2.6-4.1 6-4.1 10.5 0 5.1 2 8.4 4.1 10.5 2.3 2.3 5.5 4 10.3 4 4 0 7.4-1.4 10-4 2.6-2.6 4.1-6 4.1-10.5s-1.5-7.9-4.1-10.5c-2.6-2.6-6-4-10.1-4s-7.6 1.4-10.2 4z"/></svg>
					<?php /* <object id="logo" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="<?php bloginfo('name'); ?>" width="50"></object> */?>
					<?php /* <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="<?php bloginfo('name'); ?>" width="50"> */?>
				</a>
			</div>

			<nav class="header__nav">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'			=> '',
					'menu_class'        => 'header__nav-list',
					'container_class'	=> 'header__nav-inner'
				) );
				?>
			</nav>
		</div>
	</header>

	<main data-barba="wrapper" class="content__wrapper">
		<div data-scroll data-barba="container" <?php body_class( 'page-' . $page_slug ); ?> data-barba-namespace="<?php echo $namespace; ?>">
			<?php get_template_part( 'template-parts/content', 'hero-' . $namespace ); ?>