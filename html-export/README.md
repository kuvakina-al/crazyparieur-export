# Crazy Parieur - Production HTML/CSS Export

This is a production-ready export of the Crazy Parieur website, built as a modular PHP application with pure CSS styling following the Figma design specifications.

## File Structure

```
html-export/
├── index.php                           # Homepage
├── golf.php                           # Golf betting page
├── basketball.php                     # Basketball betting page
├── jeu-responsable.php               # Responsible gaming page
├── politique-confidentialite.php    # Privacy policy page
├── conditions-generales-utilisation.php # Terms of service page
├── autorite-nationale-jeux-anj.php  # ANJ information page
├── components/                       # Reusable PHP components
│   ├── navbar.php                   # Navigation bar component
│   ├── footer.php                   # Footer component
│   ├── menu.php                     # Menu overlay component
│   ├── cookies.php                  # Cookie banner component
│   ├── card.php                     # Bookmaker cards component
│   └── text-container.php           # Text content component
├── css/                             # Component-specific stylesheets
│   ├── navbar.css                   # Navigation styles
│   ├── footer.css                   # Footer styles
│   ├── menu.css                     # Menu overlay styles
│   ├── cookies.css                  # Cookie banner styles
│   ├── card.css                     # Card component styles
│   └── text-container.css           # Text container styles
├── styles.css                       # Global styles and design system
├── images/                          # Logo and image assets
│   └── README.md                    # Image requirements
├── .htaccess                        # Apache configuration
├── robots.txt                       # Search engine directives
└── README.md                        # This file
```

## Features

### Design System
- **Colors**: Dark theme (#1a1a1a background) with green accents (#00ff41)
- **Typography**: Arial font family with semantic hierarchy
- **Responsive**: Mobile-first design with breakpoints at 991px, 767px, and 479px
- **Components**: Modular PHP components with dedicated CSS files

### Pages
- **Homepage**: Main landing page with bookmaker offers and introduction
- **Golf**: Dedicated page for golf betting information
- **Basketball**: Basketball betting guide and tips
- **Legal Pages**: Complete set of legal and regulatory pages (CGU, Privacy, ANJ info)
- **Responsible Gaming**: Comprehensive responsible gaming resources

### Components
- **Navigation**: Desktop and mobile-responsive navbar with active states
- **Menu**: Overlay menu system with CSS-only interactions  
- **Cards**: Bookmaker offer cards with hover effects and call-to-action buttons
- **Footer**: Partner logos and legal links
- **Cookie Banner**: GDPR-compliant cookie notification
- **Text Containers**: Styled content blocks for articles and legal text

## SEO Optimization

Each page includes:
- Unique, optimized meta titles (under 60 characters)
- Descriptive meta descriptions (under 160 characters)  
- Semantic HTML5 structure
- Clean, descriptive URLs
- Proper heading hierarchy (H1, H2, H3)
- Image alt attributes for accessibility

## Deployment Instructions

### Requirements
- Apache web server with PHP support
- PHP 7.4+ recommended
- mod_rewrite enabled (optional, for clean URLs)

### Installation Steps

1. **Upload Files**
   ```bash
   # Upload all files to your web server root directory
   scp -r html-export/* user@yourserver.com:/var/www/html/
   ```

2. **Set Permissions**
   ```bash
   chmod 644 *.php
   chmod 644 css/*.css
   chmod 644 components/*.php
   chmod 755 images/
   ```

3. **Add Partner Logos**
   - Download or create the required logo files (see images/README.md)
   - Place them in the images/ directory with correct filenames
   - Ensure proper compression and sizing for web performance

4. **Configure Apache** (optional)
   - The included .htaccess file provides security headers and caching
   - Uncomment clean URL rules if desired

5. **Test Deployment**
   - Verify all pages load correctly
   - Test responsive design on mobile devices
   - Check all external links to partner sites

## External Links

### Bookmaker Partners
- **ParionsSport**: https://www.enligne.parionssport.fdj.fr/?utm=Q7dK2a9tX3
- **Winamax**: https://www.winamax.fr/?utm=z5C1Y8H4mV  
- **NetBet**: https://www.netbet.fr/?utm=Px3u0N6T7A

### Regulatory Partners
- **ANJ**: https://anj.fr
- **SOS Joueurs**: https://www.sosjoueurs.org
- **GambleAware**: https://www.gambleaware.org

## Browser Compatibility

Tested and optimized for:
- Chrome 90+ (desktop and mobile)
- Safari 14+ (desktop and mobile)
- Firefox 88+
- Edge 90+

## Performance

- **CSS**: Minified for production use
- **Images**: Optimized for web delivery
- **Caching**: Browser caching headers configured
- **Compression**: Gzip compression enabled via .htaccess

## Maintenance

### Adding New Content
1. Create new PHP files following the existing structure
2. Include required components (navbar, footer, etc.)
3. Add navigation links in navbar.php and menu.php
4. Update sitemap and navigation as needed

### Updating Styles
1. Modify component-specific CSS files in css/ directory
2. Update global styles in styles.css for design system changes
3. Test responsive behavior across all breakpoints

### Legal Compliance
- All pages comply with French gambling regulations
- GDPR-compliant privacy policy included
- Responsible gaming information prominently displayed
- Age verification warnings (18+) shown in navigation

## Support

For technical issues or questions about this export:
- Review component documentation in individual files
- Check browser console for any JavaScript errors
- Verify all file paths and includes are correct
- Ensure PHP is properly configured on your server

---

**Note**: This is a static export designed for direct FTP deployment. No build process or additional dependencies are required.