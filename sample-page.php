<?php
/**
 * Template Name: Sample Page
 * 
 * This is a sample page template to demonstrate the theme's capabilities.
 * You can use this as a starting point for custom page templates.
 */

get_header(); ?>

<main class="main-content">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">Sample Page</h1>
            <p class="hero-subtitle">This is a sample page to showcase the theme's features and layout options</p>
            <a href="#content" class="cta-button">Learn More</a>
        </div>
    </section>

    <div class="content-wrapper">
        <div class="content-main">
            <article class="page-content">
                <div class="entry-content">
                    <h2>Welcome to Our Sample Page</h2>
                    <p>This is a sample page that demonstrates the various features and styling options available in the Second Home Stories WordPress theme.</p>
                    
                    <h3>Features Showcase</h3>
                    <p>The theme includes:</p>
                    <ul>
                        <li>Responsive design that works on all devices</li>
                        <li>Modern card-based layout</li>
                        <li>Customizable hero section</li>
                        <li>Clean typography using Inter font</li>
                        <li>Mobile-friendly navigation</li>
                        <li>Widget-ready sidebar</li>
                        <li>SEO-optimized structure</li>
                    </ul>
                    
                    <h3>Content Layout</h3>
                    <p>This page demonstrates how content is displayed with proper spacing, typography, and visual hierarchy. The theme uses a clean, modern design that focuses on readability and user experience.</p>
                    
                    <blockquote>
                        <p>"Good design is obvious. Great design is transparent." - Joe Sparano</p>
                    </blockquote>
                    
                    <h3>Customization Options</h3>
                    <p>You can easily customize this theme through the WordPress Customizer:</p>
                    <ul>
                        <li>Change hero section text and colors</li>
                        <li>Modify the primary color scheme</li>
                        <li>Add your own logo</li>
                        <li>Customize navigation menus</li>
                        <li>Add widgets to sidebar and footer</li>
                    </ul>
                    
                    <h3>Responsive Design</h3>
                    <p>The theme automatically adapts to different screen sizes:</p>
                    <ul>
                        <li><strong>Desktop:</strong> Full layout with sidebar</li>
                        <li><strong>Tablet:</strong> Optimized for medium screens</li>
                        <li><strong>Mobile:</strong> Single-column layout with mobile menu</li>
                    </ul>
                    
                    <h3>Getting Started</h3>
                    <p>To get started with this theme:</p>
                    <ol>
                        <li>Activate the theme in WordPress admin</li>
                        <li>Go to Appearance > Customize to make changes</li>
                        <li>Set up your navigation menus</li>
                        <li>Add widgets to the sidebar</li>
                        <li>Create your first post or page</li>
                    </ol>
                    
                    <p>This theme is designed to be both beautiful and functional, providing a solid foundation for your website while maintaining flexibility for customization.</p>
                </div>
            </article>
        </div>

        <?php get_sidebar(); ?>
    </div>
</main>

<?php get_footer(); ?>