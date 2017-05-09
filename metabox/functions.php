<?php  

add_action( 'cmb2_admin_init', 'cmb2_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_metaboxes() {

	// Start with an underscore to hide fields from custom fields list
	// $prefix = '_yourprefix_';

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'slider_part',
		'title'         => __( 'Add slider', 'cmb2' ),
		'object_types'  => array( 'slider', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Regular text field start here

	//product image upload
	$cmb->add_field( array(
	'name'    => 'upload product image',
	'desc'    => 'Upload hosting image',
	'id'      => 'product_image',
	'type'    => 'file',
	'column' => array(
		'position' => 2,
		'name'     => 'Slider image',
	),
	// Optional:
	'options' => array(
		'url' => true, // Hide the text input for the url
	),
	'text'    => array(
		'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
	)

) );

	// text area small

	$cmb->add_field( array(
	'name'    => '1st word',
	'desc'    => 'field description (optional)',
	'default' => 'start at',
	'id'      => 'start_at',
	'type'    => 'text_small'
) );
	$cmb->add_field( array(
	'name' => 'Start Money',
	'desc' => 'Money field',
	'id' => 'start_money',
	'type' => 'text_money',
	// 'before_field' => '£', // Replaces default '$'
) );

//for large test area 
	$cmb->add_field( array(
	'name'    => 'service description',
	'desc'    => 'full description goes here',
	'id'      => 'ser_des',
	'type'    => 'wysiwyg',
	'options' => array(
		    'textarea_rows' => get_option('default_post_edit_rows', 3),
		),
) );

//For service post type
	$cmb = new_cmb2_box( array(
		'id'            => 'service_part',
		'title'         => __( 'Add Service', 'cmb2' ),
		'object_types'  => array( 'service', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );


	// add field type for service here.
     
     $cmb->add_field( array(
	'name'    => 'font-awsome',
	'desc'    => 'Add font-awesome icon',
	'default' => 'fa fa-',
	'id'      => 'ser_font_awesome',
	'type'    => 'text_small'
    ) );

     $cmb->add_field( array(
	'name'    => 'service title',
	'desc'    => 'Add Service Title',
	'default' => 'EMAIL HOSTING',
	'id'      => 'ser_title',
	'type'    => 'text'
    ) );

     $cmb->add_field( array(
	'name' => 'Service description',
	'desc' => 'service description',
	'default' => 'write some description Here',
	'id' => 'ser_small_text_area',
	'type' => 'textarea_small'
) );

     //For Domain post type
	$cmb = new_cmb2_box( array(
		'id'            => 'domain_part',
		'title'         => __( 'Domain Info', 'cmb2' ),
		'object_types'  => array( 'domain', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
		'show_on'    => array(

				  'key' => 'id',
				  'value'=> '72' 
		) 
	) );


	$cmb->add_field( array(
	'name'    => 'select your Domain',
	'id'      => 'wiki_test_radio_inline',
	'type'    => 'radio_inline',
	'options' => array(
		'one'   => __( '.com ', 'cmb2' ),
		'two'   => __( '.net', 'cmb2' ),
		'three' => __( '.org ', 'cmb2' ),
		'four'  => __( '.info  ', 'cmb2' ),
		'five'  => __( '.biz   ', 'cmb2' ),
		'six'   => __( '.us  ', 'cmb2' ),
		 
	),
	'default' => 'standard',
 ) );

	$group_field_id = $cmb->add_field( array(
	'id'          => 'domain_name_cost',
	'type'        => 'group',
	'description' => __( 'Generates reusable form entries', 'cmb2' ),
	// 'repeatable'  => false, // use false if you want non-repeatable group
	'options'     => array(
		'group_title'   => __( 'Domain name and cost-"{#}"', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add new domain and cost', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		// 'closed'     => true, // true to have the groups closed by default
	),

) );

	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
$cmb->add_group_field( $group_field_id, array(
	'name' => 'Domain Name',
	'id'   => 'domain_name',
	'type' => 'text_small',
	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Per Domain Cost',
	'desc' => 'field description (optional)',
	'id' => 'per_domain_cost',
	'type' => 'text_money',
	// 'before_field' => '£', // Replaces default '$'
) );

 $cmb->add_field( array(
	'name'    => 'Free Domain Name',
	'desc'    => 'Right category title',
	'default' => 'Free with  every Domain name',
	'id'      => 'Free_domain_cap',
	'type'    => 'text',
) );

$right_domain_category = $cmb->add_field(array(
	'id'      => 'right_domain_group',
	'type'    => 'group',
	'description' => 'This is Group field for right domain category',
	'options'   => array(
		'group_title'   => __( 'Domain facilites-"{#}"', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add new domain and cost', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		// 'closed'     => true, // true to have the groups closed by default
	),

));
$cmb->add_group_field($right_domain_category, array(
	'name' => 'font-awsome add',
	'desc' => 'this is for font-awesome field',
	'default' => 'fa fa-',
	'id'    => 'right_font_awesome',
	'type'    => 'text_small'
    ) );
$cmb->add_group_field($right_domain_category, array(
	'name' => 'right group text',
	'desc' => 'this is for facilities text',
	'default' => 'Add title text',
	'id'    => 'right_heading_text',
	'type'    => 'text'
    ) );
$cmb->add_group_field($right_domain_category, array(
	'name' => 'right group textarea',
	'desc' => 'this is for facilities textarea',
	'default' => 'Add some in textarea',
	'id'    => 'right_textarea_text',
	'type'    => 'textarea_small'
    ) );





	
	// Add other metaboxes as needed


}