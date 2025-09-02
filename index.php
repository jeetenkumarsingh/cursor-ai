<?php get_header(); ?>

<main class="main-content">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title"><?php echo get_theme_mod('hero_title', 'Welcome to Second Home Stories'); ?></h1>
            <p class="hero-subtitle"><?php echo get_theme_mod('hero_subtitle', 'Discover amazing stories and experiences from around the world'); ?></p>
            <a href="<?php echo get_theme_mod('hero_cta_link', '#content'); ?>" class="cta-button"><?php echo get_theme_mod('hero_cta_text', 'Get Started'); ?></a>
        </div>
    </section>

    <!-- Main Content Area -->
    <div class="content-wrapper">
        <div class="content-main">
            <?php if (have_posts()) : ?>
                <div class="content-grid">
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="content-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="card-image">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                            <?php else : ?>
                                <div class="card-image">
                                    <span>No Image</span>
                                </div>
                            <?php endif; ?>
                            
                            <div class="card-content">
                                <h2 class="card-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <div class="card-excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="read-more">Read More →</a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <!-- Pagination -->
                <div class="pagination">
                    <?php
                    the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_text' => '← Previous',
                        'next_text' => 'Next →',
                    ));
                    ?>
                </div>

            <?php else : ?>
                <div class="no-posts">
                    <h2>No posts found</h2>
                    <p>Sorry, no posts matched your criteria.</p>
                </div>
            <?php endif; ?>
        </div>

        <?php get_sidebar(); ?>
    </div>
</main>

<?php get_footer(); ?>