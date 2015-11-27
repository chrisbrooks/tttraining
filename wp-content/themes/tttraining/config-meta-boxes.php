<?php
//uses plugin:  meta box

# https://github.com/rilwis/meta-box/blob/master/demo/demo.php
# http://www.deluxeblogtips.com/meta-box/helper-function-to-get-meta-value

# below... now handled by rw_register_meta_boxes() function below, which checks for conditionals
# https://github.com/rilwis/meta-box/blob/master/demo/better-include.php
//add_filter( 'rwmb_meta_boxes', 'theme_register_meta_boxes' );

function theme_register_meta_boxes( $meta_boxes )
{
	/**
	 * prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * Alt.: You also can make prefix empty to disable it
	 */
	// Better has an underscore as last sign
	$prefix = 'wedding_';

/*********************************
*
*			 HOMEPAGE
*
/********************************/

	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id' => 'Navigation',
		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title' => __( 'Navigation', 'rwmb' ),
		// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
		'pages' => array('page'),
		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context' => 'normal',
		// Order of meta box: high (default), low. Optional.
		'priority' => 'high',
		// Auto save: true, false (default). Optional.
		'autosave' => true,
		// List of meta fields
		'fields' => array(
			array(
				'name'  => 'link Zero Name',
				'id'    => "{$prefix}link_0",
				//'desc'  => '',
				'type' => 'text',
			),
			array(
				'name'  => 'link One Name',
				'id'    => "{$prefix}link_1",
				//'desc'  => '',
				'type' => 'text',
			),
			array(
				'name'  => 'link Two Name',
				'id'    => "{$prefix}link_2",
				//'desc'  => '',
				'type' => 'text',
			),
			array(
				'name'  => 'link Three Name',
				'id'    => "{$prefix}link_3",
				//'desc'  => '',
				'type' => 'text',
			),
			array(
				'name'  => 'link Four Name',
				'id'    => "{$prefix}link_4",
				//'desc'  => '',
				'type' => 'text',
			),
			array(
				'name'  => 'link Five Name',
				'id'    => "{$prefix}link_5",
				//'desc'  => '',
				'type' => 'text',
			),
			array(
				'name'  => 'link Six Name',
				'id'    => "{$prefix}link_6",
				//'desc'  => '',
				'type' => 'text',
			),
			array(
				'name'  => 'link Seven Name',
				'id'    => "{$prefix}link_7",
				//'desc'  => '',
				'type' => 'text',
			),
		),
		'only_on' => array(
			'template' => array('template-homepage.php')
		)
	);

	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id' => 'Home',
		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title' => __( 'Home', 'rwmb' ),
		// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
		'pages' => array('page'),
		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context' => 'normal',
		// Order of meta box: high (default), low. Optional.
		'priority' => 'high',
		// Auto save: true, false (default). Optional.
		'autosave' => true,
		// List of meta fields
		'fields' => array(
			array(
				'name'  => 'Banner Image',
				'id'    => "{$prefix}banner",
				//'desc'  => __( '', 'rwmb' ),
				'type' => 'image_advanced',
				'max_file_uploads' => 1,
			),
		),
		'only_on' => array(
			'template' => array('template-homepage.php', 'template-homepage-2.php', 'template-homepage-fundraiser.php', 'template-homepage-3.php')
		)
	);

	function Accomodation($prefix){

		$return = array(
			array(
				'name'  => 'Background Colour',
				'id'    => "{$prefix}background",
				'type'  => 'text',
			),
			array(
				'name'  => 'title',
				'id'    => "{$prefix}accomodation_title",
				'type'  => 'text',
			),
			array(
				'name'  => 'content',
				'id'    => "{$prefix}content",
				'type'  => 'textarea',
				'desc'  => '<p>&nbsp;</p>',
				'rows'  => '10'
			)
		);

		for ($i=1; $i <= 3; $i++) {
			$return[] = array(
				'name'  => 'Hotel '.$i.' - Title',
				'id'    => "{$prefix}hotel".$i."_title",
				//'desc'  => '<p>&nbsp;</p>',
				'type' => 'text',
			);
			$return[] = array(
				'name'  => 'Hotel '.$i.' Address',
				'id'    => "{$prefix}address".$i."_line_1",
				//'desc'  => '<p>&nbsp;</p>',
				'type' => 'text',
			);
			$return[] = array(
				'name'  => 'Hotel '.$i.' Town/City',
				'id'    => "{$prefix}town/city".$i."",
				//'desc'  => '<p>&nbsp;</p>',
				'type' => 'text',
			);
			$return[] = array(
				'name'  => 'Hotel '.$i.' Postcode',
				'id'    => "{$prefix}postcode".$i."",
				//'desc'  => '<p>&nbsp;</p>',
				'type' => 'text',
			);
			$return[] = array(
				'name'  => 'Hotel '.$i.' Phone Number',
				'id'    => "{$prefix}number".$i."",
				//'desc'  => '<p>&nbsp;</p>',
				'type' => 'text',
			);
			$return[] = array(
				'name'  => 'Hotel '.$i.' Cost',
				'id'    => "{$prefix}cost".$i."",
				//'desc'  => '<p>&nbsp;</p>',
				'type' => 'text',
			);
			$return[] = array(
				'name'  => 'Hotel '.$i.' Url',
				'id'    => "{$prefix}url".$i."",
				'desc'  => '<p>&nbsp;</p>',
				'type' => 'text',
			);
		}

		return $return;
	}

	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id' => 'Accomodation',
		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title' => __( 'Accomodation', 'rwmb' ),
		// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
		'pages' => array('page'),
		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context' => 'normal',
		// Order of meta box: high (default), low. Optional.
		'priority' => 'high',
		// Auto save: true, false (default). Optional.
		'autosave' => true,
		// List of meta fields
		'fields' => Accomodation($prefix),
		'only_on' => array(
			'template' => array('template-homepage.php')
		)
	);

	function schedule_icons(){

		$options = array(
			'arrival' => 'Hand Shake',
			'champagne' => 'Champagne Glasses',
			'food' => 'Knife And Fork',
			'guests' => 'People',
			'microphone' => 'Microphone',
			'rings' => 'Wedding Rings',
			'speaches' => 'Speach Bubbles',
		);

		return $options;

	}

	function Schedule($prefix){

		$return = array(
			array(
				'name'  => 'Schedule Background',
				'id'    => "{$prefix}_schedule_background",
				'desc'  => '<p>&nbsp;</p>',
				'type' => 'image_advanced',
				'max_file_uploads' => 1,
			)
		);

		for ($i=1; $i <= 6; $i++) {

			$return[] = array(
				'name'  => 'Activity '.$i.' Icon',
				'id'    => "{$prefix}schedule".$i."_icon",
				'type' => 'select',
				'options' => schedule_icons(),
			);

			$return[] = array(
				'name'  => 'Activity '.$i.' Colour',
				'id'    => "{$prefix}schedule".$i."_colour",
				//'desc'  => '<p>&nbsp;</p>',
				'type' => 'text',
			);
			$return[] = array(
				'name'  => 'Activity '.$i.' Time',
				'id'    => "{$prefix}schedule".$i."_time",
				//'desc'  => '<p>&nbsp;</p>',
				'type' => 'text',
			);
			$return[] = array(
				'name'  => 'Activity '.$i.' Title',
				'id'    => "{$prefix}schedule".$i."_title",
				//'desc'  => '<p>&nbsp;</p>',
				'type' => 'text',
			);
			$return[] = array(
				'name'  => 'Activity '.$i.' Content',
				'id'    => "{$prefix}schedule".$i."_content",
				'desc'  => '<p>&nbsp;</p>',
				'type'  => 'textarea',
				'rows'  => '5',
			);
		}

		return $return;
	}

	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id' => 'Schedule',
		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title' => __( 'Schedule', 'rwmb' ),
		// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
		'pages' => array('page'),
		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context' => 'normal',
		// Order of meta box: high (default), low. Optional.
		'priority' => 'high',
		// Auto save: true, false (default). Optional.
		'autosave' => true,
		// List of meta fields
		'fields' => Schedule($prefix),
		'only_on' => array(
			'template' => array('template-homepage.php')
		)
	);

	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id' => 'Gifts',
		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title' => __( 'Gifts', 'rwmb' ),
		// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
		'pages' => array('page'),
		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context' => 'normal',
		// Order of meta box: high (default), low. Optional.
		'priority' => 'high',
		// Auto save: true, false (default). Optional.
		'autosave' => true,
		// List of meta fields
		'fields' => array(
			array(
				'name'  => 'Background Colour',
				'id'    => "{$prefix}gifts_background",
				'type' => 'text',
			),
			array(
				'name'  => 'title',
				'id'    => "{$prefix}gifts_title",
				'type'  => 'text',
			),
			array(
				'name'  => 'Content',
				'id'    => "{$prefix}gifts_content",
				'type' => 'wysiwyg',
				'options' => array('textarea_rows'=>6),
			)
		),
		'only_on' => array(
			'template' => array('template-homepage.php')
		)
	);

	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id' => 'RSVP',
		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title' => __( 'RSVP', 'rwmb' ),
		// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
		'pages' => array('page'),
		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context' => 'normal',
		// Order of meta box: high (default), low. Optional.
		'priority' => 'high',
		// Auto save: true, false (default). Optional.
		'autosave' => true,
		// List of meta fields
		'fields' => array(
			array(
				'name'  => 'Title',
				'id'    => "{$prefix}rsvp_title",
				'type' => 'text',
			),
			array(
				'name'  => 'Background colour',
				'id'    => "{$prefix}rsvp_background",
				'type' => 'text',
			),
			array(
				'name'  => 'Rsvp content',
				'id'    => "{$prefix}rsvp_content",
				'type' => 'wysiwyg',
				'options' => array('textarea_rows'=>6)
			)
		),
		'only_on' => array(
			'template' => array('template-homepage.php')
		)
	);

	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id' => 'Instagram',
		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title' => __( 'Instagram', 'rwmb' ),
		// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
		'pages' => array('page'),
		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context' => 'normal',
		// Order of meta box: high (default), low. Optional.
		'priority' => 'high',
		// Auto save: true, false (default). Optional.
		'autosave' => true,
		// List of meta fields
		'fields' => array(
			array(
				'name'  => 'Instagram title',
				'id'    => "{$prefix}instagram_title",
				'type' => 'text',
			),
			array(
				'name'  => 'Background colour',
				'id'    => "{$prefix}instagram_background",
				'type' => 'text',
			),
			array(
				'name'  => 'Instagram content',
				'id'    => "{$prefix}instagram_content",
				'type' => 'wysiwyg',
				'options' => array('textarea_rows'=>6)
			)
		),
		'only_on' => array(
			'template' => array('template-homepage.php')
		)
	);

	function Taxi($prefix){

		$return = array(
			array(
				'name'  => 'Background Colour',
				'id'    => "{$prefix}taxi_background",
				'type'  => 'text',
			),
			array(
				'name'  => 'title',
				'id'    => "{$prefix}taxi_title",
				'type'  => 'text',
			),
			array(
				'name'  => 'content',
				'id'    => "{$prefix}taxi_content",
				'type' => 'wysiwyg',
				'options' => array('textarea_rows'=>10),
				'rows'  => '10'
			)
		);

		for ($i=1; $i <= 3; $i++) {
			$return[] = array(
				'name'  => 'Taxi Company '.$i.' - Title',
				'id'    => "{$prefix}taxi".$i."_title",
				//'desc'  => '<p>&nbsp;</p>',
				'type' => 'text',
			);
			$return[] = array(
				'name'  => 'Taxi Company '.$i.' Number',
				'id'    => "{$prefix}taxi_number".$i."",
				//'desc'  => '<p>&nbsp;</p>',
				'type' => 'text',
			);
			$return[] = array(
				'name'  => 'Taxi Company '.$i.' Url',
				'id'    => "{$prefix}taxi_url".$i."",
				'desc'  => '<p>&nbsp;</p>',
				'type' => 'text',
			);
		}

		return $return;
	}

	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id' => 'Taxi',
		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title' => __( 'Taxi', 'rwmb' ),
		// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
		'pages' => array('page'),
		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context' => 'normal',
		// Order of meta box: high (default), low. Optional.
		'priority' => 'high',
		// Auto save: true, false (default). Optional.
		'autosave' => true,
		// List of meta fields
		'fields' => Taxi($prefix),
		'only_on' => array(
			'template' => array('template-homepage.php')
		)
	);

	return $meta_boxes;
}


