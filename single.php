<?php get_header(); ?>

<main class="main-content">
    <div class="content-wrapper">
        <div class="content-main">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
                    <header class="entry-header">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?>
                        
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        
                        <div class="entry-meta">
                            <span class="posted-on">
                                <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                    <?php echo esc_html(get_the_date()); ?>
                                </time>
                            </span>
                            
                            <span class="byline">
                                by <?php the_author_posts_link(); ?>
                            </span>
                            
                            <?php if (has_category()) : ?>
                                <span class="cat-links">
                                    in <?php the_category(', '); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                    </header>

                    <div class="entry-content">
                        <?php the_content(); ?>
                        
                        <?php
                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'second-home-stories'),
                            'after'  => '</div>',
                        ));
                        ?>
                    </div>

                    <footer class="entry-footer">
                        <?php if (has_tag()) : ?>
                            <div class="tags-links">
                                <strong>Tags:</strong> <?php the_tags('', ', '); ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="post-navigation">
                            <?php
                            $prev_post = get_previous_post();
                            $next_post = get_next_post();
                            
                            if ($prev_post) : ?>
                                <div class="nav-previous">
                                    <a href="<?php echo get_permalink($prev_post); ?>">
                                        ← <?php echo get_the_title($prev_post); ?>
                                    </a>
                                </div>
                            <?php endif;
                            
                            if ($next_post) : ?>
                                <div class="nav-next">
                                    <a href="<?php echo get_permalink($next_post); ?>">
                                        <?php echo get_the_title($next_post); ?> →
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </footer>
                </article>

                <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>

            <?php endwhile; ?>
        </div>

        <?php get_sidebar(); ?>
    </div>
</main>

<?php get_footer(); ?>