# Installation Guide - Second Home Stories WordPress Theme

## Prerequisites

Before installing this theme, ensure you have:

- WordPress 5.0 or higher installed
- PHP 7.4 or higher
- MySQL 5.6 or higher
- Access to your WordPress admin panel

## Installation Methods

### Method 1: Upload via WordPress Admin (Recommended)

1. **Download the Theme**
   - Download the theme ZIP file
   - Extract the contents to a folder on your computer

2. **Upload via WordPress Admin**
   - Log in to your WordPress admin panel
   - Go to **Appearance > Themes**
   - Click **Add New** at the top of the page
   - Click **Upload Theme**
   - Choose the theme ZIP file
   - Click **Install Now**
   - Click **Activate** to activate the theme

### Method 2: FTP Upload

1. **Extract the Theme**
   - Extract the theme ZIP file to your computer
   - You should have a folder named `second-home-stories`

2. **Upload via FTP**
   - Connect to your server via FTP
   - Navigate to `/wp-content/themes/`
   - Upload the `second-home-stories` folder
   - Go to **Appearance > Themes** in WordPress admin
   - Activate the theme

### Method 3: cPanel File Manager

1. **Access cPanel**
   - Log in to your hosting control panel
   - Open **File Manager**

2. **Upload Theme**
   - Navigate to `/public_html/wp-content/themes/`
   - Upload the extracted theme folder
   - Activate the theme in WordPress admin

## Post-Installation Setup

### 1. Customize the Theme

1. Go to **Appearance > Customize**
2. Customize the following sections:
   - **Hero Section**: Title, subtitle, CTA button
   - **Colors**: Primary color scheme
   - **Site Identity**: Logo and site title

### 2. Set Up Navigation

1. Go to **Appearance > Menus**
2. Create a new menu
3. Add pages, posts, or custom links
4. Assign to **Primary Menu** location
5. Save the menu

### 3. Configure Widgets

1. Go to **Appearance > Widgets**
2. Add widgets to **Sidebar** area:
   - Search
   - Recent Posts
   - Categories
   - Archives
3. Add widgets to **Footer Widget Area** if desired

### 4. Create Sample Content

1. Go to **Posts > Add New**
2. Create a few sample posts
3. Go to **Pages > Add New**
4. Create an About page and Contact page

## Theme Features Configuration

### Hero Section Customization

The hero section can be customized through the WordPress Customizer:

- **Hero Title**: Main heading text
- **Hero Subtitle**: Supporting text below the title
- **CTA Button Text**: Call-to-action button text
- **CTA Button Link**: Destination URL for the button

### Color Scheme

- **Primary Color**: Main accent color used throughout the theme
- **Background Colors**: Automatically generated based on primary color

### Typography

- **Font Family**: Inter (Google Fonts) - automatically loaded
- **Font Sizes**: Responsive typography that scales with screen size

## Troubleshooting

### Common Issues

1. **Theme Not Appearing**
   - Ensure the theme folder is in `/wp-content/themes/`
   - Check file permissions (755 for folders, 644 for files)
   - Verify WordPress version compatibility

2. **Styling Issues**
   - Clear browser cache
   - Check for conflicting plugins
   - Verify CSS file is loading

3. **Mobile Menu Not Working**
   - Check JavaScript is enabled
   - Verify no JavaScript errors in browser console
   - Test on different devices

4. **Images Not Displaying**
   - Check image file permissions
   - Verify image paths are correct
   - Ensure WordPress media library is working

### Performance Optimization

1. **Enable Caching**
   - Install a caching plugin (WP Rocket, W3 Total Cache)
   - Enable browser caching
   - Optimize images

2. **Database Optimization**
   - Clean up unused plugins and themes
   - Optimize database tables
   - Remove unused post revisions

## Support

If you encounter issues:

1. Check the troubleshooting section above
2. Review WordPress error logs
3. Test with default WordPress theme
4. Contact your hosting provider
5. Reach out to the theme developer

## Updates

To update the theme:

1. **Automatic Updates** (if available)
   - WordPress will notify you of available updates
   - Click **Update Now** in the admin panel

2. **Manual Updates**
   - Download the latest version
   - Follow the installation process
   - Your customizations will be preserved

## Security Considerations

1. **Keep WordPress Updated**
   - Regularly update WordPress core
   - Update plugins and themes
   - Use strong passwords

2. **File Permissions**
   - Folders: 755
   - Files: 644
   - wp-config.php: 600

3. **Regular Backups**
   - Backup files and database
   - Store backups securely
   - Test backup restoration

## Customization Tips

1. **Child Theme**
   - Create a child theme for customizations
   - Preserve customizations during updates
   - Follow WordPress coding standards

2. **CSS Customization**
   - Use browser developer tools
   - Test changes on multiple devices
   - Keep custom CSS organized

3. **PHP Customization**
   - Use WordPress hooks and filters
   - Follow WordPress coding standards
   - Test thoroughly before deployment

## Conclusion

The Second Home Stories theme is designed to be easy to install and customize. Follow this guide step-by-step for a smooth installation experience. If you need additional help, refer to the WordPress documentation or contact support.