# Site Maintenance Guide

This guide is for someone familiar with WordPress who needs to maintain and update the KC Tennis Blast website.

## Pages

The site uses the following pages:

- Home
- Programs
- Coaches
- Membership
- Pro Shop
- Venue Hire & Events
- FAQ
- Timetable
- Contact

The homepage is set to a static page under **Settings → Reading**.

## Pages vs Posts

This site primarily uses **pages** for all content. Posts are not actively used. If news or announcements are needed in the future, posts can be used and displayed on a blog page.

## Adding and Editing Content

1. Go to **Pages → All Pages** in the WordPress dashboard
2. Click on the page you want to edit
3. Use the WordPress block editor to make changes
4. Click **Update** to save

### Working with Coloured Sections

Some pages use alternating white and coloured background sections (e.g. the Coaches page). To create one:

1. Add a **Columns** block in the editor
2. Choose your column layout (e.g. 2 columns for text + image)
3. Add your content inside the columns
4. Select the **Columns** block (not an individual column — click the Columns icon in the toolbar or use List View)
5. Open block settings in the right sidebar
6. Under **Color**, set the background colour
7. The theme CSS will handle making it full-width automatically

### Adding a New Page

1. Go to **Pages → Add New**
2. Add your content using the block editor
3. Publish the page
4. Add it to the navigation under **Appearance → Menus**

## Navigation

The site has two menus:

- **Primary** — the main navigation bar across the top, including submenus (e.g. Programs has dropdown items like General Programs Information, Program Fee Structure)
- **Header CTA Button** — the "Register" button on the right side of the header

To edit menus, go to **Appearance → Menus**, select the menu you want to edit, and add or reorder items.

### Adding a Submenu Item

1. Go to **Appearance → Menus**
2. Add the new page to the menu
3. Drag it slightly to the right underneath the parent item — it will indent to show it's a submenu item
4. Click **Save Menu**

Submenu items will appear as a dropdown when hovering over the parent item in the navigation bar.

## Plugins

### WPForms

WPForms is used for the contact/registration form. To edit the form:

1. Go to **WPForms → All Forms**
2. Click on the form to open the builder
3. Drag and drop fields to add or rearrange
4. Click **Save** when done

The form is embedded on pages using a WPForms block in the editor. To add the form to a new page, add a **WPForms** block and select the form from the dropdown.

### WP Go Maps

WP Go Maps is used to display the venue location. To edit the map:

1. Go to **Maps → All Maps** in the dashboard
2. Click on the map to edit the marker location, zoom level, or styling
3. Click **Save** when done

The map is embedded on pages using a shortcode. To add the map to a new page, add a **Shortcode** block and paste the map shortcode (found on the Maps settings page).

## Important Notes

- Do not install page builder plugins — the site uses a custom theme that relies on the default block editor
- Keep the homepage set to a static page in **Settings → Reading**
