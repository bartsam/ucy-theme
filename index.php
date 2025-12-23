<?php get_header(); ?>
<div class="fixed top-4 left-1/2 transform -translate-x-1/2">
	<div class="p-10 bg-white rounded-lg shadow-xl">
		<h1 class="text-3xl font-extrabold text-blue-600 underline">Hello World !</h1>
		<p id="js-test" class="mt-2 text-red-500">Le JS ne fonctionne pas encore...</p>
	</div>
</div>
<main class="min-h-screen mx-auto px-6 py-12">
    <?php if (have_posts()): ?>
        <?php while (have_posts()): ?>
            <?php the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(
    'max-w-none',
); ?>>
                <h1 class="text-3xl font-bold mb-6"><?php the_title(); ?></h1>
                
                <div>
                    <?php the_content(); ?>
                </div>
            </article>

        <?php endwhile; ?>
    <?php else: ?>
        <p class="text-gray-500 italic text-center">Aucun contenu trouvé.</p>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
