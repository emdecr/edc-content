<?php
/*
* Post Type: Page (Default)
* Dependancies:
* - MetaBox.io (https://metabox.io/) 
* - MB Custom Post Type (https://metabox.io/plugins/custom-post-type/) -> also makes custom taxonimies
* - MB Show Hide (https://metabox.io/plugins/meta-box-show-hide/)
* - MB Group (https://metabox.io/plugins/meta-box-group/)
* Details:
* This files constructs the fields for a default WP 'page'.
*/
add_filter( 'rwmb_meta_boxes', 'edc_register_default' );
function edc_register_default( $meta_boxes ) {
    $prefix = 'edc_';
    // ALL PAGES
    $meta_boxes[] = array(
        'title'      => __( 'Banner Area', 'textdomain' ),
        'post_types' => array( 'page'),
        'fields' => array(
            array(
               'id'   => $prefix . 'banner_heading',
               'name' => __( 'Heading', 'textdomain' ),
               'type' => 'text',
            ),
            array(
               'id'   => $prefix . 'banner_subheading',
               'name' => __( 'Subheading', 'textdomain' ),
               'type' => 'wysiwyg',
            )
        ),
    );
    // HOME
    $meta_boxes[] = array(
        'title'      => __( 'Home', 'textdomain' ),
        'post_types' => array( 'page'),
        'show'   => array(
            // List of page templates (used for page only). Array. Optional.
            'template'    => array( 'template-home.php' )
        ),
        'fields' => array(
            // array(
            //    'id'   => $prefix . 'home_heading',
            //    'name' => __( 'Heading', 'textdomain' ),
            //    'type' => 'text',
            // ),
            // array(
            //    'id'   => $prefix . 'home_over',
            //    'name' => __( 'Overview', 'textdomain' ),
            //    'type' => 'wysiwyg',
            // ),
            // array(
            //     'id'   => $prefix . 'home_img',
            //     'name' => __( 'Image', 'textdomain' ),
            //     'type' => 'file_input',
            // )
        )
    );
    // ABOUT
    $meta_boxes[] = array(
        'title'      => __( 'About - Shelf', 'textdomain' ),
        'post_types' => array( 'page'),
        'show'   => array(
            // List of page templates (used for page only). Array. Optional.
            'template'    => array( 'template-about.php' )
        ),
        'fields' => array(
            array(
               'id'   => $prefix . 'about_shelf_copy',
               'name' => __( 'Content', 'textdomain' ),
               'type' => 'wysiwyg',
            )
        )
    );
    $meta_boxes[] = array(
        'title'      => __( 'About - Latest Track', 'textdomain' ),
        'post_types' => array( 'page'),
        'show'   => array(
            // List of page templates (used for page only). Array. Optional.
            'template'    => array( 'template-about.php' )
        ),
        'fields' => array(
            array(
               'id'   => $prefix . 'about_track_copy',
               'name' => __( 'Content', 'textdomain' ),
               'type' => 'wysiwyg',
            )
        )
    );
    $meta_boxes[] = array(
        'title'      => __( 'About - Github', 'textdomain' ),
        'post_types' => array( 'page'),
        'show'   => array(
            // List of page templates (used for page only). Array. Optional.
            'template'    => array( 'template-about.php' )
        ),
        'fields' => array(
            array(
               'id'   => $prefix . 'about_github_copy',
               'name' => __( 'Content', 'textdomain' ),
               'type' => 'wysiwyg',
            )
        )
    );
    // PROJECTS
    // CONTACT
    return $meta_boxes;
}
?>