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

	// Add container to call to action widget.
	$boldgrid_framework_configs['template']['pages']['global']['call-to-action'] = 'container';

	// No container on home page.
	$boldgrid_framework_configs['template']['pages']['page_home.php']['entry-content'] = '';

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'1' => array( '[menu]secondary', '[widget]boldgrid-widget-1' ),
		'5' => array( '[action]boldgrid_site_identity' ),
		'8' => array( '[action]boldgrid_primary_navigation' ),
		'11' => array( '[menu]tertiary' ),
	);

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
		'6' => array( '[widget]boldgrid-widget-3', '[menu]footer_center', '[action]boldgrid_display_attribution_links' ),
		'7' => array( '[action]boldgrid_social_followme_text', '[menu]social' ),
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
		case 'Consulting':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			$cta_h2 = 'RELIABLE DIRECTION';
			$cta_h3 = 'OPTIMAL BUSINESS SOLUTIONS';
			break;
		case 'Design':
			$cta_h2 = 'DESIGN REFINED';
			$cta_h3 = 'YOUR VISION NEVER MATTERED MORE';
			break;
		case 'Fashion':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			$cta_h2 = 'STYLISH COMFORT';
			$cta_h3 = 'INDOOR AND OUTDOOR APPAREL';
			break;
		case 'Fitness':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			$cta_h2 = 'WINNING FITNESS';
			$cta_h3 = 'JOIN A LEAGUE TODAY';
			break;
		case 'General':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			$cta_h2 = 'BETTER WRITING';
			$cta_h3 = 'PROFESSIONAL WRITERS AT YOUR SERVICE';
			break;
		case 'Home Repair':
			$cta_h2 = 'RUSTIC CHARM';
			$cta_h3 = 'AFFORDABLE PRESERVATION SERVICES';
			break;
		case 'Photography':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			$cta_h2 = 'FANTASY CAPTURED';
			$cta_h3 = 'MAGIC IN EVERY SHOT';
			break;
		case 'Property Management':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			$cta_h2 = 'STRESS FREE COMFORT';
			$cta_h3 = 'WE MANAGE YOUR LUXURY';
			break;
		case 'Real Estate':
			$cta_h2 = 'TOWER ABOVE';
			$cta_h3 = 'PREMIUM SPACE FOR YOUR PREMIUM BUSINESS';
			break;
		case 'Restaurant':
			$cta_h2 = 'UTOPIA, LAYERED';
			$cta_h3 = 'YOU OWE IT TO YOUR TASTE BUDS';
			break;

		// Default Behavior.
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			$cta_h2 = 'THE GOOD LIFE';
			$cta_h3 = 'DON\'T LEAVE ANYTHING TO CHANCE';
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
				<h2>$cta_h2</h2>
				<h3 class="alt-font">$cta_h3</h3>
					<p class="p-button-primary">
						<a class="button-primary" href="contact-us">CONTACT US</a>
					</p>
				</div>
		</div>
		<div class="col-md-6"></div>
	</div><!-- .row -->
HTML;

	// Widget 1
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

/**
 * Display Follow Me text next to social media icons.
 *
 * @since 1.15
 */
function boldgrid_social_followme_text() {
	// If we don't have a social media menu, don't show followme text.
	$nav_menu_locations = get_nav_menu_locations();
	if( empty( $nav_menu_locations[ 'social' ] ) ) {
		return;
	} ?>
	<div class="row">
		<div class="col-md-12 follow-me text-center">
			<h2>Follow Me</h2>
		</div>
	</div>
<?php }
add_action( 'boldgrid_social_followme_text', 'boldgrid_social_followme_text' );
