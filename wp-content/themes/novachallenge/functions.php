<?php

add_action( 'init', 'add_sections' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function add_sections() {
  $labels = array(
    'name'               => _x( 'Sections', 'post type general name', 'your-plugin-textdomain' ),
    'singular_name'      => _x( 'Section', 'post type singular name', 'your-plugin-textdomain' ),
    'menu_name'          => _x( 'Sections', 'admin menu', 'your-plugin-textdomain' ),
    'name_admin_bar'     => _x( 'Section', 'add new on admin bar', 'your-plugin-textdomain' ),
    'add_new'            => _x( 'Add New', 'section', 'your-plugin-textdomain' ),
    'add_new_item'       => __( 'Add New Section', 'your-plugin-textdomain' ),
    'new_item'           => __( 'New Section', 'your-plugin-textdomain' ),
    'edit_item'          => __( 'Edit Section', 'your-plugin-textdomain' ),
    'view_item'          => __( 'View Section', 'your-plugin-textdomain' ),
    'all_items'          => __( 'All Sections', 'your-plugin-textdomain' ),
    'search_items'       => __( 'Search Sections', 'your-plugin-textdomain' ),
    'parent_item_colon'  => __( 'Parent Sections:', 'your-plugin-textdomain' ),
    'not_found'          => __( 'No sections found.', 'your-plugin-textdomain' ),
    'not_found_in_trash' => __( 'No sections found in Trash.', 'your-plugin-textdomain' )
  );

  $args = array(
    'labels'             => $labels,
    'description'        => __( 'Description.', 'your-plugin-textdomain' ),
    'public'             => false,
    'publicly_queryable' => false,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'section' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  );

  register_post_type( 'section', $args );
}

// [bartag foo="foo-value"]
function nova_image_handler( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'caption' => ''
    ), $atts );

    $doc = new DOMDocument();
    $doc->loadHTML($content);
    $image = $doc->getElementsByTagName('img')->item(0);
    $src = $image->getAttribute('src');  
    ob_start();
?>
        <li>
            <a href="<?php echo $src; ?>" title="Event PhotoGallery" rel="prettyPhoto[gallery]">
                <img src="<?php echo $src; ?>" alt="<?php echo $a['caption']; ?>" class="img-responsive">
            <div class="img-caption"><span><?php echo $a['caption']; ?></span></div></a>
        </li>
    <?php
    return ob_get_clean();
}

add_shortcode( 'nova_image', 'nova_image_handler' );