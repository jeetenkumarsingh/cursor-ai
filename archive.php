<?php get_header(); ?>

<main class="main-content">
    <div class="content-wrapper">
        <div class="content-main">
            <header class="page-header">
                <?php
                the_archive_title('<h1 class="page-title">', '</h1>');
                the_archive_description('<div class="archive-description">', '</div>');
                ?>
            </header>

            <?php if (have_posts()) : ?>
                <div class="content-grid">
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="content-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="card-image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </a>
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
                                <div class="card-meta">
                                    <span class="post-date"><?php echo get_the_date(); ?></span>
                                    <?php if (has_category()) : ?>
                                        <span class="post-categories"><?php the_category(', '); ?></span>
                                    <?php endif; ?>
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
                    <h2><?php esc_html_e('No posts found', 'second-home-stories'); ?></h2>
                    <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'second-home-stories'); ?></p>
                </div>
            <?php endif; ?>
        </div>

        <?php get_sidebar(); ?>
    </div>
</main>

<?php get_footer(); ?>