# More Than Post
## Integrating to your theme
Create or edit your hook function for `after_setup_theme` action with priority `0` and call `add_theme_support` for the
desired custom post types.
## Custom post types
* Event: `add_theme_support('event-post-type')`
* Partner: `add_theme_support('partner-post-type')`
* Service: `add_theme_support('service-post-type')`
* Team Person: `add_theme_support('team-person-post-type')`
