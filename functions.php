/**
 * Creates a table in the database named "Campaigns".
 */
function create () {
   global $wpdb;
   $table_name = $wpdb->prefix . "Campaigns"; 
	$table_name = "campaigns";
	$charset_collate = $wpdb->get_charset_collate();
	$sql = "CREATE TABLE $table_name (
	  id mediumint(255) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	  title varchar(255) NOT NULL,
	  site_id mediumint(255),
	  enabled boolean DEFAULT false NOT NULL,
	  start datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
	  end datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
	  code varchar(255) NOT NULL,
	  image_id mediumint(255)
	) $charset_collate;";
	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );
}

/**
 * Makes the "create" function available via api
 * 
 * link: http://davidstockdalescrapcode.co.uk/wp-json/campaigns/create
 */
add_action( 'rest_api_init', function () {
  register_rest_route( 'campaigns', '/create', array(
    'methods' => 'GET',
    'callback' => 'create',
  ) );
} );

/**
 * Reads the rows of the "campaigns" table.
 */
function read() {
  global $wpdb;
  $row = $wpdb->get_results("SELECT * FROM `campaigns`");
  return $row;
}

/**
 * Makes the "read" function available via api
 * 
 * link: http://davidstockdalescrapcode.co.uk/wp-json/campaigns/read
 */
add_action( 'rest_api_init', function () {
  register_rest_route( 'campaigns', '/read', array(
    'methods' => 'GET',
    'callback' => 'read',
  ) );
} );