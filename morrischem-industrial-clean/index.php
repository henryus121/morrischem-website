<?php get_header(); ?>

<main class="site-main">
    <div class="content-container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2><?php the_title(); ?></h2>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <section class="hero-section">
                <h2>Industrial Chemical Supply & Technical Solutions</h2>
                <p>Welcome to Morrischem. We deliver specialty chemical solutions, raw materials, and industrial supply logistics tailored for modern manufacturing and processing operations.</p>
            </section>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
