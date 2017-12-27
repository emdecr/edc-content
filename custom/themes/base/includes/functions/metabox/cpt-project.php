<?php
/*
* Post Type: Project
* Dependancies:
* - MetaBox.io (https://metabox.io/) 
* - MB Custom Post Type (https://metabox.io/plugins/custom-post-type/) -> also makes custom taxonimies
* - MB Show Hide (https://metabox.io/plugins/meta-box-show-hide/)
* - MB Group (https://metabox.io/plugins/meta-box-group/)
* Details:
* This files constructs the fields for a Project CPT.
*/
add_filter( 'rwmb_meta_boxes', 'edc_register_project' );
function edc_register_project( $meta_boxes ) {
    $prefix = 'edc_';
    $meta_boxes[] = array(
        'title'      => __( 'Banner Area', 'textdomain' ),
        'post_types' => array( 'project'),
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
    return $meta_boxes;
}
?>