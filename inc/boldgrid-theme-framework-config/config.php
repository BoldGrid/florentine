<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {

	// Text domain.
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-florentine';

	// Enable Sticky Footer.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;

	// Enable typography controls.
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;

	// Enable attribution links.
	$boldgrid_framework_configs['temp']['attribution_links'] = true;

	// Enable template wrapper.
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;

	// Specify the parent theme's name.
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';

	// Select the header template to use.
	$boldgrid_framework_configs['template']['header'] = 'generic';

	// Select the footer template to use.
	$boldgrid_framework_configs['template']['footer'] = 'generic';

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'1' => array( '[menu]secondary', '[widget]boldgrid-widget-1' ),
		'5' => array( '[action]boldgrid_site_identity' ),
		'8' => array( '[action]boldgrid_primary_navigation' ),
		'11' => array( '[widget]boldgrid-widget-2', '[menu]tertiary' ),
	);

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
		'6' => array( '[widget]boldgrid-widget-3', '[menu]footer_center', '[action]boldgrid_display_attribution_links' ),
		'7' => array( '[menu]social' ),
	);

	// Social Menus.
	$boldgrid_framework_configs['menu']['footer_menus'][] = 'social';

	// Set the Call To Action Widget to be on Home Page Only.
	$boldgrid_framework_configs['template']['call-to-action'] = 'home-only';

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

	// Override Options per Subcategory.
	switch ( $boldgrid_framework_configs['inspiration']['subcategory_key'] ) {
		case 'Fitness':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][3]['default'] = true;
			break;
		case 'Property Management':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 'General':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;

		// Default Behavior.
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			break;
	}

	// Text Contrast Colors.
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#333333';

	// Typography Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Fredericka the Great';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 13;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'uppercase';

	// Typography Alternate Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Oswald';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 13;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'none';

	// Typography Navigation.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Raleway';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 13;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	// Typography Body.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Open Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 200;

	// Typography Tagline Classes.
	$boldgrid_framework_configs['template']['tagline-classes'] = 'h3 alt-font';

	// Typography Relationships.
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.call-to-action h2'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 6.0,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.mod-alpha h2, .background-beta h2'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 3.0,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.site-footer h2'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 2.4,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.call-to-action h3, .mod-beta h3'] = array(
		'type' => 'subheadings',
		'round' => 'floor',
		'amount' => 1.9,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.page-template-default h4'] = array(
		'type' => 'subheadings',
		'round' => 'floor',
		'amount' => 1.4,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.mod-beta h4'] = array(
		'type' => 'subheadings',
		'round' => 'floor',
		'amount' => 1.1,
	);

	// Menu Locations.
	$boldgrid_framework_configs['menu']['locations']['secondary'] = 'Above Header';
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = 'Below Header';
	$boldgrid_framework_configs['menu']['locations']['social'] = 'Footer Right';
	$boldgrid_framework_configs['menu']['locations']['footer_center'] = 'Footer Left';
	$boldgrid_framework_configs['menu']['footer_menus'][] = 'social';

	// Icons.
	$boldgrid_framework_configs['social-icons']['size'] = '2x';
	$boldgrid_framework_configs['social-icons']['type'] = 'icon-circle';

	/**
	 * Widgets
	 */
	$widget_markup['call-to-action'] = <<<HTML
		<div class="row">
		<div class="col-sm-8 col-md-6">
			<div class="call-to-action">
				<h2>THE GOOD LIFE</h2>
				<h3 class="alt-font">DON'T LEAVE ANYTHING TO CHANCE!</h3>
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
