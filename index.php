<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-gray-100'); ?>>
    <div class="flex items-center justify-center h-screen">
        <div class="p-10 bg-white rounded-lg shadow-xl">
            <h1 class="text-3xl font-extrabold text-blue-600 underline">
                Hello World !
            </h1>
            <p id="js-test" class="mt-2 text-red-500">Le JS ne fonctionne pas encore...</p>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>
</html>