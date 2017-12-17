<?php
/*
* Post Type: Post (Default)
* Dependancies:
* - MetaBox.io (https://metabox.io/) 
* - MB Custom Post Type (https://metabox.io/plugins/custom-post-type/) -> also makes custom taxonimies
* - MB Show Hide (https://metabox.io/plugins/meta-box-show-hide/)
* - MB Group (https://metabox.io/plugins/meta-box-group/)
* Details:
* This files constructs the fields for a default WP 'page'.
*/
add_filter( 'rwmb_meta_boxes', 'edc_register_default_p' );
function edc_register_default_p( $meta_boxes ) {
    $prefix = 'edc_';
    // ALL PAGES
    $meta_boxes[] = array(
        'title'      => __( 'Post Details', 'textdomain' ),
        'post_types' => array( 'post'),
        'fields' => array(
            array(
               'id'   => $prefix . 'post_heading',
               'name' => __( 'Heading', 'textdomain' ),
               'type' => 'text',
            ),
            array(
               'id'   => $prefix . 'post_subheading',
               'name' => __( 'Subheading', 'textdomain' ),
               'type' => 'wysiwyg',
            )
        )
    );
    return $meta_boxes;
}
?>