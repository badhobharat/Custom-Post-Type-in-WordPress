//Init Hook for the custom post type

add_action('init', 'tourism_custom_post_type');

function tourism_custom_post_type() {

$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);

$labels = array(
'name' => _x('Tourism', 'plural'),
'singular_name' => _x('Tourism', 'singular'),
'menu_name' => _x('Tourism', 'admin menu'),
'name_admin_bar' => _x('Tourism', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Tourism'),
'new_item' => __('New Tourism'),
'edit_item' => __('Edit Tourism'),
'view_item' => __('View Tourism'),
'all_items' => __('All Tourism'),
'search_items' => __('Search Tourism'),
'not_found' => __('No Tourism found.'),
);

$args = array(
'supports' => $supports,
'labels' => $labels,
'description' => 'Holds our News and specific data',
'public' => true,
'taxonomies' => array( 'category', 'post_tag' ),
'show_ui' => true,
'show_in_menu' => true,
'show_in_nav_menus' => true,
'show_in_admin_bar' => true,
'can_export' => true,
'capability_type' => 'post',
 'show_in_rest' => true,
'query_var' => true,
'rewrite' => array('slug' => 'tourism'),
'has_archive' => true,
'hierarchical' => false,
'menu_position' => 6,
'menu_icon' => 'dashicons-megaphone',
);

register_post_type('tourism', $args); // Register Post type
}
