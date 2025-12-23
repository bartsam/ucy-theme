<?php

/**
 * UCY Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package UCY_Theme
 * @since 1.0.0
 *
 */

// Enqueue scripts and styles.
add_action('wp_enqueue_scripts', function () {
    $theme_uri = get_template_directory_uri();
    $theme_path = get_template_directory();

    if (file_exists($theme_path . '/.dev')) {
        // DEV MODE
        wp_enqueue_script(
            'vite',
            'http://localhost:5173/@vite/client',
            [],
            null,
        );
        wp_enqueue_script(
            'main',
            'http://localhost:5173/src/main.js',
            ['vite'],
            null,
        );
    } else {
        // PROD MODE
        $manifest_path = $theme_path . '/dist/.vite/manifest.json';
        if (file_exists($manifest_path)) {
            $manifest = json_decode(file_get_contents($manifest_path), true);

            // Load JS
            $js_file = $manifest['src/main.js']['file'];
            wp_enqueue_script(
                'main',
                $theme_uri . '/dist/' . $js_file,
                [],
                null,
                true,
            );

            // Load CSS
            if (isset($manifest['src/main.js']['css'])) {
                foreach ($manifest['src/main.js']['css'] as $key => $css_file) {
                    wp_enqueue_style(
                        'main-style-' . $key,
                        $theme_uri . '/dist/' . $css_file,
                    );
                }
            }
        }
    }
});

// Enable Vite HMR + Modules
add_filter(
    'script_loader_tag',
    function ($tag, $handle, $src) {
        if (!in_array($handle, ['main', 'vite'])) {
            return $tag;
        }
        return '<script type="module" crossorigin src="' .
            esc_url($src) .
            '"></script>';
    },
    10,
    3,
);

// 3. Theme configuration
function ucy_theme_setup()
{
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    register_nav_menus([
        'header_menu' => 'Menu Principal',
        'footer_menu' => 'Menu Pied de page',
    ]);

    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);
}
add_action('after_setup_theme', 'ucy_theme_setup');
