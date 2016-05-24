<?php 
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {
	/**
	 * General Configs
	 */
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-florentine'; // Text domain
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;
	$boldgrid_framework_configs['temp']['attribution_links'] = true;

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array (
		array (
			'default' => true,
			'format' => 'palette-primary',
			'colors' => array(
				'#f64747',
				'#f87878',
				'#c83737',
				'#592d2e',
				'#fde0e0',
			) 
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#f6c600',
				'#ffe477',
				'#bc9700',
				'#66581f',
				'#f7efcb',
			) 
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#2ecd71',
				'#6ade9b',
				'#229653',
				'#296642',
				'#cfffe3',
			) 
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#22a8f1',
				'#6ac4f6',
				'#136ea0',
				'#335466',
				'#b8daec',
			) 
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#bf55ed',
				'#d99af4',
				'#7a3b95',
				'#382940',
				'#e6d4ed',
			) 
		),
	);

	// Get Subcategory ID from the Database
	$boldgrid_install_options = get_option( 'boldgrid_install_options', array() );
	$subcategory_id = null;
	if ( !empty( $boldgrid_install_options['subcategory_id'] ) ) {
		$subcategory_id = $boldgrid_install_options['subcategory_id'];
	}

	// Override Options per Subcategory
	switch ( $subcategory_id ) {
		case 15: //<-- Fitness
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][3]['default'] = true;
			break;
		case 18: //<-- Property Management
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 32: //<-- General
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		
		// Default Behavior
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			break;
	}

	// Text Contrast Colors
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#333333';

	// Fonts & Icons
	$boldgrid_framework_configs['font']['types'] = array ( 'Fredericka+the+Great:400|Raleway:400|Oswald:400|Open+Sans:400,600,700' );
	$boldgrid_framework_configs['social-icons']['size'] = '2x';
	$boldgrid_framework_configs['social-icons']['type'] = 'icon-circle';
	
	// Menu Locations
	$boldgrid_framework_configs['menu']['locations']['secondary'] = "Above Header";
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = "Below Header";
	$boldgrid_framework_configs['menu']['locations']['social'] = "Footer Right";
	$boldgrid_framework_configs['menu']['locations']['footer_center'] = "Footer Left";
	$boldgrid_framework_configs['menu']['footer_menus'][] = "social";
	
	/**
	 * Widgets
	 */
	$widget_markup['call-to-action'] = <<<HTML
		<div class="row">
		<div class="col-sm-8 col-md-6">
			<div class="call-to-action">
				<h2>THE GOOD LIFE</h2>
				<h3>DON'T LEAVE ANYTHING TO CHANCE!</h3>
					<p class="p-button-primary">
						<a class="button-primary" href="contact-us">CONTACT US</a>
					</p>
				</div>
		</div> 
		<div class="col-md-6"></div>
	</div><!-- .row -->
HTML;

	// Widget 2
	$boldgrid_framework_configs['widget']['widget_instances']['boldgrid-widget-2'][] = array (
		'title' => 'Call To Action',
		'text' => $widget_markup['call-to-action'],
		'type' => 'visual',
		'filter' => 1,
		'label' => 'black-studio-tinymce'
	);

	// Name Widget Areas
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Above Site Title';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Call To Action';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-3']['name'] = 'Footer Left';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-3']['name'] = 'Footer Left';

	// Configs above will override framework defaults
	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Permanent Marker';
	$controls['logo_font_size']['default'] = 45;
	$controls['logo_margin_top']['default'] = 5;
	$controls['logo_text_transform']['default'] = 'none';

	// Controls above will override framework defaults
	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
