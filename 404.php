<?php get_header(); ?>

<main class="main-content">
    <div class="error-404 not-found">
        <div class="error-content">
            <h1 class="error-title">404</h1>
            <h2 class="error-heading"><?php esc_html_e('Page Not Found', 'second-home-stories'); ?></h2>
            <p class="error-message"><?php esc_html_e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'second-home-stories'); ?></p>
            
            <div class="error-actions">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="cta-button">
                    <?php esc_html_e('Go to Homepage', 'second-home-stories'); ?>
                </a>
                
                <div class="search-form-container">
                    <h3><?php esc_html_e('Search for something else:', 'second-home-stories'); ?></h3>
                    <?php get_search_form(); ?>
                </div>
            </div>
            
            <div class="recent-posts">
                <h3><?php esc_html_e('Recent Posts', 'second-home-stories'); ?></h3>
                <ul>
                    <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 5,
                        'post_status' => 'publish'
                    ));
                    
                    foreach ($recent_posts as $post) : ?>
                        <li>
                            <a href="<?php echo get_permalink($post['ID']); ?>">
                                <?php echo $post['post_title']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>