/**
* Register meta boxes
*
* @return void
*/
function rw_register_meta_boxes()
{
	$meta_boxes = theme_register_meta_boxes(null);
	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) ) {
		foreach ( $meta_boxes as $meta_box ) {
			if ( isset( $meta_box['only_on'] ) && ! rw_maybe_include( $meta_box['only_on'] ) ) {
				continue;
			}
			new RW_Meta_Box( $meta_box );
		}
	}
}
add_action( 'admin_init', 'rw_register_meta_boxes' );

// conditional metabox include
/**
* Check if meta boxes is included
*
* @return bool
*/
function rw_maybe_include( $conditions ) {
	// Include in back-end only
	if ( ! defined( 'WP_ADMIN' ) || ! WP_ADMIN ) {
		return false;
	}
	// Always include for ajax
	if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
		return true;
	}
	if ( isset( $_GET['post'] ) ) {
		$post_id = intval( $_GET['post'] );
	}
	elseif ( isset( $_POST['post_ID'] ) ) {
		$post_id = intval( $_POST['post_ID'] );
	}
	else {
		$post_id = false;
	}
	$post_id = (int) $post_id;
	$post = get_post( $post_id );
	foreach ( $conditions as $cond => $v ) {
		// Catch non-arrays too
		if ( ! is_array( $v ) ) {
			$v = array( $v );
		}
		switch ( $cond ) {
			case 'id':
				if ( in_array( $post_id, $v ) ) {
					return true;
				}
				break;
			case 'parent':
				$post_parent = $post->post_parent;
				if ( in_array( $post_parent, $v ) ) {
					return true;
				}
				break;
			case 'slug':
				$post_slug = $post->post_name;
				if ( in_array( $post_slug, $v ) ) {
					return true;
				}
				break;
			case 'category': //post must be saved or published first
				$categories = get_the_category( $post->ID );
				$catslugs = array();
				foreach ( $categories as $category )
				{
					array_push( $catslugs, $category->slug );
				}
				if ( array_intersect( $catslugs, $v ) )
				{
					return true;
				}
				break;
			case 'template':
				$template = get_post_meta( $post_id, '_wp_page_template', true );
				if ( in_array( $template, $v ) )
				{
					return true;
				}
				break;
		}
	}
	// If no condition matched
	return false;
}

?>