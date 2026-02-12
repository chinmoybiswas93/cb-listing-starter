# CB Listing Starter

A minimal, modern WordPress block theme with Full Site Editing (FSE) support. Designed as a clean starting point for custom projects.

## Features

- **Full Site Editing** — Edit headers, footers, and templates visually in the Site Editor
- **theme.json v3** — Complete design token system (colors, typography, spacing)
- **Block Patterns** — Hero banner, card grid, CTA, page header, and more
- **Custom Templates** — Blank and No Title templates included
- **Extensible** — Easily add custom post type templates from plugins
- **Accessible** — Built with accessibility best practices
- **Performance** — No bloat, uses system fonts, minimal CSS

## Theme Structure

```
cb-listing-starter/
├── assets/
│   ├── css/
│   │   └── theme.css          # Custom supplementary styles
│   ├── js/                     # Custom scripts (empty, add as needed)
│   └── images/                 # Theme images (empty, add as needed)
├── parts/
│   ├── header.html             # Site header template part
│   └── footer.html             # Site footer template part
├── patterns/
│   ├── hero-banner.php         # Hero section pattern
│   ├── call-to-action.php      # CTA section pattern
│   ├── card-grid.php           # Feature cards pattern
│   ├── page-header.php         # Page header pattern
│   └── two-column-text-image.php
├── templates/
│   ├── index.html              # Fallback/blog template
│   ├── front-page.html         # Front page template
│   ├── home.html               # Blog home template
│   ├── single.html             # Single post template
│   ├── page.html               # Page template
│   ├── archive.html            # Archive template
│   ├── search.html             # Search results template
│   ├── 404.html                # 404 template
│   ├── blank.html              # Blank (content only) template
│   └── no-title.html           # No title template
├── functions.php                # Theme setup and hooks
├── style.css                    # Theme metadata
└── theme.json                   # Design configuration
```

## Adding Custom Post Type Templates

### From a Plugin

Use the `cb_listing_starter_custom_templates` filter:

```php
add_filter( 'cb_listing_starter_custom_templates', function( $templates ) {
    $templates[] = array(
        'name'      => 'single-listing',
        'title'     => 'Single Listing',
        'postTypes' => array( 'listing' ),
    );
    return $templates;
});
```

Then create the corresponding template file in:
`templates/single-listing.html`

### Directly in Theme

1. Add the template definition to `theme.json` under `customTemplates`
2. Create the HTML file in the `templates/` directory

## Requirements

- WordPress 6.2+
- PHP 7.4+

## License

GNU General Public License v2 or later
