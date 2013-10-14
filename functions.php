<?php 
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );
add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size( 101, 86, true ); // 50 pixels wide by 50 pixels tall, crop mode

function custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 180 );

function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Home right sidebar',
		'id' => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );    

// Registers the new post type and taxonomy
function wpt_shop_posttype() {
	register_post_type( 'shops',
		array(
			'labels' => array(
				'name' => __( 'Shops' ),
				'singular_name' => __( 'Shop' ),
				'add_new' => __( 'Add New Shop' ),
				'add_new_item' => __( 'Add New Shop' ),
				'edit_item' => __( 'Edit Shop' ),
				'new_item' => __( 'Add New Shop' ),
				'view_item' => __( 'View Shop' ),
				'search_items' => __( 'Search Shop' ),
				'not_found' => __( 'No shops found' ),
				'not_found_in_trash' => __( 'No shops found in trash' )
			),
			'public' => true,
			'supports' => array( 'title', 'thumbnail', 'comments' ),
			'capability_type' => 'post',
			'rewrite' => array("slug" => "shops"), // Permalinks format
			'menu_position' => 5,
			'register_meta_box_cb' => 'add_shop_metaboxes'
		)
	);
}
add_action( 'init', 'wpt_shop_posttype' );
add_action( 'add_meta_boxes', 'add_shop_metaboxes' );


function add_shop_metaboxes(){
	add_meta_box('wpt_shop_website', 'Shop website', 'wpt_shop_website', 'shops', 'side', 'default');
	add_meta_box('wpt_shop_phone', 'Shop phone number', 'wpt_shop_phone', 'shops', 'side', 'default');
	add_meta_box('wpt_shop_description', 'Shop Description', 'wpt_shop_description', 'shops', 'normal', 'high');
	add_meta_box('wpt_shop_address', 'Shop Address', 'wpt_shop_address', 'shops', 'normal', 'high');
}

function wpt_shop_description(){
	global $post;
	echo '<input type="hidden" name="shopmeta_noncename" id="shopmeta_noncename" value="'.
	wp_create_nonce(plugin_basename(__FILE__)) . '" />';

	$description = get_post_meta($post->ID, '_description', true);

	echo '<textarea type="text" name="_description" value="'. $description . '"class="widefat" maxlength="200"></textarea>';
}
function wpt_shop_website(){
	global $post;
	echo '<input type="hidden" name="shopmeta_noncename" id="shopmeta_noncename" value="'.
	wp_create_nonce(plugin_basename(__FILE__)) . '" />';

	$website = get_post_meta($post->ID, '_website', true);

	echo '<input type="text" name="_website" value="'. $website . '"class="widefat" />';
}
function wpt_shop_phone(){
	global $post;
	echo '<input type="hidden" name="shopmeta_noncename" id="shopmeta_noncename" value="'.
	wp_create_nonce(plugin_basename(__FILE__)) . '" />';

	$phone = get_post_meta($post->ID, '_phone', true);

	echo '<input type="text" name="_phone" value="'. $phone . '"class="widefat" />';
}
function wpt_shop_address(){
	global $post;
	echo '<input type="hidden" name="shopmeta_noncename" id="shopmeta_noncename" value="'.
	wp_create_nonce(plugin_basename(__FILE__)) . '" />';

	$street = get_post_meta($post->ID, '_street', true);
	$address = get_post_meta($post->ID, '_address', true);
	$state = get_post_meta($post->ID, '_state', true);
	$postcode = get_post_meta($post->ID, '_postcode', true);
	$country = get_post_meta($post->ID, '_country', true);
	echo '<label>Street</label>';
	echo '<input type="text" name="_street" value="'. $street . '"class="widefat" />';
	echo '<label>Address</label>';
	echo '<input type="text" name="_address" value="'. $address . '"class="widefat" />';
	echo '<label>State</label>';
	echo '<input type="text" name="_state" value="'. $state . '"class="widefat" />';
	echo '<label>Post Code</label>';
	echo '<input type="text" name="_postcode" value="'. $postcode . '"class="widefat" />';
	echo '<label>Country</label>';
	echo '<input type="text" name="_country" value="'. $country . '"class="widefat" />';
}


function wpt_save_shop_meta($post_id, $post){
	// verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times
	if ( !wp_verify_nonce( $_POST['shopmeta_noncename'], plugin_basename(__FILE__) )) {
	return $post->ID;
	}
	// Is the user allowed to edit the post or page?
	if ( !current_user_can( 'edit_post', $post->ID ))
		return $post->ID;
	// OK, we're authenticated: we need to find and save the data
	// We'll put it into an array to make it easier to loop though.

	$shops_meta['_website'] = $_POST['_website'];
	$shops_meta['_phone'] = $_POST['_phone'];
	$shops_meta['_street'] = $_POST['_street'];
	$shops_meta['_address'] = $_POST['_address'];
	$shops_meta['_state'] = $_POST['_state'];
	$shops_meta['_postcode'] = $_POST['_postcode'];
	$shops_meta['_country'] = $_POST['_country'];
	$shops_meta['_description'] = $_POST['_description'];

	foreach ($shops_meta as $key => $value) { // Cycle through the $events_meta array!
		if( $post->post_type == 'revision' ) return; // Don't store custom data twice
		$value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
		if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
			update_post_meta($post->ID, $key, $value);
		} else { // If the custom field doesn't have a value
			add_post_meta($post->ID, $key, $value);
		}
		if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
	}
}

add_action('save_post', 'wpt_save_shop_meta', 1, 2); // save the custom fields

add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

function add_my_post_types_to_query( $query ) {
	if ( is_home() && $query->is_main_query() )
		$query->set( 'post_type', array( 'post', 'page', 'shop' ) );
	return $query;
}

set_post_thumbnail_size( 220, 193, true ); // 50 pixels wide by 50 pixels tall, crop mode

 ?>
