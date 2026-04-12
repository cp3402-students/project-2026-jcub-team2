# Theme Documentation

This guide explains the KC Tennis Blast custom WordPress theme so that another developer could efficiently take over development.

## Theme Features

- Built from the [Underscores (_s)](https://underscores.me/) starter theme
- Custom logo support with flexible width and height
- Two registered navigation menus: Primary (main nav bar) and Header CTA Button (register button)
- Four footer widget areas: Branding, Contact, Office Hours, Connect — all editable through Appearance → Widgets
- Post thumbnail support
- HTML5 markup for search forms, comments, and galleries
- Custom background support
- Google Fonts: Poppins for headings, Montserrat for body text and buttons
- Full-width coloured content sections that stretch edge-to-edge while keeping text aligned
- Dropdown submenus with centred hover positioning
- Footer content is fully dynamic with no hardcoded text

## Key Files and Structure

### Core Template
- **style.css** — main stylesheet, all custom CSS is at the bottom under "Custom Additions"
- **functions.php** — theme setup, menu registration, widget areas, font enqueuing
- **header.php** — three-part flexbox header: logo (left), nav (centre), CTA button (right)
- **footer.php** — four-column widget footer with dynamic copyright

## Key Custom Files
These are the files that make this theme unique:

- **header.php** — custom three-part layout with logo, centred nav, and CTA button
- **footer.php** — custom four-column widget layout with dynamic copyright
- **style.css (Custom Additions section)** — all the branded styling including header, footer, navigation, buttons, forms, content layout, and typography
- **functions.php (bottom section)** — footer widget area registration, CTA menu registration, and Google Fonts enqueuing
- **template-parts/content-page.php** — page title output removed so titles are controlled in the block editor

All other files remain as provided by Underscores and handle standard WordPress functionality like comments, search results, archives, and accessibility.

## Conventions Used

- **No hardcoded content** — all text, links, and media come from WordPress pages, menus, and widgets
- **Template parts** — all content display uses `get_template_part()` to keep templates clean and modular
- **Translation ready** — all user-facing strings use `esc_html__()` or `esc_html_e()` with the `kctennisblast-theme` text domain
- **CSS organisation** — follows the default Underscores structure with all custom styles grouped at the bottom under "Custom Additions"
- **Sidebar not used** — the sidebar has been removed from all page templates
- **Menus registered in functions.php** — Primary menu in `kctennisblast_theme_setup()`, CTA menu in `kctennisblast_theme_register_menus()`
- **Widget areas registered in functions.php** — four footer widget areas registered in `kctennisblast_widgets_init()`

## Important Design Decisions

### Colour Palette

The site's colour scheme is based on the KC Tennis Blast staff uniform, as requested by the client. The orange header and footer, red CTA button, and gray accent colours are drawn from the uniform's branding. This keeps the website visually connected to the club's in-person identity.

### Typography

- **Headings (h1, h2):** Poppins
- **Body text, buttons:** Montserrat

Fonts are enqueued in `functions.php` via `kctennisblast_fonts()`.

### Header

The header uses a three-part flexbox layout: logo on the left via `the_custom_logo()`, primary navigation centred, and a CTA button on the right. The CTA is a separate registered menu so the client can change the button link without editing code. The active menu item gets a white underline and white text colour.

### Footer

The footer uses four dynamic widget areas in a flexbox layout. Content is managed entirely through Appearance → Widgets. The footer only renders the widget section if at least one widget area has content. The copyright line dynamically outputs the current year and site name.

### Page Titles

Page titles have been removed from `template-parts/content-page.php`. If a title is needed on a page, it should be added manually in the block editor. This gives content editors control over whether a title appears.

### Full-Width Content Sections

The CSS layout allows coloured content blocks (Columns or Group blocks with a background colour) to stretch edge-to-edge while keeping text consistently padded. This is handled by:

- `main` having zero margins
- `.entry-content > *` getting `7.5vw` horizontal padding
- Background blocks stretching to 100% width with matching `7.5vw` padding
- `vw` units used instead of percentages so padding calculates from the same base regardless of container width

### Submenu Behaviour

Submenus are hidden off-screen with `left: -999em` and shown on hover using `left: 50%; transform: translateX(-50%)` to centre them under the parent item.

## Important

- **Do not add margins to `main`** — content spacing is handled by `.entry-content > *` padding. Adding margins to `main` will break the full-width background sections.
- **`body` has `overflow-x: hidden`** — this prevents horizontal scrollbars caused by the full-width layout. Removing it will cause layout issues.
