<?php
/*
* Post Type: Record
* Dependancies:
* - MetaBox.io (https://metabox.io/) 
* - MB Custom Post Type (https://metabox.io/plugins/custom-post-type/) -> also makes custom taxonimies
* - MB Show Hide (https://metabox.io/plugins/meta-box-show-hide/)
* - MB Group (https://metabox.io/plugins/meta-box-group/)
* Details:
* This files constructs the fields for a Record CPT.
*/
add_filter( 'rwmb_meta_boxes', 'edc_register_record' );
function edc_register_record( $meta_boxes ) {
    $prefix = 'edc_';
    // ALL PAGES
    $meta_boxes[] = array(
        'title'      => __( 'Banner Area', 'textdomain' ),
        'post_types' => array('record'),
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
    $meta_boxes[] = array(
        'title'      => __( 'Content Blocks', 'textdomain' ),
        'post_types' => array('record'),
        'fields' => array(
            array(
                'id' => $prefix . 'content_blocks',
                'type' => 'group',
                'clone'  => true,
                'sort_clone' => true,
                'collapsible' => true,
                'group_title' => 'Block {#}', // ID of the subfield
                'save_state' => true,
                'fields' => array(
                    array(
                        'name'    => 'Fields',
                        'id'      => $prefix . 'block_fields',
                        'type'    => 'checkbox_list',
                        // Options of checkboxes, in format 'value' => 'Label'
                        'options' => array(
                            'content'   => 'Content',
                            'html'      => 'HTML',
                            'image'     => 'Image'
                        ),
                        // Display options in a single row?
                        'inline' => true,
                        // Display "Select All / None" button?
                        'select_all_none' => false,
                    ),                    
                    array(
                        'name'  => __( 'Copy', 'textdomain' ),
                        'desc'  => '',
                        'id'    => $prefix . 'block_copy',
                        'type'  => 'wysiwyg',
                        'visible' => array( 'edc_block_fields', 'contains', array( 'content' ) )
                    ),
                    array(
                        'name'  => __( 'Raw HTML', 'textdomain' ),
                        'desc'  => '',
                        'id'    => $prefix . 'block_raw',
                        'type'  => 'textarea',
                        'visible' => array( 'edc_block_fields', 'contains', array( 'html' ) )
                    ),
                    array(
                        'name'  => __( 'Image', 'textdomain' ),
                        'desc'  => '',
                        'id'    => $prefix . 'block_img',
                        'type'  => 'file_input',
                        'visible' => array( 'edc_block_fields', 'contains', array( 'image' ) )
                    ),
                ),
            ),
        )
    );
    return $meta_boxes;
}
?>