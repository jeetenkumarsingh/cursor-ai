<?php get_header(); ?>

<main class="main-content">
    <div class="content-wrapper">
        <div class="content-main">
            <header class="page-header">
                <h1 class="page-title">
                    <?php printf(esc_html__('Search Results for: %s', 'second-home-stories'), '<span>' . get_search_query() . '</span>'); ?>
                </h1>
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
                                <div class="search-result-meta">
                                    <span class="post-type"><?php echo get_post_type_object(get_post_type())->labels->singular_name; ?></span>
                                    <span class="post-date"><?php echo get_the_date(); ?></span>
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
                <div class="no-results">
                    <h2><?php esc_html_e('No results found', 'second-home-stories'); ?></h2>
                    <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'second-home-stories'); ?></p>
                    
                    <div class="search-form-container">
                        <?php get_search_form(); ?>
                    </div>
                    
                    <div class="suggestions">
                        <h3><?php esc_html_e('Suggestions:', 'second-home-stories'); ?></h3>
                        <ul>
                            <li><?php esc_html_e('Make sure all words are spelled correctly.', 'second-home-stories'); ?></li>
                            <li><?php esc_html_e('Try different keywords.', 'second-home-stories'); ?></li>
                            <li><?php esc_html_e('Try more general keywords.', 'second-home-stories'); ?></li>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <?php get_sidebar(); ?>
    </div>
</main>

<?php get_footer(); ?>