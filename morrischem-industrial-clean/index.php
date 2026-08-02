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
                <p>Morrischem provides specialty chemical distribution, raw material sourcing, and supply logistics engineered for oil & gas, petrochemical, and industrial operations.</p>
            </section>

            <section class="services-grid">
                <div class="service-card">
                    <h3>Specialty Chemicals</h3>
                    <p>High-grade chemical compounds, specialty formulations, and compliant industrial raw materials.</p>
                </div>
                <div class="service-card">
                    <h3>Supply Chain Logistics</h3>
                    <p>Streamlined international distribution workflows, bulk logistics, and secure material delivery.</p>
                </div>
                <div class="service-card">
                    <h3>Technical Compliance</h3>
                    <p>Rigorous Quality Control, safety compliance standards, and technical application support.</p>
                </div>
            </section>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
