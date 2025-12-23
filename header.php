
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class('bg-gray-100'); ?>>
		<header class="flex gap-8 bg-gray-800 text-white p-6 mb-8">
			<h1>
				<a href="<?php echo esc_url(home_url('/')); ?>" class="text-xl font-bold">
  					<?php echo esc_html(get_bloginfo('name')); ?>
				</a>
			</h1>
			<nav class="flex space-x-4">
				<?php wp_nav_menu([
        'theme_location' => 'header_menu',
        'container' => false,
        'menu_class' => 'flex space-x-6 text-white',
        'fallback_cb' => false,
    ]); ?>
			</nav>
		</header>
