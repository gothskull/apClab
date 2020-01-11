<?php 

//add_action( 'cmb2_admin_init', 'acl_add_custom_fields_proyectos' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function acl_add_custom_fields_proyectos() 
{
	$prefix = "acl_proyectos_";
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$acl_cmb2_proyectos = new_cmb2_box( array(
		'id'           => $prefix . 'basica_proyecto',
		'title'        => esc_html__( 'Información básica del proyecto', 'cmb2' ),
		'object_types' => array( 'proyecto'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		// 'show_on'      => array(
		// 	'id' => array( 2 ),
		// ), // Specific post IDs to display this metabox
	) );

	$acl_cmb2_proyectos->add_field( array(
		'name'    => esc_html__( 'Descripción del proyecto', 'cmb2' ),
		// 'desc'    => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'      => $prefix . 'desc_short',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
		
	) );

	$acl_cmb2_proyectos->add_field( array(
		'name' => esc_html__( 'Fecha de ingreso', 'cmb2' ),
		// 'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'   => $prefix . 'fecha-ingreso',
		'type' => 'text_date',
		'date_format' => 'd-m-Y',
		
	) );

	$acl_cmb2_proyectos->add_field( array(
		'name' => esc_html__( 'Fech aprox. de entrega', 'cmb2' ),
		// 'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'   => $prefix . 'fecha-salida',
		'type' => 'text_date',
		'date_format' => 'd-m-Y',
		
	) );

	$acl_cmb2_proyectos->add_field( array(
		'name' => esc_html__( 'Test Text', 'cmb2' ),
		'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'   => 'yourprefix_about_text',
		'type' => 'text',
	) );

	$acl_cmb2_proyectos2 = new_cmb2_box( array(
		'id'           => $prefix . 'tecnica_proyecto',
		'title'        => esc_html__( 'Información técnica del proyecto', 'cmb2' ),
		'object_types' => array( 'proyecto'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		// 'show_on'      => array(
		// 	'id' => array( 2 ),
		// ), // Specific post IDs to display this metabox
	) );

	
}