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
	<meta name="description" content="<?php echo $post->post_excerpt; ?>" />
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

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-T89J4QM');</script>
	<!-- End Google Tag Manager -->

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
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="<?php bloginfo('name'); ?>" width="50">
